<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use Illuminate\Support\Facades\DB;

class ReadController extends Controller
{
    //
    public function index($category){
        $category = [$category];
        $files = DB::table('files')->whereIn('category',$category)->get();
        return view('read')->with('files',$files)->with('category',$category);
    }

    public function read($id) {
        $book = DB::table('files')->where('id', $id)->value('filename');
        return response()->file(public_path().'/files/'.$book);
    }
}