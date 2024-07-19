<!DOCTYPE html>
<html lang="en">

<head>
    <title>Báo việt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('client.layout.partials.css')
    @include('client.layout.partials.js')
</head>

<body id="top">
    <div class="wrapper col0">
        @include('client.layout.partials.header-top')
    </div>
    <div class="wrapper">
        @include('client.layout.partials.header-button')
    </div>
    <div class="wrapper col2">
        @include('client.layout.partials.header-nav')
    </div>

    <div class="wrapper">
        @yield('conten')
    </div>
    <div class="wrapper">
        @yield('cont')
    </div>
    <div class="wrapper">
        @yield('contee')
    </div>

    <div class="wrapper">
        @include('client.layout.partials.footer-top')
    </div>
    <div class="wrapper">
        @include('client.layout.partials.footer-button')
    </div>
</body>

</html>