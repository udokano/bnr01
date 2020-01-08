<?php
get_header();
?>

<?php usces_delivery_info_script(); ?>

<section class="cart__area">

<div class="section__inner">
<div id="content" class="two-column">
<div class="catbox">

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

		<h1 class="cart_page_title tc"><?php _e('Shipping / Payment options', 'usces'); ?></h1>
		<div class="entry">

			<div id="delivery-info">

				<div class="usccart_navi">
					<ol class="ucart">
					<li class="ucart usccart"><?php _e('1.Cart', 'usces'); ?></li>
					<li class="ucart usccustomer"><?php _e('2.Customer Info', 'usces'); ?></li>
					<li class="ucart uscdelivery usccart_delivery">支払い方法</li>
					<li class="ucart uscconfirm"><?php _e('4.Confirm', 'usces'); ?></li>
					</ol>
				</div>

				<div class="header_explanation">
			<?php do_action('usces_action_delivery_page_header'); ?>
				</div>

				<div class="error_message"><?php usces_error_message(); ?></div>
				<form action="<?php usces_url('cart'); ?>" method="post">

				<?php do_action('usces_action_delivery_flag'); ?>


				<table class="customer_form" id="time">
					<tr style="height: 0; display: none;">
						<th scope="row"><?php _e('shipping option', 'usces'); ?></th>
						<td colspan="2"><?php usces_the_delivery_method($usces_entries['order']['delivery_method']); ?></td>
					</tr>
					<tr style="height: 0; display: none;">
						<th scope="row"><?php _e('Delivery date', 'usces'); ?></th>
						<td colspan="2"><?php usces_the_delivery_date($usces_entries['order']['delivery_date']); ?></td>
					</tr>
					<tr style="height: 0; display: none;">
						<th scope="row"><?php _e('Delivery Time', 'usces'); ?></th>
						<td colspan="2"><?php usces_the_delivery_time($usces_entries['order']['delivery_time']); ?></td>
					</tr>
					<tr >
						<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('payment method', 'usces'); ?></th>
						<td colspan="2"><?php usces_the_payment_method($usces_entries['order']['payment_name']); ?></td>
					</tr>
				</table>

			<?php usces_delivery_secure_form(); ?>

			<?php $meta = usces_has_custom_field_meta('order'); ?>
			<?php if (!empty($meta) and is_array($meta)) : ?>
				<table class="customer_form" id="custom_order">
				<?php usces_custom_field_input($usces_entries, 'order', ''); ?>
				</table>
			<?php endif; ?>

			<?php $entry_order_note = empty($usces_entries['order']['note']) ? apply_filters('usces_filter_default_order_note', null) : $usces_entries['order']['note']; ?>
				<table class="customer_form" id="notes_table">
					<tr>
						<th scope="row"><?php _e('Notes', 'usces'); ?></th>
						<td colspan="2"><textarea name="offer[note]" id="note" class="notes"><?php echo esc_html($entry_order_note); ?></textarea></td>
					</tr>
				</table>

				<div class="send"><input name="offer[cus_id]" type="hidden" value="" />
				<input name="backCustomer" type="submit" class="back_to_customer_button" value="<?php _e('Back', 'usces'); ?>"<?php echo apply_filters('usces_filter_deliveryinfo_prebutton', null); ?> />
				<input name="confirm" type="submit" class="to_confirm_button" value="<?php _e(' Next ', 'usces'); ?>"<?php echo apply_filters('usces_filter_deliveryinfo_nextbutton', null); ?> /></div>
				<?php do_action('usces_action_delivery_page_inform'); ?>
				</form>

				<div class="footer_explanation">
			<?php do_action('usces_action_delivery_page_footer'); ?>
				</div>
			</div>

		</div><!-- end of entry -->
	</div><!-- end of post -->
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'usces'); ?></p>
<?php endif; ?>
</div><!-- end of catbox -->
</div><!-- end of content -->

</div><!-- ./ section__inner -->
</section>

<?php get_footer(); ?>
