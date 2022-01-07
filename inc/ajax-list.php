<?php


require_once dirname( __FILE__ ) . '../../../../../wp-load.php';

$offset           = isset( $_REQUEST['post_num_now'] ) ? $_REQUEST['post_num_now'] : false;
$posts_per_page   = isset( $_REQUEST['post_num_add'] ) ? $_REQUEST['post_num_add'] : 6;
$target_post_type = 'bnr__works';


  global $max_num_page;
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
// 絞り込み条件
if ( ! empty( $_REQUEST['sort_bnr_type'] ) ) {
	if ( ! $_REQUEST['sort_bnr_type'] == '' ) {
		foreach ( $_REQUEST['sort_bnr_type'] as $value ) {
			$sort_bnr_type[] = htmlspecialchars( $value, ENT_QUOTES );
		}
		$argaaa = array(
			'taxonomy' => 'bnr_type',
			'terms'    => $sort_bnr_type,
			'field'    => 'slug',
			'operator' => 'IN',
		);
	}
}

if ( ! empty( $_REQUEST['sort_industry'] ) ) {
	if ( ! $_REQUEST['sort_industry'] == '' ) {
		foreach ( $_REQUEST['sort_industry']as$value ) {
			$sort_industry[] = htmlspecialchars( $value, ENT_QUOTES );
		}
				$argsss = array(
					'taxonomy' => 'industry',
					'terms'    => $sort_industry,
					'field'    => 'slug',
				// 'operator'=>'IN'
				);
	}
}


$arg = array(
	'post_type'      => 'bnr__works',
	'posts_per_page' => 12,
	'paged'          => $paged,


	// 'posts_per_page' => $posts_per_page,
	// 'offset'         => $offset,

);


/*バナータイプが選択されていない場合*/
if ( empty( $_REQUEST['sort_bnr_type'] ) && $_REQUEST['sort_bnr_type'] === '' ) {
	$arg['tax_query'] = array(
		// 'relation'=>'OR',//ANDかORのどちらかを指定（大文字）
			$argsss,
	);

} elseif ( empty( $_REQUEST['sort_industry'] ) && $_REQUEST['sort_industry'] === '' ) {
	$arg['tax_query'] = array(
		// 'relation'=>'OR',//ANDかORのどちらかを指定（大文字）
			$argaaa,
	);
} else {
	$arg['tax_query'] = array(
		'relation' => 'AND', // バナータイプも業界も選択された場合にはANDを指定する
		$argaaa,
		$argsss,
	);
}



$ajax_query = new WP_Query( $arg );
ini_set( 'xdebug.var_display_max_children', -1 );
ini_set( 'xdebug.var_display_max_data', -1 );
ini_set( 'xdebug.var_display_max_depth', -1 );
// var_dump($arg);

?>

<?php
	// 投稿数の取得
	$count_post = wp_count_posts( $target_post_type );// カスタム投稿タイプのスラッグを指定
?>




<?php
if ( $ajax_query->have_posts() ) :
	;
	?>
	<?php
	while ( $ajax_query->have_posts() ) :
		$ajax_query->the_post();
		?>




	<div class="p-works__item js-banner-item">
		<div class="p-works__thumb js-banner-img">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
		<!--./__thumb-->

		<div class="u-all-hidden">
			<p class="js-banner-name"><?php the_title(); ?></p>
			<p class="js-banner-content"><?php remove_filter( 'the_content', 'wpautop' ); ?><?php the_content(); ?></p>
		</div>

		<div class="p-works__bottom">

			<?php
				// 所属タクソノミー表示
					$terms = wp_get_object_terms( $post->ID, 'bnr_type' );
			if ( ! empty( $terms ) ) {
				foreach ( $terms as $term ) {
					echo "<p class='p-works__type js-banner-type'>" . $term->name . '</input>';
					break;
				}
			}

			?>

			<?php
				// 所属タクソノミー表示
					$terms = wp_get_object_terms( $post->ID, 'industry' );
			if ( ! empty( $terms ) ) {
				echo "<ul class='p-works__industry js-banner-industry'>";
				foreach ( $terms as $term ) {
						echo "<li class='p-works__cat'>" . $term->name . '</li>';
				}
					echo '</ul>';
			}
			?>
		</div>

	</div>
<?php endwhile; ?>

		<?php else : ?>

		<p class="">条件に合うバナーがありません</p>

<?php endif; ?>

<?php
wp_reset_postdata();
?>
		  <?php
			if ( $ajax_query->max_num_pages > 1 ) {
				echo '<div class="pagination" style="display:none;">';
				echo paginate_links(
					array(
						'base'      => home_url( '/' ) . 'works'  . '%_%',
						'format'    => '/page/%#%',
						'current'   => max( 1, $paged ),
						'total'     => $ajax_query->max_num_pages,
						'type'      => 'list',
						'mid_size'  => '1',
						'prev_text' => '«',
						'next_text' => '»',
					)
				);
				echo '</div>';
			}
			?>
