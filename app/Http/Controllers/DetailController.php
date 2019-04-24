<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Files;
use Illuminate\Support\Facades\Auth;
use App\Rent;
use App\Reply;
use App\User;
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
        $r=DB::table('replies')->where([['discussion_id', $bookID],['state',1]])->get();
        $state = DB::table('replies')->select('state')->get();
        $ava=DB::table('users')->select(['id','name','avatar'])->get();
        return view('detail')->with('detail', $detail)->with('hasRent', $hasRent)->with('currentRent', $currentRent)->with('r',$r)->with('ava',$ava)->with('state',$state);
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

    public function reply($id){

        $reply=Reply::create([
            'id'=>Auth::id(),
            'user_id'=>Auth::user()->id,
            'discussion_id'=>$id,
            'content'=>request()->reply
        ]);

        Session::flash('success','Replies to discussion.');
        return redirect()->back();
    }

    public function upload(Request $request){
        $image=$request->file('avatar'); //receive iamge from request
        $image->move('avatarImg',$image->getClientOriginalName()); //image is under folder->public->images
        $userid=Auth::id();
        $imageName="http://localhost/Online Library/Online_Library/public/avatarImg/".$image->getClientOriginalName();
        DB::update('update users set avatar= ? where id= ?', [$imageName,$userid]);//require add use DB
        Session::flash('success','Images uploaded');
        return view('uploadAvatar');
    }

}