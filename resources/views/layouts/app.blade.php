<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.header')
    <x-flash-message />
    @yield('content')
    @include('includes.footer')
    @stack('scripts')


</body>

</html>
