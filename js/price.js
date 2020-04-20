/*--------------------


料金変動設定記載


----------------------*/

/*
dataで各要素に値段を登録
---------------------------------------*/

$(function () {

    /* サイズ選択 */

    //Sサイズ
    $("#size__select .radio1").attr("data-price", "2600");
    //Mサイズ
    $("#size__select .radio2").attr("data-price", "4700");
    //Lサイズ
    $("#size__select .radio3").attr("data-price", "7600");
    //SNSブログヘッダー
    $("#size__select .radio4").attr("data-price", "10500");
    //リサイズ依頼
    $("#size__select .radio5").attr("data-price", "0");
    //特殊サイズ
    $("#size__select .radio6").attr("data-price", "2600");
    //動画サイト用サムネイル
    $("#size__select .radio7").attr("data-price", "0");

    /* バナータイプ */

    //シンプル
    $("#format .radio1").attr("data-price", "0");
    //リッチ
    $("#format .radio2").attr("data-price", "2000");


    /*  納期 */

    //1営業日
    $("#limit .radio1").attr("data-price", "2000");
    //2営業日
    $("#limit .radio2").attr("data-price", "1000");
    //3営業日
    $("#limit .radio3").attr("data-price", "0");

    /*  データ納品 */

    //いらない
    $("#data .radio1").attr("data-price", "0");
    //データいる
    $("#data .radio2").attr("data-price", "1500");

    /*  公開 */

    //公開NG
    $("#publish .radio1").attr("data-price", "0");
    //公開OK
    $("#publish .radio2").attr("data-price", "-500");

    //特殊サイズ
    $("#option1").attr("data-price", "0");
    $("#option2").attr("data-price", "8600");
    $("#option3").attr("data-price", "8900");
    $("#option4").attr("data-price", "9200");
    $("#option5").attr("data-price", "9500");
    $("#option6").attr("data-price", "9800");
    $("#option7").attr("data-price", "10100");
    $("#option8").attr("data-price", "10400");
    $("#option9").attr("data-price", "10700");
    $("#option10").attr("data-price", "11000");

});


sptext01 = 0;
/* 各ラジオボタンの金額設定 */

//サイズ選択
radioprice01 = 0;
//バナータイプ
radioprice02 = 0;
//納期
radioprice03 = 0;
//データ納品
radioprice04 = 0;
//実績公開
radioprice05 = 0;
//特殊サイズ値段
spps01 = 0;
//管理番号値段
spps02 = 0;
checkprice = 0;

/*
リアルタイム料金変動設定
---------------------------------------*/

