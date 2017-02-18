<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All Quotes</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</head>
<style>
    .container {
        padding-top: 90px;
    }
</style>

<body>
    <div class="container">
        <div class="col-md-3">
            <ul class="list-unstyled">
                <li><a href="{{route('home')}}">Home</li>            
                <li><a href="{{route('create')}}">Add New Quote</li>
                <li><a href="{{route('logoff')}}">Log Out</a></li </ul>
        </div>
        <div class="col-md-9">

            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Quote</th>
                    <th>Author</th>
                </tr>

                <tr>
                    <td>{{$Quote->id}}</td>
                    <td>{{$Quote->text}}</td>
                    <td>{{$Quote->author}}</td>
                </tr>
            </table>






        </div>



    </div </body>

</html>