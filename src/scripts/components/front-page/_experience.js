jQuery(document).ready(function($) {
    $(".wrapper .experience--item").on("mouseenter mouseleave", function (e) {
        $(".wrapper .experience--item.active").removeClass('active');
        $(this).addClass("active");
     })
});