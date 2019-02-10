<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Slider;
use App\Thoughtweek;
use App\Thoughtterm;
use App\Admission;
use App\Message;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $events = Event::orderBy('id', 'DESC')->get();
        $sliders = Slider::all();
        $admission = Admission::all();
        $messages = Message::all();
        $thoughtweeks = Thoughtweek::orderBy('id', 'DESC')->get();
        $thoughtterms = Thoughtterm::orderBy('id', 'DESC')->get();
        
        return view('backend.dashboard', ['events' => $events])->with('sliders', $sliders)->with('thoughtweeks',$thoughtweeks)
        ->with('thoughtterms',$thoughtterms)->with('admission',$admission)->with('messages',$messages);
    } 
}
