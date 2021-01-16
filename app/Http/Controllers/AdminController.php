<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function dashboard(){
        $title = "Admin Dashboard";
        return view('admin.dashboard',compact('title'));
    }
    public function users(){
        $title = "Users";
        $users = User::all();
        return view('admin.users',compact('title','users'));
    }
    public function addUser(){
        $title = "Add User";
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.user-add')->with(['title' => $title, 'roles' => $roles , 'permissions' => $permissions]);
    }
    public function storeUser(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'profile_picture' => 'required',
        ];
        $this->validate($request,$rules);
        //dd($request);
        $profile_picture = time().'.'.$request->profile_picture->extension();
        $request->profile_picture->move(public_path('images'),$profile_picture);
        $data = $request->except('password_confirmation','_token');
        $data['profile_picture'] = $profile_picture;
        $data['password'] = Hash::make($request->password);
        $user = new User($data);
        if($user->save()){
            $user->assignRole($request->role);
            $user->givePermissionTo($request->permissions);
            return redirect(route('admin.users'))->with('success','User has been created successfully.');
        }
        return redirect(route('admin.users'))->with('error','Failed to create user.');

    }
    public function editUser($id){
        $title = "Edit User";
        $user = User::where('id',$id)->first();
        $roles = Role::all();
        $permissions = Permission::all();
        return view("admin.user.edit")->with(['title' => $title, 'user' => $user , 'roles' => $roles, 'permissions' => $permissions]);
    }
    public function updateUser(Request  $request,$id){
        $user = User::where('id',$id)->first();
        $user->syncRoles();
        $user->syncPermissions();
        $user->assignRole($request->role);
        $user->givePermissionTo($request->permissions);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password !=null) {
            $rules = [
                'password' =>'required|confirmed|min:8'
            ];
            $this->validate($request,$rules);
            $user->password = Hash::make($request->password);
        }
        if($request->profile_picture != null) {
            @unlink($user->profile_picture);
            $filename = time().'.'.$request->profile_picture->extension();
            $request->profile_picture->move(public_path('images'),$filename);
            $user->profile_picture = $filename;
        }
        $user->updated_at = Carbon::now();
        if($user->save()){
            return redirect(route('admin.users'))->with('success','User has been updated successfully.');
        }
        return redirect(route('admin.users'))->with('error','Failed due to some reason.');
    }
    public function deleteUser(Request $request, $id){
        User::where('id',$id)->delete();
        return redirect(route('admin.users'))->with('success','User has been deleted successfully.');
    }
    public function roles(){
        $title = "Roles";
        $roles = Role::all();
        return view('admin.role.roles',compact('title','roles'));
    }
    public function addRole(){
        $title = "Add Role";
        return view('admin.role.add-role',compact('title'));
    }
    public function storeRole(Request $request){
        Role::create(['name' => $request->name]);
        return redirect(route('admin.roles'))->with('success','Role has been created successfully');
    }
    public function editRole($id){
        $title = "Edit Role";
        $role = Role::where('id',$id)->first();
        return view('admin.role.edit-role',compact('title','role'));
    }
    public function updateRole(Request $request, $id){
        Role::where('id',$id)->update([ 'name' => $request->name]);
        return redirect(route('admin.roles'))->with('success','Role has been updated successfully');
    }
    public function deleteRole(Request $request){
        Role::where('id',$request->id)->delete();
        return redirect(route('admin.roles'))->with('success','Role has been deleted successfully');
    }
}
