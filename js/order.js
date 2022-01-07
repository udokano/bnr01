/*
いらないラベル削除
*/

$(".iopt_label").remove();


/*

なんども使うから要素の定数化
-----------------------*/

const $optionSize = $("#js-option-size");

const $optionSizeInp = $("#js-option-size > input");

const $optionSizeLabel = $("#js-option-size > label");

const $sizeInDom = $(".js-size-text");

const $sizeInPrice = $(".js-size-price");

const $optionSizeDetail = $("#js-size-detail");

const $optionTextarea = $("#js-placeholder-wrap > textarea");

const $optionRecordInp = $("#js-record > input");

const $optionRecordLabel = $("#js-record > label");

const $optionDataInp = $("#js-data > input");

const $optionDataLabel = $("#js-data > label");


//動画サムネイルサイズ

const $optionMovieInp = $("#js-option-movie-size > input");

const $optionMovieLabel = $("#js-option-movie-size > label");

//お任せ制作

const $optionLeaveSizeSelect = $("#js-size-select > select");

const $optionLeaveSizeLabel = $("#js-size-select-check > label");

const $optionLeaveSizeCheck = $("#js-size-select-check > input");

const $optionLeaveImgLabel = $("#js-option-image  label");

const $optionLeaveImgRadio = $("#js-option-image  input");

const $optionLeaveTextLabel = $("#js-option-text  label");

const $optionLeaveTextRadio = $("#js-option-text  input");

/*

IDをつける
-----------------------*/

$optionSizeInp.each(function (i) {
    jQuery(this).attr('id', 'js-size-' + (i + 1));
});

$optionSizeLabel.each(function (i) {
    jQuery(this).attr('for', 'js-size-' + (i + 1));
});

$optionSizeLabel.each(function (i) {
    jQuery(this).attr('id', 'js-size-label-' + (i + 1));
});

$optionSizeDetail.find("input,select").each(function (i) {
    jQuery(this).attr('id', 'js-size-input' + (i + 1));
});

$optionRecordInp.each(function (i) {
    jQuery(this).attr('id', 'js-record-' + (i + 1));
});

$optionRecordLabel.each(function (i) {
    jQuery(this).attr('for', 'js-record-' + (i + 1));
});

$optionRecordLabel.each(function (i) {
    jQuery(this).attr('id', 'js-record-label-' + (i + 1));
});

$optionDataLabel.each(function (i) {
    jQuery(this).attr('for', 'js-data-' + (i + 1));
});

$optionDataInp.each(function (i) {
    jQuery(this).attr('id', 'js-data-' + (i + 1));
});



//動画サムネイルサイズ

$optionMovieLabel.each(function (i) {
    jQuery(this).attr('for', 'js-movie-size-' + (i + 1));
});

$optionMovieLabel.each(function (i) {
    jQuery(this).attr('id', 'js-movie-size-label-' + (i + 1));
});

$optionMovieInp.each(function (i) {
    jQuery(this).attr('id', 'js-movie-size-' + (i + 1));
});

//お任せ制作

$optionLeaveSizeSelect.each(function (i) {
    jQuery(this).attr('id', 'js-size-select-' + (i + 1));
});

$optionLeaveSizeSelect.find("option").each(function (i) {
    jQuery(this).attr('id', 'js-size-option-' + (i + 1));
});


$optionLeaveSizeLabel.each(function (i) {
    jQuery(this).attr('for', 'js-size-check-' + (i + 1));
});

$optionLeaveSizeCheck.each(function (i) {
    jQuery(this).attr('id', 'js-size-check-' + (i + 1));
});



$optionLeaveImgLabel.each(function (i) {
    jQuery(this).attr('for', 'js-img-' + (i + 1));
});

$optionLeaveImgLabel.each(function (i) {
    jQuery(this).attr('id', 'js-img-label-' + (i + 1));
});

$optionLeaveImgRadio.each(function (i) {
    jQuery(this).attr('id', 'js-img-' + (i + 1));
});

