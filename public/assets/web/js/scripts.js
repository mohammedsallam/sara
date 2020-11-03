$(function() {

    "use strict";

    var wind = $(window);


    /* ----------------------------------------------------------------
                    [ Navbar ( scrollIt ) ]
    -----------------------------------------------------------------*/

    $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: 'swing', // the easing function for animation
        scrollTime: 600, // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: -70 // offste (in px) for fixed top navigation
    });


    /* ----------------------------------------------------------------
                    [ Navbar ( Change Background & Logo ) ]
    -----------------------------------------------------------------*/

    wind.on("scroll", function() {

        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar");

        if (bodyScroll > 400) {

            navbar.addClass("nav-scroll");

        } else {

            navbar.removeClass("nav-scroll");
        }
    });


    /* ----------------------------------------------------------------
                [ Sections Background Image With Data ]
    -----------------------------------------------------------------*/

    var pageSection = $(".bg-img, section");
    pageSection.each(function(indx) {

        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    /* ----------------------------------------------------------------
                    [ Carousel ]
    -----------------------------------------------------------------*/

    $('.feat.carsouel .serv').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        prevArrow: $('.feat .arrows .prev'),
        nextArrow: $('.feat .arrows .next'),
        autoplay: true,
        rtl: true,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.course.carsouel .serv').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        prevArrow: $('.course .prev'),
        nextArrow: $('.course .next'),
        autoplay: true,
        rtl: true,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.nav-pills li').click(function() {

        $(this).addClass('active').siblings().removeClass('active');

    });


    $('.icon-bar').click(function() {

        $(".navbar .navbar-collapse").toggleClass('show');

    });


    $('.navbar .search-icon').click(function() {

        // $(".navbar-nav").toggleClass('hidde');
        $(".search-form").toggleClass('show');

    });

    $(".overlaY button").on("click", function() {
        $(".overlaY").fadeOut(500)
    })


});



window.randomize = function() {
    $('.ko-progress-circle').attr('data-progress', Math.floor(Math.random() * 100));
}
setTimeout(window.randomize, 200);
$('.ko-progress-circle').click(window.randomize);



// === window When Loading === //

$(window).on("load", function() {

    var wind = $(window);

    /* ----------------------------------------------------------------
                    [ Preloader ]
    -----------------------------------------------------------------*/

    $(".loading").fadeOut(500);

    /* ----------------------------------------------------------------
                [ YouTubePopUp ]
    -----------------------------------------------------------------*/

    $("a.vid").YouTubePopUp();

});