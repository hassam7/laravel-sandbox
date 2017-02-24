<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </head>

    <style>
        #hid{
            padding-bottom:40px;

        }
        .container{
        }
    </style>
    <body>
     @yield('messages')      
     
    <div class="container">
        <img class="img img-responsive" id="hid" src="http://placehold.it/1200x150">

        @section("nav")
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="{{route('home')}}">Home</li>            
                    <li><a href="{{route('create')}}">Add New Quote</li>
                    <li><a href="{{route('logoff')}}">Log Out</a></li>
                </ul>
            </div>
        @show
        @yield('container')

    </div>


    </body>
</html>

