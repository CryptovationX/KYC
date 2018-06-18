<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.meta')

    <title>CryptovationX | @yield('title')</title>

    @include('partials.head')
 
    @yield('stylesheet')
</head>
<body>
    
    @yield('contents')
    
    <br>
    <br>
    <br>
    
    
    @include('partials.scripts')

    @yield('script')

</body>
</html>
