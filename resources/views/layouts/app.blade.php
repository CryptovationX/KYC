<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("partials.head")
    <title>CryptovationX | @yield('title')</title>
</head>

<body>
    @include("partials.scripts")

        <div id="particles-js"></div>
    

            <img src="{{ asset('images/fulltoplogo.png') }}" class="logo">


            <p class="logofont">"The Best Friend for Crypto Investors"</p>


                @yield("content") 

</body>

</html>