<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    } 
    
    public function signin(Request $request){
        $this->validate($request, [
            'username' => 'required', 
            // 'email' => 'email|required',
            'password' => 'required|min:4' 
        ]);
        
      if (Auth::attempt(['username' => $request->input('username'),'password' => $request->input('password')]))
        {
            // $settings = Setting::select('school')->first();
            
            // if($settings){
            //      return redirect()->route('dashboard');
            // }
            
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error', 'Wrong username and password combination');
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('landing')->with('success', 'Your are now logged out!');
    }
}
