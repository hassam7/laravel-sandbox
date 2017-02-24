<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign Up Form</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.validate.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/additional-methods.js')}}" type="text/javascript"></script>
    </head>
    <body>
    @include('commons.navbar')

    <div class="container">
       
       {{-- @if( count($errors) >0) 
        <div class="alert alert-danger alert-dismissable">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             @foreach($errors->all() as $error)
                <li>{{$error}}</li>
             @endforeach
        </div>
       
       @endif --}}
       @if(isset($message))
        <div class="alert alert-success alert-dismissable">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             {{$message}}
        </div>
       @endif 

           
        <form class="form-signup" method="post" action="/signup">
            <h2 class="form-signup-heading">Sign Up Form</h2>

             <div class="form-group @if ($errors->has('inputName')) has-error @endif">
                <label for="inputName" class="sr-only">Your Full Name</label>
                <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Full Name" value="{{old('inputName')}}" required autofocus>
                        @if ($errors->has('inputName')) <p class="help-block">{{ $errors->first('inputName') }}</p> @endif

            </div>
             <div class="form-group @if ($errors->has('userEmail')) has-error @endif">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="userEmail" class="form-control" placeholder="Email address" value="{{old('userEmail')}}" required autofocus>
                @if ($errors->has('userEmail')) <p class="help-block">{{ $errors->first('userEmail') }}</p> @endif
                
            </div>
            <div class="form-group @if ($errors->has('userPassword')) has-error @endif">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="userPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                            @if ($errors->has('userPassword')) <p class="help-block">{{ $errors->first('userPassword') }}</p> @endif
                            
            </div>
            <div class="form-group">
                            <label for="inputConfPassword" class="sr-only">Password</label>
                            <input type="password" name="userPassword_confirmation" id="userPassword_confirmation" class="form-control" placeholder="Confirm Password" required>
            </div>
            <div class="form-group @if ($errors->has('country')) has-error @endif">
                            <label for="country" class="sr-only">Country</label>
                            <input type="text" name="country" id="country" class="form-control" placeholder="Country" value="{{old('country')}}" required>
                            @if ($errors->has('country')) <p class="help-block">{{ $errors->first('country') }}</p> @endif
                            
            </div>
                <button class="btn btn-primary btn-block" type="submit" id="formbtn">Sign Up</button>
                {{ csrf_field() }}
        </form>

    </div


    </body>
    <script>
        $(document).ready(function(){
            $('form').validate();
        });
    </script>
</html>
