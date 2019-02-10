<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;

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
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error', 'Wrong username and password combination');
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('landing')->with('success', 'Your are now logged out!');
    }
    
    public function addUser() {
        $datas = User::orderBy('id', 'DESC')->get();
        return view('backend.user.add', ['datas' => $datas]);
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required', 
            'email' => 'email|required',
            'password' => 'required|min:4' 
        ]);
        
         $data = $request->all();
         
         User::create($data);
        return redirect()->back()->with('success', 'User added Successfully');
    }
}
