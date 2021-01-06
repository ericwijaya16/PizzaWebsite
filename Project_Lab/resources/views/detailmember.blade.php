@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/transactionhistory') }}">View Transaction History</a>
            <a href="{{ url('/cart') }}">View Cart</a>
</div>
@endsection
@section('pizzacard')

    <div class="pizza-box">
          <img class = "card-img-top" src="{{asset('images/' . $pizzas->image)}}" alt="">
          <h1>{{$pizzas->name}}</h1>
          <p>{{$pizzas->description}}</p>
          <br><br><br><br>
          <p>Rp.{{$pizzas->price}}</p>
          <p>Quantity:</p>
          <input type="text" name="quantity">
          <button class="button4" type="button" onclick="location.href='{{ url('/cart') }}';">Add To Cart</button>
    </div>

@endsection
