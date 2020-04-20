/*=============================

トップページのスクリプトスタイル記述

===============================*/



/*
実績はこちらをクリック、アンカーリンク
-----------------------------*/

$("#js-anchor").on("click", function () {
    const bnr__pos = $("#infinite__banner__area").offset().top;
    jQuery("html,body").animate({ scrollTop: bnr__pos - 25 }, '500');
});


/*
いらないラベル削除
*/

$(".iopt_label").remove();

/*

ラジオボタン
のグループ変数化

--------------------------------*/

/* サイズ・用途選択ラベルグループ */
const $size__select__labels = $("#size__select > label");

/* サイズ・用途選択ラジオグループ */
const $size__select__radios = $("#size__select > input[type='radio']");

/* バナータイプラベルグループ */
const $format__labels = $("#format > label");

/* バナータイプラジオグループ */
const $format__radios = $("#format > input");

/* 納期ラベルグループ */
const $limit__labels = $("#limit > label");

/* 納期ラジオグループ */
const $limit__radios = $("#limit > input");

/* データラベルグループ */
const $data__labels = $("#data > label");

/* データラジオグループ */
const $data__radios = $("#data > input");

/* 実績ラベルグループ */
const $publish__labels = $("#publish > label");

/* 実績ラジオグループ */
const $publish__radios = $("#publish > input");


/* 特殊サイズプルダウン */
const $special__size__select = $("#special__size-box > select");

/* 特殊サイズプルダウン各メニュー */
const $special__size__options = $("#special__size-box > select > option");

/* 管理番号入力エリア */

const $control__num__input = $("#control__num__input > input");

/*
スタイリングおよびJSのトリガーにするためのクラス、ID付与
----------------------------------------------*/
/*管理番号入力 TEXT*/
$control__num__input.each(function (i) {
    jQuery(this).attr('id', 'txt' + (i + 1));

});
/* URL TEXT */
jQuery("#url__input input").each(function (i) {
    jQuery(this).attr('id', 'url' + (i + 1));
    jQuery(this).attr('class', 'url' + (i + 1));

});

//LABEL要素にfor追加ナンバリング
/* jQuery("label").each(function (i) {
    jQuery(this).attr('for', 'banner' + (i + 1));

}); */

/*

各エリアのラジオボタンにIDナンバリング
ラベルにもID紐付け

*/


//バナーサイズ用途

$size__select__labels.each(function (i) {
    jQuery(this).attr('for', 'banner' + (i + 1));
});

$size__select__radios.each(function (i) {
    jQuery(this).attr('id', 'banner' + (i + 1));
});

//バナータイプ
$format__labels.each(function (i) {
    jQuery(this).attr('for', 'banner__type' + (i + 1));
});

$format__radios.each(function (i) {
    jQuery(this).attr('id', 'banner__type' + (i + 1));
});

//納期
$limit__labels.each(function (i) {
    jQuery(this).attr('for', 'banner__limit' + (i + 1));
});

$limit__radios.each(function (i) {
    jQuery(this).attr('id', 'banner__limit' + (i + 1));
});

//データ

$data__labels.each(function (i) {
    jQuery(this).attr('for', 'banner__data' + (i + 1));
});

$data__radios.each(function (i) {
    jQuery(this).attr('id', 'banner__data' + (i + 1));
});

//実績を公開
$publish__labels.each(function (i) {
    jQuery(this).attr('for', 'banner__publish' + (i + 1));
});

$publish__radios.each(function (i) {
    jQuery(this).attr('id', 'banner__publish' + (i + 1));
});

//SELECT　ID付与
$special__size__select.each(function (i) {
    jQuery(this).attr('id', 'select' + (i + 1));

});

//OPTION ID追加ナンバリング
$special__size__options.each(function (i) {
    jQuery(this).attr('id', 'option' + (i + 1));

});


//ラジオボタンクラス追加ナンバリング
$size__select__radios.each(function (i) {
    jQuery(this).attr('class', 'radio' + (i + 1));
    jQuery(this).addClass("radios");
});

//ラジオボタンクラス追加ナンバリング
$format__radios.each(function (i) {
    jQuery(this).attr('class', 'radio' + (i + 1));
    jQuery(this).addClass("radios");
});

