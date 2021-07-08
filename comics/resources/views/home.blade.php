<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <!-- My Style -->
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    </head>
    <body>
        <!-- Site Header -->
        <header>

        </header>
        <!-- /Site Header -->

        <!-- Site Main Content -->
        <main>

        </main>
        <!-- /Site Main Content -->


        <!-- Site Footer -->
        <footer>

        </footer>
        <!-- /Site Footer -->

    </body>
</html>
@foreach ($comics as $comic)
<h1>{{$comic['title']}}</h1>
@endforeach