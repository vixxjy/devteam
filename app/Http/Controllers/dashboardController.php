<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Slider;
use App\Thoughtweek;
use App\Thoughtterm;
use App\Admission;
use App\Message;
use Charts;
use App\User;
use DB;

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
        
        // $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				// ->get();
    	
    	$users = User::orderBy('id', 'DESC')->get();			
    	
        $charts = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Users")
			      ->elementLabel("Total Users")
			      ->dimensions(1000, 500)
			      ->responsive(true)
			      ->groupByMonth(date('Y'), true);
			      
		$chart = Charts::create('pie', 'highcharts')
                    ->title('School Term chart')
                    ->labels(['First', 'Second', 'Third'])
                    ->values([5,10,20])
                    ->dimensions(1000,500)
                    ->responsive(true);
        
        return view('backend.dashboard', ['events' => $events])->with('sliders', $sliders)->with('thoughtweeks',$thoughtweeks)
        ->with('thoughtterms',$thoughtterms)->with('admission',$admission)->with('messages',$messages)->with('chart', $chart)->with('charts', $charts);
    } 
}
