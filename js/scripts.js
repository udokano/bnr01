// 共用スクリプトスタイル記述



  //フリガナ自動入力
  $(function () {
    $.fn.autoKana('#name1', '#name3', {
      katakana: true  //true：カタカナ、false：ひらがな（デフォルト）
    });
    $.fn.autoKana('#name2', '#name4', {
      katakana: true  //true：カタカナ、false：ひらがな（デフォルト）
    });
  });




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


  //ハンバーガー


const $hamburger = document.getElementById("js-hamburger");

const $spNav = document.getElementById("js-spNav");

$hamburger.addEventListener("click", function () {
  if (!this.classList.contains("is-hamburger-open")) {
    this.classList.add("is-hamburger-open");
    $spNav.classList.add("is-nav-show");
  }

  else {
    this.classList.remove("is-hamburger-open");
    $spNav.classList.remove("is-nav-show");
  }
});


//モーダル

const $modalOpen = $(".js-modal-open");

const $modalClose = $(".js-modal-close");


$modalOpen.on("click", function () {
  var current = $(this);
  var modalTarget = current.data("id");

  $("#" + modalTarget).addClass("is-modal-open");
  $("body").addClass("is-hidden");
});

$modalClose.on("click", function () {
  var current = $(this);

  current.parents(".js-modal").removeClass("is-modal-open");
  $("body").removeClass("is-hidden");
});
