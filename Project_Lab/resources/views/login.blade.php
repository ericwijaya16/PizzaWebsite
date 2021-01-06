@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
</div>
@endsection

@section('content')
    <div class = "loginbox">
        <h1 class ="headerlogin">Login</h1>
        <form action="{{URL::to('/logs')}}">
            <p>E-mail</p>
            <input type="text" name="email" placeholder="Enter E-mail">
            @if($errors->first('email'))
                    <div class="alert-danger">
                        {{ $errors->first('email')}}
                    </div>
            @endif
            <p>Password</p>
            <input type="password" name="password" placeholder = "Enter Password">
            @if($errors->first('password'))
                    <div class="alert-danger">
                        {{ $errors->first('password')}}
                    </div>
            @endif
            Remember Me<input type="checkbox" name="remember_me">

            <input type="submit" name="" value="Login">
            <a href="#">Lost your password?</a> <br>
            <a href="/register">Don't have an account?</a>
    
        </form>
    </div>
@endsection