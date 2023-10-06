<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Authcontroller extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credetials)){
            return redirect('/home')->with('Admin Dashboard');
        }
        return back()->with('error','Error Email or Password');
    }

    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
       
        $user = new User();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password = Hash::make($request->password);
        
        $user->save();
     
        return redirect('login')->with('success','User Created Successfully');
    }
 
} 
    
