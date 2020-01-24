<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<?php if (is_home() || is_front_page()) : ?>
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blueimp-gallery.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-ui.css" />
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript
      ><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-noscript.css"
    /></noscript>
    <noscript
      ><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fileupload-ui-noscript.css"
    /></noscript>
<?php endif; ?>

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?var=1.4.3">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/chat.css?var=1.1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/garlic.js"></script> -->

<script>
/*
リアルタイムバリデーション
------------------------------*/
<?php if (is_home() || is_front_page()) : ?>

/* トップページ */
jQuery(document).ready(function(){
jQuery("#size__select > input[name*='%E3%82%B5%E3%82%A4%E3%82%BA%E6%8C%87%E5%AE%9A']").addClass("validate[required]");
jQuery("#format > input").addClass("validate[required]");
jQuery("#limit > input").addClass("validate[required]");
jQuery("#data > input").addClass("validate[required]");
jQuery("#publish > input").addClass("validate[required]");
jQuery("form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});

<?php endif; ?>

<?php if (is_page('usces-cart')): ?>

/* お客様情報入力ページ */
jQuery(function(){
    jQuery("form").validationEngine();
    jQuery("#mailaddress1").addClass("validate[required]");
     jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
jQuery("#name1").addClass("validate[required]");
jQuery("#name2").addClass("validate[required]");
jQuery("#tel").addClass("validate[required]");
});
<?php endif; ?>

<?php if (is_page('contact')): ?>

/* お問い合わせページ */
jQuery(document).ready(function(){
jQuery("input[name='seimei']").addClass("validate[required]");
jQuery("input[name='your-email']").addClass("validate[required]");
jQuery(".wpcf7-form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});
<?php endif; ?>

/* リロードフォームクリア */

window.onpageshow = function() {
  $(".template-download").remove();
  $("form").each(function(){
    $("input[type='radio']").prop("checked",false);
    $("#txt").val("");
    $("textarea").val("");
  });
}


</script>

</head>
<body <?php body_class(); ?> id="front__page">
<div class="wrapper">
<header id="site__header" >
  <div class="header__inner flex al-cent">
    <div class="header__logo"> <a href="<?php echo home_url('/');?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/site_logo.png" alt="バナー屋さん"></a> </div>
    <!-- ./header__logo -->

    <div class="menu-trigger" id="js-menu"> <span></span> <span></span> <span></span> </div>
    <nav class="header__nav" id="js-nav">
      <ul class="flex">
        <li><a href="<?php echo home_url('/');?>usces-cart" class="cart-view"><span>カート</span></a></li>
        <li><a href="<?php echo home_url('/');?>flow"><span>納品までの<br class="pc">流れ</span></a></li>
        <li><a href="<?php echo home_url('/');?>retouch"><span>修正について</span></a></li>
        <li><a href="<?php echo home_url('/');?>faq"><span>Q&A</span></a></li>
        <li><a href="<?php echo home_url('/');?>contact"><span>お問い合わせ</span></a></li>
      </ul>
    </nav>
    <!-- ./header__nav -->
  </div>
  <!-- ./header__inner -->
</header>
