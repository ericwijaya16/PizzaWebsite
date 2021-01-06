@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/transactions') }}">View All User Transaction</a>
            <a href="{{ url('/allUser') }}">View All User</a>
            <a href="#about">Admin</a>
</div>
@endsection

@section('pizzacard')

<div class="mt-5">


    
<table class="table table-striped table-hover table-bordered">

    <tbody>
      @foreach ($transactions as $tr)
      <tr>
        <td>
            <h6>Transaction at {{$tr->transaction_date}}</h6>
            <h6>Users ID: {{$tr->users_id}}</h6>
            <h6>Username: {{$tr->users_id}}</h6>
        </td>
      </tr>
      @endforeach
    </tbody>
  
</table>


</div>
    
@endsection
