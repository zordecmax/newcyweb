<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>
    <x-flash-message />
    <div class="wrapper">
        @include('includes.header')
        <main>
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
    @stack('scripts')

</body>

</html>