$optionLeaveTextLabel.each(function (i) {
    jQuery(this).attr('for', 'js-text-' + (i + 1));
});

$optionLeaveTextLabel.each(function (i) {
    jQuery(this).attr('id', 'js-text-label-' + (i + 1));
});

$optionLeaveTextRadio.each(function (i) {
    jQuery(this).attr('id', 'js-text-' + (i + 1));
});



/*

クラスをつける
-----------------------*/

//通常注文サイズ選択

$optionSizeLabel.addClass("c-labels__label--flex-center");

//動画サムネイルさいず選択

$optionMovieLabel.find($sizeInDom).addClass("c-labels__left--wide");

$optionMovieLabel.addClass("c-labels__label--flex-center");


//お任せ注文サイズ

$optionLeaveSizeSelect.on("change", function () {
    var selected = $(this).val();
    console.log(selected);
    if (selected !== "サイズを選ぶ") {
        $optionLeaveSizeSelect.prev("span").addClass("is-selected");
    }

    else {
        $optionLeaveSizeSelect.prev("span").removeClass("is-selected");
    }
});


//お任せ注文素材の提供
$optionLeaveImgLabel.addClass("c-labels__label--flex-start");
$optionLeaveImgLabel.find($sizeInPrice).addClass("u-mt0");

$optionLeaveTextLabel.addClass("c-labels__label--flex-start");
$optionLeaveTextLabel.find($sizeInPrice).addClass("u-mt0");


/*

文字列変える
-----------------------*/

$optionRecordLabel.find('.js-check-text').text('弊社実績として公開OK');


$optionDataLabel.find('.js-check-text').text('元データ（PSD）のご提供');

/*

ラジオボタン内に要素を挿入
------------------------------*/

//通常のバナーサイズ

$("#js-size-label-1").find($sizeInDom).after("<p class='c-labels__caption'>縦と横の合計が600px以内</p>");
$("#js-size-label-2").find($sizeInDom).after("<p class='c-labels__caption'>縦と横の合計が601px～1000px</p>");
$("#js-size-label-3").find($sizeInDom).after("<p class='c-labels__caption'>縦と横の合計が1001px～1500px</p>");

//動画サムネイル

$("#js-movie-size-label-1").find($sizeInDom).after("<p class='c-labels__caption c-labels__caption--radius'>推奨サイズ</p>");
$("#js-movie-size-label-2").find($sizeInDom).after("<p class='c-labels__caption'>最小表示サイズ</p>");

//お任せ制作

//画像素材の提供
$("#js-img-label-2").find($sizeInDom).after("<p class='c-labels__caption-price'>+0,000円</p>");


//文章の提供
$("#js-text-label-2").find($sizeInDom).after("<p class='c-labels__caption-price'>+0,000円</p>");


/*

ラジオボタン内に値段を挿入
------------------------------*/

//通常のバナーサイズ

$("#js-size-label-1").find($sizeInPrice).text("3,600円");
$("#js-size-label-2").find($sizeInPrice).text("5,700円");
$("#js-size-label-3").find($sizeInPrice).text("8,600円");

//動画サイトサムネサイズ

$("#js-movie-size-label-1").find($sizeInPrice).text("0,000円");
$("#js-movie-size-label-2").find($sizeInPrice).text("0,000円");


//注文の種類

$("input[name='依頼方法']").on("change", function () {
    if ($("#input-request02").prop("checked") === true) {
        var urlArray = location.href.split("/");

        //URLにサブディレクトリが存在しない場合
        if (urlArray.length === 4) {
            var changeUrl = urlArray[0] + "//" + urlArray[2] + "?item=item-leave#js-item-area";
        }
        //URLにサブディレクトリが存在する（本番環境）の場合
        else {
            var changeUrl = urlArray[0] + "//" + urlArray[2] + urlArray[3] + "?item=item-leave#js-item-area";
        }
        window.open(changeUrl, "_blank");
    }
});

