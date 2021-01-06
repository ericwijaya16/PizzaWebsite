<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function transactionsUser(){
        return $this -> hasMany('App\Transaction');
    }
}
