<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtube;
use Session;

class YoutubeController extends Controller
{
    //
    public function index(){
        $data = Youtube::orderBy('id', 'DESC')->get();
        return view('backend.youtube.create')->with('data', $data);
    }

    public function store(Request $request){
        $this->validate($request, [
            'url' => 'required|min:5'
        ]);

        $data = $request->all();

        Youtube::create($data);
        return redirect()->back()->with('success', 'Video Added Successfully');
    }

    public function edit($id){
        $data = Youtube::find($id);
        return view('backend.youtube.edit')->with('data', $data);

    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'url' => 'required|min:5'
        ]);
        
        $data = Youtube::find($id);
        $data->url = $request->url;
        $data->save();
        return redirect('/video/add')->with('success', 'Video Updated Successfully');

    }

    public function delete($id){
        $data = Youtube::find($id);
        $data->delete();
        Session::flash('success', 'Video was deleted successfully!');
        return redirect()->back();

    }
}
