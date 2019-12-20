// JavaScript Document


$('.js-link').on('click', function (e) {
  e.stopPropagation();
  e.preventDefault();
  location.href = $(this).attr('data-url');
})


//スクロールしたらページトップの矢印表示
$(function () {
  $(window).scroll(function () {
    var scp = $(window).scrollTop();
    var scp2 = 1000;

    if (scp > scp2) {
      $(".page-top").fadeIn();
    } else {
      $(".page-top").fadeOut();
    }
  });




  //ドロワーメニュー切り替え設定

  $(".menu-open").click(function () {
    $(".hambargar").toggleClass("open");
    $(".fix-bottom").toggleClass("open");
    var txt = $(".menu-open").text();
    var menutxt = "メニュー"
    if (menutxt == txt) {
      $(this).text("閉じる");
    } else {
      $(this).text("メニュー");
    }



  });

  //ハンバーガーないアコーディオン


  $(".parent > #ac-txt").click(function () {
    $("#ac").slideToggle();
    $(".parent > a").toggleClass("ac-open");


  });



  //スクロールコンテンツ表示

  $('.in-view').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    $(this).stop().addClass('fade-in');
  });


  //スライダー

  //バナー

  var mySwiper = new Swiper('.swiper1', {
    loop: true,
    initialSlide: 0,
    slidesPerView: 1,
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    breakpoints: {
      767: {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: '.swiper-pagination',

      }
    }

  })


  //よくある質問

  var mySwiper2 = new Swiper('.swiper2', {
    loop: true,
    initialSlide: 1,
    slidesPerView: 2,
    spaceBetween: 10,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.next2',
    prevButton: '.prev2',

    breakpoints: {
      767: {
        slidesPerView: 1,
        spaceBetween: 10
      }
    }

  });

  //症例

  var mySwiper4 = new Swiper('.swiper3', {
    loop: true,
    initialSlide: 1,
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: '.swiper-pagination',
    paginationClickable: true,

    paginationClickable: true,
    nextButton: '.next2',
    prevButton: '.prev2',

    breakpoints: {
      767: {
        slidesPerView: 1,
        spaceBetween: 10
      }
    }

  });


  //施術の感想

  var mySwiper5 = new Swiper('.swiper4', {
    loop: true,
    initialSlide: 1,
    slidesPerView: 3,
    spaceBetween: 25,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    paginationClickable: true,
    nextButton: '.next2',
    prevButton: '.prev2',

    breakpoints: {
      767: {
        slidesPerView: 1,
        spaceBetween: 35
      }
    }

  });


  //LPヒアルロン酸

  var mySwiper5 = new Swiper('.swiper5', {
    loop: true,
    initialSlide: 1,
    slidesPerView: 3,
    spaceBetween: 25,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    paginationClickable: true,
    nextButton: '.next2',
    prevButton: '.prev2',

    breakpoints: {
      767: {
        slidesPerView: 1,
        spaceBetween: 35
      }
    }

  });

  //スムーススクロール
  var headerHight = 100; //ヘッダの高さ
  $('a[href^=#]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHight; //ヘッダの高さ分位置をずらす
    $("html, body").animate({ scrollTop: position }, 550, "swing");
    return false;
  });

});
