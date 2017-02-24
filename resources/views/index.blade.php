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
        .container{
            padding-top:90px;
        }
    </style>
    <body>
    @include('commons.navbar')
    <div class="container">
        <div class="jumbotron">
            <h2>Quotation Manager</h2>
            <p>Manage your favourite Quotations</p2>
            <p> <a href="{{route('login')}}">Login</a> or <a href="{{route('signup')}}">Signup</a> to get started</p>
        </div>

        <div class="jumbotron">
            <h2>Random Quote</h2>
            <backqoute id="qtext"></backqoute>
        </div>

    </div>


    </body>
    <script>
        $(document).ready(function(){
            $('#randomQ').click(function(){
                $.get('random_quote',function(data){
                    $('#qtext').html(data.text);
                })
                
            })
             $('#randomQ').trigger('click');
        });
    </script>
</html>

