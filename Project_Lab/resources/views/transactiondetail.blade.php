@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/transactionhistory') }}">View Transaction History</a>
            <a href="{{ url('/cart') }}">View Cart</a>
</div>
@endsection
@section('pizzacard')

    <div class="pizza-box">
          <img class = "imagedetail" src="../img/bacon_egg.jpg" alt="">
          <h1>Bacon Egg Pizza</h1>
          <p>Pizza with the slices of bacon and egg with delicious sauce</p>
          <p>Quantity : 2</p>
          <p>Rp.60000</p>
    </div>

@endsection
