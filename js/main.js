(function ($) {
    "use strict";
    
    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
   


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    //  Navscroll Code for Scroll System

     // Get all sections that have an ID defined
     const sections = document.querySelectorAll(".container-xxl[id]");
     // Add an event listener listening for scroll
     window.addEventListener("scroll", navHighlighter);
     function navHighlighter() {
        // Get current scroll position
        let scrollY = window.pageYOffset;
       // Now we loop through sections to get height, top and ID values for each

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop + 150;
            var sectionId = current.getAttribute("id");
            var nav = document.querySelector('.navbar').nextElementSibling;
            if(nav.classList.contains('page-header')){
            //  remove uneven traverse of navbar by get content height
                const container = document.querySelector(".col-sm-8");
                const cont_height = container.offsetHeight;
                var x = document.querySelector('.page-header').nextElementSibling;
            
                    /*
            - If our current scroll position enters the space where current section on screen is, 
            add .active class to corresponding navigation link, else remove it
            - To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
            */
            // when navroot not exist in Page
                if(x.classList.contains('bg-white')){
                    if (
                    scrollY > sectionTop &&
                    scrollY <= sectionTop + sectionHeight 
                    ){
                    document.querySelector("#list-example a[href*=" + sectionId + "]").classList.add("active");
                    } else {
                    document.querySelector("#list-example a[href*=" + sectionId + "]").classList.remove("active");
                    }
                    if(scrollY > cont_height+300  ){
                        document.querySelector("#list-example").parentElement.classList.remove('position-sticky');
                        
                    }else{
                        document.querySelector("#list-example").parentElement.classList.add('position-sticky');
                        
                    }
                }
            }   
        });
     }
    //  end of System
    var nav = document.querySelector('.navbar').nextElementSibling;
    if(!nav.classList.contains('page-header')){
    // Facts counter
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000
        });

    
    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });
     // Initiate the wowjs
     new WOW().init();

    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });


    // Testimonials carousel
    $('.testimonial-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });
}

    
})(jQuery);

