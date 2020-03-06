// 共用スクリプトスタイル記述

jQuery(function ($) {

  /*
カートの中身をカウント0の時は要素削除
-------------------------------------*/

  var bachi = $("#bachi");
  var bachitxt = $("#bachi__txt").text();

  if (bachitxt != 0) {
    bachi.addClass("show__bachi");
  }




  $('.js-link').on('click', function (e) {
    e.stopPropagation();
    e.preventDefault();
    location.href = $(this).attr('data-url');
  })


  //ドロワーメニュー切り替え設定

  $("#js-menu").click(function () {
    $(this).toggleClass("active");
    $("#js-nav").toggleClass("active");
  });

  //スライダー

  //バナー

  /* var mySwiper = new Swiper('.swiper1', {
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

  }) */



  //スムーススクロール
  $("a[href='#']")//^を*に換え、hrefのどこかに#を持つ場合に実行
    .not("[data-lity]")
    .click(function () {
      if (location.pathname.replace(/^\//, '') !== this.pathname.replace(/^\//, '') || location.hostname !== this.hostname) return;//リンク先が別のページの場合は終了
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top - headerHight;
      $("html, body").animate({ scrollTop: position }, 550, "swing");
      return false;
    });
});
