<?php

get_header();
?>
<section class="cart__area">

<div class="section__inner">
<div id="content" class="two-column">
<div class="catbox">

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

	<h1 class="member_page_title tc"><?php _e('New enrollment form', 'usces'); ?></h1>
		<div class="entry">

			<div id="memberpages">

				<div id="newmember">

					<div class="header_explanation tc">
							<p>この新規入会フォームより送信いただく、個人情報の取り扱いにつきましては細心の注意を払っております。<br>お預かりしたお客様の情報は本人様へのお問い合わせ内容についてのご返答や情報のご提供の目的であり、他の目的に使用することはございません。<br>詳しくは<a href="<?php home_url("/");?>privacy">「プライバシーポリシー」</a>をご覧ください。<br>*印の付いている項目は必須となっております。漏れなくご記入ください。<br class="pc">英数字は半角での記入をお願いいたします。</p>
					</div><!-- end of header_explanation -->

					<div class="error_message"><?php usces_error_message(); ?></div>
					<form action="<?php echo apply_filters('usces_filter_newmember_form_action', usces_url('member', 'return')); ?>" method="post" onKeyDown="if (event.keyCode == 13) {return false;}" id="new__member__form">
						<table border="0" cellpadding="0" cellspacing="0" class="customer_form">
							<tr>
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('e-mail adress', 'usces'); ?></th>
								<td colspan="2"><input name="member[mailaddress1]" id="mailaddress1" type="text" value="<?php usces_memberinfo('mailaddress1'); ?>" /></td>
							</tr>
							<tr>
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('E-mail address (for verification)', 'usces'); ?></th>
								<td colspan="2"><input name="member[mailaddress2]" id="mailaddress2" type="text" value="<?php usces_memberinfo('mailaddress2'); ?>" /></td>
							</tr>
							<tr>
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('password', 'usces'); ?></th>
								<td colspan="2"><input class="hidden" value=" " /><input name="member[password1]" id="password1" type="password" value="<?php usces_memberinfo('password1'); ?>" autocomplete="off" /></td>
							</tr>
							<tr>
								<th scope="row"><em><?php _e('*', 'usces'); ?></em><?php _e('Password (confirm)', 'usces'); ?></th>
								<td colspan="2"><input name="member[password2]" id="password2" type="password" value="<?php usces_memberinfo('password2'); ?>" /></td>
							</tr>
							<?php uesces_addressform('member', usces_memberinfo(null), 'echo'); ?>
						</table>
						<?php usces_agree_member_field(); ?>
						<div class="send"><?php usces_newmember_button($member_regmode); ?></div>
						<?php do_action('usces_action_newmember_page_inform'); ?>
					</form>

					<div class="footer_explanation">
					<?php do_action('usces_action_newmember_page_footer'); ?>
					</div><!-- end of footer_explanation -->

				</div><!-- end of newmember -->
			</div><!-- end of memberpages -->

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
