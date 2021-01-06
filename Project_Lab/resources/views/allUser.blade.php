@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/transactions') }}">View All User Transaction</a>
            <a href="{{ url('/allUser') }}">View All User</a>
            <a href="#about">Admin</a>
</div>
@endsection

@section('pizzacard')

  
<div class="d-flex mt-5" style="justify-content: space-between;">

  @foreach ($users as $u)
      
    <table style="width:250px" class="table table-striped table-border">
        
        <tbody>
          <tr>
            <td>
            <h6>User ID:  {{$u->id}}</h6>
            </td>
          </tr>
          <tr style="background: white">
            <td style="color:black">
                <h6>Username:  {{$u->username}}</h6>
                <h6>Email:  {{$u->email}}</h6>
                <h6>Address:  {{$u->address}}</h6>
                <h6>Phone Number:  {{$u->phonenumber}}</h6>
                <h6>Gender:  {{$u->gender}}</h6>
            </td>
          </tr>         
        </tbody>
      </table>
    
      @endforeach

    </div>

@endsection
