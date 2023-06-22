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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navItems = document.getElementsByClassName("nav-link");
            var navbarNav = document.getElementById("navbarNav");
    
            Array.from(navItems).forEach(function(item) {
                item.addEventListener("click", function() {
                    var navbarToggler = document.getElementsByClassName("navbar-toggler")[0];
                    if (navbarNav.classList.contains("show")) {
                        navbarToggler.click();
                    }
                });
            });
        });
    </script>
    
    
</body>

</html>
