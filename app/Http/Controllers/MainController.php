<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Files;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $category = ['Science','Technology','Biology','Lifestyle','Politics & Laws','Business & Career','Academic & Education'];
        $files = DB::table('files')->whereIn('category',$category)->orderBy('category','asc')->get();
        return view('main')->with('files',$files);
    }

    public function categoryIndex($category) {
        $category = [$category];
        $files = DB::table('files')->whereIn('category',$category)->orderBy('category','asc')->get();
        return view('main')->with('files',$files)->with('category', $category);
    }

    public function show(){
        $user=Files::all();
        return view('main',compact('user'));
    }

    public function show1($id){
        $detail=Files::where('id',$id)->first();
        return view('detail')->with('detail',$detail);
    }

}