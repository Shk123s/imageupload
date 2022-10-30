<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\filemodel;
use Illuminate\Support\Facades\Storage;
use Validator;
class filecontroller extends Controller
{
    public function upload()
    {
        return view('show');
    }
    public function store(Request $request) 
        
        {    
             $filename = time() . "-sk." . $request->file('filenames')->getClientOriginalExtension();
              return $file = $request->file('filenames')->storeAs('upload',$filename);
           
              filemodel::create([
                
                'filenames' => $filenames
            ]);
            
            //  return with('succesfully uploaded');
            
}  
 // $product = filemodel::create($request->all());
            // foreach ($request->inputimg as $photo) {
            //     $filename = $photo->store('public');
            //     filemodel::create([
                    
            //         'filename' => $inputimg 
            //     ]);
            // }
            // return 'Upload successful!';
    

          
            //  $filename =  $request->inputimg->getClientOriginalName();
            // //  $filesize = $request->inputimg->getClientSize();
             
            //  $request->inputimg=Storage::allFiles('public');
            //  $files = new filemodel();
            //   $files->name = $filename; 
            // //   $files->size = $filesize;
            //  $files->save();
        // if($request->hasfile('image')){
        //     $file =   new filemodel();
        //     $file = $request->file('image');
        //   return $request->inputimg->store('public');

        //     // $extension = $file->getClientOriginalExtension();
        //     // $filename = time() . '.' . $extension;
        //     // $file->move('public', $filename);
        //     // $file->inputimg = $filename;

        // }   else {
        //     return $request;
        //     $file->inputimg = ' ';
        // }
        // $file->save();
        //  // $request->inputimg->store('public');
        //  // $request->inputimg->path('public');
        //  // $request->inputimg->extension('public');
        //  // $request->inputimg->storeAS('public','it will stored this named file.jpeg');
        //  // Storage::putFile('public',$request->file('inputimg'));
        // return  "yes";
        // //  echo $files;

        
        
       
    
    public function show()

    {    $post = filemodel::all();
        return view('dikhao',compact('post'));
        //  $url =  Storage::allFiles('public');
        //  return $url;
        //  return Storage::url('dfjdf.jpeg ');
        //  return Storage::size('dfjdf.jpeg ');
        //  return Storage::move('foldernaem or image name',dfjdf.jpeg ');
        //  return Storage::copy('public ',dfjdf.jpeg ');
        // allfiles,file ,delete...,get ,put 

        // it will return a link; 
    }
}