//ラジオボタンクラス追加ナンバリング
$limit__radios.each(function (i) {
    jQuery(this).attr('class', 'radio' + (i + 1));
    jQuery(this).addClass("radios");
});

//ラジオボタンクラス追加ナンバリング
$data__radios.each(function (i) {
    jQuery(this).attr('class', 'radio' + (i + 1));
    jQuery(this).addClass("radios");
});

//ラジオボタンクラス追加ナンバリング
$publish__radios.each(function (i) {
    jQuery(this).attr('class', 'radio' + (i + 1));
    jQuery(this).addClass("radios");
});

//ラベルクラス追加ナンバリング
jQuery(".iopt_radio_label").each(function (i) {
    jQuery(this).attr('class', 'label' + (i + 1));
    jQuery(this).addClass("labels");
});

//管理番号
$control__num__input.each(function (i) {
    jQuery(this).attr('class', 'text__input' + (i + 1));
});

/*ラベルにID振り分け*/

//サイズ選択エリア
$size__select__labels.each(function (i) {
    jQuery(this).attr('id', 'label__type__a' + (i + 1));
});

//バナー形式エリア
$format__labels.each(function (i) {
    jQuery(this).attr('id', 'label__type__b' + (i + 1));
});

//納期選択エリア
$limit__labels.each(function (i) {
    jQuery(this).attr('id', 'label__type__c' + (i + 1));
});

//データ納品エリア
$data__labels.each(function (i) {
    jQuery(this).attr('id', 'label__type__d' + (i + 1));
});

//公開エリア
$publish__labels.each(function (i) {
    jQuery(this).attr('id', 'label__type__e' + (i + 1));
});


/*
原寸サイズマーク追加
------------------------------------*/

jQuery("#label__type__a1").after('<div class="img__mark animation__ballon js-modal-open" id="mark01" data-target="sample01"></div>');

jQuery("#label__type__a2").after('<div class="img__mark animation__ballon js-modal-open" id="mark02" data-target="sample02"></div>');


/*
注釈文追加
------------------------------------------*/

jQuery("#label__type__a1").append('<span class="sub__text">長辺と短編の合計が600px未満</span>');

jQuery("#label__type__a2").append('<span class="sub__text">長辺と短編の合計が601px～1000px</span>');

jQuery("#label__type__a3").append('<span class="sub__text">長辺と短編の合計が1001px～1500px</span>');

//jQuery("#label__type__a4").append('<span class="sub__text">11500円</span>');

jQuery("#label__type__a5").append('<span class="sub__text">上記価格の50%OFFの金額</span>');

jQuery("#label__type__a6").append('<span class="sub__text">youtubeなどの動画サイト用のサムネイル</span>');

jQuery("#label__type__a7").append('<span class="sub__text">特殊サイズのバナーです。サイズをご指定ください</span>');

/* jQuery("#label__type__c1").append('<span class="sub__text">＋2000円</span>');

jQuery("#label__type__c2").append('<span class="sub__text">＋1000円</span>'); */

/* jQuery("#label__type__d2").append('<span class="sub__text">＋1500円</span>');

jQuery("#label__type__e1").append('<span class="sub__text">-500円</span>'); */

/*
料金追加
----------------------------------------*/
jQuery("#label__type__a1 .item__text").after('<span class="price__text"><span class="line-through">3600円</span><em class="campaign__price red">2600円</em></span>');

jQuery("#label__type__a2 .item__text").after('<span class="price__text"><span class="line-through">5700円</span><em class="campaign__price red">4700円</em></span>');

jQuery("#label__type__a3 .item__text").after('<span class="price__text"><span class="line-through">8600円</span><em class="campaign__price red">7600円</em></span>');

jQuery("#label__type__a4 .item__text").after('<span class="price__text"><span class="line-through">11500円</span><em class="campaign__price red">10500円</em></span>');

//jQuery("#label__type__a5 .item__text").after('<span class="price__text">50%OFF</span>');

jQuery("#label__type__a6 .item__text").after('<span class="price__text"><span class="line-through">3600円</span><em class="campaign__price red">2600円</em></span>');

jQuery("#label__type__b1 .item__text").append('<span class="price__text">料金変動無し</span>');

jQuery("#label__type__b2 .item__text").append('<span class="price__text">＋2000円</span>');

