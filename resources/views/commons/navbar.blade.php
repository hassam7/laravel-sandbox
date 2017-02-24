<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Quotation Manager</a>
            </div>
            <ul class="nav navbar-nav">
                <li{!! Request::is('/') ? ' class="active"' : null !!}>  <a href="/">Home</a></li>
                
                {!! Request::is('/') ? '<li><a href="#" id="randomQ">View Random Quote</a></li>' : null  !!} 
                
                <li{!! Request::is('signin') ? ' class="active"' : null !!}> <a  href="{{route('login')}}">Login</a></li>
                <li{!! Request::is('signup') ? ' class="active"' : null !!}> <a  href="{{route('signup')}}">Signup</a></li>
            
            </ul>
        </div>
</nav>