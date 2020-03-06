<?php

get_header();
?>
<section class="cart__area">

<div class="section__inner">
<div id="content" class="two-column">
<div class="catbox">


<script>

jQuery(function(){




    jQuery(".direction__links a").each(function() {
		var user__name = $("#user__name").text();
		var user__mail = $("#user__mail").text();
        var obj = jQuery(this);
        var link = obj.attr("href");
        obj.attr("href",link +"&氏名=" + user__name + "&メールアドレス=" + user__mail)
    });
});


</script>

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

		<h1 class="member_page_title tc"><?php _e('Membership', 'usces'); ?></h1>
		<div class="entry">

			<div id="memberpages">

				<div class="whitebox">
					<div id="memberinfo">
					<table id="member__info__table">
						<tr>
							<th scope="row"><?php _e('member number', 'usces'); ?></th>
							<td class="num"><?php usces_memberinfo('ID'); ?></td>
						<!-- 	<td rowspan="3">&nbsp;</td> -->
							<th><?php _e('Strated date', 'usces'); ?></th>
							<td><?php usces_memberinfo('registered'); ?></td>
						</tr>
						<tr>
							<th scope="row"><?php _e('Full name', 'usces'); ?></th>
							<td id="user__name"><?php usces_the_member_name(); ?></td>
							<?php if (usces_is_membersystem_point()) : ?>
							<th><?php _e('The current point', 'usces'); ?></th>
							<td class="num"><?php usces_memberinfo('point'); ?></td>
							<?php else : ?>
							<th>&nbsp;</th>
							<td class="num">&nbsp;</td>
							<?php endif; ?>
						</tr>
						<tr>
							<th scope="row"><?php _e('e-mail adress', 'usces'); ?></th>
							<td id="user__mail"><?php usces_memberinfo('mailaddress1'); ?></td>
							<?php $html_reserve = '<th>&nbsp;</th><td>&nbsp;</td>'; ?>
							<?php echo apply_filters('usces_filter_memberinfo_page_reserve', $html_reserve, usces_memberinfo('ID', 'return')); ?>
						</tr>
					</table>
					<ul class="member_submenu">
						<li class="edit_member"><a href="#edit"><?php _e('To member information editing', 'usces'); ?></a></li>
						<?php do_action('usces_action_member_submenu_list'); ?>
						<li class="logout_member"><?php usces_loginout(); ?></li>
					</ul>

					<div class="header_explanation">
					<?php do_action('usces_action_memberinfo_page_header'); ?>
					</div>

					<h3><?php _e('Purchase history', 'usces'); ?></h3>

					<?php usces_member_history(); ?>

					<h3><a name="edit"></a><?php _e('Member information editing', 'usces'); ?></h3>
					<div class="error_message"><?php usces_error_message(); ?></div>
					<form action="<?php usces_url('member'); ?>#edit" method="post" onKeyDown="if (event.keyCode == 13) {return false;}">
						<table class="customer_form" id="customer_form">
							<?php uesces_addressform('member', usces_memberinfo(null), 'echo'); ?>
							<tr>
								<th scope="row"><?php _e('e-mail adress', 'usces'); ?></th>
								<td colspan="2"><input name="member[mailaddress1]" id="mailaddress1" type="text" value="<?php usces_memberinfo('mailaddress1'); ?>" /></td>
							</tr>
							<tr>
								<th scope="row"><?php _e('password', 'usces'); ?></th>
								<td colspan="2"><input class="hidden" value=" " /><input name="member[password1]" id="password1" type="password" value="<?php usces_memberinfo('password1'); ?>" autocomplete="off" />
								<?php _e('Leave it blank in case of no change.', 'usces'); ?></td>
							</tr>
							<tr>
								<th scope="row"><?php _e('Password (confirm)', 'usces'); ?></th>
								<td colspan="2"><input name="member[password2]" id="password2" type="password" value="<?php usces_memberinfo('password2'); ?>" />
								<?php _e('Leave it blank in case of no change.', 'usces'); ?></td>
							</tr>
						</table>
						<input name="member_regmode" type="hidden" value="editmemberform" />
						<div class="send">
							<input name="top" type="button" value="<?php _e('Back to the top page.', 'usces'); ?>" onclick="location.href='<?php echo home_url(); ?>'" />
							<input name="editmember" type="submit" value="<?php _e('update it', 'usces'); ?>" />
							<input name="deletemember" type="submit" class="reave__btn" value="<?php _e('delete it', 'usces'); ?>" onclick="return confirm('<?php _e('All information about the member is deleted. Are you all right?', 'usces'); ?>');" />
						</div>
						<?php do_action('usces_action_memberinfo_page_inform'); ?>
					</form>

					<div class="footer_explanation">
					<?php do_action('usces_action_memberinfo_page_footer'); ?>
					</div>
					</div><!-- end of memberinfo -->
				</div><!-- end of whitebox -->
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
