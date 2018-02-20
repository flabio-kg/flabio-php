'use strict';
$(document).ready(function () {

  $('.preloader').fadeOut('slow', function () {
    $(this).remove();
  });
  
  $('.works__blog').masonry({
    layoutMode: 'masonryHorizontal',
    itemSelector: '.works__item',
    masonryHorizontal: {
      rowHeight: 50
    }
  });

  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    items: 1,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  });

  $(".add").on("click", function (e) {
    if ($(".tabs li").size() < 4) {
      $(".tabs li.active").removeClass("active");
      $(".tabs").append('<li class="active"></li>');
      $(".page iframe").attr("src", "");
    }
  });

  $(".tabs li").on("click", function (e) {
    $(".tabs li.active").removeClass("active");
    $(this).addClass("active");
    $(".page iframe").attr("src", $(this).find("a").attr("href"));
    e.preventDefault();
  });

  $(".tabs li a.close").on("click", function (e) {
    $(this).closest("li").remove();
    if ($(".tabs li").size() == 0) {
      $(".tabs").append('<li></li>');
    }
    $(".tabs li:last-child").addClass("active");
    e.preventDefault();
  });

  $('.outer').on('click', function (event) {
    var newBlob = $('<div class="blob"></div>');
    newBlob.css({
      top: event.pageY - 25,
      left: event.pageX - 30
    });
    $('body').append(newBlob);
    setTimeout(function () {
      newBlob.remove();
    }, 1000);
  });

  $('.main__scroll').click(function () {
    $('html, body').animate({ scrollTop: $("#content").offset().top }, 700);
    return false;
  });

  $('.open-popup-link').magnificPopup({
    type: 'inline',    
    midClick: false,
    callbacks: {
        open: function() {
            $('.scrolled').css({'overflow-y': 'scroll'});
        },
        close: function() {
            $('.scrolled').css({'overflow-y': 'visible'});
            $(".frame_reset").attr("src", '');
        }
    },
    removalDelay: 800,
    mainClass: 'mfp-move-horizontal'
  });

  $('.input').focus(function () {
    $(this).parents('.inputBox').addClass('focus');
  });
 
  $('.inputfile').on('change', function () {
      var o = this.files.length+' файлов выбрано';
      $(this).closest('.box').find('label span').text(o);
  });

  $('.main__head ul').clone().appendTo('.mmenu-nav');
  var $menu = $('.mmenu-nav').mmenu({
    navbar: {
      title: '<img src=\'/wp-content/themes/flabio/images/logo.png\' alt=\'\' />'
    },
    navbars: [{
      "position": "bottom",
      "content": ["<a href='mailto:hello@flabio.kg'><i class='fa fa-envelope-o'></i>hello@flabio.kg</a>"]
    }],
    extensions: ['fx-menu-slide', 'fx-listitems-slide', 'border-full', 'pagedim-black'],
    offCanvas: {
      'position': 'left'
    },
    counters: true
  });
  var $icon = $('.js-navtrigger');
  var API = $menu.data('mmenu');
  $icon.on('click', function () {
    API.open();
  });
  API.bind('open:start', function ($panel) {
    $('.js-navtrigger').toggleClass('-active');
  });
  API.bind('close:start', function ($panel) {
    $('.js-navtrigger').toggleClass('-active');
  });
  if (Modernizr.mq('(max-width: 992px)')) {
    $('a.-pagescroll[href*="#"]:not([href="#"])').click(function () {
      API.close();
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 115
          }, 1000);
          return false;
        }
      }
    });
  } else {
    $('a.-pagescroll[href*="#"]:not([href="#"])').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 73
          }, 1000);
          return false;
        }
      }
    });
  }
});

var clickEffect = {
  init: function init() {
    $(document).on('click', function (e) {
      $('<div class="cursor">').css({
        top: e.clientY,
        left: e.clientX
      }).appendTo($(document.body)).on('animationend webkitAnimationEnd', function () {
        $(this).remove();
      });
    });
  }
};
clickEffect.init();

$(window).on("scroll", function () {
  $(window).scrollTop() >= $(window).height() ? $('.main__wrap').addClass('scrolled') : $('.main__wrap').removeClass('scrolled');
});