var urlArray = location.href.split("/");
console.log(urlArray);
console.log(urlArray.length === 5);



$optionSizeInp.on("change", function () {
    $optionSizeDetail.addClass("is-detail-show");
    //一旦値をクリアする
    $optionSizeDetail.find("input").val("");
});

//お任せ制作

$optionLeaveSizeCheck.on("change", function () {
    //一旦値をクリアする
    $optionSizeDetail.find("input").val("");
    if ($("#js-size-check-1").prop("checked") === true) {
        $optionSizeDetail.addClass("is-detail-show");
    }
    else {
        $optionSizeDetail.removeClass("is-detail-show");
    }
});

/* $("#js-size-input1").val(0);
$("#js-size-input2").val(0); */


function numberCheck(current) {
    if (current.val().match(/[^0-9]/g)) {
        alert('数字を入力してください');
    }
}

//お任せ注文のサイズセレクトの値を取得する関数
function sizeSelectValue() {

    var obj = document.getElementById('js-size-select-1');
    var selected = obj.selectedIndex;
    selectValue = obj.options[selected].value;

};


$optionSizeDetail.find("input").on("change", function () {
    var hight = $("#js-size-input1").val();
    var width = $("#js-size-input2").val();
    var current = $(this);
    console.log(hight);
    console.log(width);

    var total = parseInt(hight) + parseInt(width);
    numberCheck(current);
    if ($("#js-size-1").prop("checked") === true) {
        if (total > 600) {
            alert("縦幅と横幅がSサイズの規定外です!!\n現在の合計サイズ：" + total + "px");
            $("#js-size-input1, #js-size-input2").val("");
        }
    }

    if ($("#js-size-2").prop("checked") === true) {
        if (total < 601 || total > 1000) {
            alert("縦幅と横幅がMサイズの規定外です!!\n現在の合計サイズ：" + total + "px");
            $("#js-size-input1, #js-size-input2").val("");
        }

    }

    if ($("#js-size-3").prop("checked") === true) {
        if (total < 1001 || total > 1500) {
            alert("縦幅と横幅がLサイズの規定外です!!\n現在の合計サイズ：" + total + "px");
            $("#js-size-input1, #js-size-input2").val("");
        }

    }

    if (document.getElementById('js-size-select-1') != null) {
        sizeSelectValue();
        if (selectValue === "Sサイズ") {
            if (total > 600) {
                alert("縦幅と横幅がSサイズの規定外です!!\n現在の合計サイズ：" + total + "px");
                $("#js-size-input1, #js-size-input2").val("");
            }
        }

        if (selectValue === "Mサイズ") {
            if (total < 601 || total > 1000) {
                alert("縦幅と横幅がMサイズの規定外です!!\n現在の合計サイズ：" + total + "px");
                $("#js-size-input1, #js-size-input2").val("");
            }

        }

        if (selectValue === "Lサイズ") {
            if (total < 1001 || total > 1500) {
                alert("縦幅と横幅がLサイズの規定外です!!\n現在の合計サイズ：" + total + "px");
                $("#js-size-input1, #js-size-input2").val("");
            }

        }
    }
});


//擬似プレースホルダーをクリックしたらフォーカス
const placeholder = $(".placeholder");

placeholder.on("click", function () {
    $(this).prev().focus();
});

//テキストエリアがフォーカスされた時の処置
$(".js-placeholder").find("textarea").focusin(function (e) {
    $(this).next().addClass('none');//placeホルダー非表示
})//フォーカスアウト時の処置
    .focusout(function (e) {
        const $this = $(this);
        const this__next = $this.next();
        var letterLength = $this.val().length;
        //フォーカスアウトした時、文字が入力されていた時は、プレースホルダー 非表示
        if (letterLength !== 0) {
            this__next.addClass('none');
        } else {
            this__next.removeClass('none');
        }
    });


/*

料金表示のブロックスクロールイベント
-------------------*/


