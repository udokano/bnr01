<?php
/*
Template Name: 指示書作成
*/
?>


<?php get_header();?>


<div class="pages__title direction__bg">
<h1>指示書作成</h1>
<p>以下の作成フォームより、指示書の作成をお願いします。<br>バナーに必要な素材類もこちらからアップロード可能です。</p>
<?php echo breadcrumb_func();?>
</div><!-- ./pages__title -->



<section class="contact direction">
<div class="section__inner">


<div class="contact__form direction__form">
<h2 class="direction__tit"><span class="num">注文番号<?php
            $result = $_GET["注文番号"];
            echo htmlspecialchars($result, ENT_QUOTES, 'UTF-8'); //文字列に変換
        ?></span><br>指示書作成フォーム</h2>

<div class="contact__form__content direction__form__content">

<?php echo do_shortcode('[mwform_formkey key="204"]');?>

</div>
<!-- ./contact__form__content -->


</div><!-- ./contact__form -->

</div><!-- ./section__inner -->
</section>




<?php get_footer();?>

<script>
  $("#mw_wp_form_mw-wp-form-204 form").attr("id","fileupload");
  $("#fileupload").attr("enctype","multipart/form-data");
  $("#fileupload").attr("data-persist","garlic");
</script>

<script>
  if($("#mw_wp_form_mw-wp-form-204").hasClass("mw_wp_form_complete")){
	    $(".pages__title > h1").text("指示書送信完了");
	  $(".pages__title > p").remove();
  }
</script>

<script>
if ( $('.mw_wp_form .error')[0] ) {
	var errorEl = $('.mw_wp_form .error').eq(0);
	var position = errorEl.parent().offset().top;

	$('body,html').delay(200).animate({scrollTop:position - 40}, 600, 'swing');
}
</script>
<script>

jQuery("#text__area").attr("placeholder", "こちらにデザイン指示を入力\r\n例：明るい感じでロゴは右下に配置");

jQuery("#text__area02").attr('placeholder', '「どうデザインを指示していいか分からないのでプロにお任せしたい」という方向けです。バナーに最低限必要な文章を入力し送信してください。');


/* URL出力用のTEXTのNAMEを削除 */
$(function () {
var $test1 = $('#url__input > input');
$test1.attr("name","");
});

	$(function(){
	    setTimeout(function(){
	        $(".template-download").remove();
	    },500);
	});



</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
$(function(){
	var num = $("#form__colse").attr("data-num");
	var c__name = "form";
	console.log(num);
		$("#form__colse").click(function(){
 			 $.cookie("form", num, {expires: 7, path: "/"});
		});

	});



</script>
