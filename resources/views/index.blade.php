<!doctype html>
<html>
    <head>
        <title> About us </title>

        <style>
                html, body {
                    background-color: orange;
                    color: green;
                    font-family: 'Tangerine', sans-serif;
                    font-weight: 1000;
                    height: 100vh;
                    margin: 30;
                }
        </style>
    </head>

    <body> 
        <div class="flex-center position-ref full-height">            
            @foreach($cars as $car)
            <ul> {{ $car->producer }} - {{ $car->title }} </ul>
            @endforeach            
        </div>
    </body>

</html>