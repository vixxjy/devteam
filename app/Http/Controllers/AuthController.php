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

    public function edit($id){
        $data = User::find($id); 
        return view('backend.user.edit')->with('data', $data);
    }

    public function UpdateUser(Request $request, $id){
        $this->validate($request, [
            'username' => 'required', 
            'email' => 'email|required',
            'password' => 'required|min:4',
        ]);
        
        $data = User::find($id);
        $data->username = $request->username;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/user/add')->with('success', 'User updated Successfully');
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        Session::flash('success', 'User was deleted successfully!');
        return redirect()->back();
    }
}
