<!doctype html>
<html>
    <head>
        <title> {{ $car->producer }} {{ $car->title }} </title>

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
            <div class="title"> Title: {{ $car->title }} </div>
            <p> Producer: {{ $car->producer }}  </p>
            <p> Number of doors: {{ $car->number_of_doors }} </p>
                  
        </div>
    </body>

</html>