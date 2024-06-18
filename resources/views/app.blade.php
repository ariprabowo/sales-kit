<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AION</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo_white.svg')}}">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');

            body {
                font-family: 'Titillium Web' !important; 
            }
        </style>
        @vite('resources/css/app.css')
            
    </head>
    <body>
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>