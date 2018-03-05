<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php get_template_directory_uri() ?>/dist/style.css" />
</head>

<body <?php body_class(); ?>>
	<header>
        <div class="header-wrapper wrapper">
            <div class="logo-wrapper">
                <a href="<?= get_home_url(); ?>">
                    <?php
                        if(get_field('logo', 'option')){
                            echo wp_get_attachment_image( get_field('logo', 'option'), 'logo' );
                        }
                        else{
                    ?>
                        <h1>Eco-câble</h1>
                    <?php
                        }
                    ?>
                </a>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <div class="infos">
                <p class="tel"><?= the_field('num_telephone', 'option'); ?></p>
                <p class="mail"><?= the_field('email', 'option'); ?></p>
            </div>
        </div>
	</header>
