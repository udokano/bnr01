<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">

<?php wp_head(); ?>
<link rel="stylesheet" href="https://unpkg.com/tippy.js@5/dist/backdrop.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?var=1.2.4">

</head>
<body <?php body_class(); ?> id="front__page">
<div class="wrapper">
<header id="site__header">

        <div class="header__inner flex al-cent">
                <div class="header__logo">
                    <a href="<?php echo home_url('/');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/site_logo.png" alt="バナー屋さん"></a>
                </div><!-- ./header__logo -->


                <div class="menu-trigger" id="js-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                 <nav class="header__nav" id="js-nav">

                        <ul class="flex">
                            <li><a href="<?php echo home_url('/');?>">サービス</a></li>
                            <li><a href="<?php echo home_url('/');?>">納品までの流れ</a></li>
                            <li><a href="<?php echo home_url('/');?>">料金</a></li>
                            <li><a href="<?php echo home_url('/');?>">ヘルプ</a></li>
                        </ul>

                     </nav><!-- ./header__nav -->
        </div><!-- ./header__inner -->
</header>