jQuery("#label__type__c1 .item__text").append('<span class="price__text">＋2000円</span>');

jQuery("#label__type__c2 .item__text").append('<span class="price__text">＋1000円</span>');

jQuery("#label__type__c3 .item__text").append('<span class="price__text">0円</span>');

jQuery("#label__type__d1 .item__text").append('<span class="price__text">0円</span>');

jQuery("#label__type__d2 .item__text").append('<span class="price__text">＋1500円</span>');

jQuery("#label__type__e1 .item__text").append('<span class="price__text">0円</span>');

jQuery("#label__type__e2 .item__text").append('<span class="price__text red">-500円</span>');

jQuery(".cart__btn__cont").append('<span class="cart__text">お支払い後、デザインのご指示を行っていただきます。</span>');


$(".labels").wrapInner('<div class="inner__label"></div>');

/*
プレースポルダー追加
---------------------------------------*/

$control__num__input.attr('placeholder', '例：00000000000000');

jQuery("#textarea1").attr('placeholder', 'こちらにデザイン指示を入力\r\n例：明るい感じでロゴは右下に配置');


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

/* 各フォームエリアを変数に入れる */

//サイズ・用途選択
const $form__area01 = $("#form__area01");
//形式（バナータイプ）選択
const $form__area02 = $("#form__area02");
//納期を選択
const $form__area03 = $("#form__area03");
//データ提供
const $form__area04 = $("#form__area04");
//実績を公開
const $form__area05 = $("#form__area05");
//カートへ入れるボタン
const $form__area06 = $("#form__area06");
//管理番号、入力エリア
const $control__num = $("#control__num");
//管理番号、インプット
const $text__input = $("#txt1");
//特殊サイズ、入力エリア
const $special__size = $("#special__size");


/*
位置を取得してから非表示にしたいので読み込み後に非表示
-----------------------------------------*/


/* $(function () {
    setTimeout(function () {
        $form__area02.addClass("hidden__filed");
        $form__area03.addClass("hidden__filed");
        $form__area05.addClass("hidden__filed");
        $form__area06.addClass("hidden__filed");
        $form__area07.addClass("hidden__filed");
    }, 500);
}); */

/*
    各要素を非表示にする前に本来の位置を取得
    ------------------------------*/

/* フォームエリアスクロールポジション取得 */

//サイズ・用途選択
var pos01 = $form__area01.offset().top;
//形式（バナータイプ）選択
var pos02 = $form__area02.offset().top;
//管理番号
var pos02_01 = $control__num.offset().top;
//特殊サイズ
var pos02_02 = $special__size.offset().top;
//納期を選択
var pos03 = $form__area03.offset().top;
//データ提供
var pos04 = $form__area04.offset().top;
//実績を公開
var pos05 = $form__area05.offset().top;
//カートへ入れるボタン
var pos06 = $form__area06.offset().top;


/* バナー形式
の各選択肢変数化 */

//Sサイズ
const $sizeS = $("#banner1");
//Mサイズ
const $sizeM = $("#banner2");
//Lサイズ
const $sizeL = $("#banner3");
//SNS・ブログヘッダー
const $sns = $("#banner4");
//リザイズ依頼・その他
const sp__banner__type = $('#banner5,#banner7');
//リザイズ依頼
const $resize__banner = $("#banner5");
//動画サムネイル
const $movie__banner = $("#banner6");
//その他
const $special__banner = $("#banner7");

/*

形式を選択の
各選択肢を変数化

*/

//シンプルバナー
const $simple = $("#banner__type1");
//リッチバナー
const $rich = $("#banner__type2");
//ダミー
const $asd = $("#banner__type3");
/*

納期を選択の
各選択肢を変数化

*/

//シンプルバナー
const $1day = $("#banner__limit1");
//リッチバナー
const $2day = $("#banner__limit2");
//リッチバナー
const $3day = $("#banner__limit3");

/*

データのご提供選択の
各選択肢を変数化

*/

//いらない
const $not = $("#banner__data1");
//欲しい
const $need = $("#banner__data2");

/*

実勢を公開の選択の
各選択肢を変数化

*/

//いらない
const $publish__ng = $("#banner__publish1");
//欲しい
const $publish__ok = $("#banner__publish2");


