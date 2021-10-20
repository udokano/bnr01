<script>

/*
リアルタイムバリデーション
------------------------------*/


/* 商品購入ページ */

<?php if ( is_home() || is_front_page() ) : ?>


/* 購入商品によって処理を切り替える */

	<?php
	$item_kind = $_GET['item'];
	?>


/* トップページ */

//通常注文
	<?php if ( $item_kind == 'item-banner' || empty( $item_kind ) ) : ?>
	  jQuery(document).ready(function(){
		jQuery("#js-kind > input").addClass("validate[required]");
		jQuery("#js-option-size > input").addClass("validate[required]");
		jQuery("#js-size-detail input").addClass("validate[required]");
		//jQuery("#js-record > input").addClass("validate[required]");
		jQuery("form").validationEngine();
	  });
  //お任せ注文
	<?php elseif ( $item_kind == 'item-leave' ) : ?>
	  jQuery(document).ready(function(){
		jQuery("#js-size-select > select").addClass("validate[required]");
		jQuery("#js-size-select-check > input").addClass("validate[required]");
		jQuery("#js-size-detail input").addClass("validate[required]");
		jQuery("#js-option-image input").addClass("validate[required]");
		jQuery("#js-option-text input").addClass("validate[required]");
		//jQuery("#js-record > input").addClass("validate[required]");
		jQuery("form").validationEngine();
	  });
  //動画サムネイル
	<?php elseif ( $item_kind == 'item-movie' ) : ?>
	   jQuery(document).ready(function(){
		jQuery("#js-option-movie-size > input").addClass("validate[required]");
		jQuery("form").validationEngine();
	  });
  //SNSブログヘッダー
	<?php elseif ( $item_kind == 'item-sns' ) : ?>
	  jQuery(document).ready(function(){
		jQuery("#js-size-detail  input").addClass("validate[required]");
		jQuery("form").validationEngine();
	  });
  //リサイズ依頼
	<?php elseif ( $item_kind == 'item-resize' ) : ?>
		jQuery(document).ready(function(){
		  jQuery("#js-option-resize input").addClass("validate[required]");
		  jQuery("form").validationEngine();
	  });
	 <?php endif; ?>

<?php endif; ?>

<?php if ( is_page( 'usces-cart' ) ) : ?>

/* お客様情報入力ページ */
jQuery(function(){
	jQuery("form").validationEngine();
	jQuery("#mailaddress1").addClass("validate[required]");
	 jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
jQuery("#name1").addClass("validate[required]");
jQuery("#name2").addClass("validate[required]");
jQuery("#tel").addClass("validate[required]");
});

jQuery(function () {
	jQuery("#customer_form").validationEngine();
	jQuery("#mailaddress1").addClass("validate[required]");
	jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
	jQuery("#pass01").addClass("validate[required]");
	jQuery("#pass02").addClass("validate[required,equals[pass01]]");
	jQuery("#name1").addClass("validate[required]");
	jQuery("#name2").addClass("validate[required]");
	jQuery("#tel").addClass("validate[required]");
});

/*
戻るボタン押したらバリデーション無効化する
-------------*/
  jQuery(".back_cart_button").on("click", function () {
	  jQuery("input").removeClass("validate[required]");
	  jQuery("input").removeClass("validate[required,equals[mailaddress1]]");
	  jQuery("input").removeClass("validate[required,equals[pass01]]");
  });


<?php endif; ?>

<?php if ( is_page( 'contact' ) ) : ?>

/* お問い合わせページ */
jQuery(document).ready(function(){
jQuery("input[name='seimei']").addClass("validate[required]");
jQuery("input[name='your-email']").addClass("validate[required]");
jQuery(".wpcf7-form").validationEngine('attach', {
	　promptPosition:"topLeft"
  　});
});
<?php endif; ?>

<?php if ( is_page( 'usces-member' ) ) : ?>

/* 新規会員入会ページ */
/* jQuery(document).ready(function(){
jQuery("#mailaddress1").addClass("validate[required]");
jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
	  jQuery("#password1").addClass("validate[required]");
	 jQuery("#password2").addClass("validate[required,equals[password1]]");
	 jQuery("#name1").addClass("validate[required]");
jQuery("#name2").addClass("validate[required]");
jQuery("#tel").addClass("validate[required]");
jQuery("#new__member__form").validationEngine('attach', {
	　promptPosition:"topLeft"
  　});
}); */
<?php endif; ?>

<?php if ( is_home() || is_front_page() ) : ?>

/* リロードフォームクリア */
window.onpageshow = function() {

  $("form").each(function(){
	$("input[type='radio']").prop("checked",false);
	 $("input[type='checkbox']").prop("checked",false);
	$("input[type='text']").val("");
	$("textarea").val("");
  });
}
<?php endif; ?>

</script>
