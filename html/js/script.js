jQuery(document).ready(function ($) {

  /*mac or pc*/
  if (navigator.userAgent.indexOf('Mac OS X') != -1) {
    $("body").addClass("mac");
  } else {
    $("body").addClass("pc");
  }

  //scroll
  $(document).on('click', '.scroll', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });

  //slider
  var swiperStrains = new Swiper(".strains-slider", {
    slidesPerView: "auto",
    spaceBetween: 15,
    navigation: {
      nextEl: ".strains-next",
      prevEl: ".strains-prev",
    },
    breakpoints: {
      576: {
        spaceBetween: 20,
      },
      1281: {
        spaceBetween: 64,
      },
    },
  });

  //slider
  if($('.product-slider-1').length>0){
    var swiperProduct1 = new Swiper(".product-slider-1", {
      slidesPerView: "auto",
      spaceBetween: 15,
      loop:true,
      navigation: {
        nextEl: ".next-1",
        prevEl: ".prev-1",
      },
      breakpoints: {
        576: {
          spaceBetween: 20,
        },
        1281: {
          spaceBetween: 34,
        },
      },
    });

  }
  if($('.product-slider-2').length>0){
    var swiperProduct2 = new Swiper(".product-slider-2", {
      slidesPerView: "auto",
      spaceBetween: 15,
      loop:true,
      navigation: {
        nextEl: ".next-2",
        prevEl: ".prev-2",
      },
      breakpoints: {
        576: {
          spaceBetween: 20,
        },
        1281: {
          spaceBetween: 34,
        },
      },
    });

  }
  if($('.product-slider-3').length>0){
    var swiperProduct3 = new Swiper(".product-slider-3", {
      slidesPerView: "auto",
      spaceBetween: 15,
      loop:true,
      navigation: {
        nextEl: ".next-3",
        prevEl: ".prev-3",
      },
      breakpoints: {
        576: {
          spaceBetween: 20,
        },
        1281: {
          spaceBetween: 34,
        },
      },
    });

  }
  if($('.product-slider-4').length>0){
    var swiperProduct4 = new Swiper(".product-slider-4", {
      slidesPerView: "auto",
      spaceBetween: 15,
      loop:true,
      navigation: {
        nextEl: ".next-4",
        prevEl: ".prev-4",
      },
      breakpoints: {
        576: {
          spaceBetween: 20,
        },
        1281: {
          spaceBetween: 34,
        },
      },
    });

  }

  //page product
  $('.et_pb_side_nav').onePageNav({});

  //fix-block
  $('.nav-menu-wrap').fixTo('.nav-block>.content-width', {
    top: 100,
    useNativeSticky:true
  });

 /* if($('.nav-block').length >0){
    $(window).scroll(function () {
      if(!$('.side_nav_item').hasClass('current')){
        $('.nav-block .product').removeClass('is-current');

      }
      if($('.side_nav_item:first-child').hasClass('current')){
        $('.nav-block .product').removeClass('is-current');
        $('.nav-block .product-1').addClass('is-current');

      }
      if($('.side_nav_item:nth-child(2)').hasClass('current')){
        $('.nav-block .product').removeClass('is-current');
        $('.nav-block .product-2').addClass('is-current');

      }
      if($('.side_nav_item:nth-child(3)').hasClass('current')){
        $('.nav-block .product').removeClass('is-current');
        $('.nav-block .product-3').addClass('is-current');

      }
      if($('.side_nav_item:nth-child(4)').hasClass('current')){
        $('.nav-block .product').removeClass('is-current');
        $('.nav-block .product-4').addClass('is-current');

      }


    });
  }*/


});