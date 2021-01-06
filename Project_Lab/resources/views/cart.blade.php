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
          <br><br><br><br>
          <p>Rp.60000</p>
          <p>Quantity:</p>
          <input type="text" name="quantity">
          <button class="button4" type="button" onclick="location.href='{{ url('#') }}';">Update Quantity</button>
          <button class="button5" type="button" onclick="location.href='{{ url('#') }}';">Delete Item</button>
    </div>

    <button class="button6" type="button" onclick="location.href='{{ url('#') }}';">Check Out</button>
@endsection
