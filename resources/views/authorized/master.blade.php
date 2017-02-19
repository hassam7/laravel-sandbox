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
        .container{
            padding-top:90px;
        }
    </style>
    <body>
    @if(isset($status))
        @if($status=='success')
             <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{$message}}</strong>
            </div>
        @else
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{$message}}</strong>
            </div>
        @endif
    @endif

       
    <div class="container">
        <div class="col-md-3">
            <ul class="list-unstyled">
                <li><a href="{{route('home')}}">Home</li>            
                <li><a href="{{route('create')}}">Add New Quote</li>
                <li><a href="{{route('logoff')}}">Log Out</a></li>
            </ul>
        </div>
        <div class="col-md-9">
        @if(count($Quotes)<=0)

             <div class="jumbotron">No records in database</div>
        @else
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Quote</th> 
                    <th>Author</th>
                    <th>Operations</th>
                </tr>
                @foreach($Quotes as $quote)
                <tr>
                    <td>{{$quote->id}}</td>
                    <td>{{$quote->text}}</td> 
                    <td>{{$quote->author}}</td>
                    <td>
                    <div class="btn-group"> 
                    <ul class="list-inline">
                        <li><a href="{{route('detail',['id'=>$quote->id])}}">Details</a></li> 
                        <li><a href="{{route('edit',['id'=>$quote->id])}}">Edit</a> </li>
                        <li><a href="{{route('delete',['id'=>$quote->id])}}">Delete</a></li>
                        <ul/>
                    </td>
                </tr>
                @endforeach
            </table>

        @endif
        <div class="text-center">
            {{$Quotes->links()}}
        </div>
        


           
        </div>
           
    

    </div


    </body>
</html>



{{-- Master Page:It will display list of quotes with
    detail button:  To view detail of particular item
    update button:  To Update selected  item
    add    button:  To add new button
    delete button:  To delete quote --}}