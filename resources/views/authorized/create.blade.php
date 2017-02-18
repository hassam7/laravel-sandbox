<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add new Quote</title>

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
        @if(isset($quote_added))
             <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Quote Added Successfully</strong>
            </div>
       @endif


          <form class="form-create" method="post" action="{{route('create')}}">
            <h2 class="form-signin-heading">Add new quote</h2>

             <div class="form-group @if ($errors->has('quote_text')) has-error @endif">
                <label for="quote_text" class="sr-only">Email address</label>
                <input type="text" id="quote_text" name="quote_text" class="form-control" placeholder="Enter Quote" required>
                 @if ($errors->has('quote_text')) <p class="help-block">{{ $errors->first('quote_text') }}</p> @endif

            </div>
             <div class="form-group @if ($errors->has('author')) has-error @endif">
                <label for="author" class="sr-only">Author Name</label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Author Name">
                 @if ($errors->has('author')) <p class="help-block">{{ $errors->first('author') }}</p> @endif
                            
            </div>
                <button class="btn btn-primary btn-block" type="submit" id="formbtn">Add Quote</button>
                {{ csrf_field() }}
        </form>
        
        </div>
    </div 
</body>

</html>