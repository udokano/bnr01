<?php
	/**
	 * This is header.php
	 *
	 * @package theme-name（banner-var02）
	 */

?>

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



<?php wp_head(); ?>

<?php if ( is_home() || is_front_page() ) : ?>
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery-file-upload.css" rel="stylesheet">
  <?php endif; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css?var=1.7">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/chat.css?var=1.3">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>



<?php get_template_part( 'inc/validation' ); ?>


<?php if ( is_home() || is_front_page() ) : ?>
<!-- User Heat Tag -->
<script type="text/javascript">
(function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhM3V76Yhu'});
</script>
<!-- End User Heat Tag -->
<?php endif; ?>

</head>
<body <?php body_class(); ?> id="front__page">
<div class="wrapper">

<!--   <?php if ( usces_is_login() ) : ?>
		<?php else : ?>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member/?page=newmember"><span>会員登録</span></a></li>
		<?php endif; ?> -->

<header class="l-header" id="js-header">

<div class="l-header__inner">

<div class="l-header__logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__link">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/site_logo.png" alt="バナー屋さん">
		</a>
</div>
<!-- ./__logo -->

<ul class="l-header__nav">

	<li class="l-header__nav-cart">
		<i class="l-header__nav-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon_header_cart.png" alt="カート"></i>
		<p class="l-header__nav-balloon">
			<span class="l-header__nav-count"><?php usces_totalquantity_in_cart(); ?></span>
		</p>
	</li>


<?php if ( usces_is_login() ) : ?>

	<li class="l-header__nav-item">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member" class="l-header__nav-btn">マイページ</a>
	</li>

<?php else : ?>

	<li class="l-header__nav-item">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member/?page=newmember" class="l-header__nav-btn">新規会員登録(無料)</a>
	</li>

	<li class="l-header__nav-item">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-member" class="l-header__nav-btn">ログイン</a>
	</li>

<?php endif; ?>

	<li class="l-header__nav-item">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class="l-header__nav-btn l-header__nav-btn--contact">お問合わせ</a>
	</li>
</ul>


<button class="l-header__switch c-hamburger u-sp" id="js-hamburger">
		<div class="c-hamburger__inner">
			<span class="c-hamburger__line"></span>
			<span class="c-hamburger__line"></span>
			<span class="c-hamburger__line"></span>
		</div>
		<!-- ./inner -->
</button>

</div>
<!-- __inner -->

</header>
<?php get_template_part( 'inc/gloval-navi' ); ?>
