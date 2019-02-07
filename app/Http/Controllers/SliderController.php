<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('backend.sliders.add', ['sliders' => $sliders]);
    }
    
    public function store(Request $request)
    {
        
        // dd($request->all());
        //validate form
        $messages = [
            'image.max' => 'The :attribute size must be under 1MB.',
            'image.dimensions' => 'The :attribute dimensions must be minimum 1900 X 1200.',
        ];
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:5|max:255',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=1900,min_height=1200',

        ], $messages);

        
        $cover = $request->file('image');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $data = $request->all();
        $data['image'] = $cover->getFilename().'.'.$extension;

        Slider::create($data);

        return redirect()->back()->with('success', 'New slider item created.');
    }
    
    public function delete($id){
        $slider = Slider::find($id);
        $slider->delete();
        
        Session::flash('success', 'Slider was deleted successfully!');

        return redirect()->back();
    }
}
