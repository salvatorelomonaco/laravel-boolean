<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('layouts.head')
        <title>@yield('page-title')</title>
    </head>
    <body>

        <header>
            @include ('layouts.navbar')
        </header>

        <main>
            @yield('content')
        </main>
        
        <footer>
            @include ('layouts.footer')
        </footer>

    </body>
</html>