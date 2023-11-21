<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    @yield('styles')

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-view-container">

        @include('layouts.navigation')

        <div id="container" class="container maximized">
            <header class="header">
                <button id="sidebar-toggle-button" class="sidebar-toggle-button">
                    <svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" stroke-width="2" stroke="currentColor" id="open-icon" class="">
                        <line x1="2" y1="4" x2="16" y2="4"/> <line x1="2" y1="9" x2="16" y2="9"/> <line x1="2" y1="14" x2="16" y2="14"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" stroke-width="2" stroke="currentColor" id="close-icon" class="hidden">
                        <line x1="3" y1="4" x2="15" y2="14"/> <line x1="3" y1="14" x2="15" y2="4"/>
                    </svg>
                </button>
            </header>

            @yield('content')

        </div>
    </div>
    
    <script src="{{ asset('js/jQuery.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#sidebar-toggle-button").click(function (e) { 
                e.preventDefault();
                $("#sidebar").toggleClass("opened");
                $("#sidebar").toggleClass("closed");
                $("#container").toggleClass("minimized");
                $("#container").toggleClass("maximized");
                $(".menu-text").toggleClass("hidden");
                $("#open-icon").toggleClass("hidden");
                $("#close-icon").toggleClass("hidden");
            });
        });
    </script>
    @yield('scripts')
</body>
</html>
