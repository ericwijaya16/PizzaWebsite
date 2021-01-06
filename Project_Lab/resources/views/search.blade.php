@extends('layout/template');

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
</div>
@endsection

@section('headerpizza')
<p class = "TitlePizza">Our Freshly Homemade Pizza</p>
<p class = "OrderNow">Order it Now!</p>
<form action="{{url('/search')}}">
<div class="search-box">
    <input class = "search-txt" type="search" name="query" placeholder ="Type to search">
    <button class = "search-btn"href="">
    </button>
</div>
</form>
@endsection

@section('pizzacard')

@foreach($pizzas as $pizzas)
    <div class="card" style="width: 30rem; margin-left: 10%; margin-bottom :2%">
    <a href="{{ url('detailmember/'. $pizzas->id) }}">
    <img class="card-img-top" src="{{asset('images/' . $pizzas->image)}}" width="500px" height="500px" class="card-img-top"alt="" >
    </a>
    <div class="card-body" style = "">
           <div class="text-center">
              <h5 class="card-title" style="font-weight: bold; text-align: left">{{$pizzas->name}}</h5>
              <p class="text" style = "text-align: left">Rp.{{$pizzas->price}}</p>
            </div>
       </div>
    </div>
@endforeach 
@endsection