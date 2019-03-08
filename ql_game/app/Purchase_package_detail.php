<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_package_detail extends Model{
    protected $table = 'purchase_package_details';
    // 1-1
    public function Purchase_package(){
        return $this->belongsTo('App\Purchase_package','id_purchase_package','id');
    }
    // 1-1
    public function Game(){
        return $this->belongsTo('App\Game','id_game','id');
    }
}
