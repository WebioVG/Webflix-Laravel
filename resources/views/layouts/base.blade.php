<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @section('title') {{ config('app.name') }} @endsection
        </title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <header class="flex items-center h-[10vh] px-5 border-b shadow-lg">
            <h1 class="text-3xl font-bold mr-10">Webflix Laravel</h1>
            <nav>
                <ul class="flex gap-5 text-lg">
                    <li><a class="inline-block border-b-2 border-white hover:border-slate-500" href="{{ route('home.index') }}">Home</a></li>
                    <li><a class="inline-block border-b-2 border-white hover:border-slate-500" href="{{ route('categories.index') }}">Categories</a></li>
                    <li><a class="inline-block border-b-2 border-white hover:border-slate-500" href="{{ route('movies.index') }}">Movies</a></li>
                    <li><a class="inline-block border-b-2 border-white hover:border-slate-500" href="#">Actors</a></li>
                    <li><a class="inline-block border-b-2 border-white hover:border-slate-500" href="{{ route('about.index') }}">About</a></li>
                </ul>
            </nav>
            <div class="flex grow justify-end gap-5 text-lg">
                <a href="#">Login</a>
                <a href="#">Inscription</a>
            </div>
        </header>

        <main class="my-5 px-5">
            @yield('content')
        </main>

        <footer>
            <h3 class="text-center">Copyright 2022 - Webflix Laravel</h3>
        </footer>
    </body>
</html>
