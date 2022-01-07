<?php
/*
Template Name: 制作実績
*/
?>

<?php get_header(); ?>




<div class="pages__title retouch__bg">
<h1>制作実績</h1>
<p class="">バナー屋さんが過去に制作した、<br class="u-sp">バナーをタイプ・ジャンル別に掲載しております。<br>お客様のご要望に合わせて多種多様なバナーを制作しております。</p>

<?php echo breadcrumb_func(); ?>
</div>
<!-- ./pages__title -->


<section class="p-work-area">



<div class="p-search-wrapper">

<!-- 絞り込み検索のチェックフィールド -->

 <input type="checkbox" id="search" class="u-all-hidden p-search-check">
  <label for="search" class="p-search-ttl">制作実績を絞り込む</label>

<div class="p-search-area">
	 <form action="<?php echo esc_url( home_url( '/' ) ); ?>works" method="get">
	   <div class="p-bnr-type-out">
	<!-- バナータイプで絞り込み -->
		  <h3 class="p-search-out__ttl">バナータイプを選択</h3>
		  <ul class="p-bnr-type">
		  <?php
			$bnr = $_REQUEST['sort_bnr_type'];
			?>

		  <?php
			$bnr_types = get_terms(
				'bnr_type',
				array(
					'hide_empty' => true,
					'orderby'    => 'slug',
				)
			);
			foreach ( $bnr_types as $bnr_type ) :
				$checked = '';
				if ( ! empty( $bnr ) ) {
					if ( in_array( $bnr_type->slug, $bnr, true ) ) {
						$checked = 'checked';
					}
				}
				?>
			<li class="p-bnr-type__item">
				  <input type="checkbox" name="sort_bnr_type[]" id="<?php echo esc_attr( $bnr_type->slug ); ?>" class="u-all-hidden p-bnr-type-check js-bnr-type js-sort" value="<?php echo esc_attr( $bnr_type->slug ); ?>" <?php echo $checked; ?>>
				  <label for="<?php echo esc_attr( $bnr_type->slug ); ?>" class="js-change-sort p-bnr-type__label <?php echo esc_attr( $bnr_type->slug ); ?>">
					  <span class="p-bnr-type__name"><?php echo esc_html( $bnr_type->name ); ?></span>
				  </label>
				</li>
			  <?php endforeach; ?>
			</ul>
	</div>
	<!-- ./out -->

	<!-- 業界で絞り込み!! -->
	<div class="p-search-out">

			<h3 class="p-search-out__ttl">業界を選択</h3>
			<ul class="p-bnr-industry">
			  <?php $industry = $_REQUEST['sort_industry']; ?>
			  <?php
				$bnr_industrys = get_terms(
					'industry',
					array(
						'hide_empty' => true,
						'orderby'    => 'slug',
					)
				);
				foreach ( $bnr_industrys as $bnr_industry ) :
					$checked = '';
					if ( ! empty( $industry ) ) {
						if ( in_array( $bnr_industry->slug, $industry, true ) ) {
							$checked = 'checked';
						}
					}
					?>
				  <li class="p-bnr-industry__item">
					<input type="checkbox" name="sort_industry[]" id="<?php echo esc_attr( $bnr_industry->slug ); ?>" class="u-all-hidden p-bnr-industry-check js-bnr-industry js-sort" value="<?php echo esc_attr( $bnr_industry->slug ); ?>" <?php echo $checked; ?>>

					<label for="<?php echo esc_attr( $bnr_industry->slug ); ?>" class="js-change-sort p-bnr-industry__label">
					  <span class="p-bnr-industry__square">
						<i class="p-bnr-industry__inside"></i>
					  </span>
					  <span class="p-bnr-industry__name"><?php echo esc_html( $bnr_industry->name ); ?></span>
					</label>
				  </li>
				<?php endforeach; ?>
			</ul>
			<!-- ./業界で絞り込み -->

			<button type="submit" class="p-submit-search">絞り込む</button>
	  </div>
	  <!-- ./out -->

  </div>
  <!-- ./area -->
 </form>
</div>



