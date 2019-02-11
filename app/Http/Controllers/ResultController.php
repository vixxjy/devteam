<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use Session;

class ResultController extends Controller
{
    public function index()
    {
        $datas = Result::orderBy('id', 'DESC')->get();
        return view('results', ['datas' => $datas]);
    }
    
    public function create()
    {
        
        $datas = Result::orderBy('id', 'DESC')->get();
        // dd($datas);
        return view('backend.results.create', ['datas' => $datas]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'exam_no' => 'required',
            'mathematics' => 'required',
            'reasoning' => 'required',
            'english' => 'required',
            'vreasoning' => 'required',
            'general' => 'required',
            'totalscore' => 'required',
            'cummulative' => 'required',
            'remarks' => 'required',
        ]);

        $data = $request->all();
        // dd($data);

        Result::create($data);

        return redirect()->back()->with('success', 'Result added successfully.');    
    }


    public function edit($id){
        $data = Result::find($id);
        return view('backend.results.edit')->with('data', $data);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'exam_no' => 'required',
            'mathematics' => 'required',
            'reasoning' => 'required',
            'english' => 'required',
            'vreasoning' => 'required',
            'general' => 'required',
            'totalscore' => 'required',
            'cummulative' => 'required',
            'remarks' => 'required',
        ]);

        $data = Result::find($id);
        $data->exam_no = $request->exam_no;
        $data->mathematics = $request->mathematics;
        $data->reasoning = $request->reasoning;
        $data->english = $request->english;
        $data->vreasoning = $request->vreasoning;
        $data->general = $request->general;
        $data->totalscore = $request->totalscore;
        $data->cummulative= $request->cummulative;
        $data->remarks = $request->remarks;
        $data->save();

        return redirect('/result')->with('success', 'Result updated successfully.');   

    }
    public function delete($id){
        $data = Result::find($id);
        $data->delete();
        Session::flash('success', 'Result was deleted successfully!');
        return redirect()->back();
    }
}
