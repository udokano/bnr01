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




  //指示書フォームラジオ選択フォーム

  $(".tab__radios").on("change load", function () {

    if (($('[id=tab__radios-1]').prop('checked'))) {
      jQuery("#tab02").removeClass("is-show");
      jQuery("#tab01").addClass("is-show");
    }

    if (($('[id=tab__radios-2]').prop('checked'))) {
      jQuery("#tab01").removeClass("is-show");
      jQuery("#tab02").addClass("is-show");
    }
  });

  $(window).on("load", function () {
    if (($('[id=tab__radios-1]').prop('checked'))) {
      jQuery("#tab02").removeClass("is-show");
      jQuery("#tab01").addClass("is-show");
    }

    if (($('[id=tab__radios-2]').prop('checked'))) {
      jQuery("#tab01").removeClass("is-show");
      jQuery("#tab02").addClass("is-show");
    }
  });

  //フリガナ自動入力
  $(function () {
    $.fn.autoKana('#name1', '#name3', {
      katakana: true  //true：カタカナ、false：ひらがな（デフォルト）
    });
    $.fn.autoKana('#name2', '#name4', {
      katakana: true  //true：カタカナ、false：ひらがな（デフォルト）
    });
  });


  if (window.matchMedia("(max-width: 768px)").matches) {


    $('a[href^="#"]').click(function () {
      // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
      var adjust = 54;
      // スクロールの速度（ミリ秒）
      var speed = 400;
      // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
      var href = $(this).attr("href");
      // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
      var position = target.offset().top + adjust;
      // スムーススクロール linear（等速） or swing（変速）
      $('body,html').animate({ scrollTop: position }, speed, 'swing');
      return false;
    });


  } else {

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


  }




  //スライダー

  //指示書作成

  var mySwiper = new Swiper('.direction__slider', {
    loop: true,
    initialSlide: 0,
    slidesPerView: 1,
    spaceBetween: 10,
    observer: true,
    observeParents: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    breakpoints: {
      767: {
        slidesPerView: 1,
        spaceBetween: 10
      }
    }

  });
});
