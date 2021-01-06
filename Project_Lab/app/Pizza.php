<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function transactiondetailsPizza(){
        return $this -> hasMany('App\Transactiondetail');
    }
}
