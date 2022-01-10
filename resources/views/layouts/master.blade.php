<!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @yield('addon-style')
        @include('components.head')

        <title>
            @yield('title-page')
        </title>
    </head>

<body>

    @include('components.navbar')

    @yield('component')


</body>
    @yield('addon-script')
    @include('components.script')

</html>