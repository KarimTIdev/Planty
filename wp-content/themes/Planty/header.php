<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    <header>
        <div class="logo">
            <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <?php wp_nav_menu([
                'theme_location'       => 'main-menu',
                'container_class'      => 'menu-planty',
                'container_id'         => 'planty-menu',
                'menu_class'           => 'menu-ul',
                'menu_id'              => 'menu3',
            ]); ?>
        </nav>
    </header>
<div id="container">
<main id="content" role="main">