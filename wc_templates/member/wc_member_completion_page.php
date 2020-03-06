<?php

get_header();
?>
<section class="cart__area">

<div class="section__inner">
<div id="content" class="two-column">
<div class="catbox">

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

		<h1 class="member_page_title tc">入会<?php _e('Completion', 'usces'); ?></h1>
		<div class="entry tc">

			<div id="memberpages tc">

				<div class="header_explanation">
				<?php do_action('usces_action_membercompletion_page_header'); ?>
				</div>

				<?php $member_compmode = usces_page_name('return'); ?>
				<?php if ('newcompletion' == $member_compmode) : ?>
				<p><?php _e('Thank you in new membership.', 'usces'); ?></p>

				<?php elseif ('editcompletion' == $member_compmode) : ?>
				<p><?php _e('Membership information has been updated.', 'usces'); ?></p>

				<?php elseif ('lostcompletion' == $member_compmode) : ?>
				<p><?php _e('I transmitted an email.', 'usces'); ?></p>
				<p><?php _e('Change your password by following the instruction in this mail.', 'usces'); ?></p>

				<?php elseif ('changepasscompletion' == $member_compmode) : ?>
				<p><?php _e('Password has been changed.', 'usces'); ?></p>

				<?php endif; ?>


				<div class="footer_explanation">
				<?php do_action('usces_action_membercompletion_page_footer'); ?>
				</div>

				<p><a href="<?php usces_url('member'); ?>"><?php _e('to vist membership information page', 'usces'); ?></a></p>

				<div class="send"><a href="<?php echo home_url(); ?>" class="back_to_top_button"><?php _e('Back to the top page.', 'usces'); ?></a></div>
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
