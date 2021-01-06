<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use App\Transactiondetail;
use App\User;

class TransactionController extends Controller
{
    //
    public function viewTrans(Request $request){

      $transactions = Transaction::all();
      $users = User::all();
    
      return view('allTransaction',['transactions'=>$transactions, 'users'=>$users]);

    }

    // public function detail($id){
      
    //   $detail = Transactiondetail::find($id);

    //   return view('transactionDetail',['detail'=>$detail]);
    // }

    public function detail(){
      

      return view('transactionDetail');
    }
    //bikin buat detail
    
}
