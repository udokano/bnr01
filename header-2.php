<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo( 'name' ); ?>
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

<!-- Event snippet for 申し込み conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-787386783/HXCKCJ-G_8EBEJ-juvcC'});
</script>

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css?var=1.4.8">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/chat.css?var=1.3">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body <?php body_class(); ?> id="front__page">
<div class="wrapper">
<header id="site__header" >
  <div class="header__inner flex al-cent">
	<div class="header__logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/site_logo.png" alt="バナー屋さん"></a> </div>
	<!-- ./header__logo -->

	<div class="menu-trigger" id="js-menu"> <span></span> <span></span> <span></span> </div>
	<nav class="header__nav" id="js-nav">
	  <ul class="flex">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-cart" class="cart-view"><span>カート</span>
		 <div class="bachi pc" id="bachi"><span class="num" id="bachi__txt"><?php usces_totalquantity_in_cart(); ?></span></div></a>
	   </li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>flow"><span>納品までの<br class="pc">流れ</span></a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>retouch"><span>修正について</span></a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq"><span>Q&A</span></a></li>
		<?php if ( usces_is_login() ) : ?>
		<?php else : ?>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member/?page=newmember"><span>会員登録</span></a></li>
		<?php endif; ?>
		<li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member">
<?php if ( usces_is_login() ) : ?>
マイページ
	<?php
else :
	?>
			ログイン<?php endif; ?>
	  </a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact"><span>お問い合わせ</span></a></li>
	  </ul>
	</nav>
	<!-- ./header__nav -->
  </div>
  <!-- ./header__inner -->
</header>
