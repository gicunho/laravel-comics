<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- My Style -->
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    </head>

    <body>
        <!-- Site Header -->
        <header>
            <!-- Top Menu -->
            <div id="top_menu">
                <div class="my-container">
                    <span class="pr-5">DC POWER&#8480; VISA&#9415; </span>
                    <span>additional dc sites <i class="fas fa-caret-down"></i></span>
                </div>
            </div>
            <!-- /Top Menu -->

            <!-- Nav -->
            <nav class="my-container d-flex justify-content-between py-2">
                <!-- Logo -->
                <div id="logo">
                    <img src="{{asset('/img/dc-logo.png')}}" alt="">
                </div>
                <!-- Links -->
                <div id="links">
                    @foreach ($nav_links as $link)
                    <a href="{{route($link['href'])}}">{{$link['name']}}</a>
                    @endforeach
                </div>
                <!-- Search -->
                <div id="search" class="text-right">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <div class="fas fa-search"></i>
                </div>
            </nav>
            <!-- /Nav -->
        </header>
        <!-- /Site Header -->

        <!-- Site Main Content -->
        <main>
            @yield('content')
        </main>
        <!-- /Site Main Content -->


        <!-- Site Footer -->
        <footer>
            <div class="buy text-center py-5">
                <ul>
                  {{--   @foreach ($buy_icons as $buy_icon)
                    <li class="px-4">
                        <img height="{{$loop->last ? 35 : 50}}" src="{{asset($buy_icon['picture'])}}" alt="" class="pr-2">
                        {{$buy_icon['text']}}
                    </li>
                    @endforeach --}}
                </ul>

            </div>
        </footer>
        <!-- /Site Footer -->

    </body>
</html>