<!-- 絞り込み検索終わり -->


		<p id="out" class="u-all-hidden"></p>
		  <div class="p-works js-add-works are-images-unloaded">
			<!-- 記事を読み込みするファイル -->
			 <div class="grid__col-sizer"></div>
  <div class="grid__gutter-sizer"></div>
			<?php get_template_part( 'inc/ajax-list' ); ?>



		  </div>

		<div class="p-loading js-loading"></div>




		<div class="js-banner-modal p-banner-modal">
			<div class="p-banner-modal__bg js-banner-modal-close"></div>
			<div class="p-banner-modal__content">
					<div class="p-banner-modal__inner">
					  <h3 class="js-modal-title p-banner-modal__title"></h3>
					  <div class="p-banner-modal__img">
							<img src="" alt="" class="js-modal-img">
					  </div>
					  <!-- ./img -->

					  <div class="p-banner-modal__bottom">
						  <dl class="p-banner-modal__list">
							<dt class="p-banner-modal__cap">タイプ:</dt>
							<dd class="p-banner-modal__data js-modal-banner-type"></dd>
						  </dl>
						  <dl class="p-banner-modal__list">
							<dt class="p-banner-modal__cap">業界:</dt>
							<dd class="p-banner-modal__data ">
							  <ul class="js-modal-banner-industry p-banner-modal__cat-list">
							  </ul>
							</dd>
						  </dl>
					  </div>
					  <!-- ./__bottom -->

					   <p class="js-modal-content p-banner-modal__desc"></p>

					   <p class="js-banner-modal-close p-banner-modal__btn">閉じる</p>
					</div>
					<!-- ./__inner -->
			</div>
			<!-- ./__content -->
		</div>
		<!-- ./__modal -->



</section>

<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/2.1.0/jquery.infinitescroll.min.js"></script>

<script>

//-------------------------------------//
// init Masonry

function yaritaiKoto(){
	var $container = $('.js-add-works');
	$container.imagesLoaded(function(){
		$container.masonry({
			itemSelector: '.js-banner-item',
			isFitWidth: false,
			isAnimated: true,
			isResizable: true
		});
	});
	$container.infinitescroll({
		navSelector  : '.pagination',
		nextSelector : '.pagination a.next',
		itemSelector : '.js-banner-item',
		loading: {
			finishedMsg: '',
			img: null,
			msgText: "読み込み中"
		}
	},
	function( newElements ) {
		var $newElems = $( newElements );
		$newElems.imagesLoaded(function(){
			$container.masonry( 'appended', $newElems, true );
		});
	});
};


yaritaiKoto();





jQuery(function() {

  let url = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/ajax-list.php"; /* ご自身のURL */
  let postNumNow = 6; /* 最初に表示されている記事数 */
  let postNumAdd = 3; /* 追加する記事数 */
  let flag = false;

  let checkedSIze = $("input[name='sort_bnr_type[]']:checked").val();
	let checkedSIze02 = $("input[name='sort_industry[]']:checked").val();

  var vals01 = "";
  var vals02 = "";



/*

一旦非表示
  $(".js-sort").on("change",function(){
	 vals01 = []; // 配列を定義
	checkedSIze = $(".js-bnr-type:checked").each(function() {
	  vals01.push($(this).val());
	});
	  vals02 = []; // 配列を定義
	checkedSIze02 = $(".js-bnr-industry:checked").each(function() {
	  vals02.push($(this).val());
	});
		postNumNow = 0;
		  console.log(vals01);
		jQuery.ajax({
		  type: "GET",
		  url: url,
		  data: {
			//post_num_now: false,
			//post_num_add: 6,
			sort_bnr_type: vals01,
			sort_industry: vals02,
		  },
		  success: function(response) {


			jQuery(".js-add-works").html(response);
			setTimeout( yaritaiKoto(), 2000);

		  }
		});
  }); */

});


$("body").on("click",'.js-banner-item',function(){
	  var bannerName = $(this).find(".js-banner-name").text();
	  var bannerDesc =   $(this).find(".js-banner-content").text();
	  var bannerImg = $(this).find(".js-banner-img > img").attr("src");
	  var bannerType =  $(this).find(".js-banner-type").text();
	  var bannerKind =  $(this).find(".js-banner-industry").html();

	  $(".js-banner-modal").toggleClass("is-modal-show");
	  $("body").toggleClass("is-of-hidden");
	  $(".js-modal-title").text(bannerName);
	  $(".js-modal-content").text(bannerDesc);
	  $(".js-modal-img").attr("src",bannerImg);
	  $(".js-modal-banner-type").text(bannerType);
	   $(".js-modal-banner-industry").html(bannerKind);

});

$(".js-banner-modal-close").on("click",function(){
	  $(".js-banner-modal").removeClass("is-modal-show");
	   $("body").removeClass("is-of-hidden");
	  //各要素の値を一度リセット
	   $(".js-modal-title").text("");
	  $(".js-modal-content").text("");
	  $(".js-modal-img").attr("src","");
	  $(".js-modal-banner-type").text("");
	   $(".js-modal-banner-industry").html("");
});


</script>

<?php get_footer(); ?>
