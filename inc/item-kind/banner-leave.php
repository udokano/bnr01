 <form action="<?php echo USCES_CART_URL; ?>" method="post">
   　　
	 <?php
		$args      = array(
			'post_type'      => 'post',
			'post_name__in'  => array( 'banner-leave' ),
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
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top/bnr_form_kind01_leave.png" alt="バナー制作依頼" class="p-order-kind-bnr__img">
		  </h2>
		  <!-- ./__bnr -->
	</div>
	<!-- __inner -->
  </div>
  <!-- __row -->

  <div class="p-order-row" id="js-order">
	<div class="p-order-row__inner">
		  <dl class="p-option">
			<dt class="p-option__name">依頼方法の選択</dt>
			<dd class="p-option__field">
				<ul class="p-leave">
				  <li class="p-leave__item c-sel" id="js-size-select">
					  <span class='c-labels__circle'><i class='c-labels__mark'></i></span>
					  <?php echo usces_the_itemOption( 'サイズ選択' ); ?>
				  </li>
				  <li class="p-leave__item c-check c-check--radio" id="js-size-select-check">
					  <?php echo usces_the_itemOption( 'サイズ入力' ); ?>
				  </li>
				</ul>

				 <div class="p-size-detail" id="js-size-detail">
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
							<li class="p-size-detail__count"><?php echo usces_the_itemOption( 'バナーお任せ注文作成数' ); ?></li>
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


   <div class="p-order-row">
	<div class="p-order-row__inner">
		  <dl class="p-option">
			<dt class="p-option__name">写真・画像素材の有無</dt>
			<dd class="p-option__field " id="js-option-image">
				<div class="c-labels">
				  <?php echo usces_the_itemOption( '写真・画像素材' ); ?>
				</div>

				<div class="p-option__textarea js-placeholder">
					  <?php echo usces_the_itemOption( '素材イメージ' ); ?>
					   <div class="placeholder">
									   素材イメージを入力<br>例：海辺でくつろぐ女性の後ろ姿の写真
					   </div>
				</div>

				<p class="p-option__note p-option__note--red">※ご希望に沿った画像がみつからない場合もございます、あらかじめご了承ください。</p>
			</dd>
		  </dl>
	</div>
	<!-- __inner -->
  </div>
  <!-- __row -->

  <div class="p-order-row">
	<div class="p-order-row__inner">
		  <dl class="p-option">
			<dt class="p-option__name">文言・キャッチコピーの有無</dt>
			<dd class="p-option__field " id="js-option-text">
				<div class="c-labels">
				  <?php echo usces_the_itemOption( '文言・キャッチコピー' ); ?>
				</div>

				<div class="p-option__textarea js-placeholder">
					  <?php echo usces_the_itemOption( '文章イメージ' ); ?>
					   <div class="placeholder">
									  文章イメージを入力<br>『大人の時間』を連想できるキャッチ
					   </div>
				</div>
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
