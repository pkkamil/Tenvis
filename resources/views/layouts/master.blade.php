<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="apple-mobile-web-app-title" content="Tenvis - modern template blog" />

    <!-- Open Graph -->
    <meta property="og:title" content="Tenvis - modern template blog" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Tenvis - modern template blog" />

    <title>Tenvis - A Modern Template Blog</title>

    <!-- Canonical link -->
    <link rel="canonical" href="" />
    <!-- Favicon -->
    <link rel="shortcut icon" href={{ asset("resources/img/favicon.png")}} />
    <link rel="apple-touch-icon" sizes="192x192" href={{ asset("resources/img/favicon.png") }} />
    <link rel="apple-touch-startup-image" href={{ asset("resources/img/favicon.png") }} />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href={{ asset("resources/css/bootstrap.min.css")}} />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/95a2d2c3f2.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href={{asset("resources/css/style.css")}} />
    <!-- Scripts -->
    <script type="text/javascript" defer src={{ asset("resources/js/autoresize.js")}}></script>
    <script type="text/javascript" defer src={{ asset("resources/js/script.js")}}></script>
    @if ($scrollTo == 'about')
    <script type="text/javascript" defer src={{ asset("resources/js/scroll-scripts.js")}}></script>
    @endif
    @if ($filter ?? '')
    <script type="text/javascript" defer src={{ asset("resources/js/filter.js")}}></script>
    @endif
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
    @if ($isPost ?? '')
    @include('partials.header-post')
    @else
    @include('partials.header')
    @endif

    @yield('content')

    @include('partials.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
crossorigin="anonymous"></script>
<script defer>
AOS.init({
    delay: 200,
    duration: 1200,
    once: false,
});
</script>
</html>
