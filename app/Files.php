<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Files extends Model
{
    //
    protected $fillable = ['title','user_id','channel_id'.'content'];
        
    public function replies(){
        return $this->hasMany('App\Reply');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}