$(function () {
    /* 毎回使うので関数化 */
    function ass() {
        var sel = $("#select1 option:selected").text();
        spps01 = $("#select1 option:selected").data('price');
        //管理番号の値取得
        var contnum = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").val();
        //管理番号未入力でかつ特殊サイズも未選択
        if (sel === "この中から選択してください" && contnum === "") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05);
            if ($("#banner6").prop('checked')) {
                $('#output__price').text(radioprice01 + radioprice03 + radioprice04 + radioprice05)
            }
            else {
                //瞬間的な加算防ぐ
                /* if ($rich.prop('checked')) {
                    $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05);
                    console.log("rich");
                }

                else {
                    $('#output__price').text(radioprice01 + radioprice03 + radioprice04 + radioprice05);
                    console.log("simple");
                } */
            }

            /* if ($format__radios.prop("checked", false)) {
                $('#output__price').text(radioprice01 + radioprice03 + radioprice04 + radioprice05);
            } */
        }
        /* 特殊サイズ未選択 */
        else if (sel === "この中から選択してください") {
            //管理番号未入力の場合は管理番号の値をたさない
            if (contnum == "") {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
            }
            //管理番号入力済みの場合は管理番号の値カウント
            else {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02))
            }
        }
        //特殊サイズが選択されていたら、特殊サイズの金額をカウント
        else if (sel != "この中から選択してください") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + spps01)

        }
    }

    /* バナータイプ選択されていないのに加算されるのを防ぐ */
    function total__stop() {
        if ($rich.prop('checked')) {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05);
            console.log("rich");
        }

        else {
            $('#output__price').text(radioprice01 + radioprice03 + radioprice04 + radioprice05);
            console.log("simple");
        }
    }
    /* 管理番号版 */
    function total__stop02() {
        if ($rich.prop('checked')) {
            //attrだと文字列になっちゃうからparseIntに入れる
            $('#output__price').text(radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));
        }
        else {
            //attrだと文字列になっちゃうからparseIntに入れる
            $('#output__price').text(radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));
        }
    }

    //サイズ選択

    $("input[name*='%E3%82%B5%E3%82%A4%E3%82%BA%E6%8C%87%E5%AE%9A']").change(function () {
        $(this).data('price');
        /*  $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").attr("data-price", 0);
         spps01 = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").data('price');
         console.log(spps01); */

        radioprice01 = $(this).data('price');
        $("#select1").prop("selectedIndex", 0);
        //動画サムネイルを選択したら
        if ($("#banner6").prop('checked')) {
            $('#output__price').text(radioprice01 + radioprice03 + radioprice04 + radioprice05);
        }

        else {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05);

        }
        total__stop();
    });

    //バナータイプ
    $("input[name*='%E3%83%90%E3%83%8A%E3%83%BC%E5%BD%A2%E5%BC%8F']").change(function () {
        $(this).data('price');
        radioprice02 = $(this).data('price');

        ass();
    });

    //納期
    $("input[name*='%E7%B4%8D%E6%9C%9F%E3%81%AE%E9%81%B8%E6%8A%9E']").change(function () {
        $(this).data('price');
        radioprice03 = $(this).data('price');
        ass();
    });
    //データ納品
    $("input[name*='%E3%83%87%E3%83%BC%E3%82%BF%E3%81%94%E7%B4%8D%E5%93%81']").change(function () {
        $(this).data('price');
        radioprice04 = $(this).data('price');
        ass();
    });

    //公開
    $("input[name*='%E5%AE%9F%E7%B8%BE%E3%81%A8%E3%81%97%E3%81%A6%E5%85%AC%E9%96%8B']").change(function () {
        $(this).data('price');
        radioprice05 = $(this).data('price');
        ass();
    });



    //特殊サイズ
    $("#select1").change(function () {
        $("#select1 option:selected").data('price');
        spps01 = $("#select1 option:selected").data('price');
        if ($rich.prop('checked')) {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + spps01);
        }
        else {
            $('#output__price').text(radioprice01 + radioprice03 + radioprice04 + radioprice05 + spps01);
        }
    });

    //管理番号
    $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").on("keyup", function () {
        var ctext = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']");
        var ttt = ctext.val();
        spps02 = 0;
        if (ttt == "") {
            $(this).attr("data-price", 0);
            spps02 = $(this).attr("data-price");
            $('#output__price').text(radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));

        } else if (ttt <= 10000) {
            $(this).attr("data-price", 800);
            spps02 = $(this).attr("data-price");
            /* Sサイズ */
            total__stop02();
        } else if (ttt >= 10001 && ttt <= 20000) {
            $(this).attr("data-price", 1850);
            spps02 = $(this).attr("data-price");
            /* Mサイズ */
            //attrだ文字列になっちゃうからparseIntに入れる
            total__stop02();
        } else if (ttt >= 20001 && ttt <= 30000) {
            $(this).attr("data-price", 3300);
            spps02 = $(this).attr("data-price");
            /* Lサイズ */
            //attrだ文字列になっちゃうからparseIntに入れる
            total__stop02();
        } else if (ttt >= 30001 && ttt <= 40000) {
            $(this).attr("data-price", 4750);
            spps02 = $(this).attr("data-price");
            /* ブログヘッダー */
            //attrだ文字列になっちゃうからparseIntに入れる
            total__stop02();
        }//以降は特殊サイズ
    });


});
