<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="{{ asset('js/app.js)') }}"></script>
    <title>Phizzahut</title>
</head>
<body>
    <div class="header">
        <a href="/">
        <img src="img/logo.png" alt="logo"/>
        </a>
        <h1>PHizzahut</h1>
        <div class="header-right">
        @yield('buttonheader') 
        </div>
    </div>

    @yield('headerpizza');

<div class ="row" style= "display : flex">
    @yield('pizzacard')
</div>

    <div class="container">
        @yield('content')
    </div>
    <style>
    .button {
        background-color: #ffffff;
        border: none;
        color: black;
        padding:15px 25px;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        display: inline-block;
        font-size: 16px;
        margin-top : -2%;
        position : absolute;
        right : 0;
        margin-right : 5%
        }

    .button2 {
        background-color: #ffffff;
        border: none;
        color: black;
        padding:15px 25px;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        display: inline-block;
        font-size: 16px;
        margin-top : -2%;
        position : absolute;
        right : 0;
    }

    .TitlePizza{
        font-size: 100px;
        margin-left : 5%;
    }

    .OrderNow{
        font-size : 60px;
        margin-left : 10%;
        font-weight: lighter;
    }
    </style>

</body>
</html>