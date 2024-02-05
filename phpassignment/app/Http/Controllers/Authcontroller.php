<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Authcontroller extends Controller
{
    public function __invoke(Request $request){
        if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
                'message' => 'Invalid login details'
            ],401);
        }
        $token = auth()->user()->createToken('personal-token',expiresAt:now()->addMinutes(5))->plainTextToken;
        return response()->json(['token'=>$token]);
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credetials)){
            if(Auth::user()->role == 0)
                return redirect('/home')->with('success','Login Success');
            elseif(Auth::user()->role == 2)
                return redirect('/profile')->with('success','Login Success');
            else
                return redirect('/dashboard')->with('success','Login Success');
        
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
    
