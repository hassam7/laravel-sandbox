<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
   
    </head>
    <body>
    <div class="container">
       
        @if( count($errors) >0 ) 
        <div class="alert alert-danger alert-dismissable">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Either Username or Password was Incorrect</strong>
        </div>
       
       @endif 
      

           
        <form class="form-signin" method="post" action="/signin">
            <h2 class="form-signin-heading">Login</h2>

             <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="userEmail" class="form-control" placeholder="Email address" value="{{old('userEmail')}}" required autofocus>
                
            </div>
            <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="userPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                            
            </div>
                <button class="btn btn-primary btn-block" type="submit" id="formbtn">Sign Up</button>
                {{ csrf_field() }}
        </form>

    </div


    </body>
</html>
