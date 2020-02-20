<?php
get_header(2);
?>

<section class="cart__area">

<div class="section__inner">

<div id="content" class="two-column">
<div class="catbox">

<?php if (have_posts()) : usces_remove_filter(); ?>

	<div class="post" id="wc_<?php usces_page_name(); ?>">

	<!-- 	<h1 class="cart_page_title"><?php _e('Completion', 'usces'); ?></h1> -->
		<div class="entry">

			<div id="cart_completion">
			<h1 class="tc"><?php _e('It has been sent succesfully.', 'usces'); ?></h1>
				<div class="header_explanation">
				<p class="tc"><?php _e('Thank you for shopping.', 'usces'); ?><br /><?php _e("If you have any questions, please contact us by 'Contact'.", 'usces'); ?></p>
				<?php do_action('usces_action_cartcompletion_page_header', $usces_entries, $usces_carts); ?>
				</div><!-- header_explanation -->

			<?php usces_completion_settlement(); ?>

			<?php do_action('usces_action_cartcompletion_page_body', $usces_entries, $usces_carts); ?>

				<div class="footer_explanation">
				<?php do_action('usces_action_cartcompletion_page_footer', $usces_entries, $usces_carts); ?>
				</div><!-- footer_explanation -->

				<div class="thanks__note tc mb15">
				<div class="note__inner">
					<p>※ご注文確認メールが届かない場合は、<br>迷惑メールフォルダ内の確認をお願いいたします。</p>

				<p class="mb15">万が一、当店からの確認メールが届かない場合は、<br>お手数ですが、こちらのメールアドレスまでご連絡ください。</p>
				<p class="tc"><a href="mailto:banner@u-d.jp">banner@u-d.jp</a></p>
				</div>

				</div>


				<div class="send tc"><a href="<?php echo home_url(); ?>" class="back_to_top_button"><?php _e('Back to the top page.', 'usces'); ?></a></div>
			<?php echo apply_filters('usces_filter_conversion_tracking', null, $usces_entries, $usces_carts); ?>

			</div><!-- end of cart_completion -->

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
