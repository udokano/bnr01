/*=============================

トップページのスクリプトスタイル記述

===============================*/

/*
いらないラベル削除
*/

$(".iopt_label").remove();

/*
スタイリングおよびJSのトリガーにするためのクラス、ID付与
----------------------------------------------*/

//LABEL要素にfor追加ナンバリング
jQuery("label").each(function (i) {
    jQuery(this).attr('for', 'banner' + (i + 1));

});

//ラジオボックスID追加ナンバリング
jQuery("input[type='radio']").each(function (i) {
    jQuery(this).attr('id', 'banner' + (i + 1));

});

//SELECT　ID付与
jQuery("select").each(function (i) {
    jQuery(this).attr('id', 'select' + (i + 1));

});

//OPTION ID追加ナンバリング
jQuery("select > option").each(function (i) {
    jQuery(this).attr('id', 'option' + (i + 1));

});

//テキストボックスクラス追加ナンバリング
jQuery("#info__customer  .iopt_text").each(function (i) {
    jQuery(this).attr('class', 'text' + (i + 1));
    jQuery(this).addClass("texts");

});

//ラジオボタンクラス追加ナンバリング
jQuery("#size__select > .iopt_radio").each(function (i) {
    jQuery(this).attr('class', 'radio' + (i + 1));
    jQuery(this).addClass("radios");

});

//ラジオボタンクラス追加ナンバリング
jQuery("#size__select > .iopt_radio").each(function (i) {
    jQuery(this).attr('class', 'radio' + (i + 1));
    jQuery(this).addClass("radios");
});

//ラベルクラス追加ナンバリング
jQuery(".iopt_radio_label").each(function (i) {
    jQuery(this).attr('class', 'label' + (i + 1));
    jQuery(this).addClass("labels");
});

//テキストボックスにID付与
jQuery("#instruction .iopt_textarea").each(function (i) {
    jQuery(this).attr('id', 'textarea' + (i + 1));
});

//管理番号
jQuery("#control__num .iopt_text").each(function (i) {
    jQuery(this).attr('class', 'text__input' + (i + 1));
});

/*ラベルにID振り分け*/

//サイズ選択エリア
jQuery("#size__select > label").each(function (i) {
    jQuery(this).attr('id', 'label__type__a' + (i + 1));
});

//バナー形式エリア
jQuery("#format > label").each(function (i) {
    jQuery(this).attr('id', 'label__type__b' + (i + 1));
});

//納期選択エリア
jQuery("#limit > label").each(function (i) {
    jQuery(this).attr('id', 'label__type__c' + (i + 1));
});

//データ納品エリア
jQuery("#data > label").each(function (i) {
    jQuery(this).attr('id', 'label__type__d' + (i + 1));
});

//公開エリア
jQuery("#publish > label").each(function (i) {
    jQuery(this).attr('id', 'label__type__e' + (i + 1));
});


/*
原寸サイズマーク追加
------------------------------------*/

jQuery("#label__type__a1").after('<div class="img__mark js-modal-open" id="mark01" data-target="sample01"></div>');

jQuery("#label__type__a2").after('<div class="img__mark js-modal-open" id="mark02" data-target="sample02"></div>');

/*
注釈文追加
------------------------------------------*/

jQuery("#label__type__a1").append('<span class="sub__text">長辺と短編の合計が600px未満</span>');

jQuery("#label__type__a2").append('<span class="sub__text">長辺と短編の合計が601px～1000px</span>');

jQuery("#label__type__a3").append('<span class="sub__text">長辺と短編の合計が1001px～1500px</span>');

//jQuery("#label__type__a4").append('<span class="sub__text">11500円</span>');

jQuery("#label__type__a5").append('<span class="sub__text">上記価格の50%OFFの金額</span>');

jQuery("#label__type__a6").append('<span class="sub__text">特殊サイズのバナーです。サイズをご指定ください</span>');

/* jQuery("#label__type__c1").append('<span class="sub__text">＋2000円</span>');

jQuery("#label__type__c2").append('<span class="sub__text">＋1000円</span>'); */

/* jQuery("#label__type__d2").append('<span class="sub__text">＋1500円</span>');

jQuery("#label__type__e1").append('<span class="sub__text">-500円</span>'); */

