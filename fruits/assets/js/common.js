$(function() {

  $('.woocommerce-form__label').click(function() {
    $(this).toggleClass('woocommerce-form__label--active');
  });


//-------------------------------активна ссилка на якій знаходишся для меню---------------------------------------
  $('.nav ul li a').each(function () {
      var location = window.location.href;
      var link = this.href; 
      if(location == link) {
          $(this).addClass('active');
      }
  });


//---------------------------js-----------------------
  $('.tabs__wrap').hide();
  $('.tabs__wrap:first').show();
  $('.tabs div a:first').addClass('active');
   $('.tabs div a').click(function(event){
    event.preventDefault();
    $('.tabs div a').removeClass('active');
    $(this).addClass('active');
    $('.tabs__wrap').hide();
     var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });

//------------------------------acardeon---------------------------
  $(".block__content").slideUp("slow");
  $(".block").first().addClass('question__block--active');
  $(".question__block--active .block__content").slideDown("slow");

  $(".block__header").on("click", function(){
    if ($(this).parent().hasClass('question__block--active')) {
      $(this).parent().removeClass('question__block--active');
      $(".block__content").slideUp("slow");
    }
    else {
      $(".question__block--active .block__content").slideUp("slow");
      $(".question__block--active").removeClass('question__block--active');
      $(this).parent().addClass('question__block--active');
      $(".question__block--active .block__content").slideDown("slow");
    }
  });


//------------------------------hero slider-----------------------------
  var swiper = new Swiper('.hero', {
    spaceBetween: 30,
    pagination: {
      el: '.hero__pagination',
    },
    autoplay: {
      delay: 5000,
    },
  });

//------------------------------revievs slider-----------------------------
  var swiper = new Swiper('.reviews__slider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.reviews__pagination',
    },
    autoplay: {
      delay: 5000,
    },
  });



//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('nav').toggleClass('nav--active');
    $('header').toggleClass('header--menu');
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});

//----------------------------------------fixed----------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>10){
          $('.header').addClass('header--active');
          $('.navigation').addClass('navigation--active');
      }
      else if ($(this).scrollTop()<10){
          $('.header').removeClass('header--active');
          $('.navigation').removeClass('navigation--active');
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
