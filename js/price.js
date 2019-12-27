//dataで各要素に値段を登録

//Sサイズ
$("#label__type__a2").attr("data-price", "3600");

//Mサイズ

//Lサイズ

//SNSブログヘッダー

//リサイズ依頼

//特殊サイズ


$(".select__zone label").change(function () {


    var cccc = $(this).attr("data-price");

    $("#output__price").text(cccc + cccc);


});
