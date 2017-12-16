Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Explore
 @repsajjj
 Sign out
 Unwatch 1
  Star 0  Fork 0 repsajjj/repsajmarcow
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights  Settings
Branch: master Find file Copy pathrepsajmarcow/resources/views/welcome.blade.php
3e52c82  12 hours ago
 Jasper Vercnocke Larvel start
0 contributors
RawBlameHistory     
97 lines (82 sloc)  2.64 KB
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Repsaj & Marco(w)
                    <br>
                    <?php echo $name; ?>
                </div>


                <div class="links">
                    <a href="https://www.facebook.com/repsaj.dj/">Facebook</a>
                    <a href="https://soundcloud.com/repsaj-marcow">Soundcloud</a>
                    <a href="https://github.com/repsajjj/repsajmarcow">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