/*
料金追加
----------------------------------------*/
jQuery("#label__type__a1 .item__text").after('<span class="price__text">3600円</span>');

jQuery("#label__type__a2 .item__text").after('<span class="price__text">5700円</span>');

jQuery("#label__type__a3 .item__text").after('<span class="price__text">8600円</span>');

jQuery("#label__type__a4 .item__text").after('<span class="price__text">11500円</span>');

//jQuery("#label__type__a5 .item__text").after('<span class="price__text">50%OFF</span>');

//jQuery("#label__type__a6 .item__text").after('<span class="price__text">特殊サイズのバナーです。サイズをご指定ください</span>');

jQuery("#label__type__b1 .item__text").append('<span class="price__text">料金変動無し</span>');

jQuery("#label__type__b2 .item__text").append('<span class="price__text">＋2000円</span>');

jQuery("#label__type__c1 .item__text").append('<span class="price__text">＋2000円</span>');

jQuery("#label__type__c2 .item__text").append('<span class="price__text">＋1000円</span>');

jQuery("#label__type__d2 .item__text").append('<span class="price__text">＋1500円</span>');

jQuery("#label__type__e2 .item__text").append('<span class="price__text">-500円</span>');

jQuery(".cart__btn__cont").append('<span class="cart__text">ご入力ありがとうございました！</span>');




/*
プレースポルダー追加
---------------------------------------*/

jQuery("#control__num > div > .text__input1").attr('placeholder', '例：00000000000000');

jQuery("#textarea1").attr('placeholder', 'こちらにデザイン指示を入力\r\n例：明るい感じでロゴは右下に配置');

jQuery("#info__customer .text1").attr('placeholder', '未入力でも注文可能です');

jQuery("#info__customer .text2").attr('placeholder', 'バナーヤスオ');

jQuery("#info__customer .text3").attr('placeholder', '未入力でも注文可能です');



/*料金出力バー,スクロールしたらページ下部に固定*/

$(window).on("scroll", function () {

    const toggle_point = $("#form__head").offset().top;
    const now_point = $(window).scrollTop();

    if (now_point > toggle_point) {
        $("#js-fixed-bottom").addClass("js-fixed");
    } else {
        $("#js-fixed-bottom").removeClass("js-fixed");
    }

});




/*
ラジオボタンクリックorイベント
------------------------------------------*/


/*
位置を取得してから非表示にしたいので読み込み後に非表示
-----------------------------------------*/

$(window).on('load', function () {

    $("#form__area02").addClass("hidden");
    $("#form__area03").addClass("hidden");
    $("#form__area04").addClass("hidden");
    $("#form__area05").addClass("hidden");
    $("#form__area06").addClass("hidden");
    $("#form__area07").addClass("hidden");

});


