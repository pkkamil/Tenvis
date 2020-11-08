$(document).ready(function() {
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing")
    })
})

// Scrolling Effect

$(document).ready(function() {
    if ($(window).scrollTop() > 0) {
        $("nav").addClass("black")
    }
})

$(window).on("scroll", function() {
    if ($(window).scrollTop()) {
        $("nav").addClass("black")
    } else {
        $("nav").removeClass("black")
    }
})

$(".smooth-scroller").click(function() {
    if (window.innerWidth > 320) {
        $([document.documentElement, document.body]).animate({
                scrollTop: $($(this).data("scroll")).offset().top -
                    $("nav").height() * 2,
            },
            2000
        )
    } else {
        $("nav ul").removeClass("showing")
        $([document.documentElement, document.body]).animate({
                scrollTop: $($(this).data("scroll")).offset().top - 180,
            },
            2000
        )
    }
})

$('a[href="/#"]').click(function() {
    // if ($(this).hasClass('active')) {
    $([document.documentElement, document.body]).animate({
                scrollTop: 0,
            },
            2000
        )
        // }
})