<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_detail extends Model
{
    protected $table = 'purchase_details';
    // 1-1
    public function Purchase_package(){
        return $this->belongsTo('App\Purchase_package','id_purchase_package','id');
    }
    // 1-1
    public function User(){
        return $this->belongsTo('App\User','id_user','id');
    }
}
