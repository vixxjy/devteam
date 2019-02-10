<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

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
}
