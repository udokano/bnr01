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
<h2 class="direction__tit">指示書作成フォーム</h2>

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
  $("#fileupload").attr("data-persist","multipart/form-data");
</script>



<script>



jQuery("#text__area").attr('placeholder', 'こちらにデザイン指示を入力 \r\n 例：明るい感じでロゴは右下に配置');

jQuery("#text__area").attr('placeholder', 'こちらにデザイン指示を入力 \r\n 例：明るい感じでロゴは右下に配置');


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

