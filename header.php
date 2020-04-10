<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<!-- Global site tag (gtag.js) - Google Ads: 787386783 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-787386783"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-787386783');
</script>
<?php if (is_home() || is_front_page()  || is_page('direction')): ?>
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
  <?php endif; ?>
<?php if (is_page('direction')): ?>


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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?var=1.6.7">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/chat.css?var=1.3">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>



<script>

    /*
  キャンペーンバナー
  --------------------------------------------*/
$(function(){
  var cookie = $.cookie('campaign');
  if (cookie) {
    $('.campaign').addClass('is-close');
  }

  else {
    $('.campaign').addClass('is-view');
  }

  $('.js-campaign--close').on('click', function () {
    $('.campaign').removeClass('is-view');
    $('.campaign').addClass('is-close');
    $.cookie('campaign', 'close');
  });

});

</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/garlic.js"></script>


<!-- 指示書作成ページ　フォーム内容保存 -->
<?php if (is_page('direction')): ?>
<script>

$(function(){
$('form').garlic();
});

</script>
<?php endif; ?>


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
    　promptPosition:"topLeft",
    'custom_error_messages': {
      '#select1': {
        'required': {
          'message': '特殊サイズを選択してください'
        }
      },
      '#txt1': {
           'required': {
          'message': '管理番号を入力してください'
        }
      }
    }
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

<?php if (is_page('usces-member')): ?>

/* 新規会員入会ページ */
jQuery(document).ready(function(){
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
});
<?php endif; ?>

<?php if (is_home() || is_front_page()) : ?>

/* リロードフォームクリア */
window.onpageshow = function() {

  $("form").each(function(){
    $("input[type='radio']").prop("checked",false);
    $("#txt").val("");
    $("textarea").val("");
  });
}
<?php endif; ?>

</script>
<?php if (is_home() || is_front_page()) : ?>
<!-- User Heat Tag -->
<script type="text/javascript">
(function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhM3V76Yhu'});
</script>
<!-- End User Heat Tag -->
<?php endif; ?>

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
        <li><a href="<?php echo home_url('/');?>usces-cart" class="cart-view"><span>カート</span>
         <div class="bachi pc" id="bachi"><span class="num" id="bachi__txt"><?php usces_totalquantity_in_cart();?></span></div></a>
       </li>
        <li><a href="<?php echo home_url('/');?>flow"><span>納品までの<br class="pc">流れ</span></a></li>
        <li><a href="<?php echo home_url('/');?>retouch"><span>修正について</span></a></li>
        <li><a href="<?php echo home_url('/');?>faq"><span>Q&A</span></a></li>
        <?php if (usces_is_login()): ?>
        <?php else: ?>
        <li><a href="<?php echo home_url('/');?>usces-member/?page=newmember"><span>会員登録</span></a></li>
        <?php endif; ?>
        <li> <a href="<?php echo home_url('/');?>usces-member">
<?php if (usces_is_login()): ?>
マイページ<?php else: ?>ログイン<?php endif; ?>
      </a></li>
        <li><a href="<?php echo home_url('/');?>contact"><span>お問い合わせ</span></a></li>
      </ul>
    </nav>
    <!-- ./header__nav -->
  </div>
  <!-- ./header__inner -->
</header>
