/***************************************************************************
 *
 * SLIDER JS
 *
 ***************************************************************************/
$(document).ready(function() {
$('.sliderDolce').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '60px',
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        asNavFor:'.thumb',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '20px'
                }
            },
            {
                breakpoint: 480
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '10px'
                }
            }
        ]
    });

    $('.thumb').slick({
        centerMode: true,
        centerPadding: '60px',
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        asNavFor:'.sliderDolce',
        focusOnSelect: true,
        slidesToShow:4,
        slidesToScroll:1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '10px'
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '5px'
                }
            }
        ]
    });

});