$(function () {
    /*
    追従ナビクリックスクロール設定
    ----------------------------------------------*/

    $("#out__list01").on("click", function () {
        jQuery("html,body").animate({ scrollTop: pos01 }, '500');
    });

    /* 動画サイト用のサムネイルがチェックされているかで表示項目を変える */

    $("#out__list02").on("click", function () {
        if ($movie__banner.prop('checked')) {
            $form__area03.addClass("viv");
            pos03 = $form__area03.offset().top;
            jQuery("html,body").animate({ scrollTop: pos03 }, '500');
        } else {
            $form__area02.addClass("viv");
            $form__area03.addClass("viv");
            pos03 = $form__area03.offset().top;
            jQuery("html,body").animate({ scrollTop: pos03 }, '500');
        }

    });

    $("#out__list03").on("click", function () {
        if ($movie__banner.prop('checked')) {
            $form__area03.addClass("viv");
            $form__area04.addClass("viv");
            $form__area05.addClass("viv");
            $form__area06.addClass("viv");
            pos05 = $form__area05.offset().top;
            jQuery("html,body").animate({ scrollTop: pos05 }, '500');
        } else {
            $form__area02.addClass("viv");
            $form__area03.addClass("viv");
            $form__area04.addClass("viv");
            $form__area05.addClass("viv");
            $form__area06.addClass("viv");
            pos05 = $form__area05.offset().top;
            jQuery("html,body").animate({ scrollTop: pos05 }, '500');
        }
    });

    /*
    各フォームの要素をクリックして次の要素表示からのスクロール
    --------------------------------------------*/


    /* サイズ選択 */

    $size__select__radios.change(function () {
        $format__radios.prop("disabled", false);
        $format__radios.addClass("validate[required]");
        $text__input.removeClass("validate[required]");//管理番号バリデーション外す
        $("#select1").removeClass("validate[required]");//特殊サイズバリデーション外す
        $(".js-bg-change__white").removeClass("is-bg__change__white");
        $(".js-bg-change__gray").removeClass("is-bg__change__gray");


        //リサイズ依頼、特殊サイズ以外を選択
        if (!sp__banner__type.prop('checked')) {
            $form__area02.addClass("viv");
            $control__num.removeClass("viv");
            $special__size.removeClass("viv");
            $text__input.val("");//管理番号は空にする!!
            pos02 = $form__area02.offset().top;
            jQuery("html,body").animate({ scrollTop: pos02 }, '500');
        }


        //リサイズ依頼を選択
        if ($resize__banner.prop('checked')) {
            $control__num.addClass("viv");
            $form__area02.addClass("viv");
            $text__input.addClass("validate[required]");//管理番号を入力してほしいからバリデーションをつける
            $special__size.removeClass("viv");
            pos02_01 = $control__num.offset().top;
            jQuery("html,body").animate({ scrollTop: pos02_01 }, '500');
        }

        //特殊サイズを選択
        else if ($special__banner.prop('checked')) {
            $special__size.addClass("viv");
            $control__num.removeClass("viv");
            //$form__area02.removeClass("viv");
            $text__input.val("");//管理番号は空にする!!
            $("#select1").addClass("validate[required]");//特殊サイズを選択して欲しいから、バリデーションつける
            pos02_02 = $special__size.offset().top;
            jQuery("html,body").animate({ scrollTop: pos02_02 }, '500');
            jQuery("#select1 option:first-child").val("");//『選択してください』は無効にする
        }

        //動画バナーを選択
        else if ($movie__banner.prop('checked')) {

            $form__area02.removeClass("viv");
            $format__radios.removeClass("validate[required]");
            $(".js-bg-change__white").addClass("is-bg__change__white");
            $(".js-bg-change__gray").addClass("is-bg__change__gray");
            $form__area03.addClass("viv");
            $simple.prop("checked", false).change();
            $format__radios.prop("checked", false);

        }

    });
    /* 特殊サイズの処理 */
    $special__size__select.change(function () {
        $form__area02.addClass("viv");
        pos02 = $form__area02.offset().top;
        jQuery("html,body").animate({ scrollTop: pos02 }, '500');
    });
    /* 管理番号を入力した後の処理 */
    $control__num__input.change(function () {
        $form__area02.addClass("viv");
        pos02 = $form__area02.offset().top;
        jQuery("html,body").animate({ scrollTop: pos02 }, '500');
    });
    /* バナータイプ */
    $format__radios.change(function () {
        $form__area03.addClass("viv");
        pos03 = $form__area03.offset().top;
        jQuery("html,body").animate({ scrollTop: pos03 }, '500');
    });
    /* 納期 */
    $limit__radios.change(function () {
        $form__area04.addClass("viv");
        pos04 = $form__area04.offset().top;
        jQuery("html,body").animate({ scrollTop: pos04 }, '500');
    });
    /* データ納品 */
    $data__radios.change(function () {
        $form__area05.addClass("viv");
        pos05 = $form__area05.offset().top;
        $("html,body").animate({ scrollTop: pos05 }, '500');
    });
    /* 実績を公開 */
    $publish__radios.change(function () {
        $form__area06.addClass("viv");
        pos06 = $form__area06.offset().top;
        $("html,body").animate({ scrollTop: pos06 }, '500');
    });


});


