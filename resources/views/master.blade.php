<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
        <!-- <link rel="stylesheet" type="text/css" href="{!! asset('app.css') !!}" > -->
        <!-- <link rel="stylesheet" type="text/css" href="{!! asset('docs.css') !!}" > -->
        <link rel = "stylesheet" href = "{!! asset('css/bootstrap.min.css') !!}">
        <link rel = "stylesheet" href = "{!! asset('css/bootstrap-theme.min.css') !!}">
        <script src="{!! asset('js/jquery-3.2.1.js') !!}"></script>
        <script src="{!! asset('js/popper.js') !!}"></script>
        <!-- <script src="{!! asset('js/jquery-1.10.2.min.js') !!}"></script> -->
        <script src = "{!! asset('js/bootstrap.js') !!}"></script>
        
        <title>@yield('title')</title>

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
                /* text-align: center; */
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
    
      @include('shared.navbar')  

      @yield('content')

     
    </body>
</html>
@show