$(window).on("scroll", function() {
    if (window.innerWidth > 976) {
        if (
            $(window).scrollTop() >= 0 &&
            $(window).scrollTop() <=
            $("#about").offset().top - $("nav").height() * 2 - 2
        ) {
            $(".active").removeClass("active")
            $('a[href="/#"]').addClass("active")
        } else if (
            $(window).scrollTop() >=
            $("#about").offset().top - $("nav").height() * 2 &&
            $(window).scrollTop() <=
            $("#contact").offset().top - $("nav").height() * 2 - 1
        ) {
            $(".active").removeClass("active")
            $('a[href="/#about"]').addClass("active")
        } else if (
            $(window).scrollTop() >=
            $("#contact").offset().top - $("nav").height() * 2
        ) {
            $(".active").removeClass("active")
            $('a[href="/#contact"]').addClass("active")
        }
    } else {
        if (
            $(window).scrollTop() >= 0 &&
            $(window).scrollTop() <= $("#about").offset().top - 191
        ) {
            if ($('a[href="/#"]').hasClass('active')) {
                $(".active").removeClass("active")
            }
            $('a[href="/#"]').addClass("active")
        } else if (
            $(window).scrollTop() >= $("#about").offset().top - 192 &&
            $(window).scrollTop() <= $(".divider.first").offset().top - 90
        ) {
            $(".active").removeClass("active")
            $('a[href="/#about"]').addClass("active")
        } else if ($(window).scrollTop() >= $(".divider.first").offset().top - 91) {
            $(".active").removeClass("active")
            $('a[href="/#contact"]').addClass("active")
        }
    }
})

// if (window.location.hash == '#about') {
//     $(".active").removeClass("active")
//     $('a[href="/#about"]').addClass("active")
// } else if (window.location.hash == '#contact') {
//     $(".active").removeClass("active")
//     $('a[href="/#contact"]').addClass("active")
// }
