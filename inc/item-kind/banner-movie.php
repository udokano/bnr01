 <form action="<?php echo USCES_CART_URL; ?>" method="post">
   　　
	 <?php
		$args      = array(
			'post_type'      => 'post',
			'post_name__in'  => array( 'banner-movie' ),
			'posts_per_page' => 1,
			'orderby'        => 'name',
			'order'          => 'DESC',
		);
		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			usces_the_item( 'banner' );
			?>
			<?php usces_have_skus(); ?>



  <section class="p-order" id="js-order">

  <div class="p-order-row">
	<div class="p-order-row__inner">
		  <h2 class="p-order-kind-bnr">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top/bnr_form_kind02.png" alt="バナー制作依頼" class="p-order-kind-bnr__img">
		  </h2>
		  <!-- ./__bnr -->
	</div>
	<!-- __inner -->
  </div>
  <!-- __row -->


   <div class="p-order-row" id="js-order">
	<div class="p-order-row__inner">
		  <dl class="p-option">
			<dt class="p-option__name">サイズを選択</dt>
			<dd class="p-option__field c-labels" id="js-option-movie-size">
				<?php echo usces_the_itemOption( '動画サイト用サムネイルサイズ' ); ?>

			</dd>
		  </dl>
	</div>
	<!-- __inner -->
  </div>
  <!-- __row -->

			<?php get_template_part( 'inc/item-kind/items-common' ); ?>

  </section>







			<?php
	  endwhile;
		wp_reset_postdata();
		?>

  </form>
