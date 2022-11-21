/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

(function ($) {
  "use strict";
  /*--
  Menu Stick
  -----------------------------------*/

  var header = $('.sticky-bar');
  var win = $(window);
  win.on('scroll', function () {
    var scroll = win.scrollTop();

    if (scroll < 200) {
      header.removeClass('stick');
    } else {
      header.addClass('stick');
    }
  });
  /*--------------------------------
      Slider active 1
  -----------------------------------*/

  $('.slider-active-1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    loop: true,
    dots: false,
    arrows: true,
    prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
    nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>',
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Slider active 2
  -----------------------------------*/

  $('.slider-active-2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    loop: true,
    dots: true,
    arrows: false,
    prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
    nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>',
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--
      Slider active 3
  -----------------------------------*/

  $('.slider-active-3').slick({
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    dots: true,
    fade: true,
    autoplay: false,
    autoplaySpeed: 5000,
    customPaging: function customPaging(slider, i) {
      var thumb = $(slider.$slides[i]).data('thumb');
      return '<button class="overlay"><img src="' + thumb + '"></button>';
    },
    responsive: [{
      breakpoint: 767,
      settings: {
        dots: true,
        autoplay: false,
        autoplaySpeed: 5000
      }
    }]
  });
  /*--------------------------------
      slider active 4
  -----------------------------------*/

  $('.slider-active-4').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    loop: true,
    dots: true,
    arrows: false,
    prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
    nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>',
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Slider active 5
  -----------------------------------*/

  $('.slider-active-5').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    loop: true,
    dots: true,
    arrows: false,
    prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
    nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>'
  });
  /*--------------------------------
      Product slider active 1
  -----------------------------------*/

  $('.product-slider-active-1').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    loop: true,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Product slider active 2
  -----------------------------------*/

  $('.product-slider-active-2').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    loop: true,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Product slider active 3
  -----------------------------------*/

  $('.product-slider-active-3').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    loop: true,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Product slider active 4
  -----------------------------------*/

  $('.product-slider-active-4').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    loop: true,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Brand logo active
  -----------------------------------*/

  $('.brand-logo-active , .brand-logo-active-2').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    loop: true,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Brand logo active 3
  -----------------------------------*/

  $('.brand-logo-active-3').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    loop: true,
    dots: true,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }]
  });
  /*---------------------
      Countdown 1
    --------------------- */

  $('.timer-1 [data-countdown]').each(function () {
    var $this = $(this),
        finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function (event) {
      $this.html(event.strftime('<span class="cdown day"> <span>%-D </span><p>Days</p></span> <span class="cdown hour"> <span> %-H</span> <p>Hours</p></span> <span class="cdown minutes"><span>%M</span> <p>Minutes</p> </span>'));
    });
  });
  $('.timer-2 [data-countdown]').each(function () {
    var $this = $(this),
        finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function (event) {
      $this.html(event.strftime('<span class="cdown day"> <span>%-D </span><p>Day</p></span> <span class="cdown hour"> <span> %-H</span> <p>Hour</p></span> <span class="cdown minutes"><span>%M</span> <p>Minute</p> </span> <span class="cdown second"><span>%S</span> <p>Second</p> </span>'));
    });
  });
  $('.timer-3 [data-countdown]').each(function () {
    var $this = $(this),
        finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function (event) {
      $this.html(event.strftime('<span class="cdown hour"> <span> %-H</span> <p>Hour</p></span> <span class="cdown minutes"><span>%M</span> <p>Minute</p> </span> <span class="cdown second"><span>%S</span> <p>Second</p> </span>'));
    });
  });
  /*---------------------
      svg img color
  --------------------- */
  // Elements to inject

  var mySVGsToInject = document.querySelectorAll('img.inject-me'); // Do the injection

  SVGInjector(mySVGsToInject);
  /*------ Wow Active ----*/

  new WOW().init();
  /*------------
      ScrollUp
  ------------------ */

  $.scrollUp({
    scrollText: '<i class="icofont-arrow-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
  }); // $.scrollDown({
  //     scrollText: '<i class="fa-solid fa-angles-down"></i>',
  //     easingType: 'linear',
  //     scrollSpeed: 900,
  //     animation: 'fade'
  // });

  /*----------------------------
  	Cart Plus Minus Button
  ------------------------------ */

  var CartPlusMinus = $('.cart-plus-minus');
  CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
  CartPlusMinus.append('<div class="inc qtybutton">+</div>');
  $(".qtybutton").on("click", function () {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() === "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }

    $button.parent().find("input").val(newVal);
  });
  /*------- Color active -----*/

  $('.pro-details-color-content').on('click', 'a', function (e) {
    e.preventDefault();
    $(this).addClass('active').parent().siblings().children('a').removeClass('active');
  });
  /*--------------------------------
      Cart active
  -----------------------------------*/

  if ($('.pro-details-action').length) {
    var $body = $('body'),
        $cartWrap = $('.pro-details-action'),
        $cartContent = $cartWrap.find('.product-dec-social');
    $cartWrap.on('click', '.social', function (e) {
      e.preventDefault();
      var $this = $(this);

      if (!$this.parent().hasClass('show')) {
        $this.siblings('.product-dec-social').addClass('show').parent().addClass('show');
      } else {
        $this.siblings('.product-dec-social').removeClass('show').parent().removeClass('show');
      }
    });
    /*Close When Click Outside*/

    $body.on('click', function (e) {
      var $target = e.target;

      if (!$($target).is('.pro-details-action') && !$($target).parents().is('.pro-details-action') && $cartWrap.hasClass('show')) {
        $cartWrap.removeClass('show');
        $cartContent.removeClass('show');
      }
    });
  }
  /* Language-dropdown */


  $(".language-dropdown-active").on("click", function (e) {
    e.preventDefault();
    $(this).parent().find('.language-dropdown').slideToggle('medium');
  });
  /* NiceSelect */

  $('.nice-select').niceSelect();
  /*--------------------------------
      Testimonial active
  -----------------------------------*/

  $('.testimonial-active , .testimonial-active-2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    loop: true,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*====== SidebarCart ======*/

  function miniCart() {
    var navbarTrigger = $('.cart-active'),
        endTrigger = $('.cart-close'),
        container = $('.sidebar-cart-active'),
        wrapper2 = $('.main-wrapper');
    wrapper2.prepend('<div class="body-overlay"></div>');
    navbarTrigger.on('click', function (e) {
      e.preventDefault();
      container.addClass('inside');
      wrapper2.addClass('overlay-active');
    });
    endTrigger.on('click', function () {
      container.removeClass('inside');
      wrapper2.removeClass('overlay-active');
    });
    $('.body-overlay').on('click', function () {
      container.removeClass('inside');
      wrapper2.removeClass('overlay-active');
    });
  }

  ;
  miniCart();
  /*-------------------------------
  Header Search Toggle
  -----------------------------------*/

  var searchToggle = $('.search-toggle');
  searchToggle.on('click', function (e) {
    e.preventDefault();

    if ($(this).hasClass('open')) {
      $(this).removeClass('open');
      $(this).siblings('.search-wrap-3').removeClass('open');
    } else {
      $(this).addClass('open');
      $(this).siblings('.search-wrap-3').addClass('open');
    }
  });
  /*====== Sidebar Active ======*/

  function sidebarActive() {
    var navbarTrigger = $('.sidebar-active'),
        endTrigger = $('.sidebar-close'),
        container = $('.clickalbe-sidebar-wrapper-active'),
        wrapper3 = $('.main-wrapper-2');
    wrapper3.prepend('<div class="body-overlay-2"></div>');
    navbarTrigger.on('click', function (e) {
      e.preventDefault();
      container.addClass('sidebar-visible');
      wrapper3.addClass('overlay-active-2');
    });
    endTrigger.on('click', function () {
      container.removeClass('sidebar-visible');
      wrapper3.removeClass('overlay-active-2');
    });
    $('.body-overlay-2').on('click', function () {
      container.removeClass('sidebar-visible');
      wrapper3.removeClass('overlay-active-2');
    });
  }

  ;
  sidebarActive();
  /*====== clickable Main Menu active ======*/

  var $clickableMainMenu = $('.clickable-mainmenu-wrap'),
      $clickableSubMenu = $clickableMainMenu.find('.sub-menu-2');
  /*Add Toggle Button in Off Canvas Sub Menu*/

  $clickableSubMenu.siblings('a').append('<span class="menu-expand"><i class="icofont-plus"></i></span>');
  /*Close Off Canvas Sub Menu*/

  $clickableSubMenu.slideUp();
  /*Category Sub Menu Toggle*/

  $clickableMainMenu.on('click', 'li a, li .menu-expand', function (e) {
    var $this = $(this);

    if ($this.parent('li').hasClass('has-sub-menu') || $this.attr('href') === '#' || $this.hasClass('menu-expand')) {
      e.preventDefault();

      if ($this.siblings('ul:visible').length) {
        $this.parent('li').removeClass('active').children('ul').slideUp().siblings('a').find('.menu-expand i').removeClass('icofont-minus').addClass('icofont-plus');
        $this.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('icofont-minus').addClass(' icofont-plus ');
      } else {
        $this.parent('li').addClass('active').children('ul').slideDown().siblings('a').find('.menu-expand i').removeClass(' icofont-plus ').addClass('icofont-minus');
        $this.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('icofont-minus').addClass(' icofont-plus ');
      }
    }
  });
  /*====== Sidebar menu Active ======*/

  function mobileMenuActive() {
    var navbarTrigger = $('.mobile-menu-button-active'),
        endTrigger = $('.sidebar-close'),
        container = $('.mobile-menu-active'),
        wrapper4 = $('.main-wrapper-3');
    wrapper4.prepend('<div class="body-overlay-3"></div>');
    navbarTrigger.on('click', function (e) {
      e.preventDefault();
      container.addClass('sidebar-visible');
      wrapper4.addClass('overlay-active-3');
    });
    endTrigger.on('click', function () {
      container.removeClass('sidebar-visible');
      wrapper4.removeClass('overlay-active-3');
    });
    $('.body-overlay-3').on('click', function () {
      container.removeClass('sidebar-visible');
      wrapper4.removeClass('overlay-active-3');
    });
  }

  ;
  mobileMenuActive();
  /*--- Language currency active ----*/

  $('.mobile-language-active').on('click', function (e) {
    e.preventDefault();
    $('.lang-dropdown-active').slideToggle(900);
  });
  /*------------------------------------
      Testimonial img slider active
  -----------------------------------*/

  $('.testimonial-img-slider-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    draggable: false,
    fade: false,
    asNavFor: '.testimonial-active-3'
  });
  /*--------------------------------
     Testimonial active 3
  -----------------------------------*/

  $('.testimonial-active-3').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.testimonial-img-slider-active , .testimonial-img-slider-active-3',
    dots: true,
    focusOnSelect: true,
    fade: true,
    arrows: false
  });
  /*----------------------------------------------------------
      Testimonial img slider active 3 ( home mega fashion )
  --------------------------------------------------------------*/

  $('.testimonial-img-slider-active-3').on('init afterChange', function () {
    var titleImg = document.querySelector('.testimonial-next-img img');
    var activeSlide = document.querySelector('.testimonial-img-slider.slick-current');
    titleImg.src = activeSlide.nextSibling.querySelector('img').src;
  });
  $('.testimonial-img-slider-active-3').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    draggable: false,
    fade: false,
    asNavFor: '.testimonial-active-3'
  }); // Isotope active

  $('.grid').imagesLoaded(function () {
    // init Isotope
    var $grid = $('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      layoutMode: 'masonry',
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-item'
      }
    });
  });
  /*--------------------------
      Isotope active
  ---------------------------- */

  $('.grid-2').imagesLoaded(function () {
    // init Isotope
    $('.grid-2').isotope({
      itemSelector: '.grid-item-2',
      percentPosition: true,
      layoutMode: 'masonry',
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.grid-sizer'
      }
    });
  });
  /*--------------------------
      Isotope active
  ---------------------------- */

  $('.grid-3').imagesLoaded(function () {
    // init Isotope
    $('.grid-3').isotope({
      itemSelector: '.grid-item-3',
      percentPosition: true,
      layoutMode: 'masonry',
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: 1
      }
    });
  });
  /*------------------------------------
      testimonial img slider active 2
  --------------------------------------*/

  $('.testimonial-img-slider-active-2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    focusOnSelect: true,
    draggable: false,
    fade: false,
    asNavFor: '.testimonial-active-4',
    responsive: [{
      breakpoint: 1199,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 5
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 2
      }
    }]
  });
  /*--------------------------------
      Testimonial active 4
  -----------------------------------*/

  $('.testimonial-active-4').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.testimonial-img-slider-active-2',
    dots: false,
    focusOnSelect: true,
    fade: true,
    arrows: false
  });
  /*--------------------------------
      Testimonial active 5
  -----------------------------------*/

  $('.testimonial-active-5').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    fade: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Categori slider active
  -----------------------------------*/

  $('.categori-slider-active').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: false,
    fade: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: true,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Testimonial active 6
  -----------------------------------*/

  $('.testimonial-active-6').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    fade: false,
    arrows: false,
    responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1199,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------------
      Product img slider active
  -----------------------------------*/

  $('.product-img-slider-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    fade: false,
    arrows: false
  });
  /*--------------------------------
      Testimonial active 7
  -----------------------------------*/

  $('.testimonial-active-7').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    fade: false,
    arrows: false
  });
  /*--------------------------------
      Product details 3 img slider
  -----------------------------------*/

  $('.product-details-3-img-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    loop: true,
    fade: false,
    arrows: false
  });
  /*--------------------------------
      Product details 3 img slider 2
  -----------------------------------*/

  $('.product-details-3-img-slider-2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    loop: true,
    fade: false,
    arrows: false
  });
  /*====== SidebarSearch ======*/

  function sidebarSearch() {
    var searchTrigger = $('.search-active'),
        endTriggersearch = $('.megashop-search-close'),
        container = $('.main-search-active');
    searchTrigger.on('click', function (e) {
      e.preventDefault();
      container.addClass('search-visible');
    });
    endTriggersearch.on('click', function () {
      container.removeClass('search-visible');
    });
  }

  ;
  sidebarSearch();
  /*---------------------
      Price range
  --------------------- */

  var sliderrange = $('#slider-range');
  var amountprice = $('#amount');
  $(function () {
    sliderrange.slider({
      range: true,
      min: 16,
      max: 400,
      values: [0, 300],
      slide: function slide(event, ui) {
        amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    amountprice.val("$" + sliderrange.slider("values", 0) + " - $" + sliderrange.slider("values", 1));
  });
  /*---------------------
      Video popup
  --------------------- */

  $('.video-popup').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    zoom: {
      enabled: true
    }
  });
  /*-------------------------------------
      checkout one click toggle function
  ---------------------------------------*/

  var checked = $('.sin-payment input:checked');

  if (checked) {
    $(checked).siblings('.payment-box').slideDown(900);
  }

  ;
  $('.sin-payment input').on('change', function () {
    $('.payment-box').slideUp(900);
    $(this).siblings('.payment-box').slideToggle(900);
  });
  /*-----------------------
      Shop filter active
  ------------------------- */

  $('.shop-filter-active').on('click', function (e) {
    e.preventDefault();
    $('.product-filter-wrapper').slideToggle();
  });
  var shopFiltericon = $('.shop-filter-active');
  shopFiltericon.on('click', function () {
    $('.shop-filter-active').toggleClass('active');
  });
  /*--
      Product details slider 2
  -----------------------------------*/

  $('.pro-dec-big-img-slider-2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    draggable: false,
    fade: false,
    asNavFor: '.product-dec-slider-2'
  });
  /*--
      Product details 2 slick carousel as Nav
  --------------------------------------------*/

  $('.product-dec-slider-2').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    vertical: true,
    asNavFor: '.pro-dec-big-img-slider-2',
    dots: false,
    focusOnSelect: true,
    fade: false,
    arrows: false,
    responsive: [{
      breakpoint: 1199,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 991,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 575,
      settings: {
        autoplay: true,
        slidesToShow: 3
      }
    }]
  }); // Instantiate EasyZoom instances

  var $easyzoom = $('.easyzoom').easyZoom();
  /*--------------------------------
      Product details slider 5 active
  -----------------------------------*/

  $('.product-details-slider-5-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    loop: true,
    fade: false,
    arrows: false
  });
  /*--------------------------------
      Product details tab small
  -----------------------------------*/

  $('.product-details-tab-small').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    loop: true,
    fade: false,
    arrows: false,
    responsive: [{
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }]
  });
  /*--------------------------
      Tab active
  ---------------------------- */

  var ProductDetailsSmall = $('.product-details-tab-small a');
  ProductDetailsSmall.on('click', function (e) {
    e.preventDefault();
    var $href = $(this).attr('href');
    ProductDetailsSmall.removeClass('active');
    $(this).addClass('active');
    $('.product-details-tab-large .tab-pane').removeClass('active');
    $('.product-details-tab-large ' + $href).addClass('active');
  });
})(jQuery); // let dropdowns = document.querySelectorAll('.dropdown-toggle')
//     dropdowns.forEach((dd)=>{
//         dd.addEventListener('click', function (e) {
//             var el = this.nextElementSibling;
//             el.style.display = el.style.display==='block'?'none':'block'
//         })
//     });


var WaveSurfer = __webpack_require__(/*! wavesurfer.js */ "./node_modules/wavesurfer.js/dist/wavesurfer.js");

var RegionsPlugin = __webpack_require__(/*! wavesurfer.js/dist/plugin/wavesurfer.regions.min.js */ "./node_modules/wavesurfer.js/dist/plugin/wavesurfer.regions.min.js");

var CursorPlugin = __webpack_require__(/*! wavesurfer.js/dist/plugin/wavesurfer.cursor.min.js */ "./node_modules/wavesurfer.js/dist/plugin/wavesurfer.cursor.min.js");

var wavesurfer = WaveSurfer.create({
  container: '#waveform',
  plugins: [RegionsPlugin.create({}), CursorPlugin.create({
    showTime: true,
    opacity: 1,
    customShowTimeStyle: {
      'background-color': '#CCA300',
      color: '#fff',
      padding: '2px',
      'font-size': '10px'
    }
  })],
  waveColor: '#ddddddbe',
  progressColor: '#1B1A23',
  barHeight: 0.6,
  height: 70,
  barWidth: 2,
  barRadius: 3,
  barGap: 3
});
var audioPath = $('#waveform').attr('data-audio');
wavesurfer.load(audioPath);
var panner = wavesurfer.backend.ac.createPanner();
wavesurfer.backend.setFilter(panner);
$('.play-sound').click(function () {
  wavesurfer.playPause();
  var audioIcon = $(this).children('svg');
  console.log(audioIcon);
  audioIcon.toggleClass('svg-inline--fa fa-play').toggleClass('svg-inline--fa fa-pause');
});

/***/ }),

/***/ "./resources/scss/admin/admin.scss":
/*!*****************************************!*\
  !*** ./resources/scss/admin/admin.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/wavesurfer.js/dist/plugin/wavesurfer.cursor.min.js":
/*!*************************************************************************!*\
  !*** ./node_modules/wavesurfer.js/dist/plugin/wavesurfer.cursor.min.js ***!
  \*************************************************************************/
