<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactForm</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')


</head>
<body>
    <header class="header">
        <h1 class="header__ttl">FashionablyLate</h1>

        <div class="header__nav">@yield('nav')</div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>