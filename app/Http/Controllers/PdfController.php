<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Pdf;
use Webpatser\Uuid\Uuid;

class PdfController extends Controller
{
    public function index(){
        $pdfs = Pdf::orderBy('id', 'DESC')->get();
        return view('backend.pdf.add', ['pdfs' => $pdfs]);
    }
    
    public function upload(Request $request)
    {
      
         $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'upload_file' => 'required|mimes:doc,pdf,docx,zip',

        ]);

        // $cover = $request->file('upload_file');
        // $extension = $cover->getClientOriginalExtension();
        // Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
        // $data['upload_file'] = $cover->getFilename().'.'.$extension;

            $data = $request->all();
            $data['uuid'] = (string)Uuid::generate();
            
            if ($request->hasFile('upload_file')) {
            $data['upload_file'] = $request->upload_file->getClientOriginalName();
            $request->upload_file->storeAs('pdf', $data['upload_file']);
        }
        
        
        Pdf::create($data);

        return redirect()->back()->with('success', 'Pdf File uploaded successfully.');
    }
    
    public function download($uuid)
    {
        $book = Pdf::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/pdf/' . $book->upload_file);
        return response()->download($pathToFile);
    }
    
    public function delete($id){
        $slider = Pdf::find($id);
        $slider->delete();
        
        return redirect()->back()->with('success', 'PDF File was deleted successfully!');;
    }
}
