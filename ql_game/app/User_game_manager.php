<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_game_manager extends Model{

    protected $table = 'user_game_managers';
    // 1-1
    public function User(){
        return $this->belongsTo('App\User','id_user','id');
    }
    // 1-1
    public function Game(){
        return $this->belongsTo('App\Game','id_game','id');
    }
    
}
