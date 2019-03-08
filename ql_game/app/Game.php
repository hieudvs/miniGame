<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model{
    protected $table = 'games';
    //1 - n
    public function Purchase_package_detail(){
        return $this->hasMany('App\Purchase_package_detail','id_game','id');
    }
    //1 - n
    public function User_game_manager(){
        return $this->hasMany('App\User_game_manager','id_game','id');
    }

     //n-n
     public function Purchase_package(){
        return $this->belongsToMany('App\Purchase_package','Purchase_package_detail');
    }

    
}
