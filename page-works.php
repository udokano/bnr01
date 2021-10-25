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
  <label for="search" class="p-search-ttl">制作実績の絞り込み</label>

<div class="p-search-area">
	   <div class="p-bnr-type-out">
	<!-- バナータイプで絞り込み -->
		  <h3 class="p-search-out__ttl">バナータイプを選択</h3>
		  <ul class="p-bnr-type">
		  <?php $bnr = $_POST['sort_bnr_type']; ?>
		  <?php
			$bnr_types = get_terms(
				'bnr_type',
				array(
					'hide_empty' => false,
					'orderby'    => 'slug',
				)
			);
			foreach ( $bnr_types as $bnr_type ) :
				$checked = '';
				if ( $bnr_type->slug === $bnr ) {
					$checked = 'checked';
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
			  <?php $industry = $_POST['sort_industry']; ?>
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
					if ( $bnr_industry->slug === $bnr ) {
						$checked = 'checked';
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
	  </div>
	  <!-- ./out -->
  </div>
  <!-- ./area -->

</div>



<!-- 絞り込み検索終わり -->


		<p id="out" class="u-all-hidden"></p>
		  <ul class="p-works js-add-works">
			<!-- 記事を読み込みするファイル -->
			<?php get_template_part( 'inc/ajax-list' ); ?>
		  </ul>
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


<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>

$(function () {
 /*  var $demo1 = $('.js-add-works');   //コンテナとなる要素を指定


	//Masonryの関数↓
	$('.js-add-works').masonry({              //オプション指定箇所
	  itemSelector: '.js-banner-item',   //コンテンツを指定
	  //columnWidth: 205,           //カラム幅を設定
	  fitWidth: true,             //コンテンツ数に合わせ親の幅を自動調整
	});

	 jQuery(window).on("scroll",".js-banner-item" ,function() {
		  //Masonryの関数↓
	  $demo1.masonry({              //オプション指定箇所
	  itemSelector: '.js-banner-item',   //コンテンツを指定
	  //columnWidth: 205,           //カラム幅を設定
	  fitWidth: true,             //コンテンツ数に合わせ親の幅を自動調整
	});

	  }); */


		/* var min_width = 480;
			//画面幅による分岐と imagesLoaded, Masonry のイニシャライズを関数化
			function masonry_update() {

			  if ( $('html').width() < min_width ) {
				$container.masonry('destroy');
			  } else {

				  $container.masonry({
					itemSelector: '.js-banner-item',　
					isFitWidth: true,　
					columnWidth: 180
				  });

			  }
			}
 var $container = $('.js-add-works');
  $container.masonry({
					itemSelector: '.js-banner-item',　
					isFitWidth: true,　
					columnWidth: 180
				  });


			  jQuery(window).on("scroll", function() {
				 $container.masonry('reloadItems');

			  }); */
 /* $('.js-add-works').masonry({              //オプション指定箇所
	  itemSelector: '.js-banner-item',   //コンテンツを指定
	  //columnWidth: 205,           //カラム幅を設定
	  //fitWidth: true,             //コンテンツ数に合わせ親の幅を自動調整
	});
			  // 画像の親要素を取得・変数定義（この場合クラスを利用）
var target = document.getElementsByClassName('js-add-works');

// DOM操作時の動き
function yaritaiKoto() {
  //ここにやりたい処理
	 setTimeout(function(){
	  $('.js-add-works').masonry('reloadItems');
	  $('.js-add-works').masonry({              //オプション指定箇所
		  itemSelector: '.js-banner-item',   //コンテンツを指定
		  //columnWidth: 205,           //カラム幅を設定
		  //fitWidth: true,             //コンテンツ数に合わせ親の幅を自動調整
		});
	  //$('.js-add-works').masonry('destroy');
		 },1000);
}

// MutationObserver登録・処理
var mo = new MutationObserver(yaritaiKoto);

 //だいたいの場合でtargetは複数あって、配列になるのでeachで処理
$(target).each( function(i){
  mo.observe(target[i], {childList: true}); // 子要素が登録されたら
});

$("input[type='checkbox']").on("change",function(){
  $('.js-add-works').masonry('destroy');
		$('.js-add-works').masonry({              //オプション指定箇所
	  itemSelector: '.js-banner-item',   //コンテンツを指定
	  //columnWidth: 205,           //カラム幅を設定
	  //fitWidth: true,             //コンテンツ数に合わせ親の幅を自動調整
	});
});
 */

  });



</script>




<script>


jQuery(function() {
  let documentHeight = jQuery(document).height();
  let windowsHeight = jQuery(window).height();
  let url = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/ajax-list.php"; /* ご自身のURL */
  let postNumNow = 6; /* 最初に表示されている記事数 */
  let postNumAdd = 3; /* 追加する記事数 */
  let flag = false;

  let checkedSIze = $("input[name='sort_bnr_type[]']:checked").val();
	let checkedSIze02 = $("input[name='sort_industry[]']:checked").val();

  var vals01 = "";
  var vals02 = "";

  console.log(documentHeight);
  console.log(windowsHeight);


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
		  type: "POST",
		  url: url,
		  data: {
			//post_num_now: false,
			//post_num_add: 6,
			sort_bnr_type: vals01,
			sort_industry: vals02,
		  },
		  success: function(response) {
			jQuery(".js-add-works").html(response);
			documentHeight = jQuery(document).height();
			postNumNow = postNumNow + 6;
			console.log(postNumNow);
		  }
		});
  });


  jQuery(window).on("scroll", function() {
	$("#out").text($(".js-banner-item").length);
	var itemLength = $(".js-banner-item").length;
	var showPostCount = $("#out").text(itemLength);
	var totalPostCount = $(".js-post-count").val();
	 //console.log($("#out").text());
	 showPostCount =  $("#out").text();
	//console.log(totalPostCount);
	let scrollPosition = windowsHeight + jQuery(window).scrollTop();
	 //console.log(scrollPosition);
	if (((documentHeight - scrollPosition) / documentHeight <= 0.05)) {
	  if (!flag) {
		 if(showPostCount != totalPostCount){
		  jQuery(".js-loading").addClass("is-show");
		flag = true;
		jQuery.ajax({
		  type: "POST",
		  url: url,
		  data: {
			post_num_now: postNumNow,
			post_num_add: postNumAdd,
			sort_bnr_type:  vals01,
			sort_industry: vals02,
		  },
		  success: function(response) {

			jQuery(".js-add-works").append(response);
			documentHeight = jQuery(document).height();
			jQuery(".js-loading").removeClass("is-show");
			postNumNow = postNumNow + 3;
			//console.log(!showPostCount === totalPostCount);
			flag = false;
		  }

		 });
		}
	  }
	}
  });
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
