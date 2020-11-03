$(document).ready(function(){

    new WOW().init();

    var swiper = new Swiper('.swiper-head', {
        spaceBetween: 30,
        effect: 'fade',
        grabCursor: true,
        speed: 1500,
        autoplay: {
            delay: 5000,
        },
    });

    $('.newsletter_button').click(async function (e) {
        e.preventDefault();

        let interval = setInterval(function () {
            $('.ajaxError, .ajaxSuccess').slideUp(400);
            clearInterval(interval)
        }, 3000);

        let data = {email: $('.newsletter_email').val()},
            form = $('.newsletter_form'),
            url = form.attr('action'),
            method = form.attr('method');

        const response=await ajax({
            url,
            data,
            dataType: 'json',
            method
        });

        if (response.errors) {
            $('.ajaxError').removeClass('d-none').slideDown().html(response.errors);
            $('.ajaxSuccess').addClass('d-none');
        }
        if (response.message) {
            $('.ajaxSuccess').removeClass('d-none').slideDown().html(response.message);
            $('.ajaxError').addClass('d-none');
        }
    });

});
