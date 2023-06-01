<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @stack('prepend-style')

    {{-- Style --}}
    @include('includes.style')

    {{-- mirip yield dan berpasangan dengan push --}}
    @stack('addon-style')
</head>

<body>

    @yield('content')
    @include('sweetalert::alert')

    {{-- Script --}}
    @include('includes.script')

    @stack('addon-script')

 

</body>

</html>