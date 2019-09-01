<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\File;
 
class FileController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 
    {
 
        $this->validate($request, [
 
                'filename' => 'required',
                'filename.*' => 'mimes:doc,pdf,docx,zip'
 
        ]);
 
          if($request->hasfile('filename'))
         {
 
            foreach($request->file('filename') as $file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);  
                $data[] = $name;  
            }
         }
 
         $file= new File();
         $file->filename=json_encode($data);
          
         
        $file->save();
 
        return back()->with('success', 'Your files has been successfully added');
     }
}