<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactiondetail extends Model
{
    public function pizzasTransactionDetail(){
        return $this -> hasMany('App\Pizza');
    }

    public function transactionsTransactionDetail(){
        return $this -> belongsTo('App\Transaction');
    }
}
