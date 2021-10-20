<?php
	/**
	 * This is index.php/トップページ
	 *
	 * @package theme-name（banner-var02）
	 */

?>

<?php get_header(); ?>


<?php get_template_part( 'inc/key-visual' ); ?>
<?php get_template_part( 'inc/item-kind-nav' ); ?>










<div class="l-modal js-modal" id="js-modal-calender">
	<div class="l-modal__bg js-modal-close"></div>
	<div class="l-modal__content">
		<div class="l-modal__inner">
					<h3 class="l-modal__ttl">納品スケジュール</h3>
					<!-- 納期カレンダーインクルード -->
					<?php get_template_part( 'inc/calender' ); ?>
				<p class="l-modal__btn js-modal-close">閉じる</p>
		</div>
	</div>

</div>





<?php

if ( isset( $_GET['item'] ) ) {
	$item_kind = sanitize_text_field( wp_unslash( $_GET['item'] ) );
}
?>




<!-- この要素に商品の種類を出し分ける -->
<div class="l-buy-area" id="js-item-area">
<?php if ( 'item-banner' === $item_kind || empty( $item_kind ) ) : ?>
<div class="l-buy__item js-item-kind"><?php get_template_part( 'inc/item-kind/banner-basic' ); ?></div>
	<?php elseif ( 'item-leave' === $item_kind ) : ?>
<div class="l-buy__item js-item-kind"><?php get_template_part( 'inc/item-kind/banner-leave' ); ?></div>
	<?php elseif ( 'item-movie' === $item_kind ) : ?>
<div class="l-buy__item js-item-kind"><?php get_template_part( 'inc/item-kind/banner-movie' ); ?></div>
	<?php elseif ( 'item-sns' === $item_kind ) : ?>
<div class="l-buy__item js-item-kind"><?php get_template_part( 'inc/item-kind/banner-sns' ); ?></div>
	<?php elseif ( 'item-resize' === $item_kind ) : ?>
<div class="l-buy__item js-item-kind"><?php get_template_part( 'inc/item-kind/banner-resize' ); ?></div>
	<?php endif; ?>
</div>
<!-- ./購入フォーム出力エリア -->



<?php get_footer(); ?>
