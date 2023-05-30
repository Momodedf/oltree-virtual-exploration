<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Map tests</title>


    <link rel="stylesheet" href="{{ Vite::asset('resources/css/map.css') }}" />

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>
    <body class="">
        <div id="map">
            <script type="module" src="{{ Vite::asset('resources/js/map.js') }}" ></script>
        </div>
    </body>
</html>