window.addEventListener("scroll", function () {
    // スクロール量の取得
    let scrollValue = window.pageYOffset;

    //console.log("現在のスクロール" + scrollValue);

    // 要素の取得
    let scrollEle = document.getElementById("js-scroll-fixed");

    let startEle = document.getElementById("js-order");

    let endEle = document.getElementById("js-cart-area");

    let startEleHeight = startEle.clientHeight;

    let eldEleHight = endEle.clientHeight;



    // 取得した要素のtop値の取得 + スクロール量
    let scrollTop = startEle.getBoundingClientRect().top + startEleHeight;;

    let scrollTop_end = endEle.getBoundingClientRect().top + eldEleHight;



    //console.log("終わらせたい要素のtop値" + scrollTop_end);

    // 画面の高さを取得
    let windowHeight = window.innerHeight;

    //ドキュメントの高さ取得

    let documentHeight = document.documentElement.clientHeight;

    var doch = $(document).innerHeight();

    let bottomPos = documentHeight + windowHeight;

    let botsstom = doch - windowHeight;

    //console.log("終わらせたい要素のtop値" + bottomPos);

    //console.log("画面の高さを取得" +windowHeight);

    //console.log(scrollValue - windowHeight);
    //console.log(eldEleHight);
    //console.log(scrollValue);
    //console.log(botsstom);

    //startEle.style.marginTop = scrollEle.clientHeight + 'px';
    // 条件設定
    if (scrollValue > 400) {
        scrollEle.classList.add("is-fixed");
        startEle.style.marginTop = 0;

        if (scrollValue > 1100) {
            startEle.style.marginTop = scrollEle.clientHeight + 'px';
        }




        if (botsstom <= scrollValue + 180) {
            if (scrollEle.classList.contains("is-fixed")) {
                scrollEle.classList.remove("is-fixed");
                startEle.style.marginTop = 0;
            }
        }
    }



    else {
        scrollEle.classList.remove("is-fixed");
        startEle.style.marginTop = 0;
    }




});



/*

料金計算
--------------------------*/

/*

生成されたものを定数にする
------------*/

const $sizeS = $("#js-size-1");

const $sizeM = $("#js-size-2");

const $sizeL = $("#js-size-3");

const $record = $("#js-record-1");

const $data = $("#js-data-1");

const $totalOut = $("#js-output-total");

const $sizeCount = $("#js-size-input3");

const $movieSizeHigh = $("#js-movie-size-1");

const $movieSizeRow = $("#js-movie-size-2");

const $selectNone = $("#js-size-option-1");

const $selectSizeS = $("#js-size-option-2");

const $selectSizeM = $("#js-size-option-3");

const $selectSizeL = $("#js-size-option-4");

const $imgOn = $("#js-img-1");

const $imgOff = $("#js-img-2");

const $textOn = $("#js-text-1");

const $textOff = $("#js-text-2");


//値段を挿入


$sizeS.attr("data-price", 3600);

$sizeM.attr("data-price", 5700);

$sizeL.attr("data-price", 8600);

$record.attr("data-price", -500);

$data.attr("data-price", 1500);

$movieSizeHigh.attr("data-price", 4500);

$movieSizeRow.attr("data-price", 7500);

$selectNone.attr("data-price", 0);

$selectSizeS.attr("data-price", 3600);

$selectSizeM.attr("data-price", 5700);

$selectSizeL.attr("data-price", 8600);

$imgOn.attr("data-price", 0);

$imgOff.attr("data-price", 3000);

$textOn.attr("data-price", 0);

$textOff.attr("data-price", 4000);


const $sizeChecked = $("#js-option-size > input:checked");


var sizePrice = 0;

recodePrice = 0;

dataPrice = 0;

countVal = 1;

moviePrice = 0;

selectSIzePrice = 0;

imgPrice = 0;

textPrice = 0;






//商品によっては基本価格を設定する

const pageUrl = new URL(window.location.href);

console.log(pageUrl.search);

const params = new URLSearchParams(pageUrl.search);

