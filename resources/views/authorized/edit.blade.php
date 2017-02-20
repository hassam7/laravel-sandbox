<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Quote</title>

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
        @if(!isset($Quote) || $Quote==null)
             <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Can not find the selected quote</strong>
            </div>

        @else
            <form class="form-create" method="POST" action="{{route('update')}}">
                <h2 class="form-signin-heading">Quote Details</h2>

                <div class="form-group">
                    <label for="quote_text" class="sr-only">Email address</label>
                    <textarea type="text" id="quote_text" name="quote_text" class="form-control">{{$Quote->text}}
                    </textarea>

                </div>
                <div class="form-group">
                    <label for="author" class="sr-only">Author Name</label>
                    <input type="text" name="author" id="author" class="form-control" value="{{$Quote->author}}">
                                
                </div>
                    <button tpye="submit" class="btn btn-primary btn-block">Submit</button>
                    {{csrf_field()}}
            </form>
        @endif
        
        </div>
    </div 
</body>

</html>