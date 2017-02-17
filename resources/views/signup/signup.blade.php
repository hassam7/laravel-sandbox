<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign Up Form</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
   
    </head>
    <body>
    <div class="container">
       
       @if( count($errors) >0) 
        <div class="alert alert-danger alert-dismissable">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             @foreach($errors->all() as $error)
                <li>{{$error}}</li>
             @endforeach
        </div>
       
       @endif
        

       <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Indicates a successful or positive action.
        </div>
        <form class="form-signup" method="post" action="/signup">
            <h2 class="form-signup-heading">Sign Up Form</h2>
                <label for="inputName" class="sr-only">Your Full Name</label>
                <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Full Name" required autofocus>

                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="userEmail" class="form-control" placeholder="Email address" required autofocus>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="userPassword" id="inputPassword" class="form-control" placeholder="Password" required>

                <button class="btn btn-primary btn-block" type="submit" id="formbtn">Next</button>
                {{ csrf_field() }}
        </form>

    </div

    </body>
</html>