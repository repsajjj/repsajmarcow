<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RM</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
        <script src="{{ URL::asset('/js/app.js') }}"></script>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Repsaj & Marco(w)</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#">Gear</a></li>
                        <li><a href="#">Pictures</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        @yield('content')
    </body>
</html>