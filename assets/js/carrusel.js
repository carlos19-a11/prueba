
/* Card Carousel scripts: */

jQuery(document).ready(function () {
    function uc_card_carousel_elementor_76ee49c_start() {

        var objCarousel = jQuery('#uc_card_carousel_elementor_76ee49c');

        objCarousel.owlCarousel({
            loop: true,
            rtl: false,
            autoplay: true,
            stagePadding: 0,
            autoplayHoverPause: true,
            margin: 30,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            nav: false,
            rewindNav: false,
            center: false,
            setActiveClassOnMobile: true,
            changeItemOnClick: false,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            dots: true,
            shuffle: false,
            responsive: {

                0: {
                    items: 1,
                    slideBy: 1
                },
                768: {
                    items: 1,
                    slideBy: 1
                },
                980: {
                    items: 2,
                    slideBy: 1
                }
            }
        });



        objCarousel.trigger("uc-object-ready");
        jQuery("body").trigger("uc-remote-parent-init", [objCarousel]);


    } if (jQuery("#uc_card_carousel_elementor_76ee49c").length) uc_card_carousel_elementor_76ee49c_start(); else
        jQuery(document).on('elementor/popup/show', () => { if (jQuery("#uc_card_carousel_elementor_76ee49c").length) uc_card_carousel_elementor_76ee49c_start(); });
});

if (screen.width >= 1535 && screen.width < 2561) {
    let mvp = document.getElementById('siteViewport');
    mvp.setAttribute('content', 'width=1920');
}
if (screen.width > 767 && screen.width < 1535) {
    let mvp = document.getElementById('siteViewport');
    mvp.setAttribute('content', 'width=1700');
}