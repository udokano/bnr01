<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?1220">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<div class="wrapper">
<?php if (have_posts()): while (have_posts()): the_post(); ?>

  		<!--～ループ内で表示させたい内容を記述～-->
		<?php the_title(); ?>
		<?php the_content(); ?>


	<?php endwhile; endif; ?>
<?php wp_footer(); ?>
</body>
</html>
