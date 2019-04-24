<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $fillable=['content','discussion_id','user_id'];

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function unlike(){
        return $this->hasMany('App\Like');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function discussion(){
        return $this->belongsTo('App\Discussion');
    }
}
