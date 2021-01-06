@extends('layout/template')

@section('buttonheader')
<div class="header-right">
            <a href="{{ url('/transactions') }}">View All User Transaction</a>
            <a href="{{ url('/allUser') }}">View All User</a>
            <a href="#about">Admin</a>
</div>
@endsection

@section('pizzacard')

    <div class="d-flex p-3 ml-5 mt-5 bg-white border">
        
        @if ($lists)
            <img src="{{ asset($lists->image) }}" style="width: 20%"/>
         
            <div class="ml-5 mr-5" style="width: 600px">
            
             
                <h4 style="bold">{{$lists->name}}</h4>
                <h6>{{$lists->description}}</h6>
                <br/ >
                <h6>Rp. {{$lists->price}}</h6>
                <br /> 
                
            <div>
                <a type="deletePizza" class="btn btn-danger" href="/deletePizza/delete/{{ $lists->id }}">Delete Pizza</a>
            </div>
        @endif
        </div>
            
    </div>
    
@endsection
