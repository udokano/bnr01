<?php

get_header();
?>


<section class="cart__area">

<div class="section__inner">

<div id="content" class="two-column">
<div class="catbox">

<?php if (have_posts()) : usces_remove_filter(); ?>

<div class="post" id="wc_<?php usces_page_name(); ?>">

<h1 class="cart_page_title tc"><?php _e('Confirmation', 'usces'); ?></h1>
<div class="entry">

<div id="info-confirm">
	<p class="confiem_notice tc mb15">
	<?php _e('Please do not change product addition and amount of it with the other window with displaying this page.', 'usces'); ?>
	</p>

	<p class="sub__notice tc ">
	※ご入金確認後、バナーのデザイン着工とさせていただきます。<br class="pc">お申込みから3営業日までに本メール記載の口座へお振込みをお願い致します。</p>

	<div class="usccart_navi">
		<ol class="ucart">
		<li class="ucart usccart"><?php _e('1.Cart', 'usces'); ?></li>
		<li class="ucart usccustomer"><?php _e('2.Customer Info', 'usces'); ?></li>
		<li class="ucart uscdelivery">支払い方法</li>
		<li class="ucart uscconfirm usccart_confirm"><?php _e('4.Confirm', 'usces'); ?></li>
		</ol>
	</div>

	<div class="header_explanation">
<?php do_action('usces_action_confirm_page_header'); ?>
	</div><!-- end of header_explanation -->

	<div class="error_message tc"><?php usces_error_message(); ?></div>
	<div id="cart">
		<table cellspacing="0" id="cart_table">
			<thead>
			<tr>
				<th scope="row" class="num"><?php _e('No.', 'usces'); ?></th>

				<th><?php _e('Items', 'usces'); ?></th>
			<!-- 	<th class="price"><?php _e('Unit price', 'usces'); ?></th> -->

				<th class="subtotal"><?php _e('Amount', 'usces'); ?><?php usces_guid_tax(); ?></th>

			</tr>
			</thead>
			<tbody>
		<?php usces_get_confirm_rows(); ?>
			</tbody>
			<tfoot>
			<tr>
				<th colspan="2" class="aright"><?php _e('total items', 'usces'); ?></th>
				<th class="aright" colspan="2"><?php usces_crform($usces_entries['order']['total_items_price'], true, false); ?></th>
			</tr>
<?php if (!empty($usces_entries['order']['discount'])) : ?>
			<tr>
				<td colspan="2" class="aright"><?php echo apply_filters('usces_confirm_discount_label', __('Campaign discount', 'usces')); ?></td>
				<td class="aright" style="color:#FF0000"><?php usces_crform($usces_entries['order']['discount'], true, false); ?></td>
			</tr>
<?php endif; ?>
<?php if (usces_is_tax_display() && 'products' == usces_get_tax_target()) : ?>
			<tr>
				<td colspan="2" class="aright"><?php usces_tax_label(); ?></td>
				<td class="aright" colspan="2"><?php usces_tax($usces_entries) ?></td>
			</tr>
<?php endif; ?>
<?php if (usces_is_member_system() && usces_is_member_system_point() && !empty($usces_entries['order']['usedpoint']) && 0 == usces_point_coverage()) : ?>
			<tr>
				<td colspan="2" class="aright"><?php _e('Used points', 'usces'); ?></td>
				<td class="aright" style="color:#FF0000" colspan="2"><?php echo number_format($usces_entries['order']['usedpoint']); ?></td>
			</tr>
<?php endif; ?>
<!-- 送料は必要ないので非表示 -->
			<!-- <tr>
				<td colspan="5" class="aright"><?php _e('Shipping', 'usces'); ?></td>
				<td class="aright"><?php usces_crform($usces_entries['order']['shipping_charge'], true, false); ?></td>
				<td>&nbsp;</td>
			</tr> -->
<?php if (!empty($usces_entries['order']['cod_fee'])) : ?>
			<tr>
				<td colspan="2" class="aright"><?php echo apply_filters('usces_filter_cod_label', __('COD fee', 'usces')); ?></td>
				<td class="aright" colspan="2"><?php usces_crform($usces_entries['order']['cod_fee'], true, false); ?></td>
			</tr>
<?php endif; ?>
<?php if (usces_is_tax_display() && 'all' == usces_get_tax_target()) : ?>
			<tr>
				<td colspan="2" class="aright"><?php usces_tax_label(); ?></td>
				<td class="aright" colspan="2"><?php usces_tax($usces_entries) ?></td>
			</tr>
