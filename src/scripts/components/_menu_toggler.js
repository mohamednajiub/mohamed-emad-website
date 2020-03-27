jQuery(document).ready(function($) {
    $('#menu_toggler').on('click', function(){
        $(this).toggleClass('open');
        $('.navigation').toggleClass('open');

        if ($('.navigation').hasClass('open')) {
            $('body, html').css({
                'overflow': 'hidden'
            });
        } else {
            $('body, html').css({
                'overflow': 'auto'
            });
        }
    });
});