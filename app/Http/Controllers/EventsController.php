<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use Session;

class EventsController extends Controller
{
    //
    public function index(){
        $events = Event::orderBy('id', 'DESC')->get();
        return view('backend.events.add')->with('events', $events);
    }
    public function store(Request $request){
        $messages = [
            'image.max' => 'The :attribute size must not be greater than 50kb.',
           
        ];
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:5',
            'tag' => 'required|max:255',
            'author' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',

        ], $messages);

        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $event = new Event;
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->image = $name;
        $event->tag = $request->input('tag');
        $event->author = $request->input('author');
         $event->save();
        return redirect()->back()->with('success', 'New Event Created.');
        
    }

     
    public function delete($id){
        $event = Event::find($id);
        $event->delete();
        Session::flash('success', 'Event was deleted successfully!');
        return redirect()->back();
    }

    public function edit($id){
        $event = Event::find($id); 
        return view('backend.events.edit')->with('event', $event);
    }
    public function update(Request $request, $id)
    {
       
        $messages = [
            'image.max' => 'The :attribute size must not be greater than 50kb.',
           
        ];
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'description' => 'required|min:5',
            'tag' => 'required|max:255',
            'author' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',

        ], $messages);

     ;
    
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $event =  Event::find($id);
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->image = $name;
        $event->tag = $request->input('tag');
        $event->author = $request->input('author');
        $event->save();
    
        return redirect('/event')->with('success', 'Event/news has been updated');
    }
}
