@extends('authorized.template')
@section('title', "All Quotes")
        
   @section('messages')
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
    @endsection
       
    @section('nav')
        @parent
    @endsection
        @section('container')
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
        @endsection
           
    
