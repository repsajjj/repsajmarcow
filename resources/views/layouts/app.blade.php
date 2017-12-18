<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RM</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <script src="{{ URL::asset('/js/app.js') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     </head>

    <body>
        <div class="flex-center position-ref full-height">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Repsaj & Marco(w)</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li> <a href="/">Home</a></li>
                        <li><a href="/gear">Gear</a></li>
                        <li><a href="/gallery">Pictures</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    @if(Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Add user</a></li>	
                        <li><a href="/admin"><span class="glyphicon glyphicon-th"></span> Admin panel</a></li>                        
                        <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                        
                    @endif
                    
                </div>
            </nav>
        </div>        
        @yield('content')
    </body>
</html>