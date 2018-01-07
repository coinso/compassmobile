(function ($) {

    //Add Active Class To Main menu item
    $('li.current_page_item').addClass('active');


    //scrollup

    $(window).scroll(function(){
        function scrollUpInit(){
            if( $('.scrollup').hasClass('active')){

                $('.scrollup').removeClass('active');
            };
        }
        if ($(this).scrollTop() > 450) {
            setTimeout(scrollUpInit, 1000);

            $('.scrollup').fadeIn();

        } else {
            $('.scrollup').fadeOut();
        }
        //scrolldown fade effect on home page
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            $(arrow).addClass('fade');
        } else{
            $(arrow).removeClass('fade');
        }
    });
    $('.scrollup').click(function(){
        $(this).toggleClass('active');
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
    //scrolldown to next div on home page
    var arrow = $('.arrow i');
    $(arrow).click(function () {
        // console.log('click');
        $('html, body').animate({
            scrollTop: $(this).parent().offset().top
        }, 1000);
    });
})(jQuery);