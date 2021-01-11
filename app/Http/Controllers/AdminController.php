<?php

namespace App\Http\Controllers;


use App\Models\User;
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
