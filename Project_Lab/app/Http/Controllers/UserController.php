<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    //
    public function viewUser(Request $request){

        //kynya ini nanti harus pake id!!!!!!
        //kalo pake id dia bs pake if kaynayd eh
       // $detail = Genre::find($id);

       //$pizzas = DB::table('pizzas')->get();
       $users = User::all();
        //$users = User::paginate(4);
        return view('allUser',['users'=>$users]);
    }
}
