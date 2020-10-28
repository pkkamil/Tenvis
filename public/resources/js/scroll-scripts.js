$(window).on("scroll", function() {
    if (window.innerWidth > 320) {
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
            $(window).scrollTop() <= $("#about").offset().top - 94
        ) {
            $(".active").removeClass("active")
            $('a[href="/#"]').addClass("active")
        } else if (
            $(window).scrollTop() >= $("#about").offset().top - 92 &&
            $(window).scrollTop() <= $("#contact").offset().top - 140
        ) {
            $(".active").removeClass("active")
            $('a[href="/#about"]').addClass("active")
        } else if ($(window).scrollTop() >= $("#contact").offset().top - 141) {
            $(".active").removeClass("active")
            $('a[href="/#contact"]').addClass("active")
        }
    }
})