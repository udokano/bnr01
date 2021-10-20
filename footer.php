<?php if ( is_home() || is_front_page() ) : ?>
<div class="cards">
	<p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top/cards.jpg?2015" alt="クレジットカード"></p>
</div>


<?php endif; ?>

<footer id="site__footer">
	<div class="footer__logo"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/common/bottom_logo.png"
			alt="バナー屋さん"> </div>
	<ul class="footer__nav">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-cart" class="cart-view">カートを見る</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#js-item-area">制作依頼</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq">よくある質問</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy">プライバシーポリシー</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company">会社概要</a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company#company__info">特定商取引法に基づく表記</a></li>
	</ul>
	<p class="tc copy">© バナー屋さん.</p>
</footer>
</div>
<!--  ./wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>

<script
	src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.js?<?php echo filemtime( get_stylesheet_directory() . '/js/scripts.js' ); ?>">
</script>

<script
	src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/cal.js?<?php echo filemtime( get_stylesheet_directory() . '/js/cal.js' ); ?>">
</script>


<?php if ( is_home() || is_front_page() ) : ?>

<script
	src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/order.js?<?php echo filemtime( get_stylesheet_directory() . '/js/order.js' ); ?>">
</script>
<!-- <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/price.js?var=1.3.2"></script> -->
<script
	src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lib/jquery-file-upload.js?<?php echo filemtime( get_stylesheet_directory() . '/lib/js/jquery-file-upload.js' ); ?>">
</script>
<?php endif; ?>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lib/jquery.autoKana.js"></script>


<?php if ( is_home() || is_front_page() ) : ?>
<!-- ファイルアップロード -->
	<?php get_template_part( 'inc/fileupload' ); ?>
<!-- Ajax設定ファイル -->
	<?php get_template_part( 'inc/item-kind/tab' ); ?>
<?php endif; ?>


<?php if ( is_page( 'usces-cart' ) ) : ?>
<script>
/*
戻るボタン押したらバリデーション無効化する
-------------*/
jQuery(".back_cart_button").on("click", function() {
	jQuery("input").removeClass("validate[required]");
	jQuery("input").removeClass("validate[required,equals[mailaddress1]]");
	jQuery("input").removeClass("validate[required,equals[pass01]]");
});
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
