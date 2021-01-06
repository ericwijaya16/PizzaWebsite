<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controller\Controllers;
use App\User;

class CookieController extends Controller
{
    public function setCookie(string $roles){
        // $hours = 2;
        // $response = new Response();
        // $response->withCookie(cookie('roles',$roles,$hours));
        echo $roles;
    }

    public function getCookie(Request $request){
        $value = $request->cookie('roles');
        return $value;
    }
}
