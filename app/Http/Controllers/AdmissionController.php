<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;
use Session; 
use App\Mail\ApplicationEmail;


class AdmissionController extends Controller
{
    //

    public function index(){
        $admissions = Admission::orderBy('id', 'DESC')->get();
        return view('backend.admissions.admission')->with('admissions', $admissions);
    }
    public function store(Request $request){
     
        $this->validate($request, [
            'name' => 'required|min:5|max:255',
            'birth' => 'required|min:5',
            'gender' => 'required',
            'class' => 'required',
            'parent' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'address' => 'required'
            

        ]);

        $app = new Admission;
        $app->name = $request->input('name');
        $app->birth = $request->input('birth');
        $app->gender = $request->input('gender');
        $app->class = $request->input('class');
        $app->parent = $request->input('parent');
        $app->email = $request->input('email');
        $app->phone = $request->input('phone');
        $app->state = $request->input('state');
        $app->address = $request->input('address');
        $app->save();
        
        //sending mail
        // $data = ['message' => 'Thanks for your application'];
        
        // $mail_content = [
        //     'name'          => $request->input('name'),
        //     'content'       => $request->input('message'),
        //     'company_name'  => $request->input('company_name'),
        //     'product_name'  => $request->input('product_name'),
        // ];

        // \Mail::to('ajorvictor48@gmail.com')->send(new ApplicationEmail($data));
        
        return redirect()->back()->with('success', 'Your Application was Sent Succesfully.');
  
    }

    public function admission($id){
        $admission = Admission::find($id);
        return view('backend.admissions.view-admission')->with('admission', $admission);
    }


    public function delete($id){
        $admission = Admission::find($id);
        $admission->delete();
        Session::flash('success', 'Application was deleted successfully!');
        return redirect()->back();
    }
}
