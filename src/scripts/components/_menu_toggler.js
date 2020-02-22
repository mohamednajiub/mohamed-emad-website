jQuery(document).ready(function($) {
    $('#menu_toggler').on('click', function(){
        $(this).toggleClass('open');
        $('.navigation').toggleClass('open');
        $('html').css({"overflow": "hidden"})
    });
});