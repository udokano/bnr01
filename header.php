<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?var=1.3.5">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/chat.css?var=1.1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/garlic.js"></script> --> 

<script>
/*
リアルタイムバリデーション
------------------------------*/
jQuery(document).ready(function(){
jQuery("#size__select > input[name*='%E3%82%B5%E3%82%A4%E3%82%BA%E6%8C%87%E5%AE%9A']").addClass("validate[required]");
jQuery("#format > input").addClass("validate[required]");
jQuery("#limit > input").addClass("validate[required]");
jQuery("#data > input").addClass("validate[required]");
jQuery("#publish > input").addClass("validate[required]");
jQuery("#form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});


/* お問い合わせページ */
jQuery(document).ready(function(){
jQuery("input[name='seimei']").addClass("validate[required]");
jQuery("input[name='your-email']").addClass("validate[required]");
jQuery(".wpcf7-form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});

/* リロードフォームクリア */

window.onpageshow = function() {
  $("#form").each(function(){
    $("input[type='radio']").prop("checked",false);
    $("input[type='text']").val("");
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
        <li><a href="<?php echo home_url('/');?>flow"><span>納品までの<br class="pc">
          流れ</span></a></li>
        <li><a href="<?php echo home_url('/');?>retouch"><span>修正について</span></a></li>
        <li><a href="<?php echo home_url('/');?>faq"><span>Q&A</span></a></li>
        <li><a href="<?php echo home_url('/');?>contact"><span>お問い合わせ</span></a></li>
      </ul>
    </nav>
    <!-- ./header__nav --> 
  </div>
  <!-- ./header__inner --> 
</header>
