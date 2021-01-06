@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/transactionhistory') }}">View Transaction History</a>
            <a href="{{ url('/cart') }}">View Cart</a>
</div>
@endsection

@section('pizzacard')
<table class="table table-striped" style="margin-left: 10%; margin-right: 10%">
  <thead>
    <tr>
      <th scope="col">Transaction at 5-10-2020 14:12:50</th>
    </tr>
    <tr>
    <th scope="col">Transaction at 2-10-2020 4:1:51</th>
    </tr>
  </thead>
  </tbody>
</table>
@endsection
