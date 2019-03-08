<?php

namespace App;
use App\Game;
use App\Purchase_package_detail;
use Illuminate\Database\Eloquent\Model;

class Purchase_package extends Model{
    protected $table = 'purchase_packages';
    //1 - n
    public function Purchase_package_detail(){
        return $this->hasMany('App\Purchase_package_detail','id_purchase_package','id');
    }
    //1 - n
    public function Purchase_detail(){
        return $this->hasMany('App\Purchase_detail','id_purchase_package','id');
    }

    //n-n
    public function Game()
    {
    	return $this->belongstoMany('App\Game','purchase_package_details','id_purchase_package','id_game');
    }
    
}
