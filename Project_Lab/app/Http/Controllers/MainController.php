<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use Illuminate\Support\MessageBag;
use \App\Pizza;
use App\Http\Controller\CookieController;

class MainController extends Controller
{
    public function home(){
        $pizzas = \App\Pizza::all();
        $users = \App\User::all();
        return view('home', ['pizzas' => $pizzas],['users' => $users]);
    }

    public function login(){
        return view ('login');
    }

    public function register(){
        return view ('register');
    }

    public function huser(){
        $pizzas = \App\Pizza::all();
        $users = \App\User::all();
        return view('hUser', ['pizzas' => $pizzas],['users' => $users]);
    }

    public function hadmin(){
        $pizzas = \App\Pizza::all();
        $users = \App\User::all();
        return view('hAdmin', ['pizzas' => $pizzas],['users' => $users]);
    }

    public function store(request $request){
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|unique:users',
            'confirmpassword' => 'required|min:5|same:password',
            'address' => 'required',
            'phonenumber' => 'required|unique:users',
            'gender' => 'required'
        ]);
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $gender = $request->input('gender');
        DB::insert('insert into users(id,username,email,password,address,phonenumber,gender,role) values(?,?,?,?,?,?,?,?)',[null,$username,$email,$password,$address,$phonenumber,$gender,'2']);
        
        return Redirect::to('login')->with('alert-success','Registration complete');
    }

    public function logs(request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select id from users where email=? and password=?', [$email,$password]);
        $roles = DB::select('select role from users where email=? and password=?', [$email,$password]);
        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);

        if(count($data)){
            $remember = $request->input('remember_me');
            $roles = preg_replace( '/[^\d]/', '', json_encode($roles));
            if($roles == '1'){
                return Redirect::to('hadmin')->with('alert-success','Welcome!');
            } else{
                return Redirect::to('huser')->with('alert-success','Welcome!');
            }
        }
        else{
            return Redirect::back()->withErrors($errors);
        }
    }

    public function search(){
        $search_text = $_GET['query'];
        $pizzas = Pizza::where('name','LIKE','%'.$search_text.'%')->get();

        return view('search',compact('pizzas'));
    }

    public function searchguest(){
        $search_text = $_GET['query'];
        $pizzas = Pizza::where('name','LIKE','%'.$search_text.'%')->get();

        return view('searchguest',compact('pizzas'));
    }

    public function detailmember($id){
          $pizzas = Pizza::find($id);

          return view('detailmember',['pizzas'=>$pizzas]);

    }

    public function detailguest($id){
          $pizzas = Pizza::find($id);

          return view('detailguest',['pizzas'=>$pizzas]);

    }

    public function cart(){
        //  $pizzas = Pizza::find($id);

        //  return view('detailmember',['pizzas'=>$pizzzas]);
        return view('cart');

    }

    public function transactionhistory(){
        //  $pizzas = Pizza::find($id);

        //  return view('detailmember',['pizzas'=>$pizzzas]);
        return view('transactionhistory');

    }

    public function transactiondetail(){
        //  $pizzas = Pizza::find($id);

        //  return view('detailmember',['pizzas'=>$pizzzas]);
        return view('transactiondetail');

    }

}
