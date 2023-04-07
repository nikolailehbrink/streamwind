<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * This function adds support for a variety of features in the StreamWind theme,
 * such as title tags, responsive embeds, navigation menus, HTML5 markup, custom logos,
 * post thumbnails, custom line heights, and editor styles. It hooks into the
 * 'after_setup_theme' action to initialize these features when the theme is activated.
 *
 * @since   1.0.0
 * @return  void
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

	add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex‐width' => true,
	));
	add_theme_support('post-thumbnails');

	add_theme_support('custom-line-height');
	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'streamwind_setup');

/**
 * Enqueues StreamWind theme styles and scripts.
 *
 * This function enqueues the StreamWind theme's main CSS and JS files, using their respective
 * file paths and the theme's version number as parameters. It hooks into the 'wp_enqueue_scripts'
 * action to ensure that these files are loaded on the front-end.
 *
 * @since   1.0.0
 * @return  void
 */
function streamwind_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('streamwind', streamwind_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_script('streamwind', streamwind_asset('js/app.js'), array(), $theme->get('Version'));
}
add_action('wp_enqueue_scripts', 'streamwind_enqueue_scripts');

/**
 * Retrieves the URL of a StreamWind theme asset.
 *
 * This function returns the URL of a given asset file (CSS, JS, images, etc.) within the StreamWind theme.
 * In a production environment, the URL is returned without any modifications. In other environments,
 * a query parameter 'time' is added with the current timestamp to force cache invalidation during development.
 *
 * @since   1.0.0
 * @param   string $path The relative path of the asset file within the StreamWind theme.
 * @return  string The URL of the asset file.
 */
function streamwind_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Modifies the CSS classes of the custom logo.
 *
 * This function replaces the 'custom-logo' and 'custom-logo-link' CSS classes with the 'h-7 object-contain w-auto'
 * classes to adjust the logo size and display properties. It is hooked into the 'get_custom_logo' filter.
 *
 * @since   1.0.0
 * @param   string $new_class The original CSS classes of the custom logo.
 * @return  string The modified CSS classes of the custom logo.
 */
function streamwind_change_logo_class($new_class)
{

	$new_class = str_replace('custom-logo', 'h-7 object-contain w-auto dark:hidden', $new_class);
	$new_class = str_replace('custom-logo-link', 'h-7 object-contain w-auto dark:hidden', $new_class);

	return $new_class;
}
add_filter('get_custom_logo', 'streamwind_change_logo_class');

/**
 * Adds custom CSS classes to menu list items (li elements) in a WordPress navigation menu.
 *
 * This function allows you to add custom CSS classes to menu list items based on the depth
 * of the menu item in the navigation structure. It hooks into the 'nav_menu_css_class' filter
 * to modify the classes for each menu item.
 *
 * @since   1.0.0
 * @param   array    $classes An array of CSS classes applied to the menu list item.
 * @param   WP_Post  $item    The current menu item.
 * @param   stdClass $args    An object containing wp_nav_menu() arguments.
 * @param   int      $depth   Depth of the menu item.
 * @return  array    The modified array of CSS classes applied to the menu list item.
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
 * Adds custom CSS classes to submenu elements (ul elements) in a WordPress navigation menu.
 *
 * This function allows you to add custom CSS classes to submenu elements based on the depth
 * of the submenu in the navigation structure. It hooks into the 'nav_menu_submenu_css_class' filter
 * to modify the classes for each submenu.
 *
 * @since   1.0.0
 * @param   array    $classes An array of CSS classes applied to the submenu element.
 * @param   stdClass $args    An object containing wp_nav_menu() arguments.
 * @param   int      $depth   Depth of the submenu in the menu hierarchy.
 * @return  array    The modified array of CSS classes applied to the submenu element.
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

function streamwind_customize_register($wp_customize)
{
	// Add the dark mode logo setting
	$wp_customize->add_setting('dark_mode_logo', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint',
	));

	$custom_logo_priority = $wp_customize->get_control('custom_logo')->priority;

	// Add the dark mode logo control
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'dark_mode_logo', array(
		'label' => __('Dark Mode Logo', 'streamwind'),
		'section' => 'title_tagline',
		'settings' => 'dark_mode_logo',
		'flex_height' => true,
		'flex_width' => true,
		'button_labels' => array(
			'select' => __('Logo auswählen', 'streamwind'),
			'change' => __('Logo wechseln', 'streamwind'),
			'remove' => __('Logo entfernen', 'streamwind'),
			'default' => __('Standardlogo verwenden', 'streamwind'),
			'placeholder' => __('Kein Logo ausgewählt', 'streamwind'),
			'frame_title' => __('Logo auswählen', 'streamwind'),
			'frame_button' => __('Logo verwenden', 'streamwind'),
		),
		'priority' => $custom_logo_priority + 1,

	)));
}

add_action('customize_register', 'streamwind_customize_register');
