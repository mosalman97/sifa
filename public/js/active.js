(function ($) {
    "use strict";
    $(document).ready(function () {
           
        /*-------------------------------------
            Smooth scroll
        -------------------------------------*/
        
        $('a.smooth-scroll').on('click', function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 1000);
            e.preventDefault();
        });
        
        /*-------------------------------------
            Circle Progress
        -------------------------------------*/
        
        function animateProgressBar() {
            // First circle Progress
            $('.first.circle').circleProgress({
                value: 0.75,
                size: 150,
                startAngle: 3,
                thickness: 5,
                emptyFill: "#000",
                animation: {duration: 2200},
                fill:
                {
                    color : "#D63138"
                }
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
            });
            // Second circle Progress
            $('.second.circle').circleProgress({
                value: 0.80,
                size: 150,
                startAngle: 3,
                thickness: 5,
                emptyFill: "#000",
                animation: {duration: 2200},
                fill:
                {
                    color : "#D63138"
                }
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find('strong').html(Math.round(80 * progress) + '<i>%</i>');
            });
            // Third circle Progress
            $('.third.circle').circleProgress({
                value: 1,
                size: 150,
                startAngle: 3,
                thickness: 5,
                emptyFill: "#000",
                animation: {duration: 2200},
                fill:
                {
                    color : "#D63138"
                }
            }).on('circle-animation-progress', function (event, progress) {
                $(this).find('strong').html(Math.round(100 * progress) + '<i>%</i>');
            });
        }

        var waypoint = new Waypoint({
            element: document.getElementById('progress'),
            handler: function (direction) {
                animateProgressBar();
                this.destroy();
            },
            offset: '75%'
        });
        
        /*-------------------------------------
            WOW js
        -------------------------------------*/
        
        new WOW().init();
        

        
        /*-------------------------------------
            Scroll Top
        -------------------------------------*/
        
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '<a class="hvr-icon-bob click-top"></a>', // Text for element
            activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    });
    
    $(window).on('load', function () {

        /*-------------------------------------
            parallax
        -------------------------------------*/
        
        $('.fityourself-area').parallax("50%", 0.7);
        

        
    
    });
}(jQuery));