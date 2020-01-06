/*

トップページのスクリプトスタイル記述

*/



//テキストボックスクラス追加ナンバリング
$("#info__customer  .iopt_text").each(function (i) {
    $(this).attr('class', 'text' + (i + 1));
    $(this).addClass("texts");

});


//ラジオボタンクラス追加ナンバリング
$("#size__select > .iopt_radio").each(function (i) {
    $(this).attr('class', 'radio' + (i + 1));
    $(this).addClass("radios");

});

//ラベルクラス追加ナンバリング
$(".iopt_radio_label").each(function (i) {
    $(this).attr('class', 'label' + (i + 1));
    $(this).addClass("labels");
});

//テキストボックスにID付与
$("#instruction .iopt_textarea").each(function (i) {
    $(this).attr('id', 'textarea' + (i + 1));
});

//管理番号
$("#control__num .iopt_text").each(function (i) {
    $(this).attr('class', 'text__input' + (i + 1));
});

/*ラベルにID振り分け*/

//サイズ選択エリア
$("#size__select > label").each(function (i) {
    $(this).attr('id', 'label__type__a' + (i + 1));
});

//バナー形式エリア
$("#format > label").each(function (i) {
    $(this).attr('id', 'label__type__b' + (i + 1));
});

//納期選択エリア
$("#limit > label").each(function (i) {
    $(this).attr('id', 'label__type__c' + (i + 1));
});

//データ納品エリア
$("#data > label").each(function (i) {
    $(this).attr('id', 'label__type__d' + (i + 1));
});

//公開エリア
$("#publish > label").each(function (i) {
    $(this).attr('id', 'label__type__e' + (i + 1));
});

/*
ツールチップ
------------------------------------------*/

/*バナーサイズs*/

//Sサイズ選択
tippy('#size__select > #label__type__a2', {
    content: '長辺と短編の合計が600px未満　3600円',
    maxWidth: '100%',
    interactive: true
});

//Mサイズ選択
tippy('#size__select > #label__type__a3', {
    content: '長辺と短編の合計が601px～1000px　5700円',
    maxWidth: '100%',
    interactive: true
});

//Lサイズ選択
tippy('#size__select > #label__type__a4', {
    content: '長辺と短編の合計が1001px～1500px　8600円',
    maxWidth: '100%',
    interactive: true
});

//SNS用ヘッダー/ブログ用ヘッダー
tippy('#size__select > #label__type__a5', {
    content: '11500円',
    maxWidth: '100%',
    interactive: true
});

//リサイズ依頼
tippy('#size__select > #label__type__a6', {
    content: '上記価格の50%OFFの金額',
    maxWidth: '100%',
    interactive: true
});

//その他
tippy('#size__select > #label__type__a7', {
    content: '特殊サイズのバナーです。サイズをご指定ください',
    maxWidth: '100%',
    interactive: true
});

/*バナー形式*/
//リッチバナー
tippy('#format > #label__type__b3', {
    content: '+2000円',
    interactive: true
});

/*納期選択*/
tippy('#limit > #label__type__c2', {
    content: '+2000円',
    maxWidth: '100%',
    interactive: true
});

tippy('#limit > #label__type__c3', {
    content: '+1000円',
    maxWidth: '100%',
    interactive: true
});

/*データ選択*/

tippy('#data > #label__type__d3', {
    content: '+1500円',
    maxWidth: '100%',
    interactive: true
});

/*実績として公開*/

tippy('#publish > #label__type__e2', {
    content: '-500円',
    maxWidth: '100%',
    interactive: true
});


/*
プレースポルダー追加
---------------------------------------*/

$("#control__num > div > .text__input1").attr('placeholder', '例：00000000000000');

$("#textarea1").attr('placeholder', 'こちらにデザイン指示を入力\r\n例：明るい感じでロゴは右下に配置');

$("#info__customer .text1").attr('placeholder', '未入力でも注文可能です');

$("#info__customer .text2").attr('placeholder', 'バナーヤスオ');

$("#info__customer .text3").attr('placeholder', '未入力でも注文可能です');


/*
ラジオボタンクリック,スタイリングorイベント
------------------------------------------*/


