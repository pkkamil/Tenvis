<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="Tenvis - A modern blog that allows you to send messages." />
    <meta name="keywords" content="tenvis, blog messages, responsive, creativity, mordern, cheap, about, contact, blog, modern, template" />
    <meta name="apple-mobile-web-app-title" content="Tenvis -A modern template blog, which attracts attention..." />

    <!-- Open Graph -->
    <meta property="og:title" content="Tenvis - A modern template blog, which attracts attention..." />
    <meta property="og:description" content="A modern blog that allows you to send messages to other users. Moreover you can comment posts like real critic." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset("resources/img/favicon.png")}}" />
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
    <!-- App -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/95a2d2c3f2.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Pusher -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.1/pusher.min.js" integrity="sha512-xja8frZ2NT0+b1aMmuLc3nfHjhl90oTiU2l8R55WxRMoQ+qTuR9pkOMnh/I9X7Hc2e27z0amKNOAJm6XbYe2/A==" crossorigin="anonymous"></script>
    <!-- Toast -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" /> --}}
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href={{asset("resources/css/style.css")}} />
    <!-- Scripts -->
    @if ($resizer ?? '' == True)
    <script type="text/javascript" defer src={{ asset("resources/js/autoresize.js")}}></script>
    @endif
    <script type="text/javascript" defer src={{ asset("resources/js/script.js")}}></script>
    @if ($scrollTo == 'about')
    <script type="text/javascript" defer src={{ asset("resources/js/scroll-scripts.js")}}></script>
    @endif
    @if ($filter ?? '')
    <script type="text/javascript" defer src={{ asset("resources/js/filter.js")}}></script>
    @endif
</head>

<body @if ($auth ?? '' or $dark ?? '') class="auth" @endif>
    @if ($isPost ?? '')
    @include('partials.header-post')
    @elseif ($auth ?? '' ?? '' ?? '' == True)
    @include('partials.header-auth')
    @else
    @include('partials.header')
    @endif
    @yield('content')
    @include('partials.footer')
</body>
<script>
    window.Echo.private('App.User.' + {{Auth::id()}})
    .listen('Notify', (e) => {
        let toast = document.createElement('a')
        toast.classList.add('custom_toast')
        let href = document.createAttribute('href')
        href.value = "/dashboard/notifications/"
        toast.setAttributeNode(href)
        let titleToast = document.createElement('h3')
        titleToast.classList.add('toast-title')
        titleToast.textContent = e.title
        let bodyToast = document.createElement('p')
        bodyToast.classList.add('toast-body')
        bodyToast.textContent = e.message
        let iconToast = document.createElement('i')
        iconToast.classList.add('far')
        iconToast.classList.add('fa-comments')
        iconToast.classList.add('icon')
        let exitToast = document.createElement('i')
        exitToast.classList.add('fas')
        exitToast.classList.add('fa-times')
        exitToast.classList.add('exit-toast')
        toast.appendChild(exitToast)
        toast.appendChild(iconToast)
        toast.appendChild(titleToast)
        toast.appendChild(bodyToast)
        document.body.appendChild(toast)

        setTimeout(() => {
            $('.exit-toast').click()
        }, 5000)

        $('.exit-toast').click(function(e) {
            e.preventDefault()
            $(this).parent().animate({right: '-550px'}, 1000)
            setTimeout(() => {
                $(this).parent().remove()
            }, 1000)
        })
    });
</script>
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
@if ($active == 'editor')
<script src="https://cdn.tiny.cloud/1/2kse99tmrbyp273iy1jnmdpx30xbkb5t9gf0o9xdkrabelj8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '.tinyMCE',
        skin_url: '/resources/ui/DARK',
        plugins: 'advcode casechange linkchecker autolink lists checklist media mediaembed pageembed powerpaste table advtable tinymcespellchecker format',
        toolbar: 'undo redo | paste copy cut selectall | styleselect | subscript superscript | bold italic underline strikethrough | align | casechange | bullist numlist outdent indent checklist | code media pageembed | table',
        toolbar_mode: 'floating',
        resize: true,
        width: '100%',
        height: 560,
    });
  </script>
@endif
@if ($active == 'posts')
<script>
    $(window).on("load",function(){
        $(".loader-container").fadeOut(1000);
    });
</script>
@endif
@if (session('notification'))
    <script>
        let toast = document.createElement('a')
        toast.classList.add('custom_toast')
        let href = document.createAttribute('href')
        href.value = "/dashboard/notifications/"
        toast.setAttributeNode(href)
        let titleToast = document.createElement('h3')
        titleToast.classList.add('toast-title')
        titleToast.textContent = "{{session('notification')->title}}"
        let bodyToast = document.createElement('p')
        bodyToast.classList.add('toast-body')
        bodyToast.textContent = "{{session('notification')->message}}"
        let iconToast = document.createElement('i')
        @if (session('notification')->type == 'message')
            iconToast.classList.add('far')
            iconToast.classList.add('fa-comments')
        @else
            iconToast.classList.add('fas')
            iconToast.classList.add('fa-info-circle')
        @endif
        iconToast.classList.add('icon')
        let exitToast = document.createElement('i')
        exitToast.classList.add('fas')
        exitToast.classList.add('fa-times')
        exitToast.classList.add('exit-toast')
        toast.appendChild(exitToast)
        toast.appendChild(iconToast)
        toast.appendChild(titleToast)
        toast.appendChild(bodyToast)
        document.body.appendChild(toast)

        setTimeout(() => {
            $('.exit-toast').click()
        }, 5000)

        $('.exit-toast').click(function(e) {
            e.preventDefault()
            $(this).parent().animate({right: '-550px'}, 1000)
            setTimeout(() => {
                $(this).parent().remove()
            }, 1000)
        })
    </script>
@endif
</html>
