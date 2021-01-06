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
        <form action="{{URL::to('/store')}}">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
                @if($errors->first('username'))
                    <div class="alert-danger">
                        {{ $errors->first('username')}}
                    </div>
                @endif
            <p>E-mail Address</p>
            <input type="text" name="email" placeholder="Enter E-mail Address">
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
            <p>Confirm Password</p>
            <input type="password" name="confirmpassword" placeholder = "Confirm Password">
                @if($errors->first('confirmpassword'))
                    <div class="alert-danger">
                        {{ $errors->first('confirmpassword')}}
                    </div>
                @endif
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter Address">
                @if($errors->first('address'))
                    <div class="alert-danger">
                        {{ $errors->first('address')}}
                    </div>
                @endif
            <p>Phone Number</p>
            <input type="number" name="phonenumber" placeholder="Enter Phone Number">
                @if($errors->first('phonenumber'))
                    <div class="alert-danger">
                        {{ $errors->first('phonenumber')}}
                    </div>
                @endif
            <fieldset data-role="controlgroup">
            <legend>Choose your gender:</legend>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="Male" value="Male">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="Female" value="Female">
            </fieldset>
                @if($errors->first('gender'))
                    <div class="alert-danger">
                        {{ $errors->first('gender')}}
                    </div>
                @endif
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" name="" value="Register">

        </form>
    </div>
@endsection