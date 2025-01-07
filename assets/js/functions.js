$(document).ready(function() {
    "use strict";


    $(function() {
        var myLazyLoad = new LazyLoad({
            elements_selector: ".lazy"
            // load_delay: 300 //adjust according to use case
        });
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 200) {
            $("#header").addClass("darkHeader");
        } else {
            $("#header").removeClass("darkHeader");
        }
    });


    $(document).ready(function() {
        $(".hamburger-container").click(function() {
                $("#menu").slideToggle();
            }),
            $(window).resize(function() {
                window.innerWidth > 1024 && $("#menu").removeAttr("style");
            });
        var e = $(".hamburger li:nth-child(1)"),
            s = $(".hamburger li:nth-child(2)"),
            o = $(".hamburger li:nth-child(3)");
        $(".hamburger-container").on("click", function() {
            s.hasClass("rot-45deg") ? (e.removeClass("rot45deg"), s.removeClass("rot-45deg"), o.removeClass("hidden")) : (o.addClass("hidden"), e.addClass("rot45deg"), s.addClass("rot-45deg"));
        });
    });

    ////testimonial-slider

    $(".tstmnlsldr").slick({
        slidesToShow: 3,
        centerMode: true,
        centerPadding: "80px",
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        cssEase: "linear",
        responsive: [{
                breakpoint: 1550,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 820,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    centerPadding: "0px"
                }
            },
        ],
    })

    ////// pkg-slider
    $(".screnslider").slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 5000,
        cssEase: 'linear',
        autoplaySpeed: 0,
        slidesToShow: 6,
        slidesToScroll: 1,
        centerMode: true,
        pauseOnHover: false,
        infinite: true,
        variableWidth: true,
        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3

                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 2

                }
            }
        ]
    });


    ////// mobile slider
    $(".mob-sliders-2").slick({
        speed: 2000,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: false,
        infinite: true,
        initialSlide: 1,
        arrows: false,
        dots: true,
        responsive: [{
                breakpoint: 10000,
                settings: "unslick"
            },
            {
                breakpoint: 900,
                settings: {
                    unslick: true
                }
            }
        ]
    });

    ////// Service slider
    $(".ser-slider").slick({
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: false,
        infinite: true,
        arrows: false,
        dots: false,
        responsive: [{
                breakpoint: 10000,
                settings: "unslick"
            },
            {
                breakpoint: 900,
                settings: {
                    unslick: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            },
        ]
    });

    ////// Brand slider
    $(".brnd-slider").slick({
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: false,
        infinite: true,
        arrows: false,
        dots: false,
        responsive: [{
                breakpoint: 10000,
                settings: "unslick"
            },
            {
                breakpoint: 900,
                settings: {
                    unslick: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            },
        ]
    });

    ////// Cycle slider
    $(".cycl-slider").slick({
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: false,
        infinite: true,
        arrows: false,
        dots: false,
        responsive: [{
                breakpoint: 10000,
                settings: "unslick"
            },
            {
                breakpoint: 992,
                settings: {
                    unslick: true
                }
            },
            {
                breakpoint: 470,
                settings: {
                    slidesToShow: 1
                }
            },
        ]
    });

    ////// Box slider
    // $(".box-slider").slick({
    //     speed: 2000,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     centerMode: false,
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     variableWidth: false,
    //     infinite: true,
    //     arrows: false,
    //     dots: false,
    //     responsive: [{
    //             breakpoint: 10000,
    //             settings: "unslick"
    //         },
    //         {
    //             breakpoint: 1100,
    //             settings: {
    //                 unslick: true
    //             }
    //         },
    //         {
    //             breakpoint: 850,
    //             settings: {
    //                 slidesToShow: 2
    //             }
    //         },
    //         {
    //             breakpoint: 600,
    //             settings: {
    //                 slidesToShow: 1
    //             }
    //         },
    //     ]
    // });

    ////// Reality slider
    $(".relty-slider").slick({
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: false,
        infinite: true,
        arrows: false,
        dots: false,
        responsive: [{
                breakpoint: 10000,
                settings: "unslick"
            },
            {
                breakpoint: 992,
                settings: {
                    unslick: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            },
        ]
    });


    ////// mob slider end    

    // ////// fancybox
    // $('[data-fancybox="swf-file"]').fancybox({
    //     iframe : {
    //         css : {
    //             width : '336px',
    //             height : '280px'
    //         }
    //     }
    // });

    // $('[data-fancybox="video-file"]').fancybox({
    //     iframe : {
    //         css : {
    //             width : '580px',
    //             height : '340px'
    //         }
    //     }
    // });     
    // ////// fancybox end

    ////// footer year
    $(function() {
        "use strict";
        var theYear = new Date().getFullYear();
        $('#year').html(theYear);
    });

    // Tabbing *****************************

    $('[data-targetit]').on('click', function() {
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class*="my-tabs"]').removeClass('current');
        $('.' + target).addClass('current');
        $('.slick-slider').slick('setPosition', 0);

    });

});

// asasd

$(".home-badges-slider").slick({
    slidesToShow: 6.4,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows: false,
    loop: true,
    responsive: [{
        breakpoint: 1800,
        settings: {
            slidesToShow: 4.3
        }
    }, {
        breakpoint: 1500,
        settings: {
            slidesToShow: 4
        }
    }, {
        breakpoint: 1299,
        settings: {
            slidesToShow: 3.8
        }
    }, {
        breakpoint: 900,
        settings: {
            slidesToShow: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1
        }
    }]
});

