@extends('layout/template')

<div class="header-right">
            <a href="{{ url('/transactions') }}">View All User Transaction</a>
            <a href="{{ url('/allUser') }}">View All User</a>
            <a href="#about">Admin</a>
</div>

@section('pizzacard')

    <div class = "p-3 ml-3 mt-5 bg-white border">

    <div class="ml-5 mr-5" style="width: 600px">
        <h4 style="bold">Add New Pizza</h4>
        <form action="{{url('/storePizza')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group row">
                <label for="pizzaName" class="col-sm-4 col-form-label">Pizza Name:</label>
                <div class="col-sm-8">
                    <input type="name" name="pizzaName" class="form-control" id="pizzaName">
                  </div>
            </div>

            <div class="form-group row">
                <label for="pizzaPrice" class="col-sm-4 col-form-label">Pizza Price:</label>
                <div class="col-sm-8">
                    <input type="price" name="pizzaPrice" class="form-control" id="pizzaPrice">
                  </div>
            </div>

            <div class="form-group row">
                <label for="pizzaDesc" class="col-sm-4 col-form-label">Pizza Description:</label>
                <div class="col-sm-8">
                    <input type="desc" name="pizzaDesc" class="form-control" id="pizzaDesc">
                  </div>
            </div>

            <div class="form-group row">
                <label for="pizzaImage" class="col-sm-4 col-form-label">Pizza Image:</label>
                <div class="col-sm-8">
                    <input type="file" name="pizzaImage" class="form-control-file" id="pizzaImage">
                </div>
              </div>

            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="addPizza" class="btn btn-primary">Add Pizza</button>
                </div>
              </div>

        </form>

    </div>



    </div>
    
@endsection