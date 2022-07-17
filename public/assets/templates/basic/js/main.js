(function ($) {
  "user strict";
  $(window).on('load', function () {
    $('.preloader').fadeOut(1000);
    var img = $('.bg_img');
    img.css('background-image', function () {
      var bg = ('url(' + $(this).data('background') + ')');
      return bg;
    });
    galleryMasonary()
  });
  function galleryMasonary(){
    $('.quick-banner-wrapper').isotope({
      itemSelector: '.quick-banner-item',
      horizontalOrder: true,
      masonry: {
        columnWidth: 0,
      }
    });
  }

    function copyBtn() {
        var copyText = document.getElementById('referral-link');
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand('copy')
    }
    $('.copyBtn').on('click', copyBtn)
    $('#referral-link').on('click', copyBtn)

      $('.countdown').each(function(){
        var date = $(this).data('date');
          $(this).countdown({
            date: date,
            offset: +6,
            day: 'Day',
            days: 'Days'
          });
      });

    //Menu Dropdown Icon Adding
    $(".menu>li>.submenu").parent("li").addClass("menu-item-has-children");
    // drop down menu width overflow problem fix
    $('ul').parent('li').hover(function () {
      var menu = $(this).find("ul");
      var menupos = $(menu).offset();
      if (menupos.left + menu.width() > $(window).width()) {
        var newpos = -$(menu).width();
        menu.css({
          left: newpos
        });
      }
    });
    $('.menu li a').on('click', function (e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('ul').slideDown(300, "swing");
        element.siblings('li').children('ul').slideUp(300, "swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(300, "swing");
      }
    })
    $(".clients__slider").owlCarousel({
      loop: true,
      margin: 30,
      responsiveClass:true,
      nav:false,
      dots: true,
      smartSpeed: 1000,
      responsive:{
        0:{
          items:1
        },
        768:{
          items:2
        },
      }
    })
    $('.mega-icon').on('click', function (e) {
      if ($(this).hasClass('open')) {
        $(this).removeClass('open');
        $('.mega-menu').slideUp(300, "swing");
        $('.mega-menu').find('ul').show(300)
      } else {
        $(this).addClass('open');
        $('.mega-menu').slideDown(300, "swing");
        $('.mega-menu').find('ul').show(300)
      }
    })
    // Scroll To Top
    var scrollTop = $(".scrollToTop");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 500) {
        scrollTop.removeClass("active");
      } else {
        scrollTop.addClass("active");
      }
    });
    //header
    var header = $("header");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 1) {
        header.removeClass("active");
      } else {
        header.addClass("active");
      }
    });
    //Click event to scroll to top
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    //Header Bar
    $('.header-bar').on('click', function () {
      $(this).toggleClass('active');
      $('.overlay, .menu-area, .dashboard__sidebar').toggleClass('active');
    })
    $('.menu-close').on('click', function () {
      $('.overlay, .menu-area, .header-bar').removeClass('active');
    })
    $('.overlay').on('click', function () {
      $('.overlay, .dashboard-menu, .header-bar, .dashboard__sidebar, .menu-area').removeClass('active');
    });
    $('.close-sidebar').on('click', function () {
      $('.overlay, .dashboard-menu, .header-bar, .dashboard__sidebar').removeClass('active');
    });
    $('.faq__wrapper .faq__title').on('click', function (e) {
      var element = $(this).parent('.faq__item');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('.faq__content').removeClass('open');
        element.find('.faq__content').slideUp(200, "swing");
      } else {
        element.addClass('open');
        element.children('.faq__content').slideDown(200, "swing");
        element.siblings('.faq__item').children('.faq__content').slideUp(200, "swing");
        element.siblings('.faq__item').removeClass('open');
        element.siblings('.faq__item').find('.faq__title').removeClass('open');
        element.siblings('.faq__item').find('.faq__content').slideUp(200, "swing");
      }
    });
    $('.auction-slider').owlCarousel({
      loop: false,
      nav: false,
      dots: true,
      items: 1,
      autoplay: true,
      margin: 0,
      responsive: {
        525: {
          items: 2,
        },
        992: {
          items: 3,
        },
        1200: {
          items: 4,
        }
      }
    })
    $('.related-slider').owlCarousel({
      loop: false,
      nav: false,
      dots: true,
      items: 1,
      autoplay: true,
      margin: 0,
      responsive: {
        525: {
          items: 2,
        },
        992: {
          items: 2,
        },
        1400: {
          items: 3,
        }
      }
    })
    $('.related-author-slider').owlCarousel({
      loop: false,
      nav: false,
      dots: true,
      items: 1,
      autoplay: true,
      margin: 0,
      responsive: {
        768: {
          items: 2,
        },
        1200: {
          items: 3,
        }
      }
    })
    
    $('.partner-slider').owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      items: 2,
      autoplay: true,
      margin: 15,
      responsive: {
        768: {
          items: 3,
          margin: 30,
        },
        992: {
          items: 4,
        },
        1200: {
          items: 6,
        }
      }
    })
    $('.close-filter-bar').on('click', function(){
      $('.search-filter').removeClass('active');
      $('.search-filter').hasClass('active') ? $('.header-bottom').css({"opacity": "0", "visibility": "hidden"}) : $('.header-bottom').css({"opacity": "1", "visibility": "visible"});
    })
    $('.filter-btn').on('click', function(){
      $('.search-filter').addClass('active');
      $('.search-filter').hasClass('active') ? $('.header-bottom').css({"opacity": "0", "visibility": "hidden"}) : $('.header-bottom').css({"opacity": "1", "visibility": "visible"});
    })

    $('.owl-prev').html('<i class="las la-angle-left"></i>')
    $('.owl-next').html('<i class="las la-angle-right"></i>');

    $(".qtybutton").on("click", function() {
      var $button = $(this);
      $button.parent().find('.qtybutton').removeClass('active')
      $button.addClass('active');
        var oldValue = $button.parent().find("input").val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
      $button.parent().find("input").val(newVal);
    });
})(jQuery);