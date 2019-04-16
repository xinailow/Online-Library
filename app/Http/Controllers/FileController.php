<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use App\Files;
use Session;

class FileController extends Controller
{
    public function store(Request $request)

    {   
        $this->validate($request, [
            'fileName' => 'requried:unique',
            'fileName' => 'required|mimes:pdf',   
            'images' => 'required:unique',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $newFile = new files;
        $newFile->fileName = $request->file('fileName')->getClientOriginalName();
        $newFile->image = $request->file('images')->getClientOriginalName();
        $newFile->category = $request->category;
        $newFile->description = $request->description;
        $newFile->rent_limit = 5;
        $getFile=$request->file('fileName');
        $getFile->move(public_path().'/files/',$getFile->getClientOriginalName());
        $getImg=$request->file('images');
        $getImg->move(public_path().'/img/',$getImg->getClientOriginalName());
        $newFile->save();
        Session::flash('success','Upload Success!');
        return redirect()->back();
    }
}