<?php endif; ?>
<?php if (usces_is_member_system() && usces_is_member_system_point() && !empty($usces_entries['order']['usedpoint']) && 1 == usces_point_coverage()) : ?>
			<tr>
				<td colspan="2" class="aright"><?php _e('Used points', 'usces'); ?></td>
				<td class="aright" style="color:#FF0000" colspan="2"><?php echo number_format($usces_entries['order']['usedpoint']); ?></td>
			</tr>
<?php endif; ?>
			<tr>
				<th colspan="2" class="aright full__total"><?php _e('Total Amount', 'usces'); ?></th>
				<th class="aright full__total" colspan="2"><?php usces_crform($usces_entries['order']['total_full_price'], true, false); ?></th>
			</tr>
			</tfoot>
		</table>
<?php if (usces_is_member_system() && usces_is_member_system_point() && usces_is_login() && usces_is_available_point()) : ?>
		<form action="<?php usces_url('cart'); ?>" method="post" onKeyDown="if (event.keyCode == 13) {return false;}">
		<div class="error_message"><?php usces_error_message(); ?></div>
		<table cellspacing="0" id="point_table">
			<tr>
				<td><?php _e('The current point', 'usces'); ?></td>
				<td><span class="point"><?php echo $usces_members['point']; ?></span>pt</td>
			</tr>
			<tr>
				<td><?php _e('Points you are using here', 'usces'); ?></td>
				<td><input name="offer[usedpoint]" class="used_point" type="text" value="<?php echo esc_attr($usces_entries['order']['usedpoint']); ?>" />pt</td>
			</tr>
				<tr>
				<td colspan="2"><input name="use_point" type="submit" class="use_point_button" value="<?php _e('Use the points', 'usces'); ?>" /></td>
			</tr>
	</table>
	<?php do_action('usces_action_confirm_page_point_inform'); ?>
	</form>
<?php endif; ?>
 	<?php do_action('usces_action_confirm_after_form'); ?>
	</div>
	<table id="confirm_table">
		<tr class="ttl">
			<td colspan="2"><h3><?php _e('Customer Information', 'usces'); ?></h3></td>
		</tr>
		<tr>
			<th><?php _e('e-mail adress', 'usces'); ?></th>
			<td><?php echo esc_html($usces_entries['customer']['mailaddress1']); ?></td>
		</tr>
<?php uesces_addressform('confirm', $usces_entries, 'echo'); ?>
		<tr>
			<td class="ttl" colspan="2"><h3><?php _e('Others', 'usces'); ?></h3></td>
		</tr>
		<!-- <tr>
			<th><?php _e('shipping option', 'usces'); ?></th><td><?php echo esc_html(usces_delivery_method_name($usces_entries['order']['delivery_method'], 'return')); ?></td>
		</tr> -->
	<!-- 	<tr>
			<th><?php _e('Delivery date', 'usces'); ?></th><td><?php echo esc_html($usces_entries['order']['delivery_date']); ?></td>
		</tr> -->
		<!-- <tr class="bdc">
			<th><?php _e('Delivery Time', 'usces'); ?></th><td><?php echo esc_html($usces_entries['order']['delivery_time']); ?></td>
		</tr> -->
		<tr>
			<th><?php _e('payment method', 'usces'); ?></th><td><?php echo esc_html($usces_entries['order']['payment_name'] . usces_payment_detail($usces_entries)); ?></td>
		</tr>

				<?php usces_custom_field_info($usces_entries, 'order', ''); ?>

		<tr>
			<th><?php _e('Notes', 'usces'); ?></th><td><?php echo nl2br(esc_html($usces_entries['order']['note'])); ?></td>
		</tr>
	</table>
			<div class="cart-btn-wrap">
				<?php usces_purchase_button(); ?>
			</div>

	<!-- <div class="footer_explanation">
		<?php do_action('usces_action_confirm_page_footer'); ?>
	</div> -->
	<!-- end of footer_explanation -->

</div><!-- end of info-confirm -->

		</div><!-- end of entry -->
	</div><!-- end of post -->
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
<?php endif; ?>
</div><!-- end of catbox -->
</div><!-- end of content -->

</div><!-- end of content -->
</div><!-- ./ section__inner -->
</section>

<script>
$(".back_to_delivery_button").val("お支払方法入力に戻る");
</script>

<?php get_footer(); ?>
