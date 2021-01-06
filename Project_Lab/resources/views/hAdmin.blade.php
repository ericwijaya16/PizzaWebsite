@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/transactions') }}">View All User Transaction</a>
            <a href="{{ url('/allUser') }}">View All User</a>
            <a href="#about">Admin</a>
</div>
@endsection
@section('headerpizza')
<p class = "TitlePizza">Our Freshly Homemade Pizza</p>
<p class = "OrderNow">Order it Now!</p>
<form action="{{url('/searchguest')}}">
<div class="search-box">
    <input class = "search-txt" type="search" name="query" placeholder ="Type to search">
    <button class = "search-btn"href="">
    </button>
</div>
</form>
<button class="button3" type="button" onclick="location.href='{{ url('/addPizza') }}';">Add Pizza</button>
@endsection
@section('pizzacard')

@foreach($pizzas as $pizzas)
    <div class="card" style="width: 18rem; margin-left: 10%; margin-bottom :2%">
    <a href="{{ url('detailguest/'. $pizzas->id) }}">
    <img class="card-img-top" src="{{asset('images/' . $pizzas->image)}}" width="500px" height="500px" class="card-img-top"alt="" >
    </a>
    <div class="card-body" style = "">
           <div class="text-center">
              <h5 class="card-title">{{$pizzas->name}}</h5>
              <p class="text">Rp.{{$pizzas->price}}</p>
              <button class="buttonEditPizza" type="button" onclick="location.href='{{ url('editPizza/'. $pizzas->id) }}';">Update Pizza</button>
          <button class="buttonDeletePizza" type="button" onclick="location.href='{{ url('deletePizza/'. $pizzas->id) }}';">Delete Pizza</button>
            </div>
       </div>
    </div>
@endforeach 

@endsection

<style>
  .button3{
    background-color: grey;
        border: none;
        color: black;
        padding:15px 25px;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        display: inline-block;
        font-size: 16px;
        margin-top : -3.5%;
        position : absolute;
        right : 0;
        margin-right: 65%;
  }
</style>