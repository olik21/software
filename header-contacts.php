<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Template Basic Images Start -->
    <meta property="og:image" content="<? bloginfo('template_url' ); ?>/img/image.jpg">
    <link rel="icon" href="<? bloginfo('template_url' ); ?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<? bloginfo('template_url' ); ?>/img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->
    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
	<?php wp_head() ?>
	
</head>
<body>
    <header class="header header--contacts">
        <div class="container">
            <div class="header-line">
                <a href="/" class="logo">
                    <img src="<? bloginfo('template_url' ); ?>/img/aa-logo-white.svg" alt="">
                </a>
                <div class="hamburger hamburger--spin">
                  <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                  </div>
                </div>
                <?php  wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' , 'container_class' => 'main-nav', 'menu_class'   => 'main-list' )); ?>

        
            </div>
        </div>
    </header>
