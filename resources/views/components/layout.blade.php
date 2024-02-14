<!doctype html>

<title>My Personal Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    @yield('banner')

    {{ $slot }}
</body>

<footer>
    @yield('footer')
</footer>
