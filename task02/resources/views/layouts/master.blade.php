<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.header')
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
