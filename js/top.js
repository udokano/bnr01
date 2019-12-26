//テキストボックスクラス追加ナンバリング
$(".iopt_text").each(function (i) {
    $(this).attr('class', 'text' + (i + 1));
    $(this).addClass("texts");

});


//ラジオボタンクラス追加ナンバリング
$(".iopt_radio").each(function (i) {
    $(this).attr('class', 'radio' + (i + 1));
    $(this).addClass("radios");

});

//ラベルクラス追加ナンバリング
$(".iopt_radio_label").each(function (i) {
    $(this).attr('class', 'label' + (i + 1));
    $(this).addClass("labels");

});

//ラベルにID振り分け
$("label").each(function (i) {
    $(this).attr('id', 'label' + (i + 1));
});


/*
ツールチップ
------------------------------------------*/

/*バナーサイズs*/

//Sサイズ選択
tippy('#size__select > #label2', {
    content: '長辺と短編の合計が600px未満　3600円',
    interactive: true
});

//Mサイズ選択
tippy('#size__select > #label3', {
    content: '長辺と短編の合計が601px～1000px　5700円',
    interactive: true
});

//Lサイズ選択
tippy('#size__select > #label4', {
    content: '長辺と短編の合計が1001px～1500px　8600円',
    interactive: true
});

//SNS用ヘッダー/ブログ用ヘッダー
tippy('#size__select > #label5', {
    content: '11500円',
    interactive: true
});

//リサイズ依頼
tippy('#size__select > #label6', {
    content: '上記価格の50%OFFの金額',
    interactive: true
});

//その他
tippy('#size__select > #label7', {
    content: '特殊サイズのバナーです。サイズをご指定ください',
    interactive: true
});

/*バナー形式*/
//その他
tippy('#format > #label15', {
    content: '+2000円',
    interactive: true
});

/*納期選択*/
tippy('#limit > #label17', {
    content: '+2000円',
    interactive: true
});

tippy('#limit > #label18', {
    content: '+1000円',
    interactive: true
});

/*データ選択*/

tippy('#data > #label23', {
    content: '+1500円',
    interactive: true
});

/*実績として公開*/

tippy('#publish > #label25', {
    content: '-500円',
    interactive: true
});


$(function () {

    $(".select__zone label").change(function () {

        //選択したボックスにスタイリング
        $(".select__zone label").not(this).removeClass("checked");

        $(this).addClass("checked");

        //リサイズ依頼、特殊サイズ以外を選択
        if (!$('[value="%E7%89%B9%E6%AE%8A%E3%82%B5%E3%82%A4%E3%82%BA%E3%83%90%E3%83%8A%E3%83%BC"],[value="%E3%83%AA%E3%82%B5%E3%82%A4%E3%82%BA%E4%BE%9D%E9%A0%BC"]').prop('checked')) {
            $('#control__num').css("display", "none");
            $('#special__size').css("display", "none");
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
        }

    });

    $(".select__btn__zone label").change(function () {

        //選択したボックスにスタイリング
        $(".select__btn__zone label").not(this).removeClass("checked");

        $(this).addClass("checked");
    });
});


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
        $("#control__num").css("display", "block");
        $("html,body").animate({ scrollTop: pos }, 'fast');
        $(".text1").val(value);
        return false;

    });
});


//無限スクロール表示設定

$(function () {
    $('#infinite__banners').jscroll();
});
