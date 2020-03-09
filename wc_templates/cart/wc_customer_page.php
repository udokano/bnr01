<?php

get_header();
?>


<section class="cart__area">

<div class="section__inner">
<div id="content" class="two-column">
<div class="catbox">

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

	<h1 class="cart_page_title tc"><?php _e('Customer Information', 'usces'); ?></h1>
		<div class="entry">

			<div id="customer-info">

				<div class="usccart_navi">
					<ol class="ucart">
					<li class="ucart usccart"><?php _e('1.Cart', 'usces'); ?></li>
					<li class="ucart usccustomer usccart_customer"><?php _e('2.Customer Info', 'usces'); ?></li>
					<li class="ucart uscdelivery">支払い方法</li>
					<li class="ucart uscconfirm"><?php _e('4.Confirm', 'usces'); ?></li>
					</ol>
				</div>

				<div class="header_explanation">
				<?php do_action('usces_action_customer_page_header'); ?>
				</div><!-- end of header_explanation -->

				<div class="error_message"><?php usces_error_message(); ?></div>
			<?php if (usces_is_membersystem_state()) : ?>
				<h5><?php _e('The member please enter at here.', 'usces'); ?></h5>
				<form action="<?php usces_url('cart'); ?>" method="post" name="customer_loginform" onKeyDown="if (event.keyCode == 13) {return false;}" >
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="customer_form">
					<tr>
						<th scope="row"><?php _e('e-mail adress', 'usces'); ?></th>
						<td><input name="loginmail" id="loginmail" type="text" value="<?php echo esc_attr($usces_entries['customer']['mailaddress1']); ?>" style="ime-mode: inactive" /></td>
					</tr>
					<tr>
						<th scope="row"><?php _e('password', 'usces'); ?></th>
						<td><input class="hidden" value=" " /><input name="loginpass" id="loginpass" type="password" value="" autocomplete="off" /></td>
					</tr>
				</table>
				<div class="send mb30"><input name="customerlogin" type="submit" value="<?php _e(' Next ', 'usces'); ?>" /></div>
				<?php do_action('usces_action_customer_page_member_inform'); ?>
				</form>
				<h5><?php _e('The nonmember please enter at here.', 'usces'); ?></h5>
			<?php endif; ?>

				<form action="<?php echo USCES_CART_URL; ?>" method="post" name="customer_form" onKeyDown="if (event.keyCode == 13) {return false;}" id="customer_form">
				<table border="0" cellpadding="0" cellspacing="0" class="customer_form">
					<tr>
						<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('e-mail adress', 'usces'); ?></th>
						<td colspan="2"><input name="customer[mailaddress1]" id="mailaddress1" type="text" value="<?php echo esc_attr($usces_entries['customer']['mailaddress1']); ?>" style="ime-mode: inactive" /></td>
					</tr>
					<tr>
						<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('e-mail adress', 'usces'); ?>(<?php _e('Re-input', 'usces'); ?>)</th>
						<td colspan="2"><input name="customer[mailaddress2]" id="mailaddress2" type="text" value="<?php echo esc_attr($usces_entries['customer']['mailaddress2']); ?>" style="ime-mode: inactive" /></td>
					</tr>
			<?php if (usces_is_membersystem_state()) : ?>
	<tr>
						<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('password', 'usces'); ?></th>
						<td colspan="2"><input class="hidden" value=" " /><input name="customer[password1]" id="pass01" type="password" value="<?php echo esc_attr($usces_entries['customer']['password1']); ?>" autocomplete="off" /><?php if ($member_regmode != 'editmemberfromcart') {
    _e('When you enroll newly, please fill it out.', 'usces');
} ?>	</td>
					</tr>
					<tr>
						<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('Password (confirm)', 'usces'); ?></th>
						<td colspan="2"><input name="customer[password2]" id="pass02"  type="password" value="<?php echo esc_attr($usces_entries['customer']['password2']); ?>" /><?php if ($member_regmode != 'editmemberfromcart') {
    _e('When you enroll newly, please fill it out.', 'usces');
} ?></td>
</tr>
			<?php endif; ?>

			<?php uesces_addressform('customer', $usces_entries, 'echo'); ?>
				</table>


			 <div class="term__inc" id="term">
             <?php get_template_part('inc/trems');?>
      		</div>


				<input name="member_regmode" type="hidden" value="<?php echo $member_regmode; ?>" />
				<div class="send">
				<?php usces_get_customer_button(); ?>
				</div>
				<?php usces_agree_member_field(); ?>

				<?php do_action('usces_action_customer_page_inform'); ?>
				</form>

				<div class="footer_explanation">
				<?php do_action('usces_action_customer_page_footer'); ?>
				</div><!-- end of footer_explanation -->
			</div><!-- end of customer-info -->

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


<script>

	$(".to_deliveryinfo_button").val("会員登録して進む");
	$(".to_reganddeliveryinfo_button").val("会員登録せずに進む");

</script>
