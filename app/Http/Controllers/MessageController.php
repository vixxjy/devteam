<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Session;

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
        
        //now send mail
        // $data = [
        //     'from' =>  $request->get('email'),
        //     'to'  => env('MAIL_RECEIVER','ajorvictor48@gmail.com'),
        //     'subject' => "[".$request->get('name')."]".$request->get('subject'),
        //     'body' => $request->get('message')
        // ];

        // \Mail::send(array(), array(), function ($message) use ($data) {
        //     $message->to($data['to'])
        //     ->subject($data['subject'])
        //     ->from($data['from'])
        //     ->setBody($data['body']);
        // });
        return redirect()->back()->with('success', 'Thanks for reaching out.');
        
    }
    public function delete($id){
        $event = Message::find($id);
        $event->delete();
        Session::flash('success', 'Message was deleted successfully!');
        return redirect()->back();
    }
}
