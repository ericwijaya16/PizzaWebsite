@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
</div>
@endsection

@section('pizzacard')

    <div class="pizza-box">
          <img class = "card-img-top" src="{{asset('images/' . $pizzas->image)}}" alt="">
          <h1>{{$pizzas->name}}</h1>
          <p>{{$pizzas->description}}</p>
          <br><br><br><br>
          <p>Rp.{{$pizzas->price}}</p>
                 
    </div>

@endsection

