(function($) {
    "use strict";

    // Navbar dropdown hover
    if($(window).width() > 991) {
        // dropdown-menu
        $(".nav-item.dropdown").on("mouseover", function() {
            $(this).addClass("show");
            $(this).find(">.dropdown-menu").addClass("show");
        });
        $(".nav-item.dropdown").on("mouseout", function() {
            $(this).removeClass("show");
            $(this).find(">.dropdown-menu").removeClass("show");
        });

        // dropdown-submenu
        $(".dropdown-submenu").on("mouseover", function() {
            $(this).addClass("show");
            $(this).find(">.dropdown-menu").addClass("show");
        });
        $(".dropdown-submenu").on("mouseout", function() {
            $(this).removeClass("show");
            $(this).find(">.dropdown-menu").removeClass("show");
        });
    }

    // Component slider - home page - Owl Carousel
    $(".owl-carousel").owlCarousel({
        rewind: true,
        slideTransition: "ease-in-out",
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        dotsSpeed: 100,
        animateOut: "slideOutDown",
        animateIn: "flipInX",
        responsive: {
            0: {
                items: 1
            },
            510: {
                items: 2
            },
            731: {
                items: 2
            },
            769: {
                items: 3
            },
            993: {
                items: 4
            },
            1201: {
                items: 6
            },
            1441: {
                items: 6
            }
      }
    });

})(jQuery);