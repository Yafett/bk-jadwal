<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {

            background-color: #236D5E;

        }

    </style>
</head>

<body>

    <div class="container h-100 text-center">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">

                <div class="display-4" style=" ">
                    <img src="{{ asset('image/bk.jpg')}}" alt="" style="height : 400PX; width : 400PX; margin-top : 40%;">

                </div>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" >Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color: #dfdfdf; text-decoration: none; margin-right : 70px; font-size : 30px">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"style="color: #dfdfdf; text-decoration: none; font-size : 30px">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>
        </div>
    </div>

</body>

</html>