$(function () {

    $(".select__zone label").change(function () {

        //選択したボックスにスタイリング
        $(".select__zone label").not(this).removeClass("checked");

        $(this).addClass("checked");

        //リサイズ依頼、特殊サイズ以外を選択
        if (!$('[value="%E7%89%B9%E6%AE%8A%E3%82%B5%E3%82%A4%E3%82%BA%E3%83%90%E3%83%8A%E3%83%BC"],[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"]').prop('checked')) {
            $('#control__num').css("display", "none");
            $('#special__size').css("display", "none");
            $(".text__input1").val("");
        }

        //リサイズ依頼を選択
        if ($('[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"]').prop('checked')) {
            $('#special__size').css("display", "none");
            $('#control__num').css("display", "block");
        }

        //特殊サイズを選択
        if ($('[value="%E3%81%9D%E3%81%AE%E4%BB%96"]').prop('checked')) {
            $('#control__num').css("display", "none");
            $('#special__size').css("display", "block");
            $(".text__input1").val("");
        }

    });
});

$("#limit.select__btn__zone label").change(function () {

    //選択したボックスにスタイリング
    $("#limit.select__btn__zone label").not(this).removeClass("checked");

    $(this).addClass("checked");
});

$("#data.select__btn__zone label").change(function () {

    //選択したボックスにスタイリング
    $("#data.select__btn__zone label").not(this).removeClass("checked");

    $(this).addClass("checked");
});

$("#publish.select__btn__zone label").change(function () {

    //選択したボックスにスタイリング
    $("#publish.select__btn__zone label").not(this).removeClass("checked");

    $(this).addClass("checked");
});

/*
選択したオプションを確認の表にアウトプット
-----------------------------------*/

$(function () {

    //バナータイプのラベルテキスト取得からTABLEへ出力
    $("#size__select > label").change(function () {

        var size01 = $(this).text();

        var size01out = $("#output__type");

        size01out.text(size01);
    });

    //特注バナーサイズの横サイズと縦サイズのVALUE取得TABLEへ出力


    /* $('.text2,.text3').change(function () {

        var rowsize01 = $('.text2').val();

        var colsize01 = $('.text3').val();

        var size01out = $("#output__type");

        size01out.text(rowsize01 + "*" + colsize01);
    }); */

    //オプション選択のラベルテキスト取得TABLEへ出力

    $('#publish label').change(function () {

        var label01 = $(this).text();

        var size01out = $("#output__publish");

        size01out.text(label01);
    });

    //オプション選択のラベルテキスト取得TABLEへ出力

    $('#limit >label').change(function () {

        var label01 = $(this).text();

        var size01out = $("#output__option");

        size01out.text(label01);
    });

});

//モーダルウィンドウ

$(function () {
    $('.js-modal-open').each(function () {
        $(this).on('click', function () {
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
    });
});


//無限スクローモダール紐づけ, ID自動振り分け
$(function () {
    $('#infinite__banners li').each(function (i) {
        $(this).attr('data-target', 'bnr' + (i + 1));
    });

    var box = $(".bnr__modal__box");

    box.each(function (i) {
        $(this).attr('id', 'bnr' + (i + 1));
    });

    var btn = $(".bnr__modal__box button");


    //モーダルないのボタンクリックしたら管理番号入力
    btn.on("click", function () {
        var value = $(this).val();
        var pos = $("#size__select").offset().top;
        $('#special__size').css("display", "none");
        //管理番号をチェック
        $('#label__type__a6 > .iopt_radio').prop('checked', 'true');

        //他のチェックスタイリングを外す
        $("#size__select > .labels").removeClass("checked");
        $("#size__select > .label5").addClass("checked");
        var label5 = $("#size__select > .label5").text();
        $("#output__type").text(label5);
        $("#control__num").css("display", "block");

        //スクロールする
        $("html,body").animate({ scrollTop: pos }, 'fast');
        $("#control__num > div > .text__input1").val(value);
        return false;

    });
});


//無限スクロール表示設定

//スクロールコンテンツ表示

$('.in-view').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
    $(this).stop().addClass('fade-in');
});
