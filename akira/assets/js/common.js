$(function() {

//-------------------------------активна ссилка на якій знаходишся для меню---------------------------------------
  $('nav ul li a').each(function () {
      var location = window.location.href;
      var link = this.href; 
      if(location == link) {
          $(this).addClass('active');
      }
  });

//---------------------------tabs-----------------------
  $('.tabs__wrap').hide();
  $('.tabs__wrap:first').show();
  $('.tabs ul a:first').addClass('active');
   $('.tabs ul a').click(function(event){
    event.preventDefault();
    $('.tabs ul a').removeClass('active');
    $(this).addClass('active');
    $('.tabs__wrap').hide();
     var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });


//------------------------------acardeon---------------------------
  $(".block__content").slideUp("slow");
  $(".block").first().addClass('active');
  $(".block--active .block__content").slideDown("slow");

  $(".block__header").on("click", function(){
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active');
      $(".block__content").slideUp("slow");
    }
    else {
      $(".block--active .block__content").slideUp("slow");
      $(".block--active").removeClass('block--active');
      $(this).parent().addClass('block--active');
      $(".block--active .block__content").slideDown("slow");
    }
  });

//-------------------------------isotope---------------------------------------
  var $grid = $('.course__grid').imagesLoaded( function() {
    // init Isotope after all images have loaded
    $grid.isotope({
      itemSelector: '.item',
      layoutMode: 'fitRows',
      getSortData: {
        name: '.name',
        symbol: '.symbol',
        number: '.number parseInt',
        category: '[data-category]',
        weight: function( itemElem ) {
          var weight = $( itemElem ).find('.weight').text();
          return parseFloat( weight.replace( /[\(\)]/g, '') );
        }
      }
    });
  });

  // filter functions
  var filterFns = {
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match( /ium$/ );
    }
  };

  // bind filter button click
  $('.filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });



//------------------------------slider-hero-----------------------------
  $("#coverflow").flipster({
    style: 'flat',
    loop: true,
    start: 'center',
    scrollwheel: false,
    keyboard: true,
    buttonPrev: 'Previous',
    buttonNext: 'Next',
    spacing: -0.1,
    buttons: true,
  });

//------------------------------slider-franchise--advantages-----------------------------
  $("#franchise--advantages").flipster({
    style: 'flat',
    loop: true,
    start: 'center',
    scrollwheel: false,
    keyboard: true,
    buttonPrev: 'Previous',
    buttonNext: 'Next',
    spacing: -0.25,
    buttons: true,
  });

//------------------------------slider-team-----------------------------
  $('.team__slider').slick({
    slidesToShow: 4,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
           slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

//------------------------------slider-partners-----------------------------
  $('.partners__slider').slick({
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 992,
        settings: {
           slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

//------------------------------slider-reviews-----------------------------
  $('.reviews__slider').slick({
    slidesToShow: 1,
    dots: true,
    arrows: false,
    centerMode: true,
    // responsive: [
    //   {
    //     breakpoint: 768,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '40px',
    //       slidesToShow: 3
    //     }
    //   },
    //   {
    //     breakpoint: 480,
    //     settings: {
    //       arrows: false,
    //       centerMode: true,
    //       centerPadding: '40px',
    //       slidesToShow: 1
    //     }
    //   }
    // ]
  });

//------------------------------slider-opros-----------------------------
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'fade',
  });

//------------------------------slider-curse--work-----------------------------
  $('.curse--work__slider').slick({
    slidesToShow: 3,
    dots: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
           slidesToShow: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

//------------------------------slider-curse--graduates-----------------------------
  $('.curse--graduates__slider').slick({
    slidesToShow: 3,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
           slidesToShow: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });


//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('nav').toggleClass('nav--active');
    $('header').toggleClass('header--menu');
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});

//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+0 (000) 000-00-00');

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
     return this.optional(element) || phone_number.match(/\+[0-9]{1}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
  }, "Введите Ваш телефон");

  $(".form").each(function(index, el) {
    $(el).addClass('form-' + index);

    $('.form-' + index).validate({
      rules: {
        phone: {
          required: true,
          phoneno: true
        },
        name: 'required',
      },
      messages: {
        name: "Введите Ваше имя",
        phone: "Введите Ваш телефон",
      },
      submitHandler: function(form) {
        var t = {
          name: jQuery('.form-' + index).find("input[name=name]").val(),
          phone: jQuery('.form-' + index).find("input[name=phone]").val(),
          subject: jQuery('.form-' + index).find("input[name=subject]").val()
        };
        ajaxSend('.form-' + index, t);
      }
    });

  });

  function ajaxSend(formName, data) {
    jQuery.ajax({
      type: "POST",
      url: "sendmail.php",
      data: data,
      success: function() {
        $(".modal").popup("hide");
        $("#thanks").popup("show");
        setTimeout(function() {
          $(formName).trigger('reset');
        }, 2000);
      }
    });
  }

//----------------------------------------fixed----------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>20){
          $('.header').addClass('header--active');
      }
      else if ($(this).scrollTop()<20){
          $('.header').removeClass('header--active');
      }
  });

