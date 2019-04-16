<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Files;
use Illuminate\Support\Facades\Auth;
use App\Rent;
use Session;

class DetailController extends Controller
{
    public function index(){    
        return view('detail');
    }
    public function show1($bookID){
        $detail= DB::table('files')->where('id',$bookID)->get();
        // Validate whether user has rent book or not
        $user = Auth::user()->id;
        $hasRent = DB::table('rents')->where([['book_id', $bookID], ['user_id', $user], ['was_rent', 1]])->get()->count();
        $currentRent = DB::table('rents')->where([['book_id', $bookID], ['was_rent', 1]])->get()->count();
        return view('detail')->with('detail', $detail)->with('hasRent', $hasRent)->with('currentRent', $currentRent);
    }
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $rentLimit = DB::table('files')->where('id', $request->submit)->value('rent_limit');
        $nowRent = DB::table('rents')->where('book_id', $request->submit)->get()->count();
        if ($nowRent > $rentLimit) {
            Session::flash('error','Limit Excess!');
            return redirect()->back();
        } 
        $rent = new Rent();
        $rent->book_id = $request->submit;
        $rent->user_id = $user;
        $rent->was_rent = 1;
        $rent->was_return = 0;
        $rent->save();
        Session::flash('success','Rent Success!');
        return redirect()->back();
    }

    public function update(Request $request) {
        $user = Auth::user()->id;
        $book = DB::table('rents')->where([['book_id', $request->submit], ['user_id', $user]])->value('id');
        $returnBook = Rent::find($book);
        $returnBook->was_rent = 0;
        $returnBook->was_return = 1;
        $returnBook->save();
        Session::flash('success','Return Success!');
        return redirect()->back();
    }
}