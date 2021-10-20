<form action="<?php echo USCES_CART_URL; ?>" method="post">
   　　
	 <?php
		$args      = array(
			'post_type'      => 'post',
			'post_name__in'  => array( 'banner-sns' ),
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
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top/bnr_form_kind03.png" alt="バナー制作依頼" class="p-order-kind-bnr__img">
		  </h2>
		  <!-- ./__bnr -->
	</div>
	<!-- __inner -->
  </div>
  <!-- __row -->


   <div class="p-order-row" id="js-order">
	<div class="p-order-row__inner">
		  <dl class="p-option">
			<dt class="p-option__name">サイズを入力</dt>
			<dd class="p-option__field" id="js-option-sns-size">
				<div class="p-size-detail p-size-detail--show" id="js-size-detail">
					<div class="p-size-detail__row">
						  <p class="p-size-detail__caption">サイズを入力</p>
						  <ul class="p-size-detail__action">
							<li class="p-size-detail__item">
							  <p class="p-size-detail__inp-ttl">縦</p>
							  <?php echo usces_the_itemOption( '縦サイズ' ); ?>
							   <p class="p-size-detail__inp-ttl p-size-detail__inp-ttl--px">px</p>
							</li>
							<li class="p-size-detail__cross">
							  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/icon_cross.png" alt="">
							</li>
							<li class="p-size-detail__item">
							  <p class="p-size-detail__inp-ttl">横</p>
							  <?php echo usces_the_itemOption( '横サイズ' ); ?>
							  <p class="p-size-detail__inp-ttl p-size-detail__inp-ttl--px">px</p>
							</li>
						  </ul>
						  <ul class="p-size-detail__right">
							<li class="p-size-detail__how">作成数</li>
							<li class="p-size-detail__count"><?php echo usces_the_itemOption( 'SNS・ブログヘッダー作成数' ); ?></li>
							<li class="p-size-detail__point">点</li>
						  </ul>
					</div>
					<!-- ./__row -->
			  </div>
			  <!-- ./__detail -->

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
