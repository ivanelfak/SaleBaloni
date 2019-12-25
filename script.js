$(document).ready(function () {
    $('#toggle-btn').click(function () {
        $('.nav-links').slideToggle(3000);
    })

    $(window).scroll(function () {
        let scroll = $(window).scrollTop();
        if (scroll >= 70) {
            $('#nav').addClass("new-nav");
        }
        else {
            $('#nav').removeClass("new-nav");
        }
    })

    $('nav-links a').click(function (link) {

        link.preventDefault();
        let target = $(this).attr('href');
        $('html,body').animate({
            scrollTop: $(target).offset().top
        }, "slow");
    })

    /*$("#accordion").accordion({
        animate: 1000
    });*/

    $('.banner-text h1').ready(function(direction){
       $('.banner-text h1').addClass('animated fadeInRightBig');
    });

    $('.banner-text a').ready(function(direction){
        $('.banner-text a').addClass('animated flash');
    });

    $('.contact-member-footer i').ready(function(direction){
        $('.contact-member-footer i').addClass('animated flash');
    });

    $('.srt-btn').on('click', function(){
    $('.srt-btn').removeClass('selected');
    $(this).addClass('selected');
});


})