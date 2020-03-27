jQuery(document).ready(function($) {
    $('#menu_toggler').on('click', function(){
        $(this).toggleClass('open');
        $('.navigation').toggleClass('open');

        if ($('.navigation').hasClass('open')) {
            console.log('yes');
            $('body, html').css({
                'overflow': 'hidden'
            });
        } else {
            console.log(false)
            
            $('body, html').css({
                'overflow': 'auto'
            });
        }
    });
});