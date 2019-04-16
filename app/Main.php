<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    //
    protected $fillable=['filename','image','category']; //allow insert data to column 

    public function file(){
        return $this->hasMany('App\Files');
    }
}
