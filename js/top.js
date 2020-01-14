/*=============================

トップページのスクリプトスタイル記述

===============================*/

$(".iopt_label").remove();



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



/*
スタイリングおよびJSのトリガーにするためのクラス、ID付与
----------------------------------------------*/


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
注釈文追加
------------------------------------------*/

jQuery("#label__type__a1").append('<span class="sub__text">長辺と短編の合計が600px未満　3600円</span>');

jQuery("#label__type__a2").append('<span class="sub__text">長辺と短編の合計が601px～1000px　5700円</span>');

jQuery("#label__type__a3").append('<span class="sub__text">長辺と短編の合計が1001px～1500px　8600円</span>');

jQuery("#label__type__a4").append('<span class="sub__text">11500円</span>');

jQuery("#label__type__a5").append('<span class="sub__text">上記価格の50%OFFの金額</span>');

jQuery("#label__type__a6").append('<span class="sub__text">特殊サイズのバナーです。サイズをご指定ください</span>');

jQuery("#label__type__b1").append('<span class="sub__text">料金変動無し</span>');

jQuery("#label__type__b2").append('<span class="sub__text">＋2000円</span>');

jQuery("#label__type__c1").append('<span class="sub__text">＋2000円</span>');

jQuery("#label__type__c2").append('<span class="sub__text">＋1000円</span>');

jQuery("#label__type__d2").append('<span class="sub__text">＋1500円</span>');

jQuery("#label__type__e1").append('<span class="sub__text">-500円</span>');


/*
プレースポルダー追加
---------------------------------------*/

jQuery("#control__num > div > .text__input1").attr('placeholder', '例：00000000000000');

jQuery("#textarea1").attr('placeholder', 'こちらにデザイン指示を入力\r\n例：明るい感じでロゴは右下に配置');

jQuery("#info__customer .text1").attr('placeholder', '未入力でも注文可能です');

jQuery("#info__customer .text2").attr('placeholder', 'バナーヤスオ');

jQuery("#info__customer .text3").attr('placeholder', '未入力でも注文可能です');


/*
ラジオボタンクリック,スタイリングorイベント
------------------------------------------*/


jQuery(function () {

    jQuery("#size__select > input").change(function () {

        //選択したボックスにスタイリング
        /* jQuery("#size__select label").not(this).removeClass("checked");
        jQuery(this).addClass("checked"); */

        //リサイズ依頼、特殊サイズ以外を選択
        if (!jQuery('[value="%E7%89%B9%E6%AE%8A%E3%82%B5%E3%82%A4%E3%82%BA%E3%83%90%E3%83%8A%E3%83%BC"],[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"]').prop('checked')) {
            jQuery('#control__num').css("display", "none");
            jQuery('#special__size').css("display", "none");
            jQuery(".text__input1").val("");
        }

        //リサイズ依頼を選択
        if (jQuery('[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"]').prop('checked')) {
            jQuery('#special__size').css("display", "none");
            jQuery('#control__num').css("display", "block");
        }

        //特殊サイズを選択
        if (jQuery('[value="%E3%81%9D%E3%81%AE%E4%BB%96"]').prop('checked')) {
            jQuery('#control__num').css("display", "none");
            jQuery('#special__size').css("display", "block");
            jQuery(".text__input1").val("");
        }

    });


});


/*
選択したオプションを確認の表にアウトプット
-----------------------------------*/

jQuery(function () {

    //バナータイプのラベルテキスト取得からTABLEへ出力

    /* バナーサイズ選択 */
    jQuery("#size__select > input").change(function () {
        var size01out = jQuery("#output__type");
        //Sサイズを選択
        if (jQuery('[value="S%E3%82%B5%E3%82%A4%E3%82%BA"]').prop('checked')) {
            size01out.text("");
            size01out.text("Sサイズ");
        }

        //Mサイズを選択
        if (jQuery('[value="M%E3%82%B5%E3%82%A4%E3%82%BA"]').prop('checked')) {
            size01out.text("");
            size01out.text("Mサイズ");
        }
        //Lサイズを選択
        if (jQuery('[value="L%E3%82%B5%E3%82%A4%E3%82%BA"]').prop('checked')) {
            size01out.text("");
            size01out.text("Lサイズ");
        }

        //SNS用・ブログ用ヘッダーを選択
        if (jQuery('[value="SNS%E7%94%A8%E3%83%BB%E3%83%96%E3%83%AD%E3%82%B0%E7%94%A8%E3%83%98%E3%83%83%E3%83%80%E3%83%BC"]').prop('checked')) {
            size01out.text("");
            size01out.text("SNS用・ブログ用ヘッダー");
        }
        //リサイズ依頼を選択
        if (jQuery('[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"]').prop('checked')) {
            size01out.text("");
            size01out.text("リサイズ依頼");
        }

        //特殊サイズを選択
        if (jQuery('[value="%E3%81%9D%E3%81%AE%E4%BB%96"]').prop('checked')) {
            size01out.text("");
            size01out.text("特殊サイズ");
        }
    });


    //納期のラベルテキスト取得TABLEへ出力
    jQuery('#limit > input').change(function () {
        var size01out = jQuery("#output__option");


        //1営業日を選択
        if (jQuery('[value="1%E6%97%A5%E5%96%B6%E6%A5%AD%E6%97%A5"]').prop('checked')) {
            size01out.text("");
            size01out.text("1営業日");
        }

        //2営業日を選択
        if (jQuery('[value="2%E6%97%A5%E5%96%B6%E6%A5%AD%E6%97%A5"]').prop('checked')) {
            size01out.text("");
            size01out.text("2営業日");
        }
        //3営業日を選択
        if (jQuery('[value="3%E6%97%A5%E5%96%B6%E6%A5%AD%E6%97%A5"]').prop('checked')) {
            size01out.text("");
            size01out.text("3営業日");
        }

    });

    //公開可否の選択のラベルテキスト取得TABLEへ出力

    jQuery('#publish > input').change(function () {
        var size01out = jQuery("#output__publish");

        //公開OKを選択
        if (jQuery('[value="%E5%85%AC%E9%96%8BOK"]').prop('checked')) {
            size01out.text("");
            size01out.text("公開OK");
        }

        //公開NGを選択
        if (jQuery('[value="%E5%85%AC%E9%96%8BNG"]').prop('checked')) {
            size01out.text("");
            size01out.text("公開NG");
        }
    });

});

//モーダルウィンドウ

jQuery(function () {
    jQuery('.js-modal-open').each(function () {
        jQuery(this).on('click', function () {
            var target = jQuery(this).data('target');
            var modal = document.getElementById(target);
            jQuery(modal).fadeIn();
            return false;
        });
    });
    jQuery('.js-modal-close').on('click', function () {
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
        var pos = jQuery("#size__select").offset().top;
        //特殊サイズが開いていたら閉じる
        jQuery('#special__size').css("display", "none");
        //管理番号をチェック
        jQuery('#size__select > .radio5').prop('checked', 'true');

        //アウトプットの表にも挿入
        jQuery("#output__type").text("リサイズ依頼");
        jQuery("#control__num").css("display", "block");

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
