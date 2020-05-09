(function($) {
    "use strict";

    $(document).ready(function() {
        new WOW().init();
    });

    $(" a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
    
    jQuery.scrollSpeed(200, 500);
    
    $("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
    // $fn.scrollSpeed(step, speed, easing);
    

    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 55,
            autoplay: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false,
                    loop: false,
                    dots: false,

                }
            }
        });
    });

    $(window).load(function () {    
        "use strict";
        $("#loader").fadeOut();
        $("#preloader").delay(350).fadeOut("slow");
    });

})(jQuery);
