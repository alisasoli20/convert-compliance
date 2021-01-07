<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.user-add',compact('title'));
    }
    public function storeUser(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'profile_picture' => 'required',
        ];
        $this->validate($request,$rules);
        dd($request);
        $profile_picture = time().'.'.$request->profile_picture->extension();
        $request->profile_picture->move(public_path('images'),$profile_picture);
        $data = $request->except('password_confirmation','_token');
        $data['profile_picture'] = $profile_picture;
        $data['password'] = Hash::make($request->password);
        User::insert($data);
        return redirect('/admin/users');
    }
}