/*
選択したオプションを確認の表にアウトプット
-----------------------------------*/

jQuery(function () {

    //バナータイプのラベルテキスト取得からTABLEへ出力
    $size__select__radios.change(function () {
        var size01out = jQuery("#output__type");
        size01out.text("");
        size01out.addClass("bla");
        //リサイズ依頼を選択
        if ($sizeS.prop('checked')) {
            size01out.text("Sサイズ");
        }

        //特殊サイズを選択
        if ($sizeM.prop('checked')) {
            size01out.text("Mサイズ");
        }
        //リサイズ依頼を選択
        if ($sizeL.prop('checked')) {
            size01out.text("Lサイズ");
        }

        //特殊サイズを選択
        if ($sns.prop('checked')) {
            size01out.html("SNS用・ブログ用<br>ヘッダー");
        }
        //リサイズ依頼を選択
        if ($resize__banner.prop('checked')) {
            size01out.text("リサイズ依頼");
        }

        //特殊サイズを選択
        if ($movie__banner.prop('checked')) {
            size01out.html("動画サイト用<br>サムネイル");
        }

        //特殊サイズを選択
        if ($special__banner.prop('checked')) {
            size01out.text("特殊サイズ");
        }
    });
    //オプション選択のラベルテキスト取得TABLEへ出力

    $limit__radios.change(function () {
        var size01out = jQuery("#output__option");
        size01out.text("");
        size01out.addClass("bla");

        if ($1day.prop('checked')) {
            size01out.text("1営業日");
        }

        if ($2day.prop('checked')) {
            size01out.text("2営業日");
        }

        if ($3day.prop('checked')) {
            size01out.text("3営業日");
        }

    });

    //オプション選択のラベルテキスト取得TABLEへ出力

    $publish__radios.change(function () {
        var size01out = jQuery("#output__publish");
        size01out.text("");
        size01out.addClass("bla");
        if ($publish__ok.prop('checked')) {
            size01out.text("公開OK");
        }
        if ($publish__ng.prop('checked')) {
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
        //すでに特殊サイズのオプションが選択されていたら選択を一番上にする、料金加算を防ぐ
        var size01out = jQuery("#output__type");
        size01out.text("リサイズ依頼");
        size01out.addClass("bla");
        jQuery('#select1 #option1').prop('selected', 'true');
        //特殊サイズが開いていたら閉じる
        $special__size.removeClass("viv");
        //管理番号をチェック
        $special__banner.prop('checked', 'true');
        //管理番号入力エリア表示
        $control__num.addClass("viv");
        //次の要素も開く
        $form__area02.addClass("viv");
        //スクロールポイント取得
        pos02_01 = $control__num.offset().top;
        //スクロールする
        jQuery("html,body").animate({ scrollTop: pos02_01 }, '1000');
        //テキストフォーカスさせる
        $text__input.focus();
        //クリックしたボタンの管理番号を入力、そしてテキストに値が入った瞬間にkeyupイベントを発生させる
        $text__input.val(value).keyup();
        return false;

    });
});


//無限スクロール表示設定

//スクロールコンテンツ表示

jQuery('.in-view').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    jQuery(this).stop().addClass('fade-in');
});
