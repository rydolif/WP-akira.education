$(function() {
    "use strict";

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
  $('.filters--btn').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });


  // bind class

    $('#filters--button').on( 'click', 'button', function() {
      $('.focus').removeClass('focus');
      $(this).addClass('focus');
    });

    $('#filters').on( 'click', 'button', function() {
      $('.hover').removeClass('hover');
      $(this).addClass('hover');
    });


  // bind filter
    $('#child').click( function() {
      $('.child').addClass('visible');
      $('.parent').addClass('remove');
      $('.parent').removeClass('visible');
    });

    $('#parent').click( function() {
      $('.parent').addClass('visible');
      $('.child').addClass('remove');
      $('.child').removeClass('visible');
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
        checkbox: "Подтвердить согласие",
      },
      submitHandler: function(form) {
        var t = {
          name: jQuery('.form-' + index).find("input[name=name]").val(),
          phone: jQuery('.form-' + index).find("input[name=phone]").val(),
          checkbox: jQuery('.form-' + index).find("input[name=checkbox]").val(),
          comment: jQuery('.form-' + index).find("textarea[name=comment]").val(),
          subject: jQuery('.form-' + index).find("input[name=subject]").val(),

          one1: jQuery('.form-' + index).find("input[name=one1]:checked").val(),
          one2: jQuery('.form-' + index).find("input[name=one2]:checked").val(),
          one3: jQuery('.form-' + index).find("input[name=one3]:checked").val(),
          one4: jQuery('.form-' + index).find("input[name=one4]:checked").val(),
          one5: jQuery('.form-' + index).find("input[name=one5]:checked").val(),
          one6: jQuery('.form-' + index).find("input[name=one6]:checked").val(),
     
          two1: jQuery('.form-' + index).find("input[name=two1]:checked").val(),
          two2: jQuery('.form-' + index).find("input[name=two2]:checked").val(),
          two3: jQuery('.form-' + index).find("input[name=two3]:checked").val(),
          two4: jQuery('.form-' + index).find("input[name=two4]:checked").val(),
          two5: jQuery('.form-' + index).find("input[name=two5]:checked").val(),
          two6: jQuery('.form-' + index).find("input[name=two6]:checked").val(),
     
          three1: jQuery('.form-' + index).find("input[name=three1]:checked").val(),
          three2: jQuery('.form-' + index).find("input[name=three2]:checked").val(),
          three3: jQuery('.form-' + index).find("input[name=three3]:checked").val(),
          three4: jQuery('.form-' + index).find("input[name=three4]:checked").val(),
          three5: jQuery('.form-' + index).find("input[name=three5]:checked").val(),
          three6: jQuery('.form-' + index).find("input[name=three6]:checked").val(),

          product: jQuery('.form-' + index).find("textarea[name=product]").val(),
          work: jQuery('.form-' + index).find("textarea[name=work]").val(),

        };
        ajaxSend('.form-' + index, t);
      }
    });

  });

  function ajaxSend(formName, data) {
    jQuery.ajax({
      type: "POST",
      url: "/wp-content/themes/akira/sendmail.php",
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

//---------------------------franchise--system-----------------------
  $('.franchise--system__wrap').hide();
  $('.franchise--system__wrap:first').show();
  $('.franchise--system__content a:first').addClass('btn btn--franchise');
   $('.franchise--system__content a').click(function(event){
    event.preventDefault();
    $('.franchise--system__content a').removeClass('btn btn--franchise');
    $(this).addClass('btn btn--franchise');
    $('.franchise--system__wrap').hide();
     var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });


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


//------------------------------slider-hero-----------------------------
  $("#coverflow").flipster({
    style: 'flat',
    autoplay: 4000,
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
  });

//------------------------------slider-opros-----------------------------
    // var swiper = new Swiper('.swiper-container', {
    //    pagination: {
    //      el: '.swiper-pagination',
    //      clickable: true,
    //      renderBullet: function (index, className) {
    //        return '<span class="' + className + '">' + (index + 1) + '</span>';
    //      },
    //    },
    //    navigation: {
    //      nextEl: '.swiper-button-next',
    //      prevEl: '.swiper-button-prev',
    //    },
    //    effect: 'fade',
    //  });

    $('#opros').click( function(e){
      swiper.update();
    });


//------------------------------slider-curse--work-----------------------------
  $('.curse--work__slider').slick({
    slidesToShow: 3,
    dots: true,
    // arrows: false,
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
  });

});

//----------------------------------------preloader----------------------------------

  $(window).on('load', function(){
    $('.preloader').delay(2500).fadeOut('slow');
  });
