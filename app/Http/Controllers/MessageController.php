<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function index(){
        $messages = Message::orderBy('id', 'DESC')->get();
        return view('backend.messages.message')->with('messages', $messages);
    }
    public function store(Request $request){
       
        
        $this->validate($request, [
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5',
            'message' => 'required|max:255',
            

        ]);

        $event = new Message;
        $event->name = $request->input('name');
        $event->email = $request->input('email');
        $event->message = $request->input('message');
         $event->save();
        return redirect()->back()->with('success', 'Message Sent Succesfully.');
        
    }
}