//-------------------------скорость якоря---------------------------------------
  $(".header__list").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 60}, 'slow', 'swing');
  //--------------------закриття меню при кліку на ссилку якоря--------------------
     // $('.hamburger').removeClass('hamburger--active');
     // $('.header-menu').removeClass('header-menu');
     // $('.header--active').removeClass('header--active');
     // $('.nav--active').removeClass('nav--active');
  });

  // //-------------------------------анімація цифр---------------------------------------
  //   var show = true;
  //   var countbox = ".about-statistics__container";
  //   $(window).on("scroll load resize", function () {
  //       if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
  //       var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
  //       var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
  //       var w_height = $(window).height(); // Высота окна браузера
  //       var d_height = $(document).height(); // Высота всего документа
  //       var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
  //       if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
  //           $('.about-statistics__item h3').spincrement({
  //               thousandSeparator: "",
  //               duration: 2000
  //           });
  //           show = false;
  //       }
  //   });

  // //----------------------------wowJS-------------------------------
  //   var wow = new WOW(
  //     {
  //       boxClass:     'wow',      // animated element css class (default is wow)
  //       animateClass: 'animated', // animation css class (default is animated)
  //       offset:       0,          // distance to the element when triggering the animation (default is 0)
  //       mobile:       true,       // trigger animations on mobile devices (default is true)
  //       live:         true,       // act on asynchronously loaded content (default is true)
  //       callback:     function(box) {
  //         // the callback is fired every time an animation is started
  //         // the argument that is passed in is the DOM node being animated
  //       },
  //       scrollContainer: null // optional scroll container selector, otherwise use window
  //     }
  //   );
  //   wow.init();
  
  // //-------------------------------parallax---------------------------------------
  //   $(window).scroll(function() {
  //     var parallax = $(this).scrollTop();
  //     $('.parallax').css({
  //       'transform' : 'translate(0%, ' + parallax/10 + '%)'
  //     });
  //   });

  // //-------------------------------активна ссилка на якій знаходишся для меню---------------------------------------
  // $('.nav ul li a').each(function () {
  //     var location = window.location.href;
  //     var link = this.href; 
  //     if(location == link) {
  //         $(this).addClass('active');
  //     }
  // });
});

//----------------------------------------preloader----------------------------------

  $(window).on('load', function(){
    $('.preloader').delay(2500).fadeOut('slow');
  });


// //--------------------------------------icon----------------------------------------
//   ;( function( window, document )
//     {
//       'use strict';

//       var file     = '/wp-content/themes/akira/img/symbols.html',
//           revision = 1.9;

//       if( !document.createElementNS || !document.createElementNS( 'http://www.w3.org/2000/svg', 'svg' ).createSVGRect )
//           return true;

//       var isLocalStorage = 'localStorage' in window && window[ 'localStorage' ] !== null,
//           request,
//           data,
//           insertIT = function()
//           {
//               document.body.insertAdjacentHTML( 'afterbegin', data );
//           },
//           insert = function()
//           {
//               if( document.body ) insertIT();
//               else document.addEventListener( 'DOMContentLoaded', insertIT );
//           };

//       if( isLocalStorage && localStorage.getItem( 'inlineSVGrev' ) == revision )
//       {
//         data = localStorage.getItem( 'inlineSVGdata' );
//         if( data )
//         {
//             insert();
//             return true;
//         }
//       }

//       try
//       {
//         request = new XMLHttpRequest();
//         request.open( 'GET', file, true );
//         request.onload = function()
//           {
//             if( request.status >= 200 && request.status < 400 )
//               {
//                 data = request.responseText;
//                 insert();
//                 if( isLocalStorage )
//                 {
//                   localStorage.setItem( 'inlineSVGdata',  data );
//                   localStorage.setItem( 'inlineSVGrev',   revision );
//                 }
//             }
//         }
//         request.send();
//       }
//       catch( e ){}

//     }
//   ( window, document ) );

