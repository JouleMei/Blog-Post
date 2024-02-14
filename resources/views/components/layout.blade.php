<!doctype html>

<title>My Personal Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <header>
        @yield('banner')
    </header>

    {{ $content }}
</body>

<footer>
    @yield('footer')
</footer>
