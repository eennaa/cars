<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
                                crossorigin="anonymous">

        
        @include('layouts.header')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" >

        <!-- Styles -->
        <style>
            html, body {
                background-color: orange;
                color: green;
                font-family: 'Tangerine', sans-serif;
                font-weight: 1000;
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
                text-align: left;
                font-size: 60px;
            }

            .title {
                font-size: 120px;
            }            

            .m-b-md {
                margin-bottom: 170px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            
            @yield('content')

                
        
        </div>
    </body>
</html>
