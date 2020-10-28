$(document).ready(function() {
    $('.list').click(function(e) {
        e.preventDefault();
        const value = $(this).attr('data-filter')
        if (value == 'all') {
            $('.single-blog-outer').show('1000')
        } else {
            $('.single-blog-outer').not('.' + value).hide('1000')
            $('.single-blog-outer').filter('.' + value).show('1000')
        }
    })

    $('.list').click(function() {
        $(this).addClass('active').siblings().removeClass('active')
    })
})