$('.animation-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: false,
    autoplaySpeed: 1000,
    arrows: false,
    dots: true,
    infinite: true,
    responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});




///////////FAQ

const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

// The function toggles more (hidden) text when the user clicks on "Read more". The IF ELSE statement ensures that the text 'read more' and 'read less' changes interchangeably when clicked on.
$('.moreless-button').click(function() {
    $('.moretext').slideToggle();
    $(this).toggleClass('showLess');
    // if ($('.moreless-button').text() == "Read more") {
    //   $(this).text("Read less")
    // } else {
    //   $(this).text("Read more")
    // }
});

// Mobile Navigation
//*****************************
// $('.mobile-nav-btn').click(function() {
//     $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
// });   

// $('.firstlevel li a').click(function() {
//     if($(this).hasClass('active')){
//         $(this).removeClass('active');
//         $(this).siblings('ul').slideUp();
//     }else{
//         $('.firstlevel li a').removeClass('active');
//         $(this).addClass('active');
//         $('.dropdown').slideUp();
//         $(this).siblings('ul').slideDown();
//     }
// });

// $('.mainnav > li > a').click(function() {
//     if($(this).hasClass('active')){
//         $(this).removeClass('active');
//         $(this).parents('li').children('.firstlevel').slideUp();
//     }else{
//         $(this).addClass('active');
//         $(this).parents('li').children('.firstlevel').slideDown();
//         $(this).parents('li').siblings('li').children('a').removeClass('active');
//         $(this).parents('li').siblings('li').children('.firstlevel').slideUp();
//     }
// }); 

$(".dropdown_anchor").click((function() {
    $(this).parent(".dropdown").toggleClass("active");
}));


// $(document).ready(function(){
//     $(".dsktpmenu li").click(function(){
//         $(".dsktpmenu li.active").removeClass("active");
//         $(this).addClass("active")
//     })
// });

$(function($) {
    let url = window.location.href;
    $('.lnk a ').each(function() {
        if (this.href === url) {
            $(this).closest('.lnk').addClass('active');
        }
    });
});


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
// function myFunction() {
//   document.getElementById("myDropdown").classList.toggle("show");
// }

// Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn')) {
//     var dropdowns = document.getElementsByClassName(".dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }

// const dropdownLinks = document.querySelectorAll('.dropdown'); // Assuming your dropdown links have the class "dropdown"

// dropdownLinks.forEach(link => {
//   link.addEventListener('click', () => {
//     link.classList.toggle('dropdown-active');
//   });
// });

// $(function() {

//   $('li.dropdowns > a > i').on('click', function(event) {

//     event.preventDefault();

//     var parentLink = $(this).parent(); // The <a> parent <li> element
//     var dropdownMenu = parentLink.find('ul').first(); // The <ul> dropdown menu

//     // Toggle the visibility of the dropdown menu
//     dropdownMenu.toggle(0);

//     // Toggle the 'selected' class on the <a> (this will also toggle the class on the <i> inside <a>)
//     parentLink.toggleClass('selected');

//     // Close other open dropdowns and remove 'selected' class from them
//     parentLink.siblings().find('ul').hide(0).parent().removeClass('selected');

//     // Prevent the click event from propagating to the document
//     event.stopPropagation();
//   });

//   // Hide menu and remove 'selected' class when clicking outside the dropdown
//   $('html').click(function(event) {
//     // If the clicked element is not inside the dropdown
//     if (!$(event.target).closest('li.dropdowns').length) {
//       $('li.dropdowns').removeClass('selected');  // Remove 'selected' class
//       $('li.dropdowns').find('ul').hide(0);       // Hide all dropdowns
//     }
//   });
// });




$(function() {

    $('li.dropdown > a ').on('click', function(event) {

        event.preventDefault();
        $(this).toggleClass('selected');
        $(this).parent().find('ul').first().toggle(0);

        $(this).parent().siblings().find('ul').hide(0);

        //Hide menu when clicked outside
        $(this).parent().find('ul').parent().mouseleave(function() {
            var thisUI = $(this);
            $('html').click(function() {
                thisUI.children(".dropdown-menu").hide();
                thisUI.children("a").removeClass('selected');

                $('html').unbind('click');
            });
        });


    });

});

$(function() {
    var logo = $(".lrg-logo");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 150) {
            if (!logo.hasClass("sml-logo")) {
                logo.hide();
                logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn("slow");
                logo.attr("src", "assets/images/blcksmllogo.png"); // Change the image
            }
        } else {
            if (!logo.hasClass("lrg-logo")) {
                logo.hide();
                logo.removeClass("sml-logo").addClass('lrg-logo').fadeIn("slow");
                logo.attr("src", "assets/images/logo.webp"); // Change the image
            }
        }

    });
});

const header = document.querySelector(".header");
const nav = document.querySelector(".nav");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 150) {
        header.classList.add(toggleClass);
        nav.classList.add(toggleClass);
    } else {
        header.classList.remove(toggleClass);
        nav.classList.remove(toggleClass);
    }
});




// // wow start
// new WOW().init();
// // wow end