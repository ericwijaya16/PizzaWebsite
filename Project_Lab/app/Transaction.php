<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function usersTransaction(){
        return $this-> belongsTo('App\User');
    }

    public function transactiondetailsTransaction(){
        return $this-> belongsTo('App\Transactiondetail');
    }
}
