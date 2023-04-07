<?php

/**
 * Theme setup.
 */
function streamwind_setup()
{
	add_theme_support('title-tag');
	add_theme_support('responsive-embeds');


	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'streamwind'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'streamwind_setup');

/**
 * Enqueue theme assets.
 */
function streamwind_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('streamwind', streamwind_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_script('streamwind', streamwind_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'streamwind_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function streamwind_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}



function streamwind_change_logo_class($new_class)
{

	$new_class = str_replace('custom-logo', 'h-7 object-contain w-auto', $new_class);
	$new_class = str_replace('custom-logo-link', 'h-7 object-contain w-auto', $new_class);

	return $new_class;
}
add_filter('get_custom_logo', 'streamwind_change_logo_class');

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function streamwind_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'streamwind_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function streamwind_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'streamwind_nav_menu_add_submenu_class', 10, 3);