$(function () {

    /*
    各要素を非表示にする前に本来の位置を取得
    ------------------------------*/

    var pos = jQuery("#form__area01").offset().top;

    var pos01 = jQuery("#form__area02").offset().top;

    var pos02 = jQuery("#control__num").offset().top;

    var pos03 = jQuery("#special__size").offset().top;

    var pos04 = jQuery("#form__area03").offset().top;

    var pos05 = jQuery("#form__area04").offset().top;

    var pos06 = jQuery("#form__area05").offset().top;

    var pos07 = jQuery("#form__area06").offset().top;

    var pos08 = jQuery("#form__area07").offset().top;

    console.log(pos04);

    console.log(pos05);

    console.log(pos06);

    console.log(pos07);



    /*
    追従ナビクリックスクロール設定
    ----------------------------------------------*/

    $("#out__list01").on("click", function () {
        jQuery("html,body").animate({ scrollTop: pos }, '500');
    });

    $("#out__list02").on("click", function () {
        $("#form__area02").addClass("viv");
        $("#form__area03").addClass("viv");
        jQuery("html,body").animate({ scrollTop: pos04 }, '500');
    });

    $("#out__list03").on("click", function () {
        $("#form__area02").addClass("viv");
        $("#form__area03").addClass("viv");
        $("#form__area04").addClass("viv");
        $("#form__area05").addClass("viv");
        $("#form__area06").addClass("viv");
        jQuery("html,body").animate({ scrollTop: pos07 }, '500');
    });

    /*
    各フォームの要素をクリックして次の要素表示からのスクロール
    --------------------------------------------*/

    jQuery("#size__select > input").change(function () {

        //リサイズ依頼、特殊サイズ以外を選択
        if (!jQuery('[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"],[value="%E3%81%9D%E3%81%AE%E4%BB%96"]').prop('checked')) {
            jQuery('#form__area02').addClass("viv");
            jQuery('#control__num').removeClass("viv");
            jQuery('#special__size').removeClass("viv");
            jQuery(".text__input1").val("");
            jQuery("html,body").animate({ scrollTop: pos01 }, '500');
        }



        //リサイズ依頼を選択
        if (jQuery('[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"]').prop('checked')) {
            jQuery('#control__num').addClass("viv");
            jQuery('#special__size').removeClass("viv");
            jQuery("html,body").animate({ scrollTop: pos02 }, '500');
        }

        //特殊サイズを選択
        if (jQuery('[value="%E3%81%9D%E3%81%AE%E4%BB%96"]').prop('checked')) {
            jQuery('#special__size').addClass("viv");
            jQuery('#control__num').removeClass("viv");
            jQuery(".text__input1").val("");
            jQuery("html,body").animate({ scrollTop: pos03 }, '500');
        }

    });

    $("#special__size select").change(function () {
        jQuery('#form__area02').addClass("viv");
        jQuery("html,body").animate({ scrollTop: pos03 + 80 }, '500');
    });

    $("#control__num input").change(function () {
        jQuery('#form__area02').addClass("viv");
        jQuery("html,body").animate({ scrollTop: pos03 + 80 }, '500');


    });

    $("#format > input").change(function () {
        jQuery('#form__area03').addClass("viv");
        jQuery("html,body").animate({ scrollTop: pos04 }, '500');
    });

    $("#limit > input").change(function () {
        jQuery('#form__area04').addClass("viv");
        jQuery("html,body").animate({ scrollTop: pos05 }, '500');
    });

    $("#instruction").change(function () {
        $('#form__area05').addClass("viv");
        $("html,body").animate({ scrollTop: pos06 }, '500');
    });

    $("#data input").change(function () {
        $('#form__area06').addClass("viv");
        $("html,body").animate({ scrollTop: pos07 }, '500');
    });

    $("#publish input").change(function () {
        $('#form__area07').addClass("viv");
        $("html,body").animate({ scrollTop: pos08 }, '500');
    });


});

//モーダルウィンドウ

jQuery(function () {
    jQuery('.js-modal-open').each(function () {
        jQuery(this).on('click', function () {
            var target = jQuery(this).data('target');
            var modal = document.getElementById(target);
            $("body").css("overflow", "hidden");
            jQuery(modal).fadeIn();
            return false;
        });
    });
    jQuery('.js-modal-close').on('click', function () {
        $("body").css("overflow", "auto");
        jQuery('.js-modal').fadeOut();
        return false;
    });
});


//無限スクローモダール紐づけ, ID自動振り分け
jQuery(function () {
    jQuery('#infinite__banners li').each(function (i) {
        jQuery(this).attr('data-target', 'bnr' + (i + 1));
    });

    var box = jQuery(".bnr__modal__box");

    box.each(function (i) {
        jQuery(this).attr('id', 'bnr' + (i + 1));
    });

    var btn = jQuery(".bnr__modal__box button");

    //モーダルないのボタンクリックしたら管理番号入力
    btn.on("click", function () {
        //クリックしたボタンのVALを取得
        var value = jQuery(this).val();
        //スクロールポイント取得
        var pos = jQuery("#banner6").offset().top;
        //特殊サイズが開いていたら閉じる
        jQuery('#special__size').removeClass("viv");
        //管理番号をチェック
        jQuery('#size__select > .radio5').prop('checked', 'true');

        jQuery("#control__num").addClass("viv");
        //次の要素も開く
        jQuery("#form__area02").addClass("viv");

        //スクロールする
        jQuery("html,body").animate({ scrollTop: pos }, '1000');
        //クリックしたボタンの管理番号を入力
        $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").focus();
        jQuery("#control__num > div > .text__input1").val(value);
        return false;

    });
});


//無限スクロール表示設定

//スクロールコンテンツ表示

jQuery('.in-view').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    jQuery(this).stop().addClass('fade-in');
});
