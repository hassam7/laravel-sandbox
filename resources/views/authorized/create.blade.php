@extends('authorized.template')
@section('title', "Add New Quote")
        

       @section('nav')
        @parent
       @endsection
       @section('container')
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
        @endsection
