<?php

add_filter( 'wpcf7_autop_or_not', '__return_false');
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() 
{
	wp_enqueue_style( 'parent-style', get_template_directory_uri() , '/styles.css');
	wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Hook Filter pour l'affichage du lien "Admin"

add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2 );
function add_admin_link( $items, $args ) 
	{
		if ( is_user_logged_in() && $args->theme_location == 'main-menu' ) 
		{
			$admin_link = '<li><a href="' . get_admin_url() . '">Admin</a></li>';
			$menu_items = explode('</li>', $items);
			array_splice($menu_items, 1, 0, $admin_link);
			$items = implode('', $menu_items);
		}
			return $items;
	}