/*--------------------


料金変動設定記載


----------------------*/

/*
dataで各要素に値段を登録
---------------------------------------*/

$(function () {


    //Sサイズ
    $("#banner1").attr("data-price", "3600");

    //Mサイズ
    $("#banner2").attr("data-price", "5700");
    //Lサイズ
    $("#banner3").attr("data-price", "8600");
    //SNSブログヘッダー
    $("#banner4").attr("data-price", "11500");
    $("#banner5").attr("data-price", "0");
    $("#banner6").attr("data-price", "0");
    //バナータイプ
    $("#banner7").attr("data-price", "0");
    $("#banner8").attr("data-price", "2000");

    //納期
    $("#banner9").attr("data-price", "2000");
    $("#banner10").attr("data-price", "1000");
    $("#banner11").attr("data-price", "0");

    //データ納品
    $("#banner12").attr("data-price", "0");
    $("#banner13").attr("data-price", "1500");
    //公開
    $("#banner14").attr("data-price", "0");
    $("#banner15").attr("data-price", "-500");

    //特殊サイズ
    $("#option1").attr("data-price", "0");
    $("#option2").attr("data-price", "9600");
    $("#option3").attr("data-price", "9900");
    $("#option4").attr("data-price", "10200");
    $("#option5").attr("data-price", "10500");
    $("#option6").attr("data-price", "10800");
    $("#option7").attr("data-price", "11100");
    $("#option8").attr("data-price", "11400");
    $("#option9").attr("data-price", "11700");
    $("#option10").attr("data-price", "12000");

});


/*
リアルタイム料金変動設定
---------------------------------------*/

$(function () {
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

    $("input[name*='%E3%82%B5%E3%82%A4%E3%82%BA%E6%8C%87%E5%AE%9A']").change(function () {
        $(this).data('price');
        /*  $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").attr("data-price", 0);
         spps01 = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").data('price');
         console.log(spps01); */
        radioprice01 = $(this).data('price');
        $("#select1").prop("selectedIndex", 0);
        //リサイズ依頼に数値が入力されてたら
        $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05);
    });

    //バナータイプ
    $("input[name*='%E3%83%90%E3%83%8A%E3%83%BC%E5%BD%A2%E5%BC%8F']").on("change", function () {
        $(this).data('price');
        radioprice02 = $(this).data('price');

        var sel = $("#select1 option:selected").val();
        spps01 = $("#select1 option:selected").data('price');
        //管理番号の値取得
        var contnum = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").val();
        //リサイズ依頼、特殊サイズ以外が選択されていたら
        if (sel === "この中から選択してください" && contnum === "") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
        }
        else if (sel === "この中から選択してください") {
            //管理番号の値をたさない
            if (contnum == "") {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
            }
            //管理番号の値カウント
            else {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02))
            }
        }

        else if (sel != "この中から選択してください") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + spps01)

        }
    });

    //納期
    $("input[name*='%E7%B4%8D%E6%9C%9F%E3%81%AE%E9%81%B8%E6%8A%9E']").change(function () {
        $(this).data('price');
        radioprice03 = $(this).data('price');
        var sel = $("#select1 option:selected").val();
        spps01 = $("#select1 option:selected").data('price');
        //管理番号の値取得
        var contnum = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").val();

        if (sel === "この中から選択してください" && contnum === "") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
        }
        else if (sel === "この中から選択してください") {

            if (contnum == "") {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
            }
            else {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02))
            }
        }

        else if (sel != "この中から選択してください") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + spps01)

        }
    });
    //データ納品
    $("input[name*='%E3%83%87%E3%83%BC%E3%82%BF%E3%81%94%E7%B4%8D%E5%93%81']").change(function () {
        $(this).data('price');
        radioprice04 = $(this).data('price');
        var sel = $("#select1 option:selected").val();
        spps01 = $("#select1 option:selected").data('price');
        var contnum = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").val();

        if (sel === "この中から選択してください" && contnum === "") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
        }
        else if (sel === "この中から選択してください") {

            if (contnum == "") {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
            }
            else {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02))
            }
        }

        else if (sel != "この中から選択してください") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + spps01)

        }
    });

    //公開
    $("input[name*='%E5%AE%9F%E7%B8%BE%E3%81%A8%E3%81%97%E3%81%A6%E5%85%AC%E9%96%8B']").change(function () {
        $(this).data('price');
        radioprice05 = $(this).data('price');
        var sel = $("#select1 option:selected").val();
        spps01 = $("#select1 option:selected").data('price');
        var contnum = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").val();

        if (sel === "この中から選択してください" && contnum === "") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
        }
        else if (sel === "この中から選択してください") {

            if (contnum == "") {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05)
            }
            else {
                $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02))
            }
        }

        else if (sel != "この中から選択してください") {
            $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + spps01)

        }
    });



    //特殊サイズ
    $("#select1").change(function () {
        $("#select1 option:selected").data('price');
        spps01 = $("#select1 option:selected").data('price');
        $('#output__price').text(radioprice01 + radioprice02 + radioprice03 + radioprice04 + radioprice05 + spps01);
    });

    //管理番号
    $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']").on("keyup", function () {
        var ctext = $("input[name*='%E7%AE%A1%E7%90%86%E7%95%AA%E5%8F%B7']");
        var ttt = ctext.val();
        spps02 = 0;
        if (ttt == "") {
            $(this).attr("data-price", 0);
            spps02 = $(this).attr("data-price");
            //attrだ文字列になっちゃうからparseIntに入れる
            $('#output__price').text(radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));
        } else if (ttt <= 10000) {
            $(this).attr("data-price", 1800);
            spps02 = $(this).attr("data-price");
            //attrだ文字列になっちゃうからparseIntに入れる
            $('#output__price').text(radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));
        } else if (ttt >= 10001 && ttt <= 20000) {
            $(this).attr("data-price", 2850);
            spps02 = $(this).attr("data-price");
            //attrだ文字列になっちゃうからparseIntに入れる
            $('#output__price').text(radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));
        } else if (ttt >= 20001 && ttt <= 30000) {
            $(this).attr("data-price", 4300);
            spps02 = $(this).attr("data-price");
            //attrだ文字列になっちゃうからparseIntに入れる
            $('#output__price').text(radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));
        } else if (ttt >= 30001 && ttt <= 40000) {
            $(this).attr("data-price", 5750);
            spps02 = $(this).attr("data-price");
            //attrだ文字列になっちゃうからparseIntに入れる
            $('#output__price').text(radioprice02 + radioprice03 + radioprice04 + radioprice05 + parseInt(spps02));
        }//以降は特殊サイズ
    });


});