/***/ ((module) => {

/*!
 * wavesurfer.js cursor plugin 6.4.0 (2022-11-05)
 * https://wavesurfer-js.org
 * @license BSD-3-Clause
 */
!function(e,t){ true?module.exports=t():0}(self,(()=>(()=>{"use strict";var e={178:(e,t)=>{function i(e,t){for(var i=0;i<t.length;i++){var s=t[i];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}function s(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=function(){function e(t,i){var r=this;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),s(this,"defaultParams",{hideOnBlur:!0,width:"1px",color:"black",opacity:"0.25",style:"solid",zIndex:4,customStyle:{},customShowTimeStyle:{},showTime:!1,followCursorY:!1,formatTimeCallback:null}),s(this,"_onMousemove",(function(e){var t=r.util.withOrientation(e,r.wavesurfer.params.vertical),i=r.wrapper.getBoundingClientRect(),s=0,a=r.wrapper.scrollLeft+t.clientX-i.left,o=r.displayTime?r.displayTime.getBoundingClientRect().width:0,n=i.right<t.clientX+o;r.params.showTime&&r.params.followCursorY&&(s=t.clientY-(i.top+i.height/2)),r.updateCursorPosition(a,s,n)})),s(this,"_onMouseenter",(function(){return r.showCursor()})),s(this,"_onMouseleave",(function(){return r.hideCursor()})),this.wavesurfer=i,this.style=i.util.style,this.util=i.util,this.cursor=null,this.showTime=null,this.displayTime=null,this.isDestroyCalled=!1,this.params=Object.assign({},this.defaultParams,t)}var t,r,a;return t=e,r=[{key:"_onReady",value:function(){this.isDestroyCalled||(this.wrapper=this.wavesurfer.drawer.wrapper,this.cursor=this.util.withOrientation(this.wrapper.appendChild(document.createElement("cursor")),this.wavesurfer.params.vertical),this.style(this.cursor,Object.assign({position:"absolute",zIndex:this.params.zIndex,left:0,top:0,bottom:0,width:"0",display:"flex",borderRightStyle:this.params.style,borderRightWidth:this.params.width,borderRightColor:this.params.color,opacity:this.params.opacity,pointerEvents:"none"},this.params.customStyle)),this.params.showTime&&(this.showTime=this.util.withOrientation(this.wrapper.appendChild(document.createElement("showTitle")),this.wavesurfer.params.vertical),this.style(this.showTime,Object.assign({position:"absolute",zIndex:this.params.zIndex,left:0,top:0,bottom:0,width:"auto",display:"flex",opacity:this.params.opacity,pointerEvents:"none",height:"100%"},this.params.customStyle)),this.displayTime=this.util.withOrientation(this.showTime.appendChild(document.createElement("div")),this.wavesurfer.params.vertical),this.style(this.displayTime,Object.assign({display:"inline",pointerEvents:"none",margin:"auto",visibility:"hidden"},this.params.customShowTimeStyle)),this.displayTime.innerHTML=this.formatTime(0)),this.wrapper.addEventListener("mousemove",this._onMousemove),this.params.hideOnBlur&&(this.hideCursor(),this.wrapper.addEventListener("mouseenter",this._onMouseenter),this.wrapper.addEventListener("mouseleave",this._onMouseleave)))}},{key:"init",value:function(){var e=this;this.wavesurfer.isReady?this._onReady():this.wavesurfer.once("ready",(function(){return e._onReady()}))}},{key:"destroy",value:function(){this.cursorTime&&this.showTime?(this.params.showTime&&this.showTime&&this.showTime.remove(),this.cursor&&this.cursor.remove(),this.wrapper.removeEventListener("mousemove",this._onMousemove),this.params.hideOnBlur&&(this.wrapper.removeEventListener("mouseenter",this._onMouseenter),this.wrapper.removeEventListener("mouseleave",this._onMouseleave))):this.isDestroyCalled=!0}},{key:"updateCursorPosition",value:function(e,t){var i=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(this.style(this.cursor,{left:"".concat(e,"px")}),this.params.showTime){var s=this.wavesurfer.getDuration(),r=this.wavesurfer.drawer.width/this.wavesurfer.params.pixelRatio,a=this.wavesurfer.drawer.getScrollX(),o=s/this.wavesurfer.drawer.width*a,n=Math.max(0,(e-this.wrapper.scrollLeft)/r*s)+o,h=this.formatTime(n);if(i){var l=this.displayTime.getBoundingClientRect().width;e-=l}this.style(this.showTime,{left:"".concat(e,"px"),top:"".concat(t,"px")}),this.style(this.displayTime,{visibility:"visible"}),this.displayTime.innerHTML="".concat(h)}}},{key:"showCursor",value:function(){this.style(this.cursor,{display:"flex"}),this.params.showTime&&this.style(this.showTime,{display:"flex"})}},{key:"hideCursor",value:function(){this.style(this.cursor,{display:"none"}),this.params.showTime&&this.style(this.showTime,{display:"none"})}},{key:"formatTime",value:function(e){return e=isNaN(e)?0:e,this.params.formatTimeCallback?this.params.formatTimeCallback(e):[e].map((function(e){return[Math.floor(e%3600/60),("00"+Math.floor(e%60)).slice(-2),("000"+Math.floor(e%1*1e3)).slice(-3)].join(":")}))}}],a=[{key:"create",value:function(t){return{name:"cursor",deferInit:!(!t||!t.deferInit)&&t.deferInit,params:t,staticProps:{},instance:e}}}],r&&i(t.prototype,r),a&&i(t,a),Object.defineProperty(t,"prototype",{writable:!1}),e}();t.default=r,e.exports=t.default}},t={};var i=function i(s){var r=t[s];if(void 0!==r)return r.exports;var a=t[s]={exports:{}};return e[s](a,a.exports,i),a.exports}(178);return i})()));
//# sourceMappingURL=wavesurfer.cursor.min.js.map

/***/ }),

/***/ "./node_modules/wavesurfer.js/dist/plugin/wavesurfer.regions.min.js":
/*!**************************************************************************!*\
  !*** ./node_modules/wavesurfer.js/dist/plugin/wavesurfer.regions.min.js ***!
  \**************************************************************************/
/***/ ((module) => {

/*!
 * wavesurfer.js regions plugin 6.4.0 (2022-11-05)
 * https://wavesurfer-js.org
 * @license BSD-3-Clause
 */
!function(e,t){ true?module.exports=t():0}(self,(()=>(()=>{"use strict";var e={23:(e,t,r)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i=r(638);function n(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(e);t&&(i=i.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,i)}return r}function a(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?n(Object(r),!0).forEach((function(t){s(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):n(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function s(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function o(e,t){for(var r=0;r<t.length;r++){var i=t[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}var l=function(){function e(t,r){var n=this;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.params=t,this.wavesurfer=r,this.util=a(a({},r.util),{},{getRegionSnapToGridValue:function(e){return n.getRegionSnapToGridValue(e,t)}}),this.maxRegions=t.maxRegions,this.regionsMinLength=t.regionsMinLength||null,Object.getOwnPropertyNames(this.util.Observer.prototype).forEach((function(e){i.Region.prototype[e]=n.util.Observer.prototype[e]})),this.wavesurfer.Region=i.Region;this._onBackendCreated=function(){n.wrapper=n.wavesurfer.drawer.wrapper,n.orientation=n.wavesurfer.drawer.orientation,n.defaultEdgeScrollWidth=.05*n.wrapper.clientWidth,n.params.regions&&n.params.regions.forEach((function(e){n.add(e)}))},this.list={},this._onReady=function(){n.wrapper=n.wavesurfer.drawer.wrapper,n.vertical=n.wavesurfer.drawer.params.vertical,n.params.dragSelection&&n.enableDragSelection(n.params),Object.keys(n.list).forEach((function(e){n.list[e].updateRender()}))}}var t,r,n;return t=e,n=[{key:"create",value:function(t){return{name:"regions",deferInit:!(!t||!t.deferInit)&&t.deferInit,params:t,staticProps:{addRegion:function(e){return this.initialisedPluginList.regions||this.initPlugin("regions"),this.regions.add(e)},clearRegions:function(){this.regions&&this.regions.clear()},enableDragSelection:function(e){this.initialisedPluginList.regions||this.initPlugin("regions"),this.regions.enableDragSelection(e)},disableDragSelection:function(){this.regions.disableDragSelection()}},instance:e}}}],(r=[{key:"init",value:function(){this.wavesurfer.isReady?(this._onBackendCreated(),this._onReady()):(this.wavesurfer.once("ready",this._onReady),this.wavesurfer.once("backend-created",this._onBackendCreated))}},{key:"destroy",value:function(){this.wavesurfer.un("ready",this._onReady),this.wavesurfer.un("backend-created",this._onBackendCreated),this.wavesurfer.setDisabledEventEmissions(["region-removed"]),this.disableDragSelection(),this.clear()}},{key:"wouldExceedMaxRegions",value:function(){return this.maxRegions&&Object.keys(this.list).length>=this.maxRegions}},{key:"add",value:function(e){var t=this;if(this.wouldExceedMaxRegions())return null;!(e=a({edgeScrollWidth:this.params.edgeScrollWidth||this.defaultEdgeScrollWidth},e)).formatTimeCallback&&this.params.formatTimeCallback&&(e=a(a({},e),{},{formatTimeCallback:this.params.formatTimeCallback})),!e.minLength&&this.regionsMinLength&&(e=a(a({},e),{},{minLength:this.regionsMinLength}));var r=new this.wavesurfer.Region(e,this.util,this.wavesurfer);return this.list[r.id]=r,r.on("remove",(function(){delete t.list[r.id]})),r}},{key:"clear",value:function(){var e=this;Object.keys(this.list).forEach((function(t){e.list[t].remove()}))}},{key:"enableDragSelection",value:function(e){var t=this;this.disableDragSelection();var r,i,n,a,s,o,l,h=e.slop||2,u=this.wavesurfer.drawer.container,d=!1!==e.scroll&&this.wavesurfer.params.scrollParent,c=e.scrollSpeed||1,v=e.scrollThreshold||10,f=this.wavesurfer.getDuration(),g=0,p=function e(r){if(a&&o){var s=t.wrapper.scrollLeft+c*o;t.wrapper.scrollLeft=s=Math.min(i,Math.max(0,s));var l=t.wavesurfer.drawer.handleEvent(r);a.update({start:Math.min(l*f,n*f),end:Math.max(l*f,n*f)}),s<i&&s>0&&window.requestAnimationFrame((function(){e(r)}))}},m=function(h){if(!(h.touches&&h.touches.length>1)){if(f=t.wavesurfer.getDuration(),s=h.targetTouches?h.targetTouches[0].identifier:null,i=t.wrapper.scrollWidth-t.wrapper.clientWidth,l=t.util.withOrientation(t.wrapper.getBoundingClientRect(),t.vertical),t.wavesurfer.params.splitChannels&&t.wavesurfer.params.splitChannelsOptions.splitDragSelection){var u=(h.touches?h.touches[0].clientY:h.clientY)-l.top,d=null!=t.wavesurfer.backend.buffer?t.wavesurfer.backend.buffer.numberOfChannels:1,c=t.wrapper.clientHeight/d,v=Math.floor(u/c);e.channelIdx=v;var g=t.wavesurfer.params.splitChannelsOptions.channelColors[v];g&&g.dragColor&&(e.color=g.dragColor)}r=!0,n=t.wavesurfer.drawer.handleEvent(h,!0),a=null,o=null}};this.wrapper.addEventListener("mousedown",m),this.wrapper.addEventListener("touchstart",m),this.on("disable-drag-selection",(function(){t.wrapper.removeEventListener("touchstart",m),t.wrapper.removeEventListener("mousedown",m)}));var w=function(e){e.touches&&e.touches.length>1||(r=!1,g=0,o=null,a&&(t.util.preventClick(),a.fireEvent("update-end",e),t.wavesurfer.fireEvent("region-update-end",a,e)),a=null)};this.wrapper.addEventListener("mouseleave",w),this.wrapper.addEventListener("mouseup",w),this.wrapper.addEventListener("touchend",w),document.body.addEventListener("mouseup",w),document.body.addEventListener("touchend",w),this.on("disable-drag-selection",(function(){document.body.removeEventListener("mouseup",w),document.body.removeEventListener("touchend",w),t.wrapper.removeEventListener("touchend",w),t.wrapper.removeEventListener("mouseup",w),t.wrapper.removeEventListener("mouseleave",w)}));var b=function(i){if(r&&!(++g<=h)&&!(i.touches&&i.touches.length>1)&&(!i.targetTouches||i.targetTouches[0].identifier==s)&&(a||(a=t.add(e||{})))){var c=t.wavesurfer.drawer.handleEvent(i),m=t.wavesurfer.regions.util.getRegionSnapToGridValue(n*f),w=t.wavesurfer.regions.util.getRegionSnapToGridValue(c*f);a.update({start:Math.min(w,m),end:Math.max(w,m)});var b=t.util.withOrientation(i,t.vertical);if(d&&u.clientWidth<t.wrapper.scrollWidth){var y=b.clientX-l.left;(o=y<=v?-1:y>=l.right-v?1:null)&&p(i)}}};this.wrapper.addEventListener("mousemove",b),this.wrapper.addEventListener("touchmove",b),this.on("disable-drag-selection",(function(){t.wrapper.removeEventListener("touchmove",b),t.wrapper.removeEventListener("mousemove",b)})),this.wavesurfer.on("region-created",(function(e){t.regionsMinLength&&(e.minLength=t.regionsMinLength)}))}},{key:"disableDragSelection",value:function(){this.fireEvent("disable-drag-selection")}},{key:"getCurrentRegion",value:function(){var e=this,t=this.wavesurfer.getCurrentTime(),r=null;return Object.keys(this.list).forEach((function(i){var n=e.list[i];n.start<=t&&n.end>=t&&(!r||n.end-n.start<r.end-r.start)&&(r=n)})),r}},{key:"getRegionSnapToGridValue",value:function(e,t){if(t.snapToGridInterval){var r=t.snapToGridOffset||0;return Math.round((e-r)/t.snapToGridInterval)*t.snapToGridInterval+r}return e}}])&&o(t.prototype,r),n&&o(t,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();t.default=l,e.exports=t.default},638:(e,t)=>{function r(e,t){for(var r=0;r<t.length;r++){var i=t[r];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}Object.defineProperty(t,"__esModule",{value:!0}),t.Region=void 0;var i=function(){function e(t,r,i){var n,a=this;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.wavesurfer=i,this.wrapper=i.drawer.wrapper,this.util=i.util,this.style=this.util.style,this.regionsUtil=r,this.vertical=i.drawer.params.vertical,this.id=null==t.id?i.util.getId():t.id,this.start=Number(t.start)||0,this.end=null==t.end?this.start+4/this.wrapper.scrollWidth*this.wavesurfer.getDuration():Number(t.end),this.resize=void 0===t.resize||Boolean(t.resize),this.drag=void 0===t.drag||Boolean(t.drag),this.isResizing=!1,this.isDragging=!1,this.loop=Boolean(t.loop),this.color=t.color||"rgba(0, 0, 0, 0.1)",this.handleStyle=t.handleStyle||{left:{},right:{}},this.handleLeftEl=null,this.handleRightEl=null,this.data=t.data||{},this.attributes=t.attributes||{},this.showTooltip=null===(n=t.showTooltip)||void 0===n||n,this.maxLength=t.maxLength,this.minLength=t.minLength,this._onRedraw=function(){return a.updateRender()},this.scroll=!1!==t.scroll&&i.params.scrollParent,this.scrollSpeed=t.scrollSpeed||1,this.scrollThreshold=t.scrollThreshold||10,this.preventContextMenu=void 0!==t.preventContextMenu&&Boolean(t.preventContextMenu);var s=null==t.channelIdx?-1:parseInt(t.channelIdx);if(this.channelIdx=s,this.regionHeight="100%",this.marginTop="0px",-1!==s){var o=null!=this.wavesurfer.backend.buffer?this.wavesurfer.backend.buffer.numberOfChannels:-1;o>=0&&s<o&&(this.regionHeight=Math.floor(1/o*100)+"%",this.marginTop=this.wavesurfer.getHeight()*s+"px")}this.formatTimeCallback=t.formatTimeCallback,this.edgeScrollWidth=t.edgeScrollWidth,this.bindInOut(),this.render(),this.wavesurfer.on("zoom",this._onRedraw),this.wavesurfer.on("redraw",this._onRedraw),this.wavesurfer.fireEvent("region-created",this)}var t,i,n;return t=e,(i=[{key:"update",value:function(e,t){null!=e.start&&(this.start=Number(e.start)),null!=e.end&&(this.end=Number(e.end)),null!=e.loop&&(this.loop=Boolean(e.loop)),null!=e.color&&(this.color=e.color),null!=e.handleStyle&&(this.handleStyle=e.handleStyle),null!=e.data&&(this.data=e.data),null!=e.resize&&(this.resize=Boolean(e.resize),this.updateHandlesResize(this.resize)),null!=e.drag&&(this.drag=Boolean(e.drag)),null!=e.maxLength&&(this.maxLength=Number(e.maxLength)),null!=e.minLength&&(this.minLength=Number(e.minLength)),null!=e.attributes&&(this.attributes=e.attributes),this.updateRender(),this.fireEvent("update"),this.wavesurfer.fireEvent("region-updated",this,t)}},{key:"remove",value:function(){this.element&&(this.wrapper.removeChild(this.element.domElement),this.element=null,this.fireEvent("remove"),this.wavesurfer.un("zoom",this._onRedraw),this.wavesurfer.un("redraw",this._onRedraw),this.wavesurfer.fireEvent("region-removed",this))}},{key:"play",value:function(e){var t=e||this.start;this.wavesurfer.play(t,this.end),this.fireEvent("play"),this.wavesurfer.fireEvent("region-play",this)}},{key:"playLoop",value:function(e){this.loop=!0,this.play(e)}},{key:"setLoop",value:function(e){this.loop=e}},{key:"render",value:function(){for(var e in this.element=this.util.withOrientation(this.wrapper.appendChild(document.createElement("region")),this.vertical),this.element.className="wavesurfer-region",this.showTooltip&&(this.element.title=this.formatTime(this.start,this.end)),this.element.setAttribute("data-id",this.id),this.attributes)this.element.setAttribute("data-region-"+e,this.attributes[e]);if(this.style(this.element,{position:"absolute",zIndex:3,height:this.regionHeight,top:this.marginTop}),this.resize){this.handleLeftEl=this.util.withOrientation(this.element.appendChild(document.createElement("handle")),this.vertical),this.handleRightEl=this.util.withOrientation(this.element.appendChild(document.createElement("handle")),this.vertical),this.handleLeftEl.className="wavesurfer-handle wavesurfer-handle-start",this.handleRightEl.className="wavesurfer-handle wavesurfer-handle-end";var t={cursor:this.vertical?"row-resize":"col-resize",position:"absolute",top:"0px",width:"2px",height:"100%",backgroundColor:"rgba(0, 0, 0, 1)"},r="none"!==this.handleStyle.left?Object.assign({left:"0px"},t,this.handleStyle.left):null,i="none"!==this.handleStyle.right?Object.assign({right:"0px"},t,this.handleStyle.right):null;r&&this.style(this.handleLeftEl,r),i&&this.style(this.handleRightEl,i)}this.updateRender(),this.bindEvents()}},{key:"formatTime",value:function(e,t){return this.formatTimeCallback?this.formatTimeCallback(e,t):(e==t?[e]:[e,t]).map((function(e){return[Math.floor(e%3600/60),("00"+Math.floor(e%60)).slice(-2)].join(":")})).join("-")}},{key:"getWidth",value:function(){return this.wavesurfer.drawer.width/this.wavesurfer.params.pixelRatio}},{key:"updateRender",value:function(){var e=this.wavesurfer.getDuration(),t=this.getWidth(),r=this.start,i=this.end;if(r<0&&(i-=r=0),i>e&&(r=e-((i=e)-r)),null!=this.minLength&&(i=Math.max(r+this.minLength,i)),null!=this.maxLength&&(i=Math.min(r+this.maxLength,i)),null!=this.element){var n=Math.round(r/e*t),a=Math.round(i/e*t)-n;for(var s in this.style(this.element,{left:n+"px",width:a+"px",backgroundColor:this.color,cursor:this.drag?"move":"default"}),this.attributes)this.element.setAttribute("data-region-"+s,this.attributes[s]);this.showTooltip&&(this.element.title=this.formatTime(this.start,this.end))}}},{key:"bindInOut",value:function(){var e=this;this.firedIn=!1,this.firedOut=!1;var t=function(t){var r=Math.round(10*e.start)/10,i=Math.round(10*e.end)/10;t=Math.round(10*t)/10,!e.firedOut&&e.firedIn&&(r>t||i<=t)&&(e.firedOut=!0,e.firedIn=!1,e.fireEvent("out"),e.wavesurfer.fireEvent("region-out",e)),!e.firedIn&&r<=t&&i>t&&(e.firedIn=!0,e.firedOut=!1,e.fireEvent("in"),e.wavesurfer.fireEvent("region-in",e))};this.wavesurfer.backend.on("audioprocess",t),this.on("remove",(function(){e.wavesurfer.backend.un("audioprocess",t)})),this.on("out",(function(){if(e.loop){var t=e.wavesurfer.getCurrentTime();t>=e.start&&t<=e.end&&e.wavesurfer.play(e.start)}}))}},{key:"bindEvents",value:function(){var e=this,t=this.preventContextMenu;this.element.addEventListener("mouseenter",(function(t){e.fireEvent("mouseenter",t),e.wavesurfer.fireEvent("region-mouseenter",e,t)})),this.element.addEventListener("mouseleave",(function(t){e.fireEvent("mouseleave",t),e.wavesurfer.fireEvent("region-mouseleave",e,t)})),this.element.addEventListener("click",(function(t){t.preventDefault(),e.fireEvent("click",t),e.wavesurfer.fireEvent("region-click",e,t)})),this.element.addEventListener("dblclick",(function(t){t.stopPropagation(),t.preventDefault(),e.fireEvent("dblclick",t),e.wavesurfer.fireEvent("region-dblclick",e,t)})),this.element.addEventListener("contextmenu",(function(r){t&&r.preventDefault(),e.fireEvent("contextmenu",r),e.wavesurfer.fireEvent("region-contextmenu",e,r)})),(this.drag||this.resize)&&this.bindDragEvents()}},{key:"bindDragEvents",value:function(){var e,t,r,i,n,a,s,o,l,h=this,u=this.wavesurfer.drawer.container,d=this.scrollSpeed,c=(this.scrollThreshold,!1),v=function t(u){var c=h.util.withOrientation(u,h.vertical),v=h.wavesurfer.getDuration();if(a&&(r||n)){var f=c.clientX,g=0,p=0,m=0,w=h.regionsUtil.getRegionSnapToGridValue(h.wavesurfer.drawer.handleEvent(u)*v);if(r)-1===a?(p=o*h.wavesurfer.params.minPxPerSec,g=f-s.left):(p=l*h.wavesurfer.params.minPxPerSec,g=s.right-f);else{var b=h.minLength;b||(b=0),"start"===n?(w>h.end-b&&(w=h.end-b,m=d*a),w<0&&(w=0)):"end"===n&&(w<h.start+b&&(w=h.start+b,m=d*a),w>v&&(w=v))}var y=h.wrapper.scrollLeft;if(-1===a){if(0===Math.round(y))return;if(Math.round(y-p+g)<=0)return}else{if(Math.round(y)===i)return;if(Math.round(y+p-g)>=i)return}var E=y-m+d*a;if(-1===a){var L=Math.max(0+p-g,E);h.wrapper.scrollLeft=E=L}else{var k=Math.min(i-p+g,E);h.wrapper.scrollLeft=E=k}var x=w-e;e=w,r?h.onDrag(x):h.onResize(x,n),window.requestAnimationFrame((function(){t(u)}))}},f=function(a){var u=h.wavesurfer.getDuration();a.touches&&a.touches.length>1||(t=a.targetTouches?a.targetTouches[0].identifier:null,(h.drag||h.resize)&&a.stopPropagation(),e=h.regionsUtil.getRegionSnapToGridValue(h.wavesurfer.drawer.handleEvent(a,!0)*u),o=e-h.start,l=h.end-e,i=h.wrapper.scrollWidth-h.wrapper.clientWidth,s=h.util.withOrientation(h.wrapper.getBoundingClientRect(),h.vertical),h.isResizing=!1,h.isDragging=!1,"handle"===a.target.tagName.toLowerCase()?(h.isResizing=!0,n=a.target.classList.contains("wavesurfer-handle-start")?"start":"end"):(h.isDragging=!0,r=!0,n=!1))},g=function(e){e.touches&&e.touches.length>1||((r||n)&&(h.isDragging=!1,h.isResizing=!1,r=!1,a=null,n=!1),c&&(c=!1,h.util.preventClick(),h.fireEvent("update-end",e),h.wavesurfer.fireEvent("region-update-end",h,e)))},p=function(i){var d=h.wavesurfer.getDuration(),f=h.util.withOrientation(i,h.vertical);if(!(i.touches&&i.touches.length>1)&&(!i.targetTouches||i.targetTouches[0].identifier==t)&&(r||n)){var g=h.regionsUtil.getRegionSnapToGridValue(h.wavesurfer.drawer.handleEvent(i)*d);if(r){var p=h.wavesurfer.getDuration();g>p-l&&(g=p-l),g-o<0&&(g=o)}if(n){var m=h.minLength;m||(m=0),"start"===n?(g>h.end-m&&(g=h.end-m),g<0&&(g=0)):"end"===n&&(g<h.start+m&&(g=h.start+m),g>d&&(g=d))}var w=g-e;if(e=g,h.drag&&r&&(c=c||!!w,h.onDrag(w)),h.resize&&n&&(c=c||!!w,h.onResize(w,n)),h.scroll&&u.clientWidth<h.wrapper.scrollWidth){var b=f.clientX;(a=b<s.left+h.edgeScrollWidth?-1:b>s.right-h.edgeScrollWidth?1:null)&&v(i)}}};this.element.addEventListener("mousedown",f),this.element.addEventListener("touchstart",f),document.body.addEventListener("mousemove",p),document.body.addEventListener("touchmove",p,{passive:!1}),document.addEventListener("mouseup",g),document.body.addEventListener("touchend",g),this.on("remove",(function(){document.removeEventListener("mouseup",g),document.body.removeEventListener("touchend",g),document.body.removeEventListener("mousemove",p),document.body.removeEventListener("touchmove",p)})),this.wavesurfer.on("destroy",(function(){document.removeEventListener("mouseup",g),document.body.removeEventListener("touchend",g)}))}},{key:"onDrag",value:function(e){var t=this.wavesurfer.getDuration();this.end+e>t&&(e=t-this.end),this.start+e<0&&(e=-1*this.start);var r={direction:this._getDragDirection(e),action:"drag"};this.update({start:this.start+e,end:this.end+e},r)}},{key:"_getDragDirection",value:function(e){return e<0?"left":e>0?"right":null}},{key:"onResize",value:function(e,t){var r=this.wavesurfer.getDuration(),i={action:"resize",direction:"start"===t?"left":"right"};"start"===t?(e>0&&this.end-(this.start+e)<this.minLength&&(e=this.end-this.minLength-this.start),e<0&&this.end-(this.start+e)>this.maxLength&&(e=this.end-this.start-this.maxLength),e<0&&this.start+e<0&&(e=-1*this.start),this.update({start:Math.min(this.start+e,this.end),end:Math.max(this.start+e,this.end)},i)):(e<0&&this.end+e-this.start<this.minLength&&(e=this.start+this.minLength-this.end),e>0&&this.end+e-this.start>this.maxLength&&(e=this.maxLength-(this.end-this.start)),e>0&&this.end+e>r&&(e=r-this.end),this.update({start:Math.min(this.end+e,this.start),end:Math.max(this.end+e,this.start)},i))}},{key:"updateHandlesResize",value:function(e){var t;t=e?this.vertical?"row-resize":"col-resize":"auto",this.handleLeftEl&&this.style(this.handleLeftEl,{cursor:t}),this.handleRightEl&&this.style(this.handleRightEl,{cursor:t})}}])&&r(t.prototype,i),n&&r(t,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();t.Region=i}},t={};var r=function r(i){var n=t[i];if(void 0!==n)return n.exports;var a=t[i]={exports:{}};return e[i](a,a.exports,r),a.exports}(23);return r})()));
//# sourceMappingURL=wavesurfer.regions.min.js.map

/***/ }),

/***/ "./node_modules/wavesurfer.js/dist/wavesurfer.js":
/*!*******************************************************!*\
  !*** ./node_modules/wavesurfer.js/dist/wavesurfer.js ***!
  \*******************************************************/
/***/ ((module) => {

/*!
 * wavesurfer.js 6.4.0 (2022-11-05)
 * https://wavesurfer-js.org
 * @license BSD-3-Clause
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(true)
		module.exports = factory();
	else {}
})(self, () => {
return /******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/drawer.canvasentry.js":
/*!***********************************!*\
  !*** ./src/drawer.canvasentry.js ***!
  \***********************************/
/***/ ((module, exports, __nested_webpack_require_742__) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _style = _interopRequireDefault(__nested_webpack_require_742__(/*! ./util/style */ "./src/util/style.js"));
var _getId = _interopRequireDefault(__nested_webpack_require_742__(/*! ./util/get-id */ "./src/util/get-id.js"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
/**
 * The `CanvasEntry` class represents an element consisting of a wave `canvas`
 * and an (optional) progress wave `canvas`.
 *
 * The `MultiCanvas` renderer uses one or more `CanvasEntry` instances to
 * render a waveform, depending on the zoom level.
 */
var CanvasEntry = /*#__PURE__*/function () {
  function CanvasEntry() {
    _classCallCheck(this, CanvasEntry);
    /**
     * The wave node
     *
     * @type {HTMLCanvasElement}
     */
    this.wave = null;
    /**
     * The wave canvas rendering context
     *
     * @type {CanvasRenderingContext2D}
     */
    this.waveCtx = null;
    /**
     * The (optional) progress wave node
     *
     * @type {HTMLCanvasElement}
     */
    this.progress = null;
    /**
     * The (optional) progress wave canvas rendering context
     *
     * @type {CanvasRenderingContext2D}
     */
    this.progressCtx = null;
    /**
     * Start of the area the canvas should render, between 0 and 1
     *
     * @type {number}
     */
    this.start = 0;
    /**
     * End of the area the canvas should render, between 0 and 1
     *
     * @type {number}
     */
    this.end = 1;
    /**
     * Unique identifier for this entry
     *
     * @type {string}
     */
    this.id = (0, _getId.default)(typeof this.constructor.name !== 'undefined' ? this.constructor.name.toLowerCase() + '_' : 'canvasentry_');
    /**
     * Canvas 2d context attributes
     *
     * @type {object}
     */
    this.canvasContextAttributes = {};
  }

  /**
   * Store the wave canvas element and create the 2D rendering context
   *
   * @param {HTMLCanvasElement} element The wave `canvas` element.
   */
  _createClass(CanvasEntry, [{
    key: "initWave",
    value: function initWave(element) {
      this.wave = element;
      this.waveCtx = this.wave.getContext('2d', this.canvasContextAttributes);
    }

    /**
     * Store the progress wave canvas element and create the 2D rendering
     * context
     *
     * @param {HTMLCanvasElement} element The progress wave `canvas` element.
     */
  }, {
    key: "initProgress",
    value: function initProgress(element) {
      this.progress = element;
      this.progressCtx = this.progress.getContext('2d', this.canvasContextAttributes);
    }

    /**
     * Update the dimensions
     *
     * @param {number} elementWidth Width of the entry
     * @param {number} totalWidth Total width of the multi canvas renderer
     * @param {number} width The new width of the element
     * @param {number} height The new height of the element
     */
  }, {
    key: "updateDimensions",
    value: function updateDimensions(elementWidth, totalWidth, width, height) {
      // where the canvas starts and ends in the waveform, represented as a
      // decimal between 0 and 1
      this.start = this.wave.offsetLeft / totalWidth || 0;
      this.end = this.start + elementWidth / totalWidth;

      // set wave canvas dimensions
      this.wave.width = width;
      this.wave.height = height;
      var elementSize = {
        width: elementWidth + 'px'
      };
      (0, _style.default)(this.wave, elementSize);
      if (this.hasProgressCanvas) {
        // set progress canvas dimensions
        this.progress.width = width;
        this.progress.height = height;
        (0, _style.default)(this.progress, elementSize);
      }
    }

    /**
     * Clear the wave and progress rendering contexts
     */
  }, {
    key: "clearWave",
    value: function clearWave() {
      // wave
      this.waveCtx.clearRect(0, 0, this.waveCtx.canvas.width, this.waveCtx.canvas.height);

      // progress
      if (this.hasProgressCanvas) {
        this.progressCtx.clearRect(0, 0, this.progressCtx.canvas.width, this.progressCtx.canvas.height);
      }
    }

    /**
     * Set the fill styles for wave and progress
     * @param {string|string[]} waveColor Fill color for the wave canvas,
     * or an array of colors to apply as a gradient
     * @param {?string|string[]} progressColor Fill color for the progress canvas,
     * or an array of colors to apply as a gradient
     */
  }, {
    key: "setFillStyles",
    value: function setFillStyles(waveColor, progressColor) {
      this.waveCtx.fillStyle = this.getFillStyle(this.waveCtx, waveColor);
      if (this.hasProgressCanvas) {
        this.progressCtx.fillStyle = this.getFillStyle(this.progressCtx, progressColor);
      }
    }

    /**
     * Utility function to handle wave color arguments
     *
     * When the color argument type is a string or CanvasGradient instance,
     * it will be returned as is. Otherwise, it will be treated as an array,
     * and a new CanvasGradient will be returned
     *
     * @since 6.0.0
     * @param {CanvasRenderingContext2D} ctx Rendering context of target canvas
     * @param {string|string[]|CanvasGradient} color Either a single fill color
     *     for the wave canvas, an existing CanvasGradient instance, or an array
     *     of colors to apply as a gradient
     * @returns {string|CanvasGradient} Returns a string fillstyle value, or a
     *     canvas gradient
     */
  }, {
    key: "getFillStyle",
    value: function getFillStyle(ctx, color) {
      if (typeof color == 'string' || color instanceof CanvasGradient) {
        return color;
      }
      var waveGradient = ctx.createLinearGradient(0, 0, 0, ctx.canvas.height);
      color.forEach(function (value, index) {
        return waveGradient.addColorStop(index / color.length, value);
      });
      return waveGradient;
    }

    /**
     * Set the canvas transforms for wave and progress
     *
     * @param {boolean} vertical Whether to render vertically
     */
  }, {
    key: "applyCanvasTransforms",
    value: function applyCanvasTransforms(vertical) {
      if (vertical) {
        // Reflect the waveform across the line y = -x
        this.waveCtx.setTransform(0, 1, 1, 0, 0, 0);
        if (this.hasProgressCanvas) {
          this.progressCtx.setTransform(0, 1, 1, 0, 0, 0);
        }
      }
    }

    /**
     * Draw a rectangle for wave and progress
     *
     * @param {number} x X start position
     * @param {number} y Y start position
     * @param {number} width Width of the rectangle
     * @param {number} height Height of the rectangle
     * @param {number} radius Radius of the rectangle
     */
  }, {
    key: "fillRects",
    value: function fillRects(x, y, width, height, radius) {
      this.fillRectToContext(this.waveCtx, x, y, width, height, radius);
      if (this.hasProgressCanvas) {
        this.fillRectToContext(this.progressCtx, x, y, width, height, radius);
      }
    }

    /**
     * Draw the actual rectangle on a `canvas` element
     *
     * @param {CanvasRenderingContext2D} ctx Rendering context of target canvas
     * @param {number} x X start position
     * @param {number} y Y start position
     * @param {number} width Width of the rectangle
     * @param {number} height Height of the rectangle
     * @param {number} radius Radius of the rectangle
     */
  }, {
    key: "fillRectToContext",
    value: function fillRectToContext(ctx, x, y, width, height, radius) {
      if (!ctx) {
        return;
      }
      if (radius) {
        this.drawRoundedRect(ctx, x, y, width, height, radius);
      } else {
        ctx.fillRect(x, y, width, height);
      }
    }

    /**
     * Draw a rounded rectangle on Canvas
     *
     * @param {CanvasRenderingContext2D} ctx Canvas context
     * @param {number} x X-position of the rectangle
     * @param {number} y Y-position of the rectangle
     * @param {number} width Width of the rectangle
     * @param {number} height Height of the rectangle
     * @param {number} radius Radius of the rectangle
     *
     * @return {void}
     * @example drawRoundedRect(ctx, 50, 50, 5, 10, 3)
     */
  }, {
    key: "drawRoundedRect",
    value: function drawRoundedRect(ctx, x, y, width, height, radius) {
      if (height === 0) {
        return;
      }
      // peaks are float values from -1 to 1. Use absolute height values in
      // order to correctly calculate rounded rectangle coordinates
      if (height < 0) {
        height *= -1;
        y -= height;
      }
      ctx.beginPath();
      ctx.moveTo(x + radius, y);
      ctx.lineTo(x + width - radius, y);
      ctx.quadraticCurveTo(x + width, y, x + width, y + radius);
      ctx.lineTo(x + width, y + height - radius);
      ctx.quadraticCurveTo(x + width, y + height, x + width - radius, y + height);
      ctx.lineTo(x + radius, y + height);
      ctx.quadraticCurveTo(x, y + height, x, y + height - radius);
      ctx.lineTo(x, y + radius);
      ctx.quadraticCurveTo(x, y, x + radius, y);
      ctx.closePath();
      ctx.fill();
    }

    /**
     * Render the actual wave and progress lines
     *
     * @param {number[]} peaks Array with peaks data
     * @param {number} absmax Maximum peak value (absolute)
     * @param {number} halfH Half the height of the waveform
     * @param {number} offsetY Offset to the top
     * @param {number} start The x-offset of the beginning of the area that
     * should be rendered
     * @param {number} end The x-offset of the end of the area that
     * should be rendered
     */
  }, {
    key: "drawLines",
    value: function drawLines(peaks, absmax, halfH, offsetY, start, end) {
      this.drawLineToContext(this.waveCtx, peaks, absmax, halfH, offsetY, start, end);
      if (this.hasProgressCanvas) {
        this.drawLineToContext(this.progressCtx, peaks, absmax, halfH, offsetY, start, end);
      }
    }

    /**
     * Render the actual waveform line on a `canvas` element
     *
     * @param {CanvasRenderingContext2D} ctx Rendering context of target canvas
     * @param {number[]} peaks Array with peaks data
     * @param {number} absmax Maximum peak value (absolute)
     * @param {number} halfH Half the height of the waveform
     * @param {number} offsetY Offset to the top
     * @param {number} start The x-offset of the beginning of the area that
     * should be rendered
     * @param {number} end The x-offset of the end of the area that
     * should be rendered
     */
  }, {
    key: "drawLineToContext",
    value: function drawLineToContext(ctx, peaks, absmax, halfH, offsetY, start, end) {
      if (!ctx) {
        return;
      }
      var length = peaks.length / 2;
      var first = Math.round(length * this.start);

      // use one more peak value to make sure we join peaks at ends -- unless,
      // of course, this is the last canvas
      var last = Math.round(length * this.end) + 1;
      var canvasStart = first;
      var canvasEnd = last;
      var scale = this.wave.width / (canvasEnd - canvasStart - 1);

      // optimization
      var halfOffset = halfH + offsetY;
      var absmaxHalf = absmax / halfH;
      ctx.beginPath();
      ctx.moveTo((canvasStart - first) * scale, halfOffset);
      ctx.lineTo((canvasStart - first) * scale, halfOffset - Math.round((peaks[2 * canvasStart] || 0) / absmaxHalf));
      var i, peak, h;
      for (i = canvasStart; i < canvasEnd; i++) {
        peak = peaks[2 * i] || 0;
        h = Math.round(peak / absmaxHalf);
        ctx.lineTo((i - first) * scale + this.halfPixel, halfOffset - h);
      }

      // draw the bottom edge going backwards, to make a single
      // closed hull to fill
      var j = canvasEnd - 1;
      for (j; j >= canvasStart; j--) {
        peak = peaks[2 * j + 1] || 0;
        h = Math.round(peak / absmaxHalf);
        ctx.lineTo((j - first) * scale + this.halfPixel, halfOffset - h);
      }
      ctx.lineTo((canvasStart - first) * scale, halfOffset - Math.round((peaks[2 * canvasStart + 1] || 0) / absmaxHalf));
      ctx.closePath();
      ctx.fill();
    }

    /**
     * Destroys this entry
     */
  }, {
    key: "destroy",
    value: function destroy() {
      this.waveCtx = null;
      this.wave = null;
      this.progressCtx = null;
      this.progress = null;
    }

    /**
     * Return image data of the wave `canvas` element
     *
     * When using a `type` of `'blob'`, this will return a `Promise` that
     * resolves with a `Blob` instance.
     *
     * @param {string} format='image/png' An optional value of a format type.
     * @param {number} quality=0.92 An optional value between 0 and 1.
     * @param {string} type='dataURL' Either 'dataURL' or 'blob'.
     * @return {string|Promise} When using the default `'dataURL'` `type` this
     * returns a data URL. When using the `'blob'` `type` this returns a
     * `Promise` that resolves with a `Blob` instance.
     */
  }, {
    key: "getImage",
    value: function getImage(format, quality, type) {
      var _this = this;
      if (type === 'blob') {
        return new Promise(function (resolve) {
          _this.wave.toBlob(resolve, format, quality);
        });
      } else if (type === 'dataURL') {
        return this.wave.toDataURL(format, quality);
      }
    }
  }]);
  return CanvasEntry;
}();
exports["default"] = CanvasEntry;
module.exports = exports.default;

/***/ }),

/***/ "./src/drawer.js":
/*!***********************!*\
  !*** ./src/drawer.js ***!
  \***********************/
/***/ ((module, exports, __nested_webpack_require_15067__) => {

"use strict";


function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var util = _interopRequireWildcard(__nested_webpack_require_15067__(/*! ./util */ "./src/util/index.js"));
function _getRequireWildcardCache(nodeInterop) { if (typeof WeakMap !== "function") return null; var cacheBabelInterop = new WeakMap(); var cacheNodeInterop = new WeakMap(); return (_getRequireWildcardCache = function _getRequireWildcardCache(nodeInterop) { return nodeInterop ? cacheNodeInterop : cacheBabelInterop; })(nodeInterop); }
function _interopRequireWildcard(obj, nodeInterop) { if (!nodeInterop && obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { default: obj }; } var cache = _getRequireWildcardCache(nodeInterop); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (key !== "default" && Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj.default = obj; if (cache) { cache.set(obj, newObj); } return newObj; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
/**
 * Parent class for renderers
 *
 * @extends {Observer}
 */
var Drawer = /*#__PURE__*/function (_util$Observer) {
  _inherits(Drawer, _util$Observer);
  var _super = _createSuper(Drawer);
  /**
   * @param {HTMLElement} container The container node of the wavesurfer instance
   * @param {WavesurferParams} params The wavesurfer initialisation options
   */
  function Drawer(container, params) {
    var _this;
    _classCallCheck(this, Drawer);
    _this = _super.call(this);
    _this.container = util.withOrientation(container, params.vertical);
    /**
     * @type {WavesurferParams}
     */
    _this.params = params;
    /**
     * The width of the renderer
     * @type {number}
     */
    _this.width = 0;
    /**
     * The height of the renderer
     * @type {number}
     */
    _this.height = params.height * _this.params.pixelRatio;
    _this.lastPos = 0;
    /**
     * The `<wave>` element which is added to the container
     * @type {HTMLElement}
     */
    _this.wrapper = null;
    return _this;
  }

  /**
   * Alias of `util.style`
   *
   * @param {HTMLElement} el The element that the styles will be applied to
   * @param {Object} styles The map of propName: attribute, both are used as-is
   * @return {HTMLElement} el
   */
  _createClass(Drawer, [{
    key: "style",
    value: function style(el, styles) {
      return util.style(el, styles);
    }

    /**
     * Create the wrapper `<wave>` element, style it and set up the events for
     * interaction
     */
  }, {
    key: "createWrapper",
    value: function createWrapper() {
      this.wrapper = util.withOrientation(this.container.appendChild(document.createElement('wave')), this.params.vertical);
      this.style(this.wrapper, {
        display: 'block',
        position: 'relative',
        userSelect: 'none',
        webkitUserSelect: 'none',
        height: this.params.height + 'px'
      });
      if (this.params.fillParent || this.params.scrollParent) {
        this.style(this.wrapper, {
          width: '100%',
          cursor: this.params.hideCursor ? 'none' : 'auto',
          overflowX: this.params.hideScrollbar ? 'hidden' : 'auto',
          overflowY: 'hidden'
        });
      }
      this.setupWrapperEvents();
    }

    /**
     * Handle click event
     *
     * @param {Event} e Click event
     * @param {?boolean} noPrevent Set to true to not call `e.preventDefault()`
     * @return {number} Playback position from 0 to 1
     */
  }, {
    key: "handleEvent",
    value: function handleEvent(e, noPrevent) {
      !noPrevent && e.preventDefault();
      var clientX = util.withOrientation(e.targetTouches ? e.targetTouches[0] : e, this.params.vertical).clientX;
      var bbox = this.wrapper.getBoundingClientRect();
      var nominalWidth = this.width;
      var parentWidth = this.getWidth();
      var progressPixels = this.getProgressPixels(bbox, clientX);
      var progress;
      if (!this.params.fillParent && nominalWidth < parentWidth) {
        progress = progressPixels * (this.params.pixelRatio / nominalWidth) || 0;
      } else {
        progress = (progressPixels + this.wrapper.scrollLeft) / this.wrapper.scrollWidth || 0;
      }
      return util.clamp(progress, 0, 1);
    }
  }, {
    key: "getProgressPixels",
    value: function getProgressPixels(wrapperBbox, clientX) {
      if (this.params.rtl) {
        return wrapperBbox.right - clientX;
      } else {
        return clientX - wrapperBbox.left;
      }
    }
  }, {
    key: "setupWrapperEvents",
    value: function setupWrapperEvents() {
      var _this2 = this;
      this.wrapper.addEventListener('click', function (e) {
        var orientedEvent = util.withOrientation(e, _this2.params.vertical);
        var scrollbarHeight = _this2.wrapper.offsetHeight - _this2.wrapper.clientHeight;
        if (scrollbarHeight !== 0) {
          // scrollbar is visible.  Check if click was on it
          var bbox = _this2.wrapper.getBoundingClientRect();
          if (orientedEvent.clientY >= bbox.bottom - scrollbarHeight) {
            // ignore mousedown as it was on the scrollbar
            return;
          }
        }
        if (_this2.params.interact) {
          _this2.fireEvent('click', e, _this2.handleEvent(e));
        }
      });
      this.wrapper.addEventListener('dblclick', function (e) {
        if (_this2.params.interact) {
          _this2.fireEvent('dblclick', e, _this2.handleEvent(e));
        }
      });
      this.wrapper.addEventListener('scroll', function (e) {
        return _this2.fireEvent('scroll', e);
      });
    }

    /**
     * Draw peaks on the canvas
     *
     * @param {number[]|Number.<Array[]>} peaks Can also be an array of arrays
     * for split channel rendering
     * @param {number} length The width of the area that should be drawn
     * @param {number} start The x-offset of the beginning of the area that
     * should be rendered
     * @param {number} end The x-offset of the end of the area that should be
     * rendered
     */
  }, {
    key: "drawPeaks",
    value: function drawPeaks(peaks, length, start, end) {
      if (!this.setWidth(length)) {
        this.clearWave();
      }
      this.params.barWidth ? this.drawBars(peaks, 0, start, end) : this.drawWave(peaks, 0, start, end);
    }

    /**
     * Scroll to the beginning
     */
  }, {
    key: "resetScroll",
    value: function resetScroll() {
      if (this.wrapper !== null) {
        this.wrapper.scrollLeft = 0;
      }
    }

    /**
     * Recenter the view-port at a certain percent of the waveform
     *
     * @param {number} percent Value from 0 to 1 on the waveform
     */
  }, {
    key: "recenter",
    value: function recenter(percent) {
      var position = this.wrapper.scrollWidth * percent;
      this.recenterOnPosition(position, true);
    }

    /**
     * Recenter the view-port on a position, either scroll there immediately or
     * in steps of 5 pixels
     *
     * @param {number} position X-offset in pixels
     * @param {boolean} immediate Set to true to immediately scroll somewhere
     */
  }, {
    key: "recenterOnPosition",
    value: function recenterOnPosition(position, immediate) {
      var scrollLeft = this.wrapper.scrollLeft;
      var half = ~~(this.wrapper.clientWidth / 2);
      var maxScroll = this.wrapper.scrollWidth - this.wrapper.clientWidth;
      var target = position - half;
      var offset = target - scrollLeft;
      if (maxScroll == 0) {
        // no need to continue if scrollbar is not there
        return;
      }

      // if the cursor is currently visible...
      if (!immediate && -half <= offset && offset < half) {
        // set rate at which waveform is centered
        var rate = this.params.autoCenterRate;

        // make rate depend on width of view and length of waveform
        rate /= half;
        rate *= maxScroll;
        offset = Math.max(-rate, Math.min(rate, offset));
        target = scrollLeft + offset;
      }

      // limit target to valid range (0 to maxScroll)
      target = Math.max(0, Math.min(maxScroll, target));
      // no use attempting to scroll if we're not moving
      if (target != scrollLeft) {
        this.wrapper.scrollLeft = target;
      }
    }

    /**
     * Get the current scroll position in pixels
     *
     * @return {number} Horizontal scroll position in pixels
     */
  }, {
    key: "getScrollX",
    value: function getScrollX() {
      var x = 0;
      if (this.wrapper) {
        var pixelRatio = this.params.pixelRatio;
        x = Math.round(this.wrapper.scrollLeft * pixelRatio);

        // In cases of elastic scroll (safari with mouse wheel) you can
        // scroll beyond the limits of the container
        // Calculate and floor the scrollable extent to make sure an out
        // of bounds value is not returned
        // Ticket #1312
        if (this.params.scrollParent) {
          var maxScroll = ~~(this.wrapper.scrollWidth * pixelRatio - this.getWidth());
          x = Math.min(maxScroll, Math.max(0, x));
        }
      }
      return x;
    }

    /**
     * Get the width of the container
     *
     * @return {number} The width of the container
     */
  }, {
    key: "getWidth",
    value: function getWidth() {
      return Math.round(this.container.clientWidth * this.params.pixelRatio);
    }

    /**
     * Set the width of the container
     *
     * @param {number} width The new width of the container
     * @return {boolean} Whether the width of the container was updated or not
     */
  }, {
    key: "setWidth",
    value: function setWidth(width) {
      if (this.width == width) {
        return false;
      }
      this.width = width;
      if (this.params.fillParent || this.params.scrollParent) {
        this.style(this.wrapper, {
          width: ''
        });
      } else {
        var newWidth = ~~(this.width / this.params.pixelRatio) + 'px';
        this.style(this.wrapper, {
          width: newWidth
        });
      }
      this.updateSize();
      return true;
    }

    /**
     * Set the height of the container
     *
     * @param {number} height The new height of the container.
     * @return {boolean} Whether the height of the container was updated or not
     */
  }, {
    key: "setHeight",
    value: function setHeight(height) {
      if (height == this.height) {
        return false;
      }
      this.height = height;
      this.style(this.wrapper, {
        height: ~~(this.height / this.params.pixelRatio) + 'px'
      });
      this.updateSize();
      return true;
    }

    /**
     * Called by wavesurfer when progress should be rendered
     *
     * @param {number} progress From 0 to 1
     */
  }, {
    key: "progress",
    value: function progress(_progress) {
      var minPxDelta = 1 / this.params.pixelRatio;
      var pos = Math.round(_progress * this.width) * minPxDelta;
      if (pos < this.lastPos || pos - this.lastPos >= minPxDelta) {
        this.lastPos = pos;
        if (this.params.scrollParent && this.params.autoCenter) {
          var newPos = ~~(this.wrapper.scrollWidth * _progress);
          this.recenterOnPosition(newPos, this.params.autoCenterImmediately);
        }
        this.updateProgress(pos);
      }
    }

    /**
     * This is called when wavesurfer is destroyed
     */
  }, {
    key: "destroy",
    value: function destroy() {
      this.unAll();
      if (this.wrapper) {
        if (this.wrapper.parentNode == this.container.domElement) {
          this.container.removeChild(this.wrapper.domElement);
        }
        this.wrapper = null;
      }
    }

    /* Renderer-specific methods */

    /**
     * Called after cursor related params have changed.
     *
     * @abstract
     */
  }, {
    key: "updateCursor",
    value: function updateCursor() {}

    /**
     * Called when the size of the container changes so the renderer can adjust
     *
     * @abstract
     */
  }, {
    key: "updateSize",
    value: function updateSize() {}

    /**
     * Draw a waveform with bars
     *
     * @abstract
     * @param {number[]|Number.<Array[]>} peaks Can also be an array of arrays for split channel
     * rendering
     * @param {number} channelIndex The index of the current channel. Normally
     * should be 0
     * @param {number} start The x-offset of the beginning of the area that
     * should be rendered
     * @param {number} end The x-offset of the end of the area that should be
     * rendered
     */
  }, {
    key: "drawBars",
    value: function drawBars(peaks, channelIndex, start, end) {}

    /**
     * Draw a waveform
     *
     * @abstract
     * @param {number[]|Number.<Array[]>} peaks Can also be an array of arrays for split channel
     * rendering
     * @param {number} channelIndex The index of the current channel. Normally
     * should be 0
     * @param {number} start The x-offset of the beginning of the area that
     * should be rendered
     * @param {number} end The x-offset of the end of the area that should be
     * rendered
     */
  }, {
    key: "drawWave",
    value: function drawWave(peaks, channelIndex, start, end) {}

    /**
     * Clear the waveform
     *
     * @abstract
     */
  }, {
    key: "clearWave",
    value: function clearWave() {}

    /**
     * Render the new progress
     *
     * @abstract
     * @param {number} position X-Offset of progress position in pixels
     */
  }, {
    key: "updateProgress",
    value: function updateProgress(position) {}
  }]);
  return Drawer;
}(util.Observer);
exports["default"] = Drawer;
module.exports = exports.default;

/***/ }),

/***/ "./src/drawer.multicanvas.js":
/*!***********************************!*\
  !*** ./src/drawer.multicanvas.js ***!
  \***********************************/
/***/ ((module, exports, __nested_webpack_require_32378__) => {

"use strict";


function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _drawer = _interopRequireDefault(__nested_webpack_require_32378__(/*! ./drawer */ "./src/drawer.js"));
var util = _interopRequireWildcard(__nested_webpack_require_32378__(/*! ./util */ "./src/util/index.js"));
var _drawer2 = _interopRequireDefault(__nested_webpack_require_32378__(/*! ./drawer.canvasentry */ "./src/drawer.canvasentry.js"));
function _getRequireWildcardCache(nodeInterop) { if (typeof WeakMap !== "function") return null; var cacheBabelInterop = new WeakMap(); var cacheNodeInterop = new WeakMap(); return (_getRequireWildcardCache = function _getRequireWildcardCache(nodeInterop) { return nodeInterop ? cacheNodeInterop : cacheBabelInterop; })(nodeInterop); }
function _interopRequireWildcard(obj, nodeInterop) { if (!nodeInterop && obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { default: obj }; } var cache = _getRequireWildcardCache(nodeInterop); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (key !== "default" && Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj.default = obj; if (cache) { cache.set(obj, newObj); } return newObj; }
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
/**
 * MultiCanvas renderer for wavesurfer. Is currently the default and sole
 * builtin renderer.
 *
 * A `MultiCanvas` consists of one or more `CanvasEntry` instances, depending
 * on the zoom level.
 */
var MultiCanvas = /*#__PURE__*/function (_Drawer) {
  _inherits(MultiCanvas, _Drawer);
  var _super = _createSuper(MultiCanvas);
  /**
   * @param {HTMLElement} container The container node of the wavesurfer instance
   * @param {WavesurferParams} params The wavesurfer initialisation options
   */
  function MultiCanvas(container, params) {
    var _this;
    _classCallCheck(this, MultiCanvas);
    _this = _super.call(this, container, params);

    /**
     * @type {number}
     */
    _this.maxCanvasWidth = params.maxCanvasWidth;

    /**
     * @type {number}
     */
    _this.maxCanvasElementWidth = Math.round(params.maxCanvasWidth / params.pixelRatio);

    /**
     * Whether or not the progress wave is rendered. If the `waveColor`
     * and `progressColor` are the same color it is not.
     *
     * @type {boolean}
     */
    _this.hasProgressCanvas = params.waveColor != params.progressColor;

    /**
     * @type {number}
     */
    _this.halfPixel = 0.5 / params.pixelRatio;

    /**
     * List of `CanvasEntry` instances.
     *
     * @type {Array}
     */
    _this.canvases = [];

    /**
     * @type {HTMLElement}
     */
    _this.progressWave = null;

    /**
     * Class used to generate entries.
     *
     * @type {function}
     */
    _this.EntryClass = _drawer2.default;

    /**
     * Canvas 2d context attributes.
     *
     * @type {object}
     */
    _this.canvasContextAttributes = params.drawingContextAttributes;

    /**
     * Overlap added between entries to prevent vertical white stripes
     * between `canvas` elements.
     *
     * @type {number}
     */
    _this.overlap = 2 * Math.ceil(params.pixelRatio / 2);

    /**
     * The radius of the wave bars. Makes bars rounded
     *
     * @type {number}
     */
    _this.barRadius = params.barRadius || 0;

    /**
     * Whether to render the waveform vertically. Defaults to false.
     *
     * @type {boolean}
     */
    _this.vertical = params.vertical;
    return _this;
  }

  /**
   * Initialize the drawer
   */
  _createClass(MultiCanvas, [{
    key: "init",
    value: function init() {
      this.createWrapper();
      this.createElements();
    }

    /**
     * Create the canvas elements and style them
     *
     */
  }, {
    key: "createElements",
    value: function createElements() {
      this.progressWave = util.withOrientation(this.wrapper.appendChild(document.createElement('wave')), this.params.vertical);
      this.style(this.progressWave, {
        position: 'absolute',
        zIndex: 3,
        left: 0,
        top: 0,
        bottom: 0,
        overflow: 'hidden',
        width: '0',
        display: 'none',
        boxSizing: 'border-box',
        borderRightStyle: 'solid',
        pointerEvents: 'none'
      });
      this.addCanvas();
      this.updateCursor();
    }

    /**
     * Update cursor style
     */
  }, {
    key: "updateCursor",
    value: function updateCursor() {
      this.style(this.progressWave, {
        borderRightWidth: this.params.cursorWidth + 'px',
        borderRightColor: this.params.cursorColor
      });
    }

    /**
     * Adjust to the updated size by adding or removing canvases
     */
  }, {
    key: "updateSize",
    value: function updateSize() {
      var _this2 = this;
      var totalWidth = Math.round(this.width / this.params.pixelRatio);
      var requiredCanvases = Math.ceil(totalWidth / (this.maxCanvasElementWidth + this.overlap));

      // add required canvases
      while (this.canvases.length < requiredCanvases) {
        this.addCanvas();
      }

      // remove older existing canvases, if any
      while (this.canvases.length > requiredCanvases) {
        this.removeCanvas();
      }
      var canvasWidth = this.maxCanvasWidth + this.overlap;
      var lastCanvas = this.canvases.length - 1;
      this.canvases.forEach(function (entry, i) {
        if (i == lastCanvas) {
          canvasWidth = _this2.width - _this2.maxCanvasWidth * lastCanvas;
        }
        _this2.updateDimensions(entry, canvasWidth, _this2.height);
        entry.clearWave();
      });
    }

    /**
     * Add a canvas to the canvas list
     *
     */
  }, {
    key: "addCanvas",
    value: function addCanvas() {
      var entry = new this.EntryClass();
      entry.canvasContextAttributes = this.canvasContextAttributes;
      entry.hasProgressCanvas = this.hasProgressCanvas;
      entry.halfPixel = this.halfPixel;
      var leftOffset = this.maxCanvasElementWidth * this.canvases.length;

      // wave
      var wave = util.withOrientation(this.wrapper.appendChild(document.createElement('canvas')), this.params.vertical);
      this.style(wave, {
        position: 'absolute',
        zIndex: 2,
        left: leftOffset + 'px',
        top: 0,
        bottom: 0,
        height: '100%',
        pointerEvents: 'none'
      });
      entry.initWave(wave);

      // progress
      if (this.hasProgressCanvas) {
        var progress = util.withOrientation(this.progressWave.appendChild(document.createElement('canvas')), this.params.vertical);
        this.style(progress, {
          position: 'absolute',
          left: leftOffset + 'px',
          top: 0,
          bottom: 0,
          height: '100%'
        });
        entry.initProgress(progress);
      }
      this.canvases.push(entry);
    }

    /**
     * Pop single canvas from the list
     *
     */
  }, {
    key: "removeCanvas",
    value: function removeCanvas() {
      var lastEntry = this.canvases[this.canvases.length - 1];

      // wave
      lastEntry.wave.parentElement.removeChild(lastEntry.wave.domElement);

      // progress
      if (this.hasProgressCanvas) {
        lastEntry.progress.parentElement.removeChild(lastEntry.progress.domElement);
      }

      // cleanup
      if (lastEntry) {
        lastEntry.destroy();
        lastEntry = null;
      }
      this.canvases.pop();
    }

    /**
     * Update the dimensions of a canvas element
     *
     * @param {CanvasEntry} entry Target entry
     * @param {number} width The new width of the element
     * @param {number} height The new height of the element
     */
  }, {
    key: "updateDimensions",
    value: function updateDimensions(entry, width, height) {
      var elementWidth = Math.round(width / this.params.pixelRatio);
      var totalWidth = Math.round(this.width / this.params.pixelRatio);

      // update canvas dimensions
      entry.updateDimensions(elementWidth, totalWidth, width, height);

      // style element
      this.style(this.progressWave, {
        display: 'block'
      });
    }

    /**
     * Clear the whole multi-canvas
     */
  }, {
    key: "clearWave",
    value: function clearWave() {
      var _this3 = this;
      util.frame(function () {
        _this3.canvases.forEach(function (entry) {
          return entry.clearWave();
        });
      })();
    }

    /**
     * Draw a waveform with bars
     *
     * @param {number[]|Number.<Array[]>} peaks Can also be an array of arrays
     * for split channel rendering
     * @param {number} channelIndex The index of the current channel. Normally
     * should be 0. Must be an integer.
     * @param {number} start The x-offset of the beginning of the area that
     * should be rendered
     * @param {number} end The x-offset of the end of the area that should be
     * rendered
     * @returns {void}
     */
  }, {
    key: "drawBars",
    value: function drawBars(peaks, channelIndex, start, end) {
      var _this4 = this;
      return this.prepareDraw(peaks, channelIndex, start, end, function (_ref) {
        var absmax = _ref.absmax,
          hasMinVals = _ref.hasMinVals,
          height = _ref.height,
          offsetY = _ref.offsetY,
          halfH = _ref.halfH,
          peaks = _ref.peaks,
          ch = _ref.channelIndex;
        // if drawBars was called within ws.empty we don't pass a start and
        // don't want anything to happen
        if (start === undefined) {
          return;
        }
        // Skip every other value if there are negatives.
        var peakIndexScale = hasMinVals ? 2 : 1;
        var length = peaks.length / peakIndexScale;
        var bar = _this4.params.barWidth * _this4.params.pixelRatio;
        var gap = _this4.params.barGap === null ? Math.max(_this4.params.pixelRatio, ~~(bar / 2)) : Math.max(_this4.params.pixelRatio, _this4.params.barGap * _this4.params.pixelRatio);
        var step = bar + gap;
        var scale = length / _this4.width;
        var first = start;
        var last = end;
        var peakIndex = first;
        for (peakIndex; peakIndex < last; peakIndex += step) {
          // search for the highest peak in the range this bar falls into
          var peak = 0;
          var peakIndexRange = Math.floor(peakIndex * scale) * peakIndexScale; // start index
          var peakIndexEnd = Math.floor((peakIndex + step) * scale) * peakIndexScale;
          do {
            // do..while makes sure at least one peak is always evaluated
            var newPeak = Math.abs(peaks[peakIndexRange]); // for arrays starting with negative values
            if (newPeak > peak) {
              peak = newPeak; // higher
            }

            peakIndexRange += peakIndexScale; // skip every other value for negatives
          } while (peakIndexRange < peakIndexEnd);

          // calculate the height of this bar according to the highest peak found
          var h = Math.round(peak / absmax * halfH);

          // raise the bar height to the specified minimum height
          // Math.max is used to replace any value smaller than barMinHeight (not just 0) with barMinHeight
          if (_this4.params.barMinHeight) {
            h = Math.max(h, _this4.params.barMinHeight);
          }
          _this4.fillRect(peakIndex + _this4.halfPixel, halfH - h + offsetY, bar + _this4.halfPixel, h * 2, _this4.barRadius, ch);
        }
      });
    }

    /**
     * Draw a waveform
     *
     * @param {number[]|Number.<Array[]>} peaks Can also be an array of arrays
     * for split channel rendering
     * @param {number} channelIndex The index of the current channel. Normally
     * should be 0
     * @param {number?} start The x-offset of the beginning of the area that
     * should be rendered (If this isn't set only a flat line is rendered)
     * @param {number?} end The x-offset of the end of the area that should be
     * rendered
     * @returns {void}
     */
  }, {
    key: "drawWave",
    value: function drawWave(peaks, channelIndex, start, end) {
      var _this5 = this;
      return this.prepareDraw(peaks, channelIndex, start, end, function (_ref2) {
        var absmax = _ref2.absmax,
          hasMinVals = _ref2.hasMinVals,
          height = _ref2.height,
          offsetY = _ref2.offsetY,
          halfH = _ref2.halfH,
          peaks = _ref2.peaks,
          channelIndex = _ref2.channelIndex;
        if (!hasMinVals) {
          var reflectedPeaks = [];
          var len = peaks.length;
          var i = 0;
          for (i; i < len; i++) {
            reflectedPeaks[2 * i] = peaks[i];
            reflectedPeaks[2 * i + 1] = -peaks[i];
          }
          peaks = reflectedPeaks;
        }

        // if drawWave was called within ws.empty we don't pass a start and
        // end and simply want a flat line
        if (start !== undefined) {
          _this5.drawLine(peaks, absmax, halfH, offsetY, start, end, channelIndex);
        }

        // always draw a median line
        _this5.fillRect(0, halfH + offsetY - _this5.halfPixel, _this5.width, _this5.halfPixel, _this5.barRadius, channelIndex);
      });
    }

    /**
     * Tell the canvas entries to render their portion of the waveform
     *
     * @param {number[]} peaks Peaks data
     * @param {number} absmax Maximum peak value (absolute)
     * @param {number} halfH Half the height of the waveform
     * @param {number} offsetY Offset to the top
     * @param {number} start The x-offset of the beginning of the area that
     * should be rendered
     * @param {number} end The x-offset of the end of the area that
     * should be rendered
     * @param {channelIndex} channelIndex The channel index of the line drawn
     */
  }, {
    key: "drawLine",
    value: function drawLine(peaks, absmax, halfH, offsetY, start, end, channelIndex) {
      var _this6 = this;
      var _ref3 = this.params.splitChannelsOptions.channelColors[channelIndex] || {},
        waveColor = _ref3.waveColor,
        progressColor = _ref3.progressColor;
      this.canvases.forEach(function (entry, i) {
        _this6.setFillStyles(entry, waveColor, progressColor);
        _this6.applyCanvasTransforms(entry, _this6.params.vertical);
        entry.drawLines(peaks, absmax, halfH, offsetY, start, end);
      });
    }

    /**
     * Draw a rectangle on the multi-canvas
     *
     * @param {number} x X-position of the rectangle
     * @param {number} y Y-position of the rectangle
     * @param {number} width Width of the rectangle
     * @param {number} height Height of the rectangle
     * @param {number} radius Radius of the rectangle
     * @param {channelIndex} channelIndex The channel index of the bar drawn
     */
  }, {
    key: "fillRect",
    value: function fillRect(x, y, width, height, radius, channelIndex) {
      var startCanvas = Math.floor(x / this.maxCanvasWidth);
      var endCanvas = Math.min(Math.ceil((x + width) / this.maxCanvasWidth) + 1, this.canvases.length);
      var i = startCanvas;
      for (i; i < endCanvas; i++) {
        var entry = this.canvases[i];
        var leftOffset = i * this.maxCanvasWidth;
        var intersection = {
          x1: Math.max(x, i * this.maxCanvasWidth),
          y1: y,
          x2: Math.min(x + width, i * this.maxCanvasWidth + entry.wave.width),
          y2: y + height
        };
        if (intersection.x1 < intersection.x2) {
          var _ref4 = this.params.splitChannelsOptions.channelColors[channelIndex] || {},
            waveColor = _ref4.waveColor,
            progressColor = _ref4.progressColor;
          this.setFillStyles(entry, waveColor, progressColor);
          this.applyCanvasTransforms(entry, this.params.vertical);
          entry.fillRects(intersection.x1 - leftOffset, intersection.y1, intersection.x2 - intersection.x1, intersection.y2 - intersection.y1, radius);
        }
      }
    }

    /**
     * Returns whether to hide the channel from being drawn based on params.
     *
     * @param {number} channelIndex The index of the current channel.
     * @returns {bool} True to hide the channel, false to draw.
     */
  }, {
    key: "hideChannel",
    value: function hideChannel(channelIndex) {
      return this.params.splitChannels && this.params.splitChannelsOptions.filterChannels.includes(channelIndex);
    }

    /**
     * Performs preparation tasks and calculations which are shared by `drawBars`
     * and `drawWave`
     *
     * @param {number[]|Number.<Array[]>} peaks Can also be an array of arrays for
     * split channel rendering
     * @param {number} channelIndex The index of the current channel. Normally
     * should be 0
     * @param {number?} start The x-offset of the beginning of the area that
     * should be rendered. If this isn't set only a flat line is rendered
     * @param {number?} end The x-offset of the end of the area that should be
     * rendered
     * @param {function} fn The render function to call, e.g. `drawWave`
     * @param {number} drawIndex The index of the current channel after filtering.
     * @param {number?} normalizedMax Maximum modulation value across channels for use with relativeNormalization. Ignored when undefined
     * @returns {void}
     */
  }, {
    key: "prepareDraw",
    value: function prepareDraw(peaks, channelIndex, start, end, fn, drawIndex, normalizedMax) {
      var _this7 = this;
      return util.frame(function () {
        // Split channels and call this function with the channelIndex set
        if (peaks[0] instanceof Array) {
          var channels = peaks;
          if (_this7.params.splitChannels) {
            var filteredChannels = channels.filter(function (c, i) {
              return !_this7.hideChannel(i);
            });
            if (!_this7.params.splitChannelsOptions.overlay) {
              _this7.setHeight(Math.max(filteredChannels.length, 1) * _this7.params.height * _this7.params.pixelRatio);
            }
            var overallAbsMax;
            if (_this7.params.splitChannelsOptions && _this7.params.splitChannelsOptions.relativeNormalization) {
              // calculate maximum peak across channels to use for normalization
              overallAbsMax = util.max(channels.map(function (channelPeaks) {
                return util.absMax(channelPeaks);
              }));
            }
            return channels.forEach(function (channelPeaks, i) {
              return _this7.prepareDraw(channelPeaks, i, start, end, fn, filteredChannels.indexOf(channelPeaks), overallAbsMax);
            });
          }
          peaks = channels[0];
        }

        // Return and do not draw channel peaks if hidden.
        if (_this7.hideChannel(channelIndex)) {
          return;
        }

        // calculate maximum modulation value, either from the barHeight
        // parameter or if normalize=true from the largest value in the peak
        // set
        var absmax = 1 / _this7.params.barHeight;
        if (_this7.params.normalize) {
          absmax = normalizedMax === undefined ? util.absMax(peaks) : normalizedMax;
        }

        // Bar wave draws the bottom only as a reflection of the top,
        // so we don't need negative values
        var hasMinVals = [].some.call(peaks, function (val) {
          return val < 0;
        });
        var height = _this7.params.height * _this7.params.pixelRatio;
        var halfH = height / 2;
        var offsetY = height * drawIndex || 0;

        // Override offsetY if overlay is true
        if (_this7.params.splitChannelsOptions && _this7.params.splitChannelsOptions.overlay) {
          offsetY = 0;
        }
        return fn({
          absmax: absmax,
          hasMinVals: hasMinVals,
          height: height,
          offsetY: offsetY,
          halfH: halfH,
          peaks: peaks,
          channelIndex: channelIndex
        });
      })();
    }

    /**
     * Set the fill styles for a certain entry (wave and progress)
     *
     * @param {CanvasEntry} entry Target entry
     * @param {string} waveColor Wave color to draw this entry
     * @param {string} progressColor Progress color to draw this entry
     */
  }, {
    key: "setFillStyles",
    value: function setFillStyles(entry) {
      var waveColor = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.params.waveColor;
      var progressColor = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : this.params.progressColor;
      entry.setFillStyles(waveColor, progressColor);
    }

    /**
     * Set the canvas transforms for a certain entry (wave and progress)
     *
     * @param {CanvasEntry} entry Target entry
     * @param {boolean} vertical Whether to render the waveform vertically
     */
  }, {
    key: "applyCanvasTransforms",
    value: function applyCanvasTransforms(entry) {
      var vertical = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
      entry.applyCanvasTransforms(vertical);
    }

    /**
     * Return image data of the multi-canvas
     *
     * When using a `type` of `'blob'`, this will return a `Promise`.
     *
     * @param {string} format='image/png' An optional value of a format type.
     * @param {number} quality=0.92 An optional value between 0 and 1.
     * @param {string} type='dataURL' Either 'dataURL' or 'blob'.
     * @return {string|string[]|Promise} When using the default `'dataURL'`
     * `type` this returns a single data URL or an array of data URLs,
     * one for each canvas. When using the `'blob'` `type` this returns a
     * `Promise` that resolves with an array of `Blob` instances, one for each
     * canvas.
     */
  }, {
    key: "getImage",
    value: function getImage(format, quality, type) {
      if (type === 'blob') {
        return Promise.all(this.canvases.map(function (entry) {
          return entry.getImage(format, quality, type);
        }));
      } else if (type === 'dataURL') {
        var images = this.canvases.map(function (entry) {
          return entry.getImage(format, quality, type);
        });
        return images.length > 1 ? images : images[0];
      }
    }

    /**
     * Render the new progress
     *
     * @param {number} position X-offset of progress position in pixels
     */
  }, {
    key: "updateProgress",
    value: function updateProgress(position) {
      this.style(this.progressWave, {
        width: position + 'px'
      });
    }
  }]);
  return MultiCanvas;
}(_drawer.default);
exports["default"] = MultiCanvas;
module.exports = exports.default;

/***/ }),

/***/ "./src/mediaelement-webaudio.js":
/*!**************************************!*\
  !*** ./src/mediaelement-webaudio.js ***!
  \**************************************/
/***/ ((module, exports, __nested_webpack_require_58622__) => {

"use strict";


function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _mediaelement = _interopRequireDefault(__nested_webpack_require_58622__(/*! ./mediaelement */ "./src/mediaelement.js"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get.bind(); } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }
function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
/**
 * MediaElementWebAudio backend: load audio via an HTML5 audio tag, but playback with the WebAudio API.
 * The advantage here is that the html5 <audio> tag can perform range requests on the server and not
 * buffer the entire file in one request, and you still get the filtering and scripting functionality
 * of the webaudio API.
 * Note that in order to use range requests and prevent buffering, you must provide peak data.
 *
 * @since 3.2.0
 */
var MediaElementWebAudio = /*#__PURE__*/function (_MediaElement) {
  _inherits(MediaElementWebAudio, _MediaElement);
  var _super = _createSuper(MediaElementWebAudio);
  /**
   * Construct the backend
   *
   * @param {WavesurferParams} params Wavesurfer parameters
   */
  function MediaElementWebAudio(params) {
    var _this;
    _classCallCheck(this, MediaElementWebAudio);
    _this = _super.call(this, params);
    /** @private */
    _this.params = params;
    /** @private */
    _this.sourceMediaElement = null;
    return _this;
  }

  /**
   * Initialise the backend, called in `wavesurfer.createBackend()`
   */
  _createClass(MediaElementWebAudio, [{
    key: "init",
    value: function init() {
      this.setPlaybackRate(this.params.audioRate);
      this.createTimer();
      this.createVolumeNode();
      this.createScriptNode();
      this.createAnalyserNode();
    }
    /**
     * Private method called by both `load` (from url)
     * and `loadElt` (existing media element) methods.
     *
     * @param {HTMLMediaElement} media HTML5 Audio or Video element
     * @param {number[]|Number.<Array[]>} peaks Array of peak data
     * @param {string} preload HTML 5 preload attribute value
     * @private
     */
  }, {
    key: "_load",
    value: function _load(media, peaks, preload) {
      _get(_getPrototypeOf(MediaElementWebAudio.prototype), "_load", this).call(this, media, peaks, preload);
      this.createMediaElementSource(media);
    }

    /**
     * Create MediaElementSource node
     *
     * @since 3.2.0
     * @param {HTMLMediaElement} mediaElement HTML5 Audio to load
     */
  }, {
    key: "createMediaElementSource",
    value: function createMediaElementSource(mediaElement) {
      this.sourceMediaElement = this.ac.createMediaElementSource(mediaElement);
      this.sourceMediaElement.connect(this.analyser);
    }
  }, {
    key: "play",
    value: function play(start, end) {
      this.resumeAudioContext();
      return _get(_getPrototypeOf(MediaElementWebAudio.prototype), "play", this).call(this, start, end);
    }

    /**
     * This is called when wavesurfer is destroyed
     *
     */
  }, {
    key: "destroy",
    value: function destroy() {
      _get(_getPrototypeOf(MediaElementWebAudio.prototype), "destroy", this).call(this);
      this.destroyWebAudio();
    }
  }]);
  return MediaElementWebAudio;
}(_mediaelement.default);
exports["default"] = MediaElementWebAudio;
module.exports = exports.default;

/***/ }),

/***/ "./src/mediaelement.js":
/*!*****************************!*\
  !*** ./src/mediaelement.js ***!
  \*****************************/
/***/ ((module, exports, __nested_webpack_require_65855__) => {

"use strict";


function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var _webaudio = _interopRequireDefault(__nested_webpack_require_65855__(/*! ./webaudio */ "./src/webaudio.js"));
var util = _interopRequireWildcard(__nested_webpack_require_65855__(/*! ./util */ "./src/util/index.js"));
function _getRequireWildcardCache(nodeInterop) { if (typeof WeakMap !== "function") return null; var cacheBabelInterop = new WeakMap(); var cacheNodeInterop = new WeakMap(); return (_getRequireWildcardCache = function _getRequireWildcardCache(nodeInterop) { return nodeInterop ? cacheNodeInterop : cacheBabelInterop; })(nodeInterop); }
function _interopRequireWildcard(obj, nodeInterop) { if (!nodeInterop && obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { default: obj }; } var cache = _getRequireWildcardCache(nodeInterop); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (key !== "default" && Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj.default = obj; if (cache) { cache.set(obj, newObj); } return newObj; }
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get.bind(); } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }
function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
/**
 * MediaElement backend
 */
var MediaElement = /*#__PURE__*/function (_WebAudio) {
  _inherits(MediaElement, _WebAudio);
  var _super = _createSuper(MediaElement);
  /**
   * Construct the backend
   *
   * @param {WavesurferParams} params Wavesurfer parameters
   */
  function MediaElement(params) {
    var _this;
    _classCallCheck(this, MediaElement);
    _this = _super.call(this, params);
    /** @private */
    _this.params = params;

    /**
     * Initially a dummy media element to catch errors. Once `_load` is
     * called, this will contain the actual `HTMLMediaElement`.
     * @private
     */
    _this.media = {
      currentTime: 0,
      duration: 0,
      paused: true,
      playbackRate: 1,
      play: function play() {},
      pause: function pause() {},
      volume: 0
    };

    /** @private */
    _this.mediaType = params.mediaType.toLowerCase();
    /** @private */
    _this.elementPosition = params.elementPosition;
    /** @private */
    _this.peaks = null;
    /** @private */
    _this.playbackRate = 1;
    /** @private */
    _this.volume = 1;
    /** @private */
    _this.isMuted = false;
    /** @private */
    _this.buffer = null;
    /** @private */
    _this.onPlayEnd = null;
    /** @private */
    _this.mediaListeners = {};
    return _this;
  }

  /**
   * Initialise the backend, called in `wavesurfer.createBackend()`
   */
  _createClass(MediaElement, [{
    key: "init",
    value: function init() {
      this.setPlaybackRate(this.params.audioRate);
      this.createTimer();
    }

    /**
     * Attach event listeners to media element.
     */
  }, {
    key: "_setupMediaListeners",
    value: function _setupMediaListeners() {
      var _this2 = this;
      this.mediaListeners.error = function () {
        _this2.fireEvent('error', 'Error loading media element');
      };
      this.mediaListeners.canplay = function () {
        _this2.fireEvent('canplay');
      };
      this.mediaListeners.ended = function () {
        _this2.fireEvent('finish');
      };
      // listen to and relay play, pause and seeked events to enable
      // playback control from the external media element
      this.mediaListeners.play = function () {
        _this2.fireEvent('play');
      };
      this.mediaListeners.pause = function () {
        _this2.fireEvent('pause');
      };
      this.mediaListeners.seeked = function (event) {
        _this2.fireEvent('seek');
      };
      this.mediaListeners.volumechange = function (event) {
        _this2.isMuted = _this2.media.muted;
        if (_this2.isMuted) {
          _this2.volume = 0;
        } else {
          _this2.volume = _this2.media.volume;
        }
        _this2.fireEvent('volume');
      };

      // reset event listeners
      Object.keys(this.mediaListeners).forEach(function (id) {
        _this2.media.removeEventListener(id, _this2.mediaListeners[id]);
        _this2.media.addEventListener(id, _this2.mediaListeners[id]);
      });
    }

    /**
     * Create a timer to provide a more precise `audioprocess` event.
     */
  }, {
    key: "createTimer",
    value: function createTimer() {
      var _this3 = this;
      var onAudioProcess = function onAudioProcess() {
        if (_this3.isPaused()) {
          return;
        }
        _this3.fireEvent('audioprocess', _this3.getCurrentTime());

        // Call again in the next frame
        util.frame(onAudioProcess)();
      };
      this.on('play', onAudioProcess);

      // Update the progress one more time to prevent it from being stuck in
      // case of lower framerates
      this.on('pause', function () {
        _this3.fireEvent('audioprocess', _this3.getCurrentTime());
      });
    }

    /**
     * Create media element with url as its source,
     * and append to container element.
     *
     * @param {string} url Path to media file
     * @param {HTMLElement} container HTML element
     * @param {number[]|Number.<Array[]>} peaks Array of peak data
     * @param {string} preload HTML 5 preload attribute value
     * @throws Will throw an error if the `url` argument is not a valid media
     * element.
     */
  }, {
    key: "load",
    value: function load(url, container, peaks, preload) {
      var media = document.createElement(this.mediaType);
      media.controls = this.params.mediaControls;
      media.autoplay = this.params.autoplay || false;
      media.preload = preload == null ? 'auto' : preload;
      media.src = url;
      media.style.width = '100%';
      var prevMedia = container.querySelector(this.mediaType);
      if (prevMedia) {
        container.removeChild(prevMedia);
      }
      container.appendChild(media);
      this._load(media, peaks, preload);
    }

    /**
     * Load existing media element.
     *
     * @param {HTMLMediaElement} elt HTML5 Audio or Video element
     * @param {number[]|Number.<Array[]>} peaks Array of peak data
     */
  }, {
    key: "loadElt",
    value: function loadElt(elt, peaks) {
      elt.controls = this.params.mediaControls;
      elt.autoplay = this.params.autoplay || false;
      this._load(elt, peaks, elt.preload);
    }

    /**
     * Method called by both `load` (from url)
     * and `loadElt` (existing media element) methods.
     *
     * @param {HTMLMediaElement} media HTML5 Audio or Video element
     * @param {number[]|Number.<Array[]>} peaks Array of peak data
     * @param {string} preload HTML 5 preload attribute value
     * @throws Will throw an error if the `media` argument is not a valid media
     * element.
     * @private
     */
  }, {
    key: "_load",
    value: function _load(media, peaks, preload) {
      // verify media element is valid
      if (!(media instanceof HTMLMediaElement) || typeof media.addEventListener === 'undefined') {
        throw new Error('media parameter is not a valid media element');
      }

      // load must be called manually on iOS, otherwise peaks won't draw
      // until a user interaction triggers load --> 'ready' event
      //
      // note that we avoid calling media.load here when given peaks and preload == 'none'
      // as this almost always triggers some browser fetch of the media.
      if (typeof media.load == 'function' && !(peaks && preload == 'none')) {
        // Resets the media element and restarts the media resource. Any
        // pending events are discarded. How much media data is fetched is
        // still affected by the preload attribute.
        media.load();
      }
      this.media = media;
      this._setupMediaListeners();
      this.peaks = peaks;
      this.onPlayEnd = null;
      this.buffer = null;
      this.isMuted = media.muted;
      this.setPlaybackRate(this.playbackRate);
      this.setVolume(this.volume);
    }

    /**
     * Used by `wavesurfer.isPlaying()` and `wavesurfer.playPause()`
     *
     * @return {boolean} Media paused or not
     */
  }, {
    key: "isPaused",
    value: function isPaused() {
      return !this.media || this.media.paused;
    }

    /**
     * Used by `wavesurfer.getDuration()`
     *
     * @return {number} Duration
     */
  }, {
    key: "getDuration",
    value: function getDuration() {
      if (this.explicitDuration) {
        return this.explicitDuration;
      }
      var duration = (this.buffer || this.media).duration;
      if (duration >= Infinity) {
        // streaming audio
        duration = this.media.seekable.end(0);
      }
      return duration;
    }

    /**
     * Returns the current time in seconds relative to the audio-clip's
     * duration.
     *
     * @return {number} Current time
     */
  }, {
    key: "getCurrentTime",
    value: function getCurrentTime() {
      return this.media && this.media.currentTime;
    }

    /**
     * Get the position from 0 to 1
     *
     * @return {number} Current position
     */
  }, {
    key: "getPlayedPercents",
    value: function getPlayedPercents() {
      return this.getCurrentTime() / this.getDuration() || 0;
    }

    /**
     * Get the audio source playback rate.
     *
     * @return {number} Playback rate
     */
  }, {
    key: "getPlaybackRate",
    value: function getPlaybackRate() {
      return this.playbackRate || this.media.playbackRate;
    }

    /**
     * Set the audio source playback rate.
     *
     * @param {number} value Playback rate
     */
  }, {
    key: "setPlaybackRate",
    value: function setPlaybackRate(value) {
      this.playbackRate = value || 1;
      this.media.playbackRate = this.playbackRate;
    }

    /**
     * Used by `wavesurfer.seekTo()`
     *
     * @param {number} start Position to start at in seconds
     */
  }, {
    key: "seekTo",
    value: function seekTo(start) {
      if (start != null && !isNaN(start)) {
        this.media.currentTime = start;
      }
      this.clearPlayEnd();
    }

    /**
     * Plays the loaded audio region.
     *
     * @param {number} start Start offset in seconds, relative to the beginning
     * of a clip.
     * @param {number} end When to stop, relative to the beginning of a clip.
     * @emits MediaElement#play
     * @return {Promise} Result
     */
  }, {
    key: "play",
    value: function play(start, end) {
      this.seekTo(start);
      var promise = this.media.play();
      end && this.setPlayEnd(end);
      return promise;
    }

    /**
     * Pauses the loaded audio.
     *
     * @emits MediaElement#pause
     * @return {Promise} Result
     */
  }, {
    key: "pause",
    value: function pause() {
      var promise;
      if (this.media) {
        promise = this.media.pause();
      }
      this.clearPlayEnd();
      return promise;
    }

    /**
     * Set the play end
     *
     * @param {number} end Where to end
     */
  }, {
    key: "setPlayEnd",
    value: function setPlayEnd(end) {
      var _this4 = this;
      this.clearPlayEnd();
      this._onPlayEnd = function (time) {
        if (time >= end) {
          _this4.pause();
          _this4.seekTo(end);
        }
      };
      this.on('audioprocess', this._onPlayEnd);
    }

    /** @private */
  }, {
    key: "clearPlayEnd",
    value: function clearPlayEnd() {
      if (this._onPlayEnd) {
        this.un('audioprocess', this._onPlayEnd);
        this._onPlayEnd = null;
      }
    }

    /**
     * Compute the max and min value of the waveform when broken into
     * <length> subranges.
     *
     * @param {number} length How many subranges to break the waveform into.
     * @param {number} first First sample in the required range.
     * @param {number} last Last sample in the required range.
     * @return {number[]|Number.<Array[]>} Array of 2*<length> peaks or array of
     * arrays of peaks consisting of (max, min) values for each subrange.
     */
  }, {
    key: "getPeaks",
    value: function getPeaks(length, first, last) {
      if (this.buffer) {
        return _get(_getPrototypeOf(MediaElement.prototype), "getPeaks", this).call(this, length, first, last);
      }
      return this.peaks || [];
    }

    /**
     * Set the sink id for the media player
     *
     * @param {string} deviceId String value representing audio device id.
     * @returns {Promise} A Promise that resolves to `undefined` when there
     * are no errors.
     */
  }, {
    key: "setSinkId",
    value: function setSinkId(deviceId) {
      if (deviceId) {
        if (!this.media.setSinkId) {
          return Promise.reject(new Error('setSinkId is not supported in your browser'));
        }
        return this.media.setSinkId(deviceId);
      }
      return Promise.reject(new Error('Invalid deviceId: ' + deviceId));
    }

    /**
     * Get the current volume
     *
     * @return {number} value A floating point value between 0 and 1.
     */
  }, {
    key: "getVolume",
    value: function getVolume() {
      return this.volume;
    }

    /**
     * Set the audio volume
     *
     * @param {number} value A floating point value between 0 and 1.
     */
  }, {
    key: "setVolume",
    value: function setVolume(value) {
      this.volume = value;
      // no need to change when it's already at that volume
      if (this.media.volume !== this.volume) {
        this.media.volume = this.volume;
      }
    }

    /**
     * Enable or disable muted audio
     *
     * @since 4.0.0
     * @param {boolean} muted Specify `true` to mute audio.
     */
  }, {
    key: "setMute",
    value: function setMute(muted) {
      // This causes a volume change to be emitted too through the
      // volumechange event listener.
      this.isMuted = this.media.muted = muted;
    }

    /**
     * This is called when wavesurfer is destroyed
     *
     */
  }, {
    key: "destroy",
    value: function destroy() {
      var _this5 = this;
      this.pause();
      this.unAll();
      this.destroyed = true;

      // cleanup media event listeners
      Object.keys(this.mediaListeners).forEach(function (id) {
        if (_this5.media) {
          _this5.media.removeEventListener(id, _this5.mediaListeners[id]);
        }
      });
      if (this.params.removeMediaElementOnDestroy && this.media && this.media.parentNode) {
        this.media.parentNode.removeChild(this.media);
      }
      this.media = null;
    }
  }]);
  return MediaElement;
}(_webaudio.default);
exports["default"] = MediaElement;
module.exports = exports.default;

/***/ }),

/***/ "./src/peakcache.js":
/*!**************************!*\
  !*** ./src/peakcache.js ***!
  \**************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
/**
 * Caches the decoded peaks data to improve rendering speed for large audio
 *
 * Is used if the option parameter `partialRender` is set to `true`
 */
var PeakCache = /*#__PURE__*/function () {
  /**
   * Instantiate cache
   */
  function PeakCache() {
    _classCallCheck(this, PeakCache);
    this.clearPeakCache();
  }

  /**
   * Empty the cache
   */
  _createClass(PeakCache, [{
    key: "clearPeakCache",
    value: function clearPeakCache() {
      /**
       * Flat array with entries that are always in pairs to mark the
       * beginning and end of each subrange.  This is a convenience so we can
       * iterate over the pairs for easy set difference operations.
       * @private
       */
      this.peakCacheRanges = [];
      /**
       * Length of the entire cachable region, used for resetting the cache
       * when this changes (zoom events, for instance).
       * @private
       */
      this.peakCacheLength = -1;
    }

    /**
     * Add a range of peaks to the cache
     *
     * @param {number} length The length of the range
     * @param {number} start The x offset of the start of the range
     * @param {number} end The x offset of the end of the range
     * @return {Number.<Array[]>} Array with arrays of numbers
     */
  }, {
    key: "addRangeToPeakCache",
    value: function addRangeToPeakCache(length, start, end) {
      if (length != this.peakCacheLength) {
        this.clearPeakCache();
        this.peakCacheLength = length;
      }

      // Return ranges that weren't in the cache before the call.
      var uncachedRanges = [];
      var i = 0;
      // Skip ranges before the current start.
      while (i < this.peakCacheRanges.length && this.peakCacheRanges[i] < start) {
        i++;
      }
      // If |i| is even, |start| falls after an existing range.  Otherwise,
      // |start| falls between an existing range, and the uncached region
      // starts when we encounter the next node in |peakCacheRanges| or
      // |end|, whichever comes first.
      if (i % 2 == 0) {
        uncachedRanges.push(start);
      }
      while (i < this.peakCacheRanges.length && this.peakCacheRanges[i] <= end) {
        uncachedRanges.push(this.peakCacheRanges[i]);
        i++;
      }
      // If |i| is even, |end| is after all existing ranges.
      if (i % 2 == 0) {
        uncachedRanges.push(end);
      }

      // Filter out the 0-length ranges.
      uncachedRanges = uncachedRanges.filter(function (item, pos, arr) {
        if (pos == 0) {
          return item != arr[pos + 1];
        } else if (pos == arr.length - 1) {
          return item != arr[pos - 1];
        }
        return item != arr[pos - 1] && item != arr[pos + 1];
      });

      // Merge the two ranges together, uncachedRanges will either contain
      // wholly new points, or duplicates of points in peakCacheRanges.  If
      // duplicates are detected, remove both and extend the range.
      this.peakCacheRanges = this.peakCacheRanges.concat(uncachedRanges);
      this.peakCacheRanges = this.peakCacheRanges.sort(function (a, b) {
        return a - b;
      }).filter(function (item, pos, arr) {
        if (pos == 0) {
          return item != arr[pos + 1];
        } else if (pos == arr.length - 1) {
          return item != arr[pos - 1];
        }
        return item != arr[pos - 1] && item != arr[pos + 1];
      });

      // Push the uncached ranges into an array of arrays for ease of
      // iteration in the functions that call this.
      var uncachedRangePairs = [];
      for (i = 0; i < uncachedRanges.length; i += 2) {
        uncachedRangePairs.push([uncachedRanges[i], uncachedRanges[i + 1]]);
      }
      return uncachedRangePairs;
    }

    /**
     * For testing
     *
     * @return {Number.<Array[]>} Array with arrays of numbers
     */
  }, {
    key: "getCacheRanges",
    value: function getCacheRanges() {
      var peakCacheRangePairs = [];
      var i;
      for (i = 0; i < this.peakCacheRanges.length; i += 2) {
        peakCacheRangePairs.push([this.peakCacheRanges[i], this.peakCacheRanges[i + 1]]);
      }
      return peakCacheRangePairs;
    }
  }]);
  return PeakCache;
}();
exports["default"] = PeakCache;
module.exports = exports.default;

/***/ }),

/***/ "./src/util/absMax.js":
/*!****************************!*\
  !*** ./src/util/absMax.js ***!
  \****************************/
/***/ ((module, exports, __nested_webpack_require_89965__) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = absMax;
var _max = _interopRequireDefault(__nested_webpack_require_89965__(/*! ./max */ "./src/util/max.js"));
var _min = _interopRequireDefault(__nested_webpack_require_89965__(/*! ./min */ "./src/util/min.js"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
/**
 * Get the largest absolute value in an array
 *
 * @param   {Array} values Array of numbers
 * @returns {Number} Largest number found
 * @example console.log(max([-3, 2, 1]), max([-3, 2, 4])); // logs 3 4
 * @since 4.3.0
 */
function absMax(values) {
  var max = (0, _max.default)(values);
  var min = (0, _min.default)(values);
  return -min > max ? -min : max;
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/clamp.js":
/*!***************************!*\
  !*** ./src/util/clamp.js ***!
  \***************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = clamp;
/**
 * Returns a number limited to the given range.
 *
 * @param {number} val The number to be limited to a range
 * @param {number} min The lower boundary of the limit range
 * @param {number} max The upper boundary of the limit range
 * @returns {number} A number in the range [min, max]
 */
function clamp(val, min, max) {
  return Math.min(Math.max(min, val), max);
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/fetch.js":
/*!***************************!*\
  !*** ./src/util/fetch.js ***!
  \***************************/
/***/ ((module, exports, __nested_webpack_require_91642__) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = fetchFile;
var _observer = _interopRequireDefault(__nested_webpack_require_91642__(/*! ./observer */ "./src/util/observer.js"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
var ProgressHandler = /*#__PURE__*/function () {
  /**
   * Instantiate ProgressHandler
   *
   * @param {Observer} instance The `fetchFile` observer instance.
   * @param {Number} contentLength Content length.
   * @param {Response} response Response object.
   */
  function ProgressHandler(instance, contentLength, response) {
    _classCallCheck(this, ProgressHandler);
    this.instance = instance;
    this.instance._reader = response.body.getReader();
    this.total = parseInt(contentLength, 10);
    this.loaded = 0;
  }

  /**
   * A method that is called once, immediately after the `ReadableStream``
   * is constructed.
   *
   * @param {ReadableStreamDefaultController} controller Controller instance
   *     used to control the stream.
   */
  _createClass(ProgressHandler, [{
    key: "start",
    value: function start(controller) {
      var _this = this;
      var read = function read() {
        // instance._reader.read() returns a promise that resolves
        // when a value has been received
        _this.instance._reader.read().then(function (_ref) {
          var done = _ref.done,
            value = _ref.value;
          // result objects contain two properties:
          // done  - true if the stream has already given you all its data.
          // value - some data. Always undefined when done is true.
          if (done) {
            // ensure onProgress called when content-length=0
            if (_this.total === 0) {
              _this.instance.onProgress.call(_this.instance, {
                loaded: _this.loaded,
                total: _this.total,
                lengthComputable: false
              });
            }
            // no more data needs to be consumed, close the stream
            controller.close();
            return;
          }
          _this.loaded += value.byteLength;
          _this.instance.onProgress.call(_this.instance, {
            loaded: _this.loaded,
            total: _this.total,
            lengthComputable: !(_this.total === 0)
          });
          // enqueue the next data chunk into our target stream
          controller.enqueue(value);
          read();
        }).catch(function (error) {
          controller.error(error);
        });
      };
      read();
    }
  }]);
  return ProgressHandler;
}();
/**
 * Load a file using `fetch`.
 *
 * @param {object} options Request options to use. See example below.
 * @returns {Observer} Observer instance
 * @example
 * // default options
 * let options = {
 *     url: undefined,
 *     method: 'GET',
 *     mode: 'cors',
 *     credentials: 'same-origin',
 *     cache: 'default',
 *     responseType: 'json',
 *     requestHeaders: [],
 *     redirect: 'follow',
 *     referrer: 'client'
 * };
 *
 * // override some options
 * options.url = '../media/demo.wav';

 * // available types: 'arraybuffer', 'blob', 'json' or 'text'
 * options.responseType = 'arraybuffer';
 *
 * // make fetch call
 * let request = util.fetchFile(options);
 *
 * // listen for events
 * request.on('progress', e => {
 *     console.log('progress', e);
 * });
 *
 * request.on('success', data => {
 *     console.log('success!', data);
 * });
 *
 * request.on('error', e => {
 *     console.warn('fetchFile error: ', e);
 * });
 */
function fetchFile(options) {
  if (!options) {
    throw new Error('fetch options missing');
  } else if (!options.url) {
    throw new Error('fetch url missing');
  }
  var instance = new _observer.default();
  var fetchHeaders = new Headers();
  var fetchRequest = new Request(options.url);

  // add ability to abort
  instance.controller = new AbortController();

  // check if headers have to be added
  if (options && options.requestHeaders) {
    // add custom request headers
    options.requestHeaders.forEach(function (header) {
      fetchHeaders.append(header.key, header.value);
    });
  }

  // parse fetch options
  var responseType = options.responseType || 'json';
  var fetchOptions = {
    method: options.method || 'GET',
    headers: fetchHeaders,
    mode: options.mode || 'cors',
    credentials: options.credentials || 'same-origin',
    cache: options.cache || 'default',
    redirect: options.redirect || 'follow',
    referrer: options.referrer || 'client',
    signal: instance.controller.signal
  };
  fetch(fetchRequest, fetchOptions).then(function (response) {
    // store response reference
    instance.response = response;
    var progressAvailable = true;
    if (!response.body) {
      // ReadableStream is not yet supported in this browser
      // see https://developer.mozilla.org/en-US/docs/Web/API/ReadableStream
      progressAvailable = false;
    }

    // Server must send CORS header "Access-Control-Expose-Headers: content-length"
    var contentLength = response.headers.get('content-length');
    if (contentLength === null) {
      // Content-Length server response header missing.
      // Don't evaluate download progress if we can't compare against a total size
      // see https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS#Access-Control-Expose-Headers
      progressAvailable = false;
    }
    if (!progressAvailable) {
      // not able to check download progress so skip it
      return response;
    }

    // fire progress event when during load
    instance.onProgress = function (e) {
      instance.fireEvent('progress', e);
    };
    return new Response(new ReadableStream(new ProgressHandler(instance, contentLength, response)), fetchOptions);
  }).then(function (response) {
    var errMsg;
    if (response.ok) {
      switch (responseType) {
        case 'arraybuffer':
          return response.arrayBuffer();
        case 'json':
          return response.json();
        case 'blob':
          return response.blob();
        case 'text':
          return response.text();
        default:
          errMsg = 'Unknown responseType: ' + responseType;
          break;
      }
    }
    if (!errMsg) {
      errMsg = 'HTTP error status: ' + response.status;
    }
    throw new Error(errMsg);
  }).then(function (response) {
    instance.fireEvent('success', response);
  }).catch(function (error) {
    instance.fireEvent('error', error);
  });

  // return the fetch request
  instance.fetchRequest = fetchRequest;
  return instance;
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/frame.js":
/*!***************************!*\
  !*** ./src/util/frame.js ***!
  \***************************/
/***/ ((module, exports, __nested_webpack_require_99220__) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = frame;
var _requestAnimationFrame = _interopRequireDefault(__nested_webpack_require_99220__(/*! ./request-animation-frame */ "./src/util/request-animation-frame.js"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
/**
 * Create a function which will be called at the next requestAnimationFrame
 * cycle
 *
 * @param {function} func The function to call
 *
 * @return {func} The function wrapped within a requestAnimationFrame
 */
function frame(func) {
  return function () {
    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }
    return (0, _requestAnimationFrame.default)(function () {
      return func.apply(void 0, args);
    });
  };
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/get-id.js":
/*!****************************!*\
  !*** ./src/util/get-id.js ***!
  \****************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = getId;
/**
 * Get a random prefixed ID
 *
 * @param {String} prefix Prefix to use. Default is `'wavesurfer_'`.
 * @returns {String} Random prefixed ID
 * @example
 * console.log(getId()); // logs 'wavesurfer_b5pors4ru6g'
 *
 * let prefix = 'foo-';
 * console.log(getId(prefix)); // logs 'foo-b5pors4ru6g'
 */
function getId(prefix) {
  if (prefix === undefined) {
    prefix = 'wavesurfer_';
  }
  return prefix + Math.random().toString(32).substring(2);
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/index.js":
/*!***************************!*\
  !*** ./src/util/index.js ***!
  \***************************/
/***/ ((__unused_webpack_module, exports, __nested_webpack_require_101100__) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
Object.defineProperty(exports, "Observer", ({
  enumerable: true,
  get: function get() {
    return _observer.default;
  }
}));
Object.defineProperty(exports, "absMax", ({
  enumerable: true,
  get: function get() {
    return _absMax.default;
  }
}));
Object.defineProperty(exports, "clamp", ({
  enumerable: true,
  get: function get() {
    return _clamp.default;
  }
}));
Object.defineProperty(exports, "debounce", ({
  enumerable: true,
  get: function get() {
    return _debounce.default;
  }
}));
Object.defineProperty(exports, "fetchFile", ({
  enumerable: true,
  get: function get() {
    return _fetch.default;
  }
}));
Object.defineProperty(exports, "frame", ({
  enumerable: true,
  get: function get() {
    return _frame.default;
  }
}));
Object.defineProperty(exports, "getId", ({
  enumerable: true,
  get: function get() {
    return _getId.default;
  }
}));
Object.defineProperty(exports, "ignoreSilenceMode", ({
  enumerable: true,
  get: function get() {
    return _silenceMode.default;
  }
}));
Object.defineProperty(exports, "max", ({
  enumerable: true,
  get: function get() {
    return _max.default;
  }
}));
Object.defineProperty(exports, "min", ({
  enumerable: true,
  get: function get() {
    return _min.default;
  }
}));
Object.defineProperty(exports, "preventClick", ({
  enumerable: true,
  get: function get() {
    return _preventClick.default;
  }
}));
Object.defineProperty(exports, "requestAnimationFrame", ({
  enumerable: true,
  get: function get() {
    return _requestAnimationFrame.default;
  }
}));
Object.defineProperty(exports, "style", ({
  enumerable: true,
  get: function get() {
    return _style.default;
  }
}));
Object.defineProperty(exports, "withOrientation", ({
  enumerable: true,
  get: function get() {
    return _orientation.default;
  }
}));
var _getId = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./get-id */ "./src/util/get-id.js"));
var _max = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./max */ "./src/util/max.js"));
var _min = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./min */ "./src/util/min.js"));
var _absMax = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./absMax */ "./src/util/absMax.js"));
var _observer = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./observer */ "./src/util/observer.js"));
var _style = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./style */ "./src/util/style.js"));
var _requestAnimationFrame = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./request-animation-frame */ "./src/util/request-animation-frame.js"));
var _frame = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./frame */ "./src/util/frame.js"));
var _debounce = _interopRequireDefault(__nested_webpack_require_101100__(/*! debounce */ "./node_modules/debounce/index.js"));
var _preventClick = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./prevent-click */ "./src/util/prevent-click.js"));
var _fetch = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./fetch */ "./src/util/fetch.js"));
var _clamp = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./clamp */ "./src/util/clamp.js"));
var _orientation = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./orientation */ "./src/util/orientation.js"));
var _silenceMode = _interopRequireDefault(__nested_webpack_require_101100__(/*! ./silence-mode */ "./src/util/silence-mode.js"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/***/ }),

/***/ "./src/util/max.js":
/*!*************************!*\
  !*** ./src/util/max.js ***!
  \*************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = max;
/**
 * Get the largest value
 *
 * @param   {Array} values Array of numbers
 * @returns {Number} Largest number found
 * @example console.log(max([1, 2, 3])); // logs 3
 */
function max(values) {
  var largest = -Infinity;
  Object.keys(values).forEach(function (i) {
    if (values[i] > largest) {
      largest = values[i];
    }
  });
  return largest;
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/min.js":
/*!*************************!*\
  !*** ./src/util/min.js ***!
  \*************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = min;
/**
 * Get the smallest value
 *
 * @param   {Array} values Array of numbers
 * @returns {Number} Smallest number found
 * @example console.log(min([1, 2, 3])); // logs 1
 */
function min(values) {
  var smallest = Number(Infinity);
  Object.keys(values).forEach(function (i) {
    if (values[i] < smallest) {
      smallest = values[i];
    }
  });
  return smallest;
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/observer.js":
/*!******************************!*\
  !*** ./src/util/observer.js ***!
  \******************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
/**
 * @typedef {Object} ListenerDescriptor
 * @property {string} name The name of the event
 * @property {function} callback The callback
 * @property {function} un The function to call to remove the listener
 */
/**
 * Observer class
 */
var Observer = /*#__PURE__*/function () {
  /**
   * Instantiate Observer
   */
  function Observer() {
    _classCallCheck(this, Observer);
    /**
     * @private
     * @todo Initialise the handlers here already and remove the conditional
     * assignment in `on()`
     */
    this._disabledEventEmissions = [];
    this.handlers = null;
  }
  /**
   * Attach a handler function for an event.
   *
   * @param {string} event Name of the event to listen to
   * @param {function} fn The callback to trigger when the event is fired
   * @return {ListenerDescriptor} The event descriptor
   */
  _createClass(Observer, [{
    key: "on",
    value: function on(event, fn) {
      var _this = this;
      if (!this.handlers) {
        this.handlers = {};
      }
      var handlers = this.handlers[event];
      if (!handlers) {
        handlers = this.handlers[event] = [];
      }
      handlers.push(fn);

      // Return an event descriptor
      return {
        name: event,
        callback: fn,
        un: function un(e, fn) {
          return _this.un(e, fn);
        }
      };
    }

    /**
     * Remove an event handler.
     *
     * @param {string} event Name of the event the listener that should be
     * removed listens to
     * @param {function} fn The callback that should be removed
     */
  }, {
    key: "un",
    value: function un(event, fn) {
      if (!this.handlers) {
        return;
      }
      var handlers = this.handlers[event];
      var i;
      if (handlers) {
        if (fn) {
          for (i = handlers.length - 1; i >= 0; i--) {
            if (handlers[i] == fn) {
              handlers.splice(i, 1);
            }
          }
        } else {
          handlers.length = 0;
        }
      }
    }

    /**
     * Remove all event handlers.
     */
  }, {
    key: "unAll",
    value: function unAll() {
      this.handlers = null;
    }

    /**
     * Attach a handler to an event. The handler is executed at most once per
     * event type.
     *
     * @param {string} event The event to listen to
     * @param {function} handler The callback that is only to be called once
     * @return {ListenerDescriptor} The event descriptor
     */
  }, {
    key: "once",
    value: function once(event, handler) {
      var _this2 = this;
      var fn = function fn() {
        for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
          args[_key] = arguments[_key];
        }
        /*  eslint-disable no-invalid-this */
        handler.apply(_this2, args);
        /*  eslint-enable no-invalid-this */
        setTimeout(function () {
          _this2.un(event, fn);
        }, 0);
      };
      return this.on(event, fn);
    }

    /**
     * Disable firing a list of events by name. When specified, event handlers for any event type
     * passed in here will not be called.
     *
     * @since 4.0.0
     * @param {string[]} eventNames an array of event names to disable emissions for
     * @example
     * // disable seek and interaction events
     * wavesurfer.setDisabledEventEmissions(['seek', 'interaction']);
     */
  }, {
    key: "setDisabledEventEmissions",
    value: function setDisabledEventEmissions(eventNames) {
      this._disabledEventEmissions = eventNames;
    }

    /**
     * plugins borrow part of this class without calling the constructor,
     * so we have to be careful about _disabledEventEmissions
     */
  }, {
    key: "_isDisabledEventEmission",
    value: function _isDisabledEventEmission(event) {
      return this._disabledEventEmissions && this._disabledEventEmissions.includes(event);
    }

    /**
     * Manually fire an event
     *
     * @param {string} event The event to fire manually
     * @param {...any} args The arguments with which to call the listeners
     */
  }, {
    key: "fireEvent",
    value: function fireEvent(event) {
      for (var _len2 = arguments.length, args = new Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
        args[_key2 - 1] = arguments[_key2];
      }
      if (!this.handlers || this._isDisabledEventEmission(event)) {
        return;
      }
      var handlers = this.handlers[event];
      handlers && handlers.forEach(function (fn) {
        fn.apply(void 0, args);
      });
    }
  }]);
  return Observer;
}();
exports["default"] = Observer;
module.exports = exports.default;

/***/ }),

/***/ "./src/util/orientation.js":
/*!*********************************!*\
  !*** ./src/util/orientation.js ***!
  \*********************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = withOrientation;
var verticalPropMap = {
  width: 'height',
  height: 'width',
  overflowX: 'overflowY',
  overflowY: 'overflowX',
  clientWidth: 'clientHeight',
  clientHeight: 'clientWidth',
  clientX: 'clientY',
  clientY: 'clientX',
  scrollWidth: 'scrollHeight',
  scrollLeft: 'scrollTop',
  offsetLeft: 'offsetTop',
  offsetTop: 'offsetLeft',
  offsetHeight: 'offsetWidth',
  offsetWidth: 'offsetHeight',
  left: 'top',
  right: 'bottom',
  top: 'left',
  bottom: 'right',
  borderRightStyle: 'borderBottomStyle',
  borderRightWidth: 'borderBottomWidth',
  borderRightColor: 'borderBottomColor'
};

/**
 * Convert a horizontally-oriented property name to a vertical one.
 *
 * @param {string} prop A property name
 * @param {bool} vertical Whether the element is oriented vertically
 * @returns {string} prop, converted appropriately
 */
function mapProp(prop, vertical) {
  if (Object.prototype.hasOwnProperty.call(verticalPropMap, prop)) {
    return vertical ? verticalPropMap[prop] : prop;
  } else {
    return prop;
  }
}
var isProxy = Symbol("isProxy");

/**
 * Returns an appropriately oriented object based on vertical.
 * If vertical is true, attribute getting and setting will be mapped through
 * verticalPropMap, so that e.g. getting the object's .width will give its
 * .height instead.
 * Certain methods of an oriented object will return oriented objects as well.
 * Oriented objects can't be added to the DOM directly since they are Proxy objects
 * and thus fail typechecks. Use domElement to get the actual element for this.
 *
 * @param {object} target The object to be wrapped and oriented
 * @param {bool} vertical Whether the element is oriented vertically
 * @returns {Proxy} An oriented object with attr translation via verticalAttrMap
 * @since 5.0.0
 */
function withOrientation(target, vertical) {
  if (target[isProxy]) {
    return target;
  } else {
    return new Proxy(target, {
      get: function get(obj, prop, receiver) {
        if (prop === isProxy) {
          return true;
        } else if (prop === 'domElement') {
          return obj;
        } else if (prop === 'style') {
          return withOrientation(obj.style, vertical);
        } else if (prop === 'canvas') {
          return withOrientation(obj.canvas, vertical);
        } else if (prop === 'getBoundingClientRect') {
          return function () {
            return withOrientation(obj.getBoundingClientRect.apply(obj, arguments), vertical);
          };
        } else if (prop === 'getContext') {
          return function () {
            return withOrientation(obj.getContext.apply(obj, arguments), vertical);
          };
        } else {
          var value = obj[mapProp(prop, vertical)];
          return typeof value == 'function' ? value.bind(obj) : value;
        }
      },
      set: function set(obj, prop, value) {
        obj[mapProp(prop, vertical)] = value;
        return true;
      }
    });
  }
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/prevent-click.js":
/*!***********************************!*\
  !*** ./src/util/prevent-click.js ***!
  \***********************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = preventClick;
/**
 * Stops propagation of click event and removes event listener
 *
 * @private
 * @param {object} event The click event
 */
function preventClickHandler(event) {
  event.stopPropagation();
  document.body.removeEventListener('click', preventClickHandler, true);
}

/**
 * Starts listening for click event and prevent propagation
 *
 * @param {object} values Values
 */
function preventClick(values) {
  document.body.addEventListener('click', preventClickHandler, true);
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/request-animation-frame.js":
/*!*********************************************!*\
  !*** ./src/util/request-animation-frame.js ***!
  \*********************************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
/* eslint-disable valid-jsdoc */
/**
 * Returns the `requestAnimationFrame` function for the browser, or a shim with
 * `setTimeout` if the function is not found
 *
 * @return {function} Available `requestAnimationFrame` function for the browser
 */
var _default = (window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (callback, element) {
  return setTimeout(callback, 1000 / 60);
}).bind(window);
exports["default"] = _default;
module.exports = exports.default;

/***/ }),

/***/ "./src/util/silence-mode.js":
/*!**********************************!*\
  !*** ./src/util/silence-mode.js ***!
  \**********************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = ignoreSilenceMode;
/**
 * Ignores device silence mode when using the `WebAudio` backend.
 *
 * Many mobile devices contain a hardware button to mute the ringtone for incoming
 * calls and messages. Unfortunately, on some platforms like iOS, this also mutes
 * wavesurfer's audio when using the `WebAudio` backend. This function creates a
 * temporary `<audio>` element that makes sure the WebAudio backend keeps playing
 * when muting the device ringer.
 *
 * @since 5.2.0
 */
function ignoreSilenceMode() {
  // Set the src to a short bit of url encoded as a silent mp3
  // NOTE The silence MP3 must be high quality, when web audio sounds are played
  // in parallel the web audio sound is mixed to match the bitrate of the html sound
  // 0.01 seconds of silence VBR220-260 Joint Stereo 859B
  var audioData = "data:audio/mpeg;base64,//uQxAAAAAAAAAAAAAAAAAAAAAAAWGluZwAAAA8AAAACAAACcQCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA//////////////////////////////////////////////////////////////////8AAABhTEFNRTMuMTAwA8MAAAAAAAAAABQgJAUHQQAB9AAAAnGMHkkIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//sQxAADgnABGiAAQBCqgCRMAAgEAH///////////////7+n/9FTuQsQH//////2NG0jWUGlio5gLQTOtIoeR2WX////X4s9Atb/JRVCbBUpeRUq//////////////////9RUi0f2jn/+xDECgPCjAEQAABN4AAANIAAAAQVTEFNRTMuMTAwVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVQ==";

  // disable iOS Airplay (setting the attribute in js doesn't work)
  var tmp = document.createElement("div");
  tmp.innerHTML = '<audio x-webkit-airplay="deny"></audio>';
  var audioSilentMode = tmp.children.item(0);
  audioSilentMode.src = audioData;
  audioSilentMode.preload = "auto";
  audioSilentMode.type = "audio/mpeg";
  audioSilentMode.disableRemotePlayback = true;

  // play
  audioSilentMode.play();

  // cleanup
  audioSilentMode.remove();
  tmp.remove();
}
module.exports = exports.default;

/***/ }),

/***/ "./src/util/style.js":
/*!***************************!*\
  !*** ./src/util/style.js ***!
  \***************************/
/***/ ((module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = style;
/**
 * Apply a map of styles to an element
 *
 * @param {HTMLElement} el The element that the styles will be applied to
 * @param {Object} styles The map of propName: attribute, both are used as-is
 *
 * @return {HTMLElement} el
 */
function style(el, styles) {
  Object.keys(styles).forEach(function (prop) {
    if (el.style[prop] !== styles[prop]) {
      el.style[prop] = styles[prop];
    }
  });
  return el;
}
module.exports = exports.default;

/***/ }),

/***/ "./src/wavesurfer.js":
/*!***************************!*\
  !*** ./src/wavesurfer.js ***!
  \***************************/
/***/ ((module, exports, __nested_webpack_require_120041__) => {

"use strict";


function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var util = _interopRequireWildcard(__nested_webpack_require_120041__(/*! ./util */ "./src/util/index.js"));
var _drawer = _interopRequireDefault(__nested_webpack_require_120041__(/*! ./drawer.multicanvas */ "./src/drawer.multicanvas.js"));
var _webaudio = _interopRequireDefault(__nested_webpack_require_120041__(/*! ./webaudio */ "./src/webaudio.js"));
var _mediaelement = _interopRequireDefault(__nested_webpack_require_120041__(/*! ./mediaelement */ "./src/mediaelement.js"));
var _peakcache = _interopRequireDefault(__nested_webpack_require_120041__(/*! ./peakcache */ "./src/peakcache.js"));
var _mediaelementWebaudio = _interopRequireDefault(__nested_webpack_require_120041__(/*! ./mediaelement-webaudio */ "./src/mediaelement-webaudio.js"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
function _getRequireWildcardCache(nodeInterop) { if (typeof WeakMap !== "function") return null; var cacheBabelInterop = new WeakMap(); var cacheNodeInterop = new WeakMap(); return (_getRequireWildcardCache = function _getRequireWildcardCache(nodeInterop) { return nodeInterop ? cacheNodeInterop : cacheBabelInterop; })(nodeInterop); }
function _interopRequireWildcard(obj, nodeInterop) { if (!nodeInterop && obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { default: obj }; } var cache = _getRequireWildcardCache(nodeInterop); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (key !== "default" && Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj.default = obj; if (cache) { cache.set(obj, newObj); } return newObj; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
/*
 * This work is licensed under a BSD-3-Clause License.
 */
/** @external {HTMLElement} https://developer.mozilla.org/en/docs/Web/API/HTMLElement */
/** @external {OfflineAudioContext} https://developer.mozilla.org/en-US/docs/Web/API/OfflineAudioContext */
/** @external {File} https://developer.mozilla.org/en-US/docs/Web/API/File */
/** @external {Blob} https://developer.mozilla.org/en-US/docs/Web/API/Blob */
/** @external {CanvasRenderingContext2D} https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D */
/** @external {MediaStreamConstraints} https://developer.mozilla.org/en-US/docs/Web/API/MediaStreamConstraints */
/** @external {AudioNode} https://developer.mozilla.org/de/docs/Web/API/AudioNode */
/**
 * @typedef {Object} WavesurferParams
 * @property {AudioContext} audioContext=null Use your own previously
 * initialized AudioContext or leave blank.
 * @property {number} audioRate=1 Speed at which to play audio. Lower number is
 * slower.
 * @property {ScriptProcessorNode} audioScriptProcessor=null Use your own previously
 * initialized ScriptProcessorNode or leave blank.
 * @property {boolean} autoCenter=true If a scrollbar is present, center the
 * waveform on current progress
 * @property {number} autoCenterRate=5 If autoCenter is active, rate at which the
 * waveform is centered
 * @property {boolean} autoCenterImmediately=false If autoCenter is active, immediately
 * center waveform on current progress
 * @property {string} backend='WebAudio' `'WebAudio'|'MediaElement'|'MediaElementWebAudio'` In most cases
 * you don't have to set this manually. MediaElement is a fallback for unsupported browsers.
 * MediaElementWebAudio allows to use WebAudio API also with big audio files, loading audio like with
 * MediaElement backend (HTML5 audio tag). You have to use the same methods of MediaElement backend for loading and
 * playback, giving also peaks, so the audio data are not decoded. In this way you can use WebAudio features, like filters,
 * also with audio with big duration. For example:
 * ` wavesurfer.load(url | HTMLMediaElement, peaks, preload, duration);
 *   wavesurfer.play();
 *   wavesurfer.setFilter(customFilter);
 * `
 * @property {string} backgroundColor=null Change background color of the
 * waveform container.
 * @property {number} barHeight=1 The height of the wave bars.
 * @property {number} barRadius=0 The radius of the wave bars. Makes bars rounded
 * @property {number} barGap=null The optional spacing between bars of the wave,
 * if not provided will be calculated in legacy format.
 * @property {number} barWidth=null Draw the waveform using bars.
 * @property {number} barMinHeight=null If specified, draw at least a bar of this height,
 * eliminating waveform gaps
 * @property {boolean} closeAudioContext=false Close and nullify all audio
 * contexts when the destroy method is called.
 * @property {!string|HTMLElement} container CSS selector or HTML element where
 * the waveform should be drawn. This is the only required parameter.
 * @property {string} cursorColor='#333' The fill color of the cursor indicating
 * the playhead position.
 * @property {number} cursorWidth=1 Measured in pixels.
 * @property {object} drawingContextAttributes={desynchronized: false} Drawing context
 * attributes.
 * @property {number} duration=null Optional audio length so pre-rendered peaks
 * can be display immediately for example.
 * @property {boolean} fillParent=true Whether to fill the entire container or
 * draw only according to `minPxPerSec`.
 * @property {boolean} forceDecode=false Force decoding of audio using web audio
 * when zooming to get a more detailed waveform.
 * @property {number} height=128 The height of the waveform. Measured in
 * pixels.
 * @property {boolean} hideScrollbar=false Whether to hide the horizontal
 * scrollbar when one would normally be shown.
 * @property {boolean} hideCursor=false Whether to hide the mouse cursor
 * when one would normally be shown by default.
 * @property {boolean} ignoreSilenceMode=false If true, ignores device silence mode
 * when using the `WebAudio` backend.
 * @property {boolean} interact=true Whether the mouse interaction will be
 * enabled at initialization. You can switch this parameter at any time later
 * on.
 * @property {boolean} loopSelection=true (Use with regions plugin) Enable
 * looping of selected regions
 * @property {number} maxCanvasWidth=4000 Maximum width of a single canvas in
 * pixels, excluding a small overlap (2 * `pixelRatio`, rounded up to the next
 * even integer). If the waveform is longer than this value, additional canvases
 * will be used to render the waveform, which is useful for very large waveforms
 * that may be too wide for browsers to draw on a single canvas.
 * @property {boolean} mediaControls=false (Use with backend `MediaElement` or `MediaElementWebAudio`)
 * this enables the native controls for the media element
 * @property {string} mediaType='audio' (Use with backend `MediaElement` or `MediaElementWebAudio`)
 * `'audio'|'video'` ('video' only for `MediaElement`)
 * @property {number} minPxPerSec=20 Minimum number of pixels per second of
 * audio.
 * @property {boolean} normalize=false If true, normalize by the maximum peak
 * instead of 1.0.
 * @property {boolean} partialRender=false Use the PeakCache to improve
 * rendering speed of large waveforms
 * @property {number} pixelRatio=window.devicePixelRatio The pixel ratio used to
 * calculate display
 * @property {PluginDefinition[]} plugins=[] An array of plugin definitions to
 * register during instantiation, they will be directly initialised unless they
 * are added with the `deferInit` property set to true.
 * @property {string} progressColor='#555' The fill color of the part of the
 * waveform behind the cursor. When `progressColor` and `waveColor` are the same
 * the progress wave is not rendered at all.
 * @property {boolean} removeMediaElementOnDestroy=true Set to false to keep the
 * media element in the DOM when the player is destroyed. This is useful when
 * reusing an existing media element via the `loadMediaElement` method.
 * @property {Object} renderer=MultiCanvas Can be used to inject a custom
 * renderer.
 * @property {boolean|number} responsive=false If set to `true` resize the
 * waveform, when the window is resized. This is debounced with a `100ms`
 * timeout by default. If this parameter is a number it represents that timeout.
 * @property {boolean} rtl=false If set to `true`, renders waveform from
 * right-to-left.
 * @property {boolean} scrollParent=false Whether to scroll the container with a
 * lengthy waveform. Otherwise the waveform is shrunk to the container width
 * (see fillParent).
 * @property {number} skipLength=2 Number of seconds to skip with the
 * skipForward() and skipBackward() methods.
 * @property {boolean} splitChannels=false Render with separate waveforms for
 * the channels of the audio
 * @property {SplitChannelOptions} splitChannelsOptions={} Options for splitChannel rendering
 * @property {boolean} vertical=false Render the waveform vertically instead of horizontally.
 * @property {string} waveColor='#999' The fill color of the waveform after the
 * cursor.
 * @property {object} xhr={} XHR options. For example:
 * `let xhr = {
 *     cache: 'default',
 *     mode: 'cors',
 *     method: 'GET',
 *     credentials: 'same-origin',
 *     redirect: 'follow',
 *     referrer: 'client',
 *     requestHeaders: [
 *         {
 *             key: 'Authorization',
 *             value: 'my-token'
 *         }
 *     ]
 * };`
 */
/**
 * @typedef {Object} PluginDefinition
 * @desc The Object used to describe a plugin
 * @example wavesurfer.addPlugin(pluginDefinition);
 * @property {string} name The name of the plugin, the plugin instance will be
 * added as a property to the wavesurfer instance under this name
 * @property {?Object} staticProps The properties that should be added to the
 * wavesurfer instance as static properties
 * @property {?boolean} deferInit Don't initialise plugin
 * automatically
 * @property {Object} params={} The plugin parameters, they are the first parameter
 * passed to the plugin class constructor function
 * @property {PluginClass} instance The plugin instance factory, is called with
 * the dependency specified in extends. Returns the plugin class.
 */
/**
 * @typedef {Object} SplitChannelOptions
 * @desc parameters applied when splitChannels option is true
 * @property {boolean} overlay=false determines whether channels are rendered on top of each other or on separate tracks
 * @property {object} channelColors={} object describing color for each channel. Example:
 * {
 *     0: {
 *         progressColor: 'green',
 *         waveColor: 'pink'
 *     },
 *     1: {
 *         progressColor: 'orange',
 *         waveColor: 'purple'
 *     }
 * }
 * @property {number[]} filterChannels=[] indexes of channels to be hidden from rendering
 * @property {boolean} relativeNormalization=false determines whether
 * normalization is done per channel or maintains proportionality between
 * channels. Only applied when normalize and splitChannels are both true.
 * @property {boolean} splitDragSelection=false determines if drag selection in regions
 * plugin works separately on each channel or only one selection for all channels
 * @since 4.3.0
 */
/**
 * @interface PluginClass
 *
 * @desc This is the interface which is implemented by all plugin classes. Note
 * that this only turns into an observer after being passed through
 * `wavesurfer.addPlugin`.
 *
 * @extends {Observer}
 */
var PluginClass = /*#__PURE__*/function () {
  /**
   * Construct the plugin
   *
   * @param {Object} params={} The plugin params (specific to the plugin)
   * @param {Object} ws The wavesurfer instance
   */
  function PluginClass(params, ws) {
    _classCallCheck(this, PluginClass);
  }
  /**
   * Initialise the plugin
   *
   * Start doing something. This is called by
   * `wavesurfer.initPlugin(pluginName)`
   */
  _createClass(PluginClass, [{
    key: "create",
    value:
    /**
     * Plugin definition factory
     *
     * This function must be used to create a plugin definition which can be
     * used by wavesurfer to correctly instantiate the plugin.
     *
     * It returns a `PluginDefinition` object representing the plugin.
     *
     * @param {Object} params={} The plugin params (specific to the plugin)
     */
    function create(params) {}
  }, {
    key: "init",
    value: function init() {}
    /**
     * Destroy the plugin instance
     *
     * Stop doing something. This is called by
     * `wavesurfer.destroyPlugin(pluginName)`
     */
  }, {
    key: "destroy",
    value: function destroy() {}
  }]);
  return PluginClass;
}();
/**
 * WaveSurfer core library class
 *
 * @extends {Observer}
 * @example
 * const params = {
 *   container: '#waveform',
 *   waveColor: 'violet',
 *   progressColor: 'purple'
 * };
 *
 * // initialise like this
 * const wavesurfer = WaveSurfer.create(params);
 *
 * // or like this ...
 * const wavesurfer = new WaveSurfer(params);
 * wavesurfer.init();
 *
 * // load audio file
 * wavesurfer.load('example/media/demo.wav');
 */
var WaveSurfer = /*#__PURE__*/function (_util$Observer) {
  _inherits(WaveSurfer, _util$Observer);
  var _super = _createSuper(WaveSurfer);
  /**
   * Initialise wavesurfer instance
   *
   * @param {WavesurferParams} params Instantiation options for wavesurfer
   * @example
   * const wavesurfer = new WaveSurfer(params);
   * @returns {this} Wavesurfer instance
   */
  function WaveSurfer(params) {
    var _this;
    _classCallCheck(this, WaveSurfer);
    _this = _super.call(this);
    /**
     * Extract relevant parameters (or defaults)
     * @private
     */
    _defineProperty(_assertThisInitialized(_this), "defaultParams", {
      audioContext: null,
      audioScriptProcessor: null,
      audioRate: 1,
      autoCenter: true,
      autoCenterRate: 5,
      autoCenterImmediately: false,
      backend: 'WebAudio',
      backgroundColor: null,
      barHeight: 1,
      barRadius: 0,
      barGap: null,
      barMinHeight: null,
      container: null,
      cursorColor: '#333',
      cursorWidth: 1,
      dragSelection: true,
      drawingContextAttributes: {
        // Boolean that hints the user agent to reduce the latency
        // by desynchronizing the canvas paint cycle from the event
        // loop
        desynchronized: false
      },
      duration: null,
      fillParent: true,
      forceDecode: false,
      height: 128,
      hideScrollbar: false,
      hideCursor: false,
      ignoreSilenceMode: false,
      interact: true,
      loopSelection: true,
      maxCanvasWidth: 4000,
      mediaContainer: null,
      mediaControls: false,
      mediaType: 'audio',
      minPxPerSec: 20,
      normalize: false,
      partialRender: false,
      pixelRatio: window.devicePixelRatio || screen.deviceXDPI / screen.logicalXDPI,
      plugins: [],
      progressColor: '#555',
      removeMediaElementOnDestroy: true,
      renderer: _drawer.default,
      responsive: false,
      rtl: false,
      scrollParent: false,
      skipLength: 2,
      splitChannels: false,
      splitChannelsOptions: {
        overlay: false,
        channelColors: {},
        filterChannels: [],
        relativeNormalization: false,
        splitDragSelection: false
      },
      vertical: false,
      waveColor: '#999',
      xhr: {}
    });
    _defineProperty(_assertThisInitialized(_this), "backends", {
      MediaElement: _mediaelement.default,
      WebAudio: _webaudio.default,
      MediaElementWebAudio: _mediaelementWebaudio.default
    });
    _defineProperty(_assertThisInitialized(_this), "util", util);
    _this.params = Object.assign({}, _this.defaultParams, params);
    _this.params.splitChannelsOptions = Object.assign({}, _this.defaultParams.splitChannelsOptions, params.splitChannelsOptions);
    /** @private */
    _this.container = 'string' == typeof params.container ? document.querySelector(_this.params.container) : _this.params.container;
    if (!_this.container) {
      throw new Error('Container element not found');
    }
    if (_this.params.mediaContainer == null) {
      /** @private */
      _this.mediaContainer = _this.container;
    } else if (typeof _this.params.mediaContainer == 'string') {
      /** @private */
      _this.mediaContainer = document.querySelector(_this.params.mediaContainer);
    } else {
      /** @private */
      _this.mediaContainer = _this.params.mediaContainer;
    }
    if (!_this.mediaContainer) {
      throw new Error('Media Container element not found');
    }
    if (_this.params.maxCanvasWidth <= 1) {
      throw new Error('maxCanvasWidth must be greater than 1');
    } else if (_this.params.maxCanvasWidth % 2 == 1) {
      throw new Error('maxCanvasWidth must be an even number');
    }
    if (_this.params.rtl === true) {
      if (_this.params.vertical === true) {
        util.style(_this.container, {
          transform: 'rotateX(180deg)'
        });
      } else {
        util.style(_this.container, {
          transform: 'rotateY(180deg)'
        });
      }
    }
    if (_this.params.backgroundColor) {
      _this.setBackgroundColor(_this.params.backgroundColor);
    }

    /**
     * @private Used to save the current volume when muting so we can
     * restore once unmuted
     * @type {number}
     */
    _this.savedVolume = 0;

    /**
     * @private The current muted state
     * @type {boolean}
     */
    _this.isMuted = false;

    /**
     * @private Will hold a list of event descriptors that need to be
     * canceled on subsequent loads of audio
     * @type {Object[]}
     */
    _this.tmpEvents = [];

    /**
     * @private Holds any running audio downloads
     * @type {Observer}
     */
    _this.currentRequest = null;
    /** @private */
    _this.arraybuffer = null;
    /** @private */
    _this.drawer = null;
    /** @private */
    _this.backend = null;
    /** @private */
    _this.peakCache = null;

    // cache constructor objects
    if (typeof _this.params.renderer !== 'function') {
      throw new Error('Renderer parameter is invalid');
    }
    /**
     * @private The uninitialised Drawer class
     */
    _this.Drawer = _this.params.renderer;
    /**
     * @private The uninitialised Backend class
     */
    // Back compat
    if (_this.params.backend == 'AudioElement') {
      _this.params.backend = 'MediaElement';
    }
    if ((_this.params.backend == 'WebAudio' || _this.params.backend === 'MediaElementWebAudio') && !_webaudio.default.prototype.supportsWebAudio.call(null)) {
      _this.params.backend = 'MediaElement';
    }
    _this.Backend = _this.backends[_this.params.backend];

    /**
     * @private map of plugin names that are currently initialised
     */
    _this.initialisedPluginList = {};
    /** @private */
    _this.isDestroyed = false;

    /**
     * Get the current ready status.
     *
     * @example const isReady = wavesurfer.isReady;
     * @return {boolean}
     */
    _this.isReady = false;

    // responsive debounced event listener. If this.params.responsive is not
    // set, this is never called. Use 100ms or this.params.responsive as
    // timeout for the debounce function.
    var prevWidth = 0;
    _this._onResize = util.debounce(function () {
      if (_this.drawer.wrapper && prevWidth != _this.drawer.wrapper.clientWidth && !_this.params.scrollParent) {
        prevWidth = _this.drawer.wrapper.clientWidth;
        if (prevWidth) {
          // redraw only if waveform container is rendered and has a width
          _this.drawer.fireEvent('redraw');
        }
      }
    }, typeof _this.params.responsive === 'number' ? _this.params.responsive : 100);
    return _possibleConstructorReturn(_this, _assertThisInitialized(_this));
  }

  /**
   * Initialise the wave
   *
   * @example
   * var wavesurfer = new WaveSurfer(params);
   * wavesurfer.init();
   * @return {this} The wavesurfer instance
   */
  _createClass(WaveSurfer, [{
    key: "init",
    value: function init() {
      this.registerPlugins(this.params.plugins);
      this.createDrawer();
      this.createBackend();
      this.createPeakCache();
      return this;
    }

    /**
     * Add and initialise array of plugins (if `plugin.deferInit` is falsey),
     * this function is called in the init function of wavesurfer
     *
     * @param {PluginDefinition[]} plugins An array of plugin definitions
     * @emits {WaveSurfer#plugins-registered} Called with the array of plugin definitions
     * @return {this} The wavesurfer instance
     */
  }, {
    key: "registerPlugins",
    value: function registerPlugins(plugins) {
      var _this2 = this;
      // first instantiate all the plugins
      plugins.forEach(function (plugin) {
        return _this2.addPlugin(plugin);
      });

      // now run the init functions
      plugins.forEach(function (plugin) {
        // call init function of the plugin if deferInit is falsey
        // in that case you would manually use initPlugins()
        if (!plugin.deferInit) {
          _this2.initPlugin(plugin.name);
        }
      });
      this.fireEvent('plugins-registered', plugins);
      return this;
    }

    /**
     * Get a map of plugin names that are currently initialised
     *
     * @example wavesurfer.getPlugins();
     * @return {Object} Object with plugin names
     */
  }, {
    key: "getActivePlugins",
    value: function getActivePlugins() {
      return this.initialisedPluginList;
    }

    /**
     * Add a plugin object to wavesurfer
     *
     * @param {PluginDefinition} plugin A plugin definition
     * @emits {WaveSurfer#plugin-added} Called with the name of the plugin that was added
     * @example wavesurfer.addPlugin(WaveSurfer.minimap());
     * @return {this} The wavesurfer instance
     */
  }, {
    key: "addPlugin",
    value: function addPlugin(plugin) {
      var _this3 = this;
      if (!plugin.name) {
        throw new Error('Plugin does not have a name!');
      }
      if (!plugin.instance) {
        throw new Error("Plugin ".concat(plugin.name, " does not have an instance property!"));
      }

      // staticProps properties are applied to wavesurfer instance
      if (plugin.staticProps) {
        Object.keys(plugin.staticProps).forEach(function (pluginStaticProp) {
          /**
           * Properties defined in a plugin definition's `staticProps` property are added as
           * staticProps properties of the WaveSurfer instance
           */
          _this3[pluginStaticProp] = plugin.staticProps[pluginStaticProp];
        });
      }
      var Instance = plugin.instance;

      // turn the plugin instance into an observer
      var observerPrototypeKeys = Object.getOwnPropertyNames(util.Observer.prototype);
      observerPrototypeKeys.forEach(function (key) {
        Instance.prototype[key] = util.Observer.prototype[key];
      });

      /**
       * Instantiated plugin classes are added as a property of the wavesurfer
       * instance
       * @type {Object}
       */
      this[plugin.name] = new Instance(plugin.params || {}, this);
      this.fireEvent('plugin-added', plugin.name);
      return this;
    }

    /**
     * Initialise a plugin
     *
     * @param {string} name A plugin name
     * @emits WaveSurfer#plugin-initialised
     * @example wavesurfer.initPlugin('minimap');
     * @return {this} The wavesurfer instance
     */
  }, {
    key: "initPlugin",
    value: function initPlugin(name) {
      if (!this[name]) {
        throw new Error("Plugin ".concat(name, " has not been added yet!"));
      }
      if (this.initialisedPluginList[name]) {
        // destroy any already initialised plugins
        this.destroyPlugin(name);
      }
      this[name].init();
      this.initialisedPluginList[name] = true;
      this.fireEvent('plugin-initialised', name);
      return this;
    }

    /**
     * Destroy a plugin
     *
     * @param {string} name A plugin name
     * @emits WaveSurfer#plugin-destroyed
     * @example wavesurfer.destroyPlugin('minimap');
     * @returns {this} The wavesurfer instance
     */
  }, {
    key: "destroyPlugin",
    value: function destroyPlugin(name) {
      if (!this[name]) {
        throw new Error("Plugin ".concat(name, " has not been added yet and cannot be destroyed!"));
      }
      if (!this.initialisedPluginList[name]) {
        throw new Error("Plugin ".concat(name, " is not active and cannot be destroyed!"));
      }
      if (typeof this[name].destroy !== 'function') {
        throw new Error("Plugin ".concat(name, " does not have a destroy function!"));
      }
      this[name].destroy();
      delete this.initialisedPluginList[name];
      this.fireEvent('plugin-destroyed', name);
      return this;
    }

    /**
     * Destroy all initialised plugins. Convenience function to use when
     * wavesurfer is removed
     *
     * @private
     */
  }, {
    key: "destroyAllPlugins",
    value: function destroyAllPlugins() {
      var _this4 = this;
      Object.keys(this.initialisedPluginList).forEach(function (name) {
        return _this4.destroyPlugin(name);
      });
    }

    /**
     * Create the drawer and draw the waveform
     *
     * @private
     * @emits WaveSurfer#drawer-created
     */
  }, {
    key: "createDrawer",
    value: function createDrawer() {
      var _this5 = this;
      this.drawer = new this.Drawer(this.container, this.params);
      this.drawer.init();
      this.fireEvent('drawer-created', this.drawer);
      if (this.params.responsive !== false) {
        window.addEventListener('resize', this._onResize, true);
        window.addEventListener('orientationchange', this._onResize, true);
      }
      this.drawer.on('redraw', function () {
        _this5.drawBuffer();
        _this5.drawer.progress(_this5.backend.getPlayedPercents());
      });

      // Click-to-seek
      this.drawer.on('click', function (e, progress) {
        setTimeout(function () {
          return _this5.seekTo(progress);
        }, 0);
      });

      // Relay the scroll event from the drawer
      this.drawer.on('scroll', function (e) {
        if (_this5.params.partialRender) {
          _this5.drawBuffer();
        }
        _this5.fireEvent('scroll', e);
      });
    }

    /**
     * Create the backend
     *
     * @private
     * @emits WaveSurfer#backend-created
     */
  }, {
    key: "createBackend",
    value: function createBackend() {
      var _this6 = this;
      if (this.backend) {
        this.backend.destroy();
      }
      this.backend = new this.Backend(this.params);
      this.backend.init();
      this.fireEvent('backend-created', this.backend);
      this.backend.on('finish', function () {
        _this6.drawer.progress(_this6.backend.getPlayedPercents());
        _this6.fireEvent('finish');
      });
      this.backend.on('play', function () {
        return _this6.fireEvent('play');
      });
      this.backend.on('pause', function () {
        return _this6.fireEvent('pause');
      });
      this.backend.on('audioprocess', function (time) {
        _this6.drawer.progress(_this6.backend.getPlayedPercents());
        _this6.fireEvent('audioprocess', time);
      });

      // only needed for MediaElement and MediaElementWebAudio backend
      if (this.params.backend === 'MediaElement' || this.params.backend === 'MediaElementWebAudio') {
        this.backend.on('seek', function () {
          _this6.drawer.progress(_this6.backend.getPlayedPercents());
        });
        this.backend.on('volume', function () {
          var newVolume = _this6.getVolume();
          _this6.fireEvent('volume', newVolume);
          if (_this6.backend.isMuted !== _this6.isMuted) {
            _this6.isMuted = _this6.backend.isMuted;
            _this6.fireEvent('mute', _this6.isMuted);
          }
        });
      }
    }

    /**
     * Create the peak cache
     *
     * @private
     */
  }, {
    key: "createPeakCache",
    value: function createPeakCache() {
      if (this.params.partialRender) {
        this.peakCache = new _peakcache.default();
      }
    }

    /**
     * Get the duration of the audio clip
     *
     * @example const duration = wavesurfer.getDuration();
     * @return {number} Duration in seconds
     */
  }, {
    key: "getDuration",
    value: function getDuration() {
      return this.backend.getDuration();
    }

    /**
     * Get the current playback position
     *
     * @example const currentTime = wavesurfer.getCurrentTime();
     * @return {number} Playback position in seconds
     */
  }, {
    key: "getCurrentTime",
    value: function getCurrentTime() {
      return this.backend.getCurrentTime();
    }

    /**
     * Set the current play time in seconds.
     *
     * @param {number} seconds A positive number in seconds. E.g. 10 means 10
     * seconds, 60 means 1 minute
     */
  }, {
    key: "setCurrentTime",
    value: function setCurrentTime(seconds) {
      if (seconds >= this.getDuration()) {
        this.seekTo(1);
      } else {
        this.seekTo(seconds / this.getDuration());
      }
    }

    /**
     * Starts playback from the current position. Optional start and end
     * measured in seconds can be used to set the range of audio to play.
     *
     * @param {?number} start Position to start at
     * @param {?number} end Position to end at
     * @emits WaveSurfer#interaction
     * @return {Promise} Result of the backend play method
     * @example
     * // play from second 1 to 5
     * wavesurfer.play(1, 5);
     */
  }, {
    key: "play",
    value: function play(start, end) {
      var _this7 = this;
      if (this.params.ignoreSilenceMode) {
        // ignores device hardware silence mode
        util.ignoreSilenceMode();
      }
      this.fireEvent('interaction', function () {
        return _this7.play(start, end);
      });
      return this.backend.play(start, end);
    }

    /**
     * Set a point in seconds for playback to stop at.
     *
     * @param {number} position Position (in seconds) to stop at
     * @version 3.3.0
     */
  }, {
    key: "setPlayEnd",
    value: function setPlayEnd(position) {
      this.backend.setPlayEnd(position);
    }

    /**
     * Stops and pauses playback
     *
     * @example wavesurfer.pause();
     * @return {Promise} Result of the backend pause method
     */
  }, {
    key: "pause",
    value: function pause() {
      if (!this.backend.isPaused()) {
        return this.backend.pause();
      }
    }

    /**
     * Toggle playback
     *
     * @example wavesurfer.playPause();
     * @return {Promise} Result of the backend play or pause method
     */
  }, {
    key: "playPause",
    value: function playPause() {
      return this.backend.isPaused() ? this.play() : this.pause();
    }

    /**
     * Get the current playback state
     *
     * @example const isPlaying = wavesurfer.isPlaying();
     * @return {boolean} False if paused, true if playing
     */
  }, {
    key: "isPlaying",
    value: function isPlaying() {
      return !this.backend.isPaused();
    }

    /**
     * Skip backward
     *
     * @param {?number} seconds Amount to skip back, if not specified `skipLength`
     * is used
     * @example wavesurfer.skipBackward();
     */
  }, {
    key: "skipBackward",
    value: function skipBackward(seconds) {
      this.skip(-seconds || -this.params.skipLength);
    }

    /**
     * Skip forward
     *
     * @param {?number} seconds Amount to skip back, if not specified `skipLength`
     * is used
     * @example wavesurfer.skipForward();
     */
  }, {
    key: "skipForward",
    value: function skipForward(seconds) {
      this.skip(seconds || this.params.skipLength);
    }

    /**
     * Skip a number of seconds from the current position (use a negative value
     * to go backwards).
     *
     * @param {number} offset Amount to skip back or forwards
     * @example
     * // go back 2 seconds
     * wavesurfer.skip(-2);
     */
  }, {
    key: "skip",
    value: function skip(offset) {
      var duration = this.getDuration() || 1;
      var position = this.getCurrentTime() || 0;
      position = Math.max(0, Math.min(duration, position + (offset || 0)));
      this.seekAndCenter(position / duration);
    }

    /**
     * Seeks to a position and centers the view
     *
     * @param {number} progress Between 0 (=beginning) and 1 (=end)
     * @example
     * // seek and go to the middle of the audio
     * wavesurfer.seekTo(0.5);
     */
  }, {
    key: "seekAndCenter",
    value: function seekAndCenter(progress) {
      this.seekTo(progress);
      this.drawer.recenter(progress);
    }

    /**
     * Seeks to a position
     *
     * @param {number} progress Between 0 (=beginning) and 1 (=end)
     * @emits WaveSurfer#interaction
     * @emits WaveSurfer#seek
     * @example
     * // seek to the middle of the audio
     * wavesurfer.seekTo(0.5);
     */
  }, {
    key: "seekTo",
    value: function seekTo(progress) {
      var _this8 = this;
      // return an error if progress is not a number between 0 and 1
      if (typeof progress !== 'number' || !isFinite(progress) || progress < 0 || progress > 1) {
        throw new Error('Error calling wavesurfer.seekTo, parameter must be a number between 0 and 1!');
      }
      this.fireEvent('interaction', function () {
        return _this8.seekTo(progress);
      });
      var isWebAudioBackend = this.params.backend === 'WebAudio';
      var paused = this.backend.isPaused();
      if (isWebAudioBackend && !paused) {
        this.backend.pause();
      }

      // avoid small scrolls while paused seeking
      var oldScrollParent = this.params.scrollParent;
      this.params.scrollParent = false;
      this.backend.seekTo(progress * this.getDuration());
      this.drawer.progress(progress);
      if (isWebAudioBackend && !paused) {
        this.backend.play();
      }
      this.params.scrollParent = oldScrollParent;
      this.fireEvent('seek', progress);
    }

    /**
     * Stops and goes to the beginning.
     *
     * @example wavesurfer.stop();
     */
  }, {
    key: "stop",
    value: function stop() {
      this.pause();
      this.seekTo(0);
      this.drawer.progress(0);
    }

    /**
     * Sets the ID of the audio device to use for output and returns a Promise.
     *
     * @param {string} deviceId String value representing underlying output
     * device
     * @returns {Promise} `Promise` that resolves to `undefined` when there are
     * no errors detected.
     */
  }, {
    key: "setSinkId",
    value: function setSinkId(deviceId) {
      return this.backend.setSinkId(deviceId);
    }

    /**
     * Set the playback volume.
     *
     * @param {number} newVolume A value between 0 and 1, 0 being no
     * volume and 1 being full volume.
     * @emits WaveSurfer#volume
     */
  }, {
    key: "setVolume",
    value: function setVolume(newVolume) {
      this.backend.setVolume(newVolume);
      this.fireEvent('volume', newVolume);
    }

    /**
     * Get the playback volume.
     *
     * @return {number} A value between 0 and 1, 0 being no
     * volume and 1 being full volume.
     */
  }, {
    key: "getVolume",
    value: function getVolume() {
      return this.backend.getVolume();
    }

    /**
     * Set the playback rate.
     *
     * @param {number} rate A positive number. E.g. 0.5 means half the normal
     * speed, 2 means double speed and so on.
     * @example wavesurfer.setPlaybackRate(2);
     */
  }, {
    key: "setPlaybackRate",
    value: function setPlaybackRate(rate) {
      this.backend.setPlaybackRate(rate);
    }

    /**
     * Get the playback rate.
     *
     * @return {number} The current playback rate.
     */
  }, {
    key: "getPlaybackRate",
    value: function getPlaybackRate() {
      return this.backend.getPlaybackRate();
    }

    /**
     * Toggle the volume on and off. If not currently muted it will save the
     * current volume value and turn the volume off. If currently muted then it
     * will restore the volume to the saved value, and then rest the saved
     * value.
     *
     * @example wavesurfer.toggleMute();
     */
  }, {
    key: "toggleMute",
    value: function toggleMute() {
      this.setMute(!this.isMuted);
    }

    /**
     * Enable or disable muted audio
     *
     * @param {boolean} mute Specify `true` to mute audio.
     * @emits WaveSurfer#volume
     * @emits WaveSurfer#mute
     * @example
     * // unmute
     * wavesurfer.setMute(false);
     * console.log(wavesurfer.getMute()) // logs false
     */
  }, {
    key: "setMute",
    value: function setMute(mute) {
      // ignore all muting requests if the audio is already in that state
      if (mute === this.isMuted) {
        this.fireEvent('mute', this.isMuted);
        return;
      }
      if (this.backend.setMute) {
        // Backends such as the MediaElement backend have their own handling
        // of mute, let them handle it.
        this.backend.setMute(mute);
        this.isMuted = mute;
      } else {
        if (mute) {
          // If currently not muted then save current volume,
          // turn off the volume and update the mute properties
          this.savedVolume = this.backend.getVolume();
          this.backend.setVolume(0);
          this.isMuted = true;
          this.fireEvent('volume', 0);
        } else {
          // If currently muted then restore to the saved volume
          // and update the mute properties
          this.backend.setVolume(this.savedVolume);
          this.isMuted = false;
          this.fireEvent('volume', this.savedVolume);
        }
      }
      this.fireEvent('mute', this.isMuted);
    }

    /**
     * Get the current mute status.
     *
     * @example const isMuted = wavesurfer.getMute();
     * @return {boolean} Current mute status
     */
  }, {
    key: "getMute",
    value: function getMute() {
      return this.isMuted;
    }

    /**
     * Get the list of current set filters as an array.
     *
     * Filters must be set with setFilters method first
     *
     * @return {array} List of enabled filters
     */
  }, {
    key: "getFilters",
    value: function getFilters() {
      return this.backend.filters || [];
    }

    /**
     * Toggles `scrollParent` and redraws
     *
     * @example wavesurfer.toggleScroll();
     */
  }, {
    key: "toggleScroll",
    value: function toggleScroll() {
      this.params.scrollParent = !this.params.scrollParent;
      this.drawBuffer();
    }

    /**
     * Toggle mouse interaction
     *
     * @example wavesurfer.toggleInteraction();
     */
  }, {
    key: "toggleInteraction",
    value: function toggleInteraction() {
      this.params.interact = !this.params.interact;
    }

    /**
     * Get the fill color of the waveform after the cursor.
     *
     * @param {?number} channelIdx Optional index of the channel to get its wave color if splitChannels is true
     * @return {string|object} A CSS color string, or an array of CSS color strings.
     */
  }, {
    key: "getWaveColor",
    value: function getWaveColor() {
      var channelIdx = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      if (this.params.splitChannelsOptions.channelColors[channelIdx]) {
        return this.params.splitChannelsOptions.channelColors[channelIdx].waveColor;
      }
      return this.params.waveColor;
    }

    /**
     * Set the fill color of the waveform after the cursor.
     *
     * @param {string|object} color A CSS color string, or an array of CSS color strings.
     * @param {?number} channelIdx Optional index of the channel to set its wave color if splitChannels is true
     * @example wavesurfer.setWaveColor('#ddd');
     */
  }, {
    key: "setWaveColor",
    value: function setWaveColor(color) {
      var channelIdx = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      if (this.params.splitChannelsOptions.channelColors[channelIdx]) {
        this.params.splitChannelsOptions.channelColors[channelIdx].waveColor = color;
      } else {
        this.params.waveColor = color;
      }
      this.drawBuffer();
    }

    /**
     * Get the fill color of the waveform behind the cursor.
     *
     * @param {?number} channelIdx Optional index of the channel to get its progress color if splitChannels is true
     * @return {string|object} A CSS color string, or an array of CSS color strings.
     */
  }, {
    key: "getProgressColor",
    value: function getProgressColor() {
      var channelIdx = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      if (this.params.splitChannelsOptions.channelColors[channelIdx]) {
        return this.params.splitChannelsOptions.channelColors[channelIdx].progressColor;
      }
      return this.params.progressColor;
    }

    /**
     * Set the fill color of the waveform behind the cursor.
     *
     * @param {string|object} color A CSS color string, or an array of CSS color strings.
     * @param {?number} channelIdx Optional index of the channel to set its progress color if splitChannels is true
     * @example wavesurfer.setProgressColor('#400');
     */
  }, {
    key: "setProgressColor",
    value: function setProgressColor(color, channelIdx) {
      if (this.params.splitChannelsOptions.channelColors[channelIdx]) {
        this.params.splitChannelsOptions.channelColors[channelIdx].progressColor = color;
      } else {
        this.params.progressColor = color;
      }
      this.drawBuffer();
    }

    /**
     * Get the background color of the waveform container.
     *
     * @return {string} A CSS color string.
     */
  }, {
    key: "getBackgroundColor",
    value: function getBackgroundColor() {
      return this.params.backgroundColor;
    }

    /**
     * Set the background color of the waveform container.
     *
     * @param {string} color A CSS color string.
     * @example wavesurfer.setBackgroundColor('#FF00FF');
     */
  }, {
    key: "setBackgroundColor",
    value: function setBackgroundColor(color) {
      this.params.backgroundColor = color;
      util.style(this.container, {
        background: this.params.backgroundColor
      });
    }

    /**
     * Get the fill color of the cursor indicating the playhead
     * position.
     *
     * @return {string} A CSS color string.
     */
  }, {
    key: "getCursorColor",
    value: function getCursorColor() {
      return this.params.cursorColor;
    }

    /**
     * Set the fill color of the cursor indicating the playhead
     * position.
     *
     * @param {string} color A CSS color string.
     * @example wavesurfer.setCursorColor('#222');
     */
  }, {
    key: "setCursorColor",
    value: function setCursorColor(color) {
      this.params.cursorColor = color;
      this.drawer.updateCursor();
    }

    /**
     * Get the height of the waveform.
     *
     * @return {number} Height measured in pixels.
     */
  }, {
    key: "getHeight",
    value: function getHeight() {
      return this.params.height;
    }

    /**
     * Set the height of the waveform.
     *
     * @param {number} height Height measured in pixels.
     * @example wavesurfer.setHeight(200);
     */
  }, {
    key: "setHeight",
    value: function setHeight(height) {
      this.params.height = height;
      this.drawer.setHeight(height * this.params.pixelRatio);
      this.drawBuffer();
    }

    /**
     * Hide channels from being drawn on the waveform if splitting channels.
     *
     * For example, if we want to draw only the peaks for the right stereo channel:
     *
     * const wavesurfer = new WaveSurfer.create({...splitChannels: true});
     * wavesurfer.load('stereo_audio.mp3');
     *
     * wavesurfer.setFilteredChannel([0]); <-- hide left channel peaks.
     *
     * @param {array} channelIndices Channels to be filtered out from drawing.
     * @version 4.0.0
     */
  }, {
    key: "setFilteredChannels",
    value: function setFilteredChannels(channelIndices) {
      this.params.splitChannelsOptions.filterChannels = channelIndices;
      this.drawBuffer();
    }

    /**
     * Get the correct peaks for current wave view-port and render wave
     *
     * @private
     * @emits WaveSurfer#redraw
     */
  }, {
    key: "drawBuffer",
    value: function drawBuffer() {
      var nominalWidth = Math.round(this.getDuration() * this.params.minPxPerSec * this.params.pixelRatio);
      var parentWidth = this.drawer.getWidth();
      var width = nominalWidth;
      // always start at 0 after zooming for scrolling : issue redraw left part
      var start = 0;
      var end = Math.max(start + parentWidth, width);
      // Fill container
      if (this.params.fillParent && (!this.params.scrollParent || nominalWidth < parentWidth)) {
        width = parentWidth;
        start = 0;
        end = width;
      }
      var peaks;
      if (this.params.partialRender) {
        var newRanges = this.peakCache.addRangeToPeakCache(width, start, end);
        var i;
        for (i = 0; i < newRanges.length; i++) {
          peaks = this.backend.getPeaks(width, newRanges[i][0], newRanges[i][1]);
          this.drawer.drawPeaks(peaks, width, newRanges[i][0], newRanges[i][1]);
        }
      } else {
        peaks = this.backend.getPeaks(width, start, end);
        this.drawer.drawPeaks(peaks, width, start, end);
      }
      this.fireEvent('redraw', peaks, width);
    }

    /**
     * Horizontally zooms the waveform in and out. It also changes the parameter
     * `minPxPerSec` and enables the `scrollParent` option. Calling the function
     * with a falsey parameter will reset the zoom state.
     *
     * @param {?number} pxPerSec Number of horizontal pixels per second of
     * audio, if none is set the waveform returns to unzoomed state
     * @emits WaveSurfer#zoom
     * @example wavesurfer.zoom(20);
     */
  }, {
    key: "zoom",
    value: function zoom(pxPerSec) {
      if (!pxPerSec) {
        this.params.minPxPerSec = this.defaultParams.minPxPerSec;
        this.params.scrollParent = false;
      } else {
        this.params.minPxPerSec = pxPerSec;
        this.params.scrollParent = true;
      }
      this.drawBuffer();
      this.drawer.progress(this.backend.getPlayedPercents());
      this.drawer.recenter(this.getCurrentTime() / this.getDuration());
      this.fireEvent('zoom', pxPerSec);
    }

    /**
     * Decode buffer and load
     *
     * @private
     * @param {ArrayBuffer} arraybuffer Buffer to process
     */
  }, {
    key: "loadArrayBuffer",
    value: function loadArrayBuffer(arraybuffer) {
      var _this9 = this;
      this.decodeArrayBuffer(arraybuffer, function (data) {
        if (!_this9.isDestroyed) {
          _this9.loadDecodedBuffer(data);
        }
      });
    }

    /**
     * Directly load an externally decoded AudioBuffer
     *
     * @private
     * @param {AudioBuffer} buffer Buffer to process
     * @emits WaveSurfer#ready
     */
  }, {
    key: "loadDecodedBuffer",
    value: function loadDecodedBuffer(buffer) {
      this.backend.load(buffer);
      this.drawBuffer();
      this.isReady = true;
      this.fireEvent('ready');
    }

    /**
     * Loads audio data from a Blob or File object
     *
     * @param {Blob|File} blob Audio data
     * @example
     */
  }, {
    key: "loadBlob",
    value: function loadBlob(blob) {
      var _this10 = this;
      // Create file reader
      var reader = new FileReader();
      reader.addEventListener('progress', function (e) {
        return _this10.onProgress(e);
      });
      reader.addEventListener('load', function (e) {
        return _this10.loadArrayBuffer(e.target.result);
      });
      reader.addEventListener('error', function () {
        return _this10.fireEvent('error', 'Error reading file');
      });
      reader.readAsArrayBuffer(blob);
      this.empty();
    }

    /**
     * Loads audio and re-renders the waveform.
     *
     * @param {string|HTMLMediaElement} url The url of the audio file or the
     * audio element with the audio
     * @param {number[]|Number.<Array[]>} peaks Wavesurfer does not have to decode
     * the audio to render the waveform if this is specified
     * @param {?string} preload (Use with backend `MediaElement` and `MediaElementWebAudio`)
     * `'none'|'metadata'|'auto'` Preload attribute for the media element
     * @param {?number} duration The duration of the audio. This is used to
     * render the peaks data in the correct size for the audio duration (as
     * befits the current `minPxPerSec` and zoom value) without having to decode
     * the audio.
     * @returns {void}
     * @throws Will throw an error if the `url` argument is empty.
     * @example
     * // uses fetch or media element to load file (depending on backend)
     * wavesurfer.load('http://example.com/demo.wav');
     *
     * // setting preload attribute with media element backend and supplying
     * // peaks
     * wavesurfer.load(
     *   'http://example.com/demo.wav',
     *   [0.0218, 0.0183, 0.0165, 0.0198, 0.2137, 0.2888],
     *   true
     * );
     */
  }, {
    key: "load",
    value: function load(url, peaks, preload, duration) {
      if (!url) {
        throw new Error('url parameter cannot be empty');
      }
      this.empty();
      if (preload) {
        // check whether the preload attribute will be usable and if not log
        // a warning listing the reasons why not and nullify the variable
        var preloadIgnoreReasons = {
          "Preload is not 'auto', 'none' or 'metadata'": ['auto', 'metadata', 'none'].indexOf(preload) === -1,
          'Peaks are not provided': !peaks,
          "Backend is not of type 'MediaElement' or 'MediaElementWebAudio'": ['MediaElement', 'MediaElementWebAudio'].indexOf(this.params.backend) === -1,
          'Url is not of type string': typeof url !== 'string'
        };
        var activeReasons = Object.keys(preloadIgnoreReasons).filter(function (reason) {
          return preloadIgnoreReasons[reason];
        });
        if (activeReasons.length) {
          // eslint-disable-next-line no-console
          console.warn('Preload parameter of wavesurfer.load will be ignored because:\n\t- ' + activeReasons.join('\n\t- '));
          // stop invalid values from being used
          preload = null;
        }
      }

      // loadBuffer(url, peaks, duration) requires that url is a string
      // but users can pass in a HTMLMediaElement to WaveSurfer
      if (this.params.backend === 'WebAudio' && url instanceof HTMLMediaElement) {
        url = url.src;
      }
      switch (this.params.backend) {
        case 'WebAudio':
          return this.loadBuffer(url, peaks, duration);
        case 'MediaElement':
        case 'MediaElementWebAudio':
          return this.loadMediaElement(url, peaks, preload, duration);
      }
    }

    /**
     * Loads audio using Web Audio buffer backend.
     *
     * @private
     * @emits WaveSurfer#waveform-ready
     * @param {string} url URL of audio file
     * @param {number[]|Number.<Array[]>} peaks Peaks data
     * @param {?number} duration Optional duration of audio file
     * @returns {void}
     */
  }, {
    key: "loadBuffer",
    value: function loadBuffer(url, peaks, duration) {
      var _this11 = this;
      var load = function load(action) {
        if (action) {
          _this11.tmpEvents.push(_this11.once('ready', action));
        }
        return _this11.getArrayBuffer(url, function (data) {
          return _this11.loadArrayBuffer(data);
        });
      };
      if (peaks) {
        this.backend.setPeaks(peaks, duration);
        this.drawBuffer();
        this.fireEvent('waveform-ready');
        this.tmpEvents.push(this.once('interaction', load));
      } else {
        return load();
      }
    }

    /**
     * Either create a media element, or load an existing media element.
     *
     * @private
     * @emits WaveSurfer#waveform-ready
     * @param {string|HTMLMediaElement} urlOrElt Either a path to a media file, or an
     * existing HTML5 Audio/Video Element
     * @param {number[]|Number.<Array[]>} peaks Array of peaks. Required to bypass web audio
     * dependency
     * @param {?boolean} preload Set to true if the preload attribute of the
     * audio element should be enabled
     * @param {?number} duration Optional duration of audio file
     */
  }, {
    key: "loadMediaElement",
    value: function loadMediaElement(urlOrElt, peaks, preload, duration) {
      var _this12 = this;
      var url = urlOrElt;
      if (typeof urlOrElt === 'string') {
        this.backend.load(url, this.mediaContainer, peaks, preload);
      } else {
        var elt = urlOrElt;
        this.backend.loadElt(elt, peaks);

        // If peaks are not provided,
        // url = element.src so we can get peaks with web audio
        url = elt.src;
      }
      this.tmpEvents.push(this.backend.once('canplay', function () {
        // ignore when backend was already destroyed
        if (!_this12.backend.destroyed) {
          _this12.drawBuffer();
          _this12.isReady = true;
          _this12.fireEvent('ready');
        }
      }), this.backend.once('error', function (err) {
        return _this12.fireEvent('error', err);
      }));

      // If peaks are provided, render them and fire the `waveform-ready` event.
      if (peaks) {
        this.backend.setPeaks(peaks, duration);
        this.drawBuffer();
        this.fireEvent('waveform-ready');
      }

      // If no pre-decoded peaks are provided, or are provided with
      // forceDecode flag, attempt to download the audio file and decode it
      // with Web Audio.
      if ((!peaks || this.params.forceDecode) && this.backend.supportsWebAudio()) {
        this.getArrayBuffer(url, function (arraybuffer) {
          _this12.decodeArrayBuffer(arraybuffer, function (buffer) {
            _this12.backend.buffer = buffer;
            _this12.backend.setPeaks(null);
            _this12.drawBuffer();
            _this12.fireEvent('waveform-ready');
          });
        });
      }
    }

    /**
     * Decode an array buffer and pass data to a callback
     *
     * @private
     * @param {Object} arraybuffer The array buffer to decode
     * @param {function} callback The function to call on complete
     */
  }, {
    key: "decodeArrayBuffer",
    value: function decodeArrayBuffer(arraybuffer, callback) {
      var _this13 = this;
      if (!this.isDestroyed) {
        this.arraybuffer = arraybuffer;
        this.backend.decodeArrayBuffer(arraybuffer, function (data) {
          // Only use the decoded data if we haven't been destroyed or
          // another decode started in the meantime
          if (!_this13.isDestroyed && _this13.arraybuffer == arraybuffer) {
            callback(data);
            _this13.arraybuffer = null;
          }
        }, function () {
          return _this13.fireEvent('error', 'Error decoding audiobuffer');
        });
      }
    }

    /**
     * Load an array buffer using fetch and pass the result to a callback
     *
     * @param {string} url The URL of the file object
     * @param {function} callback The function to call on complete
     * @returns {util.fetchFile} fetch call
     * @private
     */
  }, {
    key: "getArrayBuffer",
    value: function getArrayBuffer(url, callback) {
      var _this14 = this;
      var options = Object.assign({
        url: url,
        responseType: 'arraybuffer'
      }, this.params.xhr);
      var request = util.fetchFile(options);
      this.currentRequest = request;
      this.tmpEvents.push(request.on('progress', function (e) {
        _this14.onProgress(e);
      }), request.on('success', function (data) {
        callback(data);
        _this14.currentRequest = null;
      }), request.on('error', function (e) {
        _this14.fireEvent('error', e);
        _this14.currentRequest = null;
      }));
      return request;
    }

    /**
     * Called while the audio file is loading
     *
     * @private
     * @param {Event} e Progress event
     * @emits WaveSurfer#loading
     */
  }, {
    key: "onProgress",
    value: function onProgress(e) {
      var percentComplete;
      if (e.lengthComputable) {
        percentComplete = e.loaded / e.total;
      } else {
        // Approximate progress with an asymptotic
        // function, and assume downloads in the 1-3 MB range.
        percentComplete = e.loaded / (e.loaded + 1000000);
      }
      this.fireEvent('loading', Math.round(percentComplete * 100), e.target);
    }

    /**
     * Exports PCM data into a JSON array and optionally opens in a new window
     * as valid JSON Blob instance.
     *
     * @param {number} length=1024 The scale in which to export the peaks
     * @param {number} accuracy=10000
     * @param {?boolean} noWindow Set to true to disable opening a new
     * window with the JSON
     * @param {number} start Start index
     * @param {number} end End index
     * @return {Promise} Promise that resolves with array of peaks
     */
  }, {
    key: "exportPCM",
    value: function exportPCM(length, accuracy, noWindow, start, end) {
      length = length || 1024;
      start = start || 0;
      accuracy = accuracy || 10000;
      noWindow = noWindow || false;
      var peaks = this.backend.getPeaks(length, start, end);
      var arr = [].map.call(peaks, function (val) {
        return Math.round(val * accuracy) / accuracy;
      });
      return new Promise(function (resolve, reject) {
        if (!noWindow) {
          var blobJSON = new Blob([JSON.stringify(arr)], {
            type: 'application/json;charset=utf-8'
          });
          var objURL = URL.createObjectURL(blobJSON);
          window.open(objURL);
          URL.revokeObjectURL(objURL);
        }
        resolve(arr);
      });
    }

    /**
     * Save waveform image as data URI.
     *
     * The default format is `image/png`. Other supported types are
     * `image/jpeg` and `image/webp`.
     *
     * @param {string} format='image/png' A string indicating the image format.
     * The default format type is `image/png`.
     * @param {number} quality=1 A number between 0 and 1 indicating the image
     * quality to use for image formats that use lossy compression such as
     * `image/jpeg` and `image/webp`.
     * @param {string} type Image data type to return. Either `dataURL` (default)
     * or `blob`.
     * @return {string|string[]|Promise} When using `dataURL` type this returns
     * a single data URL or an array of data URLs, one for each canvas. When using
     * `blob` type this returns a `Promise` resolving with an array of `Blob`
     * instances, one for each canvas.
     */
  }, {
    key: "exportImage",
    value: function exportImage(format, quality, type) {
      if (!format) {
        format = 'image/png';
      }
      if (!quality) {
        quality = 1;
      }
      if (!type) {
        type = 'dataURL';
      }
      return this.drawer.getImage(format, quality, type);
    }

    /**
     * Cancel any fetch request currently in progress
     */
  }, {
    key: "cancelAjax",
    value: function cancelAjax() {
      if (this.currentRequest && this.currentRequest.controller) {
        // If the current request has a ProgressHandler, then its ReadableStream might need to be cancelled too
        // See: Wavesurfer issue #2042
        // See Firefox bug: https://bugzilla.mozilla.org/show_bug.cgi?id=1583815
        if (this.currentRequest._reader) {
          // Ignoring exceptions thrown by call to cancel()
          this.currentRequest._reader.cancel().catch(function (err) {});
        }
        this.currentRequest.controller.abort();
        this.currentRequest = null;
      }
    }

    /**
     * @private
     */
  }, {
    key: "clearTmpEvents",
    value: function clearTmpEvents() {
      this.tmpEvents.forEach(function (e) {
        return e.un();
      });
    }

    /**
     * Display empty waveform.
     */
  }, {
    key: "empty",
    value: function empty() {
      if (!this.backend.isPaused()) {
        this.stop();
        this.backend.disconnectSource();
      }
      this.isReady = false;
      this.cancelAjax();
      this.clearTmpEvents();

      // empty drawer
      this.drawer.progress(0);
      this.drawer.setWidth(0);
      this.drawer.drawPeaks({
        length: this.drawer.getWidth()
      }, 0);
    }

    /**
     * Remove events, elements and disconnect WebAudio nodes.
     *
     * @emits WaveSurfer#destroy
     */
  }, {
    key: "destroy",
    value: function destroy() {
      this.destroyAllPlugins();
      this.fireEvent('destroy');
      this.cancelAjax();
      this.clearTmpEvents();
      this.unAll();
      if (this.params.responsive !== false) {
        window.removeEventListener('resize', this._onResize, true);
        window.removeEventListener('orientationchange', this._onResize, true);
      }
      if (this.backend) {
        this.backend.destroy();
        // clears memory usage
        this.backend = null;
      }
      if (this.drawer) {
        this.drawer.destroy();
      }
      this.isDestroyed = true;
      this.isReady = false;
      this.arraybuffer = null;
    }
  }], [{
    key: "create",
    value: /** @private */

    /** @private */

    /**
     * Instantiate this class, call its `init` function and returns it
     *
     * @param {WavesurferParams} params The wavesurfer parameters
     * @return {Object} WaveSurfer instance
     * @example const wavesurfer = WaveSurfer.create(params);
     */
    function create(params) {
      var wavesurfer = new WaveSurfer(params);
      return wavesurfer.init();
    }

    /**
     * The library version number is available as a static property of the
     * WaveSurfer class
     *
     * @type {String}
     * @example
     * console.log('Using wavesurfer.js ' + WaveSurfer.VERSION);
     */
  }]);
  return WaveSurfer;
}(util.Observer);
exports["default"] = WaveSurfer;
_defineProperty(WaveSurfer, "VERSION", "6.4.0");
_defineProperty(WaveSurfer, "util", util);
module.exports = exports.default;

/***/ }),

/***/ "./src/webaudio.js":
/*!*************************!*\
  !*** ./src/webaudio.js ***!
  \*************************/
/***/ ((module, exports, __nested_webpack_require_185775__) => {

"use strict";


function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports["default"] = void 0;
var util = _interopRequireWildcard(__nested_webpack_require_185775__(/*! ./util */ "./src/util/index.js"));
function _getRequireWildcardCache(nodeInterop) { if (typeof WeakMap !== "function") return null; var cacheBabelInterop = new WeakMap(); var cacheNodeInterop = new WeakMap(); return (_getRequireWildcardCache = function _getRequireWildcardCache(nodeInterop) { return nodeInterop ? cacheNodeInterop : cacheBabelInterop; })(nodeInterop); }
function _interopRequireWildcard(obj, nodeInterop) { if (!nodeInterop && obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { default: obj }; } var cache = _getRequireWildcardCache(nodeInterop); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (key !== "default" && Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj.default = obj; if (cache) { cache.set(obj, newObj); } return newObj; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
// using constants to prevent someone writing the string wrong
var PLAYING = 'playing';
var PAUSED = 'paused';
var FINISHED = 'finished';

/**
 * WebAudio backend
 *
 * @extends {Observer}
 */
var WebAudio = /*#__PURE__*/function (_util$Observer) {
  _inherits(WebAudio, _util$Observer);
  var _super = _createSuper(WebAudio);
  /**
   * Construct the backend
   *
   * @param {WavesurferParams} params Wavesurfer parameters
   */
  function WebAudio(params) {
    var _defineProperty2, _this$states;
    var _this;
    _classCallCheck(this, WebAudio);
    _this = _super.call(this);
    /** @private */
    _defineProperty(_assertThisInitialized(_this), "audioContext", null);
    _defineProperty(_assertThisInitialized(_this), "offlineAudioContext", null);
    _defineProperty(_assertThisInitialized(_this), "stateBehaviors", (_defineProperty2 = {}, _defineProperty(_defineProperty2, PLAYING, {
      init: function init() {
        this.addOnAudioProcess();
      },
      getPlayedPercents: function getPlayedPercents() {
        var duration = this.getDuration();
        return this.getCurrentTime() / duration || 0;
      },
      getCurrentTime: function getCurrentTime() {
        return this.startPosition + this.getPlayedTime();
      }
    }), _defineProperty(_defineProperty2, PAUSED, {
      init: function init() {
        this.removeOnAudioProcess();
      },
      getPlayedPercents: function getPlayedPercents() {
        var duration = this.getDuration();
        return this.getCurrentTime() / duration || 0;
      },
      getCurrentTime: function getCurrentTime() {
        return this.startPosition;
      }
    }), _defineProperty(_defineProperty2, FINISHED, {
      init: function init() {
        this.removeOnAudioProcess();
        this.fireEvent('finish');
      },
      getPlayedPercents: function getPlayedPercents() {
        return 1;
      },
      getCurrentTime: function getCurrentTime() {
        return this.getDuration();
      }
    }), _defineProperty2));
    _this.params = params;
    /** ac: Audio Context instance */
    _this.ac = params.audioContext || (_this.supportsWebAudio() ? _this.getAudioContext() : {});
    /**@private */
    _this.lastPlay = _this.ac.currentTime;
    /** @private */
    _this.startPosition = 0;
    /** @private */
    _this.scheduledPause = null;
    /** @private */
    _this.states = (_this$states = {}, _defineProperty(_this$states, PLAYING, Object.create(_this.stateBehaviors[PLAYING])), _defineProperty(_this$states, PAUSED, Object.create(_this.stateBehaviors[PAUSED])), _defineProperty(_this$states, FINISHED, Object.create(_this.stateBehaviors[FINISHED])), _this$states);
    /** @private */
    _this.buffer = null;
    /** @private */
    _this.filters = [];
    /** gainNode: allows to control audio volume */
    _this.gainNode = null;
    /** @private */
    _this.mergedPeaks = null;
    /** @private */
    _this.offlineAc = null;
    /** @private */
    _this.peaks = null;
    /** @private */
    _this.playbackRate = 1;
    /** analyser: provides audio analysis information */
    _this.analyser = null;
    /** scriptNode: allows processing audio */
    _this.scriptNode = null;
    /** @private */
    _this.source = null;
    /** @private */
    _this.splitPeaks = [];
    /** @private */
    _this.state = null;
    /** @private */
    _this.explicitDuration = params.duration;
    /** @private */
    _this.sinkStreamDestination = null;
    /** @private */
    _this.sinkAudioElement = null;
    /**
     * Boolean indicating if the backend was destroyed.
     */
    _this.destroyed = false;
    return _this;
  }

  /**
   * Initialise the backend, called in `wavesurfer.createBackend()`
   */
  _createClass(WebAudio, [{
    key: "supportsWebAudio",
    value: /** scriptBufferSize: size of the processing buffer */

    /** audioContext: allows to process audio with WebAudio API */

    /** @private */

    /** @private */

    /**
     * Does the browser support this backend
     *
     * @return {boolean} Whether or not this browser supports this backend
     */
    function supportsWebAudio() {
      return !!(window.AudioContext || window.webkitAudioContext);
    }

    /**
     * Get the audio context used by this backend or create one
     *
     * @return {AudioContext} Existing audio context, or creates a new one
     */
  }, {
    key: "getAudioContext",
    value: function getAudioContext() {
      if (!window.WaveSurferAudioContext) {
        window.WaveSurferAudioContext = new (window.AudioContext || window.webkitAudioContext)();
      }
      return window.WaveSurferAudioContext;
    }

    /**
     * Get the offline audio context used by this backend or create one
     *
     * @param {number} sampleRate The sample rate to use
     * @return {OfflineAudioContext} Existing offline audio context, or creates
     * a new one
     */
  }, {
    key: "getOfflineAudioContext",
    value: function getOfflineAudioContext(sampleRate) {
      if (!window.WaveSurferOfflineAudioContext) {
        window.WaveSurferOfflineAudioContext = new (window.OfflineAudioContext || window.webkitOfflineAudioContext)(1, 2, sampleRate);
      }
      return window.WaveSurferOfflineAudioContext;
    }
  }, {
    key: "init",
    value: function init() {
      this.createVolumeNode();
      this.createScriptNode();
      this.createAnalyserNode();
      this.setState(PAUSED);
      this.setPlaybackRate(this.params.audioRate);
      this.setLength(0);
    }

    /** @private */
  }, {
    key: "disconnectFilters",
    value: function disconnectFilters() {
      if (this.filters) {
        this.filters.forEach(function (filter) {
          filter && filter.disconnect();
        });
        this.filters = null;
        // Reconnect direct path
        this.analyser.connect(this.gainNode);
      }
    }

    /**
     * @private
     *
     * @param {string} state The new state
     */
  }, {
    key: "setState",
    value: function setState(state) {
      if (this.state !== this.states[state]) {
        this.state = this.states[state];
        this.state.init.call(this);
      }
    }

    /**
     * Unpacked `setFilters()`
     *
     * @param {...AudioNode} filters One or more filters to set
     */
  }, {
    key: "setFilter",
    value: function setFilter() {
      for (var _len = arguments.length, filters = new Array(_len), _key = 0; _key < _len; _key++) {
        filters[_key] = arguments[_key];
      }
      this.setFilters(filters);
    }

    /**
     * Insert custom Web Audio nodes into the graph
     *
     * @param {AudioNode[]} filters Packed filters array
     * @example
     * const lowpass = wavesurfer.backend.ac.createBiquadFilter();
     * wavesurfer.backend.setFilter(lowpass);
     */
  }, {
    key: "setFilters",
    value: function setFilters(filters) {
      // Remove existing filters
      this.disconnectFilters();

      // Insert filters if filter array not empty
      if (filters && filters.length) {
        this.filters = filters;

        // Disconnect direct path before inserting filters
        this.analyser.disconnect();

        // Connect each filter in turn
        filters.reduce(function (prev, curr) {
          prev.connect(curr);
          return curr;
        }, this.analyser).connect(this.gainNode);
      }
    }
    /** Create ScriptProcessorNode to process audio */
  }, {
    key: "createScriptNode",
    value: function createScriptNode() {
      if (this.params.audioScriptProcessor) {
        this.scriptNode = this.params.audioScriptProcessor;
      } else {
        if (this.ac.createScriptProcessor) {
          this.scriptNode = this.ac.createScriptProcessor(WebAudio.scriptBufferSize);
        } else {
          this.scriptNode = this.ac.createJavaScriptNode(WebAudio.scriptBufferSize);
        }
      }
      this.scriptNode.connect(this.ac.destination);
    }

    /** @private */
  }, {
    key: "addOnAudioProcess",
    value: function addOnAudioProcess() {
      var _this2 = this;
      this.scriptNode.onaudioprocess = function () {
        var time = _this2.getCurrentTime();
        if (time >= _this2.getDuration()) {
          _this2.setState(FINISHED);
          _this2.fireEvent('pause');
        } else if (time >= _this2.scheduledPause) {
          _this2.pause();
        } else if (_this2.state === _this2.states[PLAYING]) {
          _this2.fireEvent('audioprocess', time);
        }
      };
    }

    /** @private */
  }, {
    key: "removeOnAudioProcess",
    value: function removeOnAudioProcess() {
      this.scriptNode.onaudioprocess = null;
    }
    /** Create analyser node to perform audio analysis */
  }, {
    key: "createAnalyserNode",
    value: function createAnalyserNode() {
      this.analyser = this.ac.createAnalyser();
      this.analyser.connect(this.gainNode);
    }

    /**
     * Create the gain node needed to control the playback volume.
     *
     */
  }, {
    key: "createVolumeNode",
    value: function createVolumeNode() {
      // Create gain node using the AudioContext
      if (this.ac.createGain) {
        this.gainNode = this.ac.createGain();
      } else {
        this.gainNode = this.ac.createGainNode();
      }
      // Add the gain node to the graph
      this.gainNode.connect(this.ac.destination);
    }

    /**
     * Set the sink id for the media player
     *
     * @param {string} deviceId String value representing audio device id.
     * @returns {Promise} A Promise that resolves to `undefined` when there
     * are no errors.
     */
  }, {
    key: "setSinkId",
    value: function setSinkId(deviceId) {
      if (deviceId) {
        /**
         * The webaudio API doesn't currently support setting the device
         * output. Here we create an HTMLAudioElement, connect the
         * webaudio stream to that element and setSinkId there.
         */
        if (!this.sinkAudioElement) {
          this.sinkAudioElement = new window.Audio();
          // autoplay is necessary since we're not invoking .play()
          this.sinkAudioElement.autoplay = true;
        }
        if (!this.sinkAudioElement.setSinkId) {
          return Promise.reject(new Error('setSinkId is not supported in your browser'));
        }
        if (!this.sinkStreamDestination) {
          this.sinkStreamDestination = this.ac.createMediaStreamDestination();
        }
        this.gainNode.disconnect();
        this.gainNode.connect(this.sinkStreamDestination);
        this.sinkAudioElement.srcObject = this.sinkStreamDestination.stream;
        return this.sinkAudioElement.setSinkId(deviceId);
      } else {
        return Promise.reject(new Error('Invalid deviceId: ' + deviceId));
      }
    }

    /**
     * Set the audio volume
     *
     * @param {number} value A floating point value between 0 and 1.
     */
  }, {
    key: "setVolume",
    value: function setVolume(value) {
      this.gainNode.gain.setValueAtTime(value, this.ac.currentTime);
    }

    /**
     * Get the current volume
     *
     * @return {number} value A floating point value between 0 and 1.
     */
  }, {
    key: "getVolume",
    value: function getVolume() {
      return this.gainNode.gain.value;
    }

    /**
     * Decode an array buffer and pass data to a callback
     *
     * @private
     * @param {ArrayBuffer} arraybuffer The array buffer to decode
     * @param {function} callback The function to call on complete.
     * @param {function} errback The function to call on error.
     */
  }, {
    key: "decodeArrayBuffer",
    value: function decodeArrayBuffer(arraybuffer, callback, errback) {
      if (!this.offlineAc) {
        this.offlineAc = this.getOfflineAudioContext(this.ac && this.ac.sampleRate ? this.ac.sampleRate : 44100);
      }
      if ('webkitAudioContext' in window) {
        // Safari: no support for Promise-based decodeAudioData enabled
        // Enable it in Safari using the Experimental Features > Modern WebAudio API option
        this.offlineAc.decodeAudioData(arraybuffer, function (data) {
          return callback(data);
        }, errback);
      } else {
        this.offlineAc.decodeAudioData(arraybuffer).then(function (data) {
          return callback(data);
        }).catch(function (err) {
          return errback(err);
        });
      }
    }

    /**
     * Set pre-decoded peaks
     *
     * @param {number[]|Number.<Array[]>} peaks Peaks data
     * @param {?number} duration Explicit duration
     */
  }, {
    key: "setPeaks",
    value: function setPeaks(peaks, duration) {
      if (duration != null) {
        this.explicitDuration = duration;
      }
      this.peaks = peaks;
    }

    /**
     * Set the rendered length (different from the length of the audio)
     *
     * @param {number} length The rendered length
     */
  }, {
    key: "setLength",
    value: function setLength(length) {
      // No resize, we can preserve the cached peaks.
      if (this.mergedPeaks && length == 2 * this.mergedPeaks.length - 1 + 2) {
        return;
      }
      this.splitPeaks = [];
      this.mergedPeaks = [];
      // Set the last element of the sparse array so the peak arrays are
      // appropriately sized for other calculations.
      var channels = this.buffer ? this.buffer.numberOfChannels : 1;
      var c;
      for (c = 0; c < channels; c++) {
        this.splitPeaks[c] = [];
        this.splitPeaks[c][2 * (length - 1)] = 0;
        this.splitPeaks[c][2 * (length - 1) + 1] = 0;
      }
      this.mergedPeaks[2 * (length - 1)] = 0;
      this.mergedPeaks[2 * (length - 1) + 1] = 0;
    }

    /**
     * Compute the max and min value of the waveform when broken into <length> subranges.
     *
     * @param {number} length How many subranges to break the waveform into.
     * @param {number} first First sample in the required range.
     * @param {number} last Last sample in the required range.
     * @return {number[]|Number.<Array[]>} Array of 2*<length> peaks or array of arrays of
     * peaks consisting of (max, min) values for each subrange.
     */
  }, {
    key: "getPeaks",
    value: function getPeaks(length, first, last) {
      if (this.peaks) {
        return this.peaks;
      }
      if (!this.buffer) {
        return [];
      }
      first = first || 0;
      last = last || length - 1;
      this.setLength(length);
      if (!this.buffer) {
        return this.params.splitChannels ? this.splitPeaks : this.mergedPeaks;
      }

      /**
       * The following snippet fixes a buffering data issue on the Safari
       * browser which returned undefined It creates the missing buffer based
       * on 1 channel, 4096 samples and the sampleRate from the current
       * webaudio context 4096 samples seemed to be the best fit for rendering
       * will review this code once a stable version of Safari TP is out
       */
      if (!this.buffer.length) {
        var newBuffer = this.createBuffer(1, 4096, this.sampleRate);
        this.buffer = newBuffer.buffer;
      }
      var sampleSize = this.buffer.length / length;
      var sampleStep = ~~(sampleSize / 10) || 1;
      var channels = this.buffer.numberOfChannels;
      var c;
      for (c = 0; c < channels; c++) {
        var peaks = this.splitPeaks[c];
        var chan = this.buffer.getChannelData(c);
        var i = void 0;
        for (i = first; i <= last; i++) {
          var start = ~~(i * sampleSize);
          var end = ~~(start + sampleSize);
          /**
           * Initialize the max and min to the first sample of this
           * subrange, so that even if the samples are entirely
           * on one side of zero, we still return the true max and
           * min values in the subrange.
           */
          var min = chan[start];
          var max = min;
          var j = void 0;
          for (j = start; j < end; j += sampleStep) {
            var value = chan[j];
            if (value > max) {
              max = value;
            }
            if (value < min) {
              min = value;
            }
          }
          peaks[2 * i] = max;
          peaks[2 * i + 1] = min;
          if (c == 0 || max > this.mergedPeaks[2 * i]) {
            this.mergedPeaks[2 * i] = max;
          }
          if (c == 0 || min < this.mergedPeaks[2 * i + 1]) {
            this.mergedPeaks[2 * i + 1] = min;
          }
        }
      }
      return this.params.splitChannels ? this.splitPeaks : this.mergedPeaks;
    }

    /**
     * Get the position from 0 to 1
     *
     * @return {number} Position
     */
  }, {
    key: "getPlayedPercents",
    value: function getPlayedPercents() {
      return this.state.getPlayedPercents.call(this);
    }

    /** @private */
  }, {
    key: "disconnectSource",
    value: function disconnectSource() {
      if (this.source) {
        this.source.disconnect();
      }
    }
    /**
     * Destroy all references with WebAudio, disconnecting audio nodes and closing Audio Context
     */
  }, {
    key: "destroyWebAudio",
    value: function destroyWebAudio() {
      this.disconnectFilters();
      this.disconnectSource();
      this.gainNode.disconnect();
      this.scriptNode.disconnect();
      this.analyser.disconnect();

      // close the audioContext if closeAudioContext option is set to true
      if (this.params.closeAudioContext) {
        // check if browser supports AudioContext.close()
        if (typeof this.ac.close === 'function' && this.ac.state != 'closed') {
          this.ac.close();
        }
        // clear the reference to the audiocontext
        this.ac = null;
        // clear the actual audiocontext, either passed as param or the
        // global singleton
        if (!this.params.audioContext) {
          window.WaveSurferAudioContext = null;
        } else {
          this.params.audioContext = null;
        }
        // clear the offlineAudioContext
        window.WaveSurferOfflineAudioContext = null;
      }

      // disconnect resources used by setSinkId
      if (this.sinkStreamDestination) {
        this.sinkAudioElement.pause();
        this.sinkAudioElement.srcObject = null;
        this.sinkStreamDestination.disconnect();
        this.sinkStreamDestination = null;
      }
    }
    /**
     * This is called when wavesurfer is destroyed
     */
  }, {
    key: "destroy",
    value: function destroy() {
      if (!this.isPaused()) {
        this.pause();
      }
      this.unAll();
      this.buffer = null;
      this.destroyed = true;
      this.destroyWebAudio();
    }

    /**
     * Loaded a decoded audio buffer
     *
     * @param {Object} buffer Decoded audio buffer to load
     */
  }, {
    key: "load",
    value: function load(buffer) {
      this.startPosition = 0;
      this.lastPlay = this.ac.currentTime;
      this.buffer = buffer;
      this.createSource();
    }

    /** @private */
  }, {
    key: "createSource",
    value: function createSource() {
      this.disconnectSource();
      this.source = this.ac.createBufferSource();

      // adjust for old browsers
      this.source.start = this.source.start || this.source.noteGrainOn;
      this.source.stop = this.source.stop || this.source.noteOff;
      this.setPlaybackRate(this.playbackRate);
      this.source.buffer = this.buffer;
      this.source.connect(this.analyser);
    }

    /**
     * @private
     *
     * some browsers require an explicit call to #resume before they will play back audio
     */
  }, {
    key: "resumeAudioContext",
    value: function resumeAudioContext() {
      if (this.ac.state == 'suspended') {
        this.ac.resume && this.ac.resume();
      }
    }

    /**
     * Used by `wavesurfer.isPlaying()` and `wavesurfer.playPause()`
     *
     * @return {boolean} Whether or not this backend is currently paused
     */
  }, {
    key: "isPaused",
    value: function isPaused() {
      return this.state !== this.states[PLAYING];
    }

    /**
     * Used by `wavesurfer.getDuration()`
     *
     * @return {number} Duration of loaded buffer
     */
  }, {
    key: "getDuration",
    value: function getDuration() {
      if (this.explicitDuration) {
        return this.explicitDuration;
      }
      if (!this.buffer) {
        return 0;
      }
      return this.buffer.duration;
    }

    /**
     * Used by `wavesurfer.seekTo()`
     *
     * @param {number} start Position to start at in seconds
     * @param {number} end Position to end at in seconds
     * @return {{start: number, end: number}} Object containing start and end
     * positions
     */
  }, {
    key: "seekTo",
    value: function seekTo(start, end) {
      if (!this.buffer) {
        return;
      }
      this.scheduledPause = null;
      if (start == null) {
        start = this.getCurrentTime();
        if (start >= this.getDuration()) {
          start = 0;
        }
      }
      if (end == null) {
        end = this.getDuration();
      }
      this.startPosition = start;
      this.lastPlay = this.ac.currentTime;
      if (this.state === this.states[FINISHED]) {
        this.setState(PAUSED);
      }
      return {
        start: start,
        end: end
      };
    }

    /**
     * Get the playback position in seconds
     *
     * @return {number} The playback position in seconds
     */
  }, {
    key: "getPlayedTime",
    value: function getPlayedTime() {
      return (this.ac.currentTime - this.lastPlay) * this.playbackRate;
    }

    /**
     * Plays the loaded audio region.
     *
     * @param {number} start Start offset in seconds, relative to the beginning
     * of a clip.
     * @param {number} end When to stop relative to the beginning of a clip.
     */
  }, {
    key: "play",
    value: function play(start, end) {
      if (!this.buffer) {
        return;
      }

      // need to re-create source on each playback
      this.createSource();
      var adjustedTime = this.seekTo(start, end);
      start = adjustedTime.start;
      end = adjustedTime.end;
      this.scheduledPause = end;
      this.source.start(0, start);
      this.resumeAudioContext();
      this.setState(PLAYING);
      this.fireEvent('play');
    }

    /**
     * Pauses the loaded audio.
     */
  }, {
    key: "pause",
    value: function pause() {
      this.scheduledPause = null;
      this.startPosition += this.getPlayedTime();
      try {
        this.source && this.source.stop(0);
      } catch (err) {
        // Calling stop can throw the following 2 errors:
        // - RangeError (The value specified for when is negative.)
        // - InvalidStateNode (The node has not been started by calling start().)
        // We can safely ignore both errors, because:
        // - The range is surely correct
        // - The node might not have been started yet, in which case we just want to carry on without causing any trouble.
      }
      this.setState(PAUSED);
      this.fireEvent('pause');
    }

    /**
     * Returns the current time in seconds relative to the audio-clip's
     * duration.
     *
     * @return {number} The current time in seconds
     */
  }, {
    key: "getCurrentTime",
    value: function getCurrentTime() {
      return this.state.getCurrentTime.call(this);
    }

    /**
     * Returns the current playback rate. (0=no playback, 1=normal playback)
     *
     * @return {number} The current playback rate
     */
  }, {
    key: "getPlaybackRate",
    value: function getPlaybackRate() {
      return this.playbackRate;
    }

    /**
     * Set the audio source playback rate.
     *
     * @param {number} value The playback rate to use
     */
  }, {
    key: "setPlaybackRate",
    value: function setPlaybackRate(value) {
      this.playbackRate = value || 1;
      this.source && this.source.playbackRate.setValueAtTime(this.playbackRate, this.ac.currentTime);
    }

    /**
     * Set a point in seconds for playback to stop at.
     *
     * @param {number} end Position to end at
     * @version 3.3.0
     */
  }, {
    key: "setPlayEnd",
    value: function setPlayEnd(end) {
      this.scheduledPause = end;
    }
  }]);
  return WebAudio;
}(util.Observer);
exports["default"] = WebAudio;
_defineProperty(WebAudio, "scriptBufferSize", 256);
module.exports = exports.default;

/***/ }),

/***/ "./node_modules/debounce/index.js":
/*!****************************************!*\
  !*** ./node_modules/debounce/index.js ***!
  \****************************************/
/***/ ((module) => {

/**
 * Returns a function, that, as long as it continues to be invoked, will not
 * be triggered. The function will be called after it stops being called for
 * N milliseconds. If `immediate` is passed, trigger the function on the
 * leading edge, instead of the trailing. The function also has a property 'clear' 
 * that is a function which will clear the timer to prevent previously scheduled executions. 
 *
 * @source underscore.js
 * @see http://unscriptable.com/2009/03/20/debouncing-javascript-methods/
 * @param {Function} function to wrap
 * @param {Number} timeout in ms (`100`)
 * @param {Boolean} whether to execute at the beginning (`false`)
 * @api public
 */
function debounce(func, wait, immediate){
  var timeout, args, context, timestamp, result;
  if (null == wait) wait = 100;

  function later() {
    var last = Date.now() - timestamp;

    if (last < wait && last >= 0) {
      timeout = setTimeout(later, wait - last);
    } else {
      timeout = null;
      if (!immediate) {
        result = func.apply(context, args);
        context = args = null;
      }
    }
  };

  var debounced = function(){
    context = this;
    args = arguments;
    timestamp = Date.now();
    var callNow = immediate && !timeout;
    if (!timeout) timeout = setTimeout(later, wait);
    if (callNow) {
      result = func.apply(context, args);
      context = args = null;
    }

    return result;
  };

  debounced.clear = function() {
    if (timeout) {
      clearTimeout(timeout);
      timeout = null;
    }
  };
  
  debounced.flush = function() {
    if (timeout) {
      result = func.apply(context, args);
      context = args = null;
      
      clearTimeout(timeout);
      timeout = null;
    }
  };

  return debounced;
};

// Adds compatibility for ES modules
debounce.debounce = debounce;

module.exports = debounce;


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __nested_webpack_require_216977__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __nested_webpack_require_216977__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __nested_webpack_require_216977__("./src/wavesurfer.js");
/******/ 	
/******/ 	return __webpack_exports__;
/******/ })()
;
});
//# sourceMappingURL=wavesurfer.js.map

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0,
/******/ 			"css/style": 0,
/******/ 			"css/app": 0,
/******/ 			"admin/css/admin": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style","css/app","admin/css/admin"], () => (__webpack_require__("./resources/js/main.js")))
/******/ 	__webpack_require__.O(undefined, ["css/style","css/app","admin/css/admin"], () => (__webpack_require__("./resources/scss/admin/admin.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/style","css/app","admin/css/admin"], () => (__webpack_require__("./resources/scss/style.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style","css/app","admin/css/admin"], () => (__webpack_require__("./resources/scss/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;