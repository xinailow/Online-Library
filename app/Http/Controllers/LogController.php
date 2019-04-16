<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Files;
use Illuminate\Support\Facades\Auth;
use App\Rent;
use App\Log;
use Session;

class LogController extends Controller
{
    public function index(){    
        $user = Auth::user()->id;
        $allBook = DB::table('rents')->where([['user_id', $user], ['was_rent', 1]])->pluck('book_id')->all();
        $logs = DB::table('files')->whereIn('id', $allBook)->get();
        return view('log')->with('logs', $logs);
    }

    public function logrent($id){
        $log= DB::table('files')->where('id',$id)->get();
        return view('log',compact('logs',$log));
    }

    public function read($id) {
        $book = DB::table('files')->where('id', $id)->value('filename');
        return response()->file(public_path().'/files/'.$book);
    }
}