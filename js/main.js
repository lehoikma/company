(function ($) {
    "use strict";

    function ArticleEvenOwl() {
        if ($('.article-event .n-item').length > 1) {
            $('.article-event .n-items').owlCarousel({
                loop: true,
                autoplay: false,
                margin: 0,
                slideSpeed: 2000,
                nav: true,
                dots: true,
                autoWidth: false,
                items: 1,
                navText: ['', '']
            });
        }
    }

    function ArticleGalleryOwl() {
        if ($('.article-gallery .gall-item').length > 1) {
            $('.article-gallery .gall-items .owl-carousel').owlCarousel({
                loop: true,
                autoplay: false,
                margin: 0,
                slideSpeed: 2000,
                nav: true,
                dots: true,
                autoWidth: false,
                items: 1,
                navText: ['', '']
            });
        }
    }

    if (jQuery('#slider12').length) {
        jQuery('#slider12').revolution({
            sliderType: 'standard',
            sliderLayout: 'fullwidth',
            delay: 5000,
            navigation: {
                keyboardNavigation: 'on',
                keyboard_direction: 'horizontal',
                mouseScrollNavigation: 'off',
                onHoverStop: 'on',
                arrows: {
                    style: 'zeus',
                    tmp:
                        '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
                    enable: true,
                    rtl: false,
                    hide_onmobile: false,
                    hide_onleave: false,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    hide_under: 0,
                    hide_over: 9999,
                    tmp: '',
                },
            },
            parallax: {
                type: 'scroll',
                origo: 'slidercenter',
                speed: 1000,
                levels: [
                    5,
                    10,
                    15,
                    20,
                    25,
                    30,
                    35,
                    40,
                    45,
                    46,
                    47,
                    48,
                    49,
                    50,
                    100,
                    55,
                ],
                type: 'scroll',
            },
            responsiveLevels: [1920, 1240, 1024, 778, 480],
            visibilityLevels: [1920, 1240, 1024, 778, 480],
            gridwidth: [1920, 1240, 1024, 778, 480],
            gridheight: [500, 322, 266, 202, 125],
        });
    }

    $(document).ready(function () {
        ArticleEvenOwl();
        ArticleGalleryOwl();

        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });

        $("#content-home .product-home").slick({
            arrows: true,
            infinite: true,
            dots: true,
            speed: 600,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: false,
            nextArrow: false,
            responsive: [
                {
                    breakpoint: 961,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 668,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });

    });
})(jQuery);