const paramsValue = params.get('item');

if (paramsValue === "item-resize") {
    resizeBasePrice = 3400;
    snsBasePrice = 0;
    $totalOut.html(resizeBasePrice);
}

else if (paramsValue === "item-sns") {
    snsBasePrice = 11500;
    resizeBasePrice = 0;
    $totalOut.html(snsBasePrice);
}

else {
    resizeBasePrice = 0;
    snsBasePrice = 0;
    $totalOut.html(0);
}



//console.log(paramsValue);

//個数選択セレクトの値を取得する関数
function selectCount() {
    var obj = document.getElementById('js-size-input3');
    var selected = obj.selectedIndex;
    var selectedQuantity = obj.options[selected].value;
    countVal = selectedQuantity;
};

//お任せ注文のサイズセレクトの値を取得する関数
function sizeSelect() {
    var obj = document.getElementById('js-size-select-1');
    var selected = obj.selectedIndex;
    selectPrice = obj.options[selected].getAttribute("data-price");
};




$optionSizeInp.on("change", function () {
    var price = $(this).data("price");
    selectCount();
    sizePrice = price * countVal;
    $totalOut.html(sizePrice + recodePrice + dataPrice);
});


$sizeCount.on("change", function () {

    conutVal = $(this).val();

    //お任せ注文のサイズ選択
    if ($("#js-size-select-1").length) {
        sizeSelect();
        selectCount();
        selectSIzePrice = selectPrice * conutVal;
        $totalOut.html(parseInt(selectSIzePrice) + imgPrice + textPrice + recodePrice + dataPrice);
    }

    //それ以外のサイズ選択
    else {
        if (paramsValue === "item-sns") {
            selectCount();
            sizePrice = snsBasePrice * conutVal;
            $totalOut.html(sizePrice + recodePrice + dataPrice);
        }

        else {
            var sizeCheckedPrice = $("input[name*='%E3%82%B5%E3%82%A4%E3%82%BA%E6%8C%87%E5%AE%9A']:checked").data("price");
            sizePrice = sizeCheckedPrice * conutVal;
            $totalOut.html(sizePrice + recodePrice + dataPrice);
        }

    }

});



$optionLeaveSizeSelect.on("change", function () {
    sizeSelect();
    selectCount();
    selectSIzePrice = selectPrice * countVal;

    $totalOut.html(parseInt(selectSIzePrice) + imgPrice + textPrice + recodePrice + dataPrice);
});

$optionRecordInp.on("change", function () {
    var price = $(this).data("price");
    console.log($(this).attr("data-price"));

    if ($optionRecordInp.prop("checked") === false) {
        recodePrice = 0;
    }
    else {
        recodePrice = price;
    }

    $totalOut.html(parseInt(selectSIzePrice) + resizeBasePrice + snsBasePrice + sizePrice + imgPrice + textPrice + moviePrice + recodePrice + dataPrice);
});

$optionDataInp.on("change", function () {
    var price = $(this).data("price");
    console.log($(this).attr("data-price"));

    if ($optionDataInp.prop("checked") === false) {
        dataPrice = 0;
    }
    else {
        dataPrice = price;
    }

    $totalOut.html(parseInt(selectSIzePrice) + resizeBasePrice + sizePrice + imgPrice + textPrice + moviePrice + recodePrice + dataPrice);
});


$optionMovieInp.on("change", function () {
    var price = $(this).data("price");
    moviePrice = price;

    $totalOut.html(moviePrice + recodePrice + dataPrice);
});

$optionLeaveImgRadio.on("change", function () {
    var price = $(this).data("price");
    imgPrice = price;

    $totalOut.html(parseInt(selectSIzePrice) + imgPrice + textPrice + recodePrice + dataPrice);
});

$optionLeaveTextRadio.on("change", function () {
    var price = $(this).data("price");
    textPrice = price;

    $totalOut.html(parseInt(selectSIzePrice) + imgPrice + textPrice + recodePrice + dataPrice);
});
