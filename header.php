<!DOCTYPE html>
<html class="scroll-smooth" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('text-gray-950 bg-white antialiased flex flex-col min-h-screen dark:bg-primary-950 dark:text-white'); ?>>

	<header class="sticky top-0 z-10 mb-4 bg-white border-b-2 dark:bg-primary-950/50 backdrop-filter backdrop-blur-md border-primary-50 dark:border-primary-800">

		<div class="container mx-auto">
			<div class="py-4 lg:flex lg:justify-between lg:items-center">
				<div class="flex items-center justify-between">
					<div>

						<?php if (has_custom_logo()) { ?>
							<?php
							/**
							 * Displays the site logo or site title and description.
							 *
							 * - If a custom logo is set, it will display the custom logo in both light and dark modes.
							 * - If a separate dark mode logo is set, it will be displayed in dark mode only.
							 * - If no custom logo is set, the site title and description will be displayed.
							 *
							 * @uses has_custom_logo() Checks if a custom logo is set.
							 * @uses get_theme_mod() Retrieves the value of the specified theme modification.
							 * @uses wp_get_attachment_image_src() Gets the URL and dimensions of an attachment image.
							 * @uses esc_url() Escapes a URL for output.
							 * @uses home_url() Retrieves the URL for the home page.
							 * @uses get_bloginfo() Retrieves information about the current site.
							 */
							$custom_logo_id = get_theme_mod('custom_logo');
							$custom_logo = wp_get_attachment_image_src($custom_logo_id, 'full');
							$dark_mode_logo_id = get_theme_mod('dark_mode_logo');
							$dark_mode_logo = wp_get_attachment_image_src($dark_mode_logo_id, 'full');
							?>
							<a href="<?php echo esc_url(home_url()); ?>">
								<img class="object-contain w-auto h-7 <?php echo ($dark_mode_logo_id) ? 'dark:hidden' : ''; ?>" src="<?php echo esc_url($custom_logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>">
								<?php if ($dark_mode_logo_id) { ?>
									<img class="hidden object-contain w-auto dark-mode-logo h-7 dark:block" src="<?php echo esc_url($dark_mode_logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>">
								<?php } ?>
							</a>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-extrabold uppercase">
								<?php echo get_bloginfo('name'); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo('description'); ?>
							</p>

						<?php } ?>
					</div>

					<div class="flex items-center gap-4 lg:hidden">
						<button class="p-2 border-2 rounded-full dark-mode-toggle bg-primary-100 dark:bg-primary-600 dark:text-white border-primary-200">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 dark:hidden" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M14.468 10a4 4 0 1 0 -5.466 5.46"></path>
								<path d="M2 12h1"></path>
								<path d="M11 3v1"></path>
								<path d="M11 20v1"></path>
								<path d="M4.6 5.6l.7 .7"></path>
								<path d="M17.4 5.6l-.7 .7"></path>
								<path d="M5.3 17.7l-.7 .7"></path>
								<path d="M15 13h5a2 2 0 1 0 0 -4"></path>
								<path d="M12 16h5.714l.253 0a2 2 0 0 1 2.033 2a2 2 0 0 1 -2 2h-.286"></path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="hidden h-6 dark:block" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
								<path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path>
								<path d="M19 11h2m-1 -1v2"></path>
							</svg>
						</button>
						<div class="max-sm:hidden">


							<?php get_search_form() ?>
						</div>
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<div class="flex items-center lg:gap-4">
					<?php
					wp_nav_menu(
						array(
							'container'       => 'nav',
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden max-lg:py-4 max-lg:pr-4 lg:block',
							'menu_class'      => 'flex max-lg:flex-col gap-2 lg:gap-4',
							'theme_location'  => 'primary',
							// 'li_class'        => 'flex',
							'fallback_cb'     => false,
						)
					);
					?>

					<button class="hidden p-2 border-2 rounded-full lg:block dark-mode-toggle bg-primary-100 dark:bg-primary-600 dark:text-white border-primary-200">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 dark:hidden" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M14.468 10a4 4 0 1 0 -5.466 5.46"></path>
							<path d="M2 12h1"></path>
							<path d="M11 3v1"></path>
							<path d="M11 20v1"></path>
							<path d="M4.6 5.6l.7 .7"></path>
							<path d="M17.4 5.6l-.7 .7"></path>
							<path d="M5.3 17.7l-.7 .7"></path>
							<path d="M15 13h5a2 2 0 1 0 0 -4"></path>
							<path d="M12 16h5.714l.253 0a2 2 0 0 1 2.033 2a2 2 0 0 1 -2 2h-.286"></path>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" class="hidden h-6 dark:block" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
							<path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path>
							<path d="M19 11h2m-1 -1v2"></path>
						</svg>
					</button>
					<div class="hidden lg:block">

						<?php get_search_form() ?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="flex flex-col flex-grow site-content">
		<?php if (is_front_page()) { ?>
			<!-- Start introduction -->
			<div class="container relative flex flex-col items-center justify-center flex-grow h-full min-h-screen gap-8 mx-auto">
				<div class="relative">
					<div class="absolute rounded-full opacity-30 -z-10 -inset-40 bg-gradient-to-r from-primary-600 via-primary-500 to-primary-600 blur-3xl"></div>
					<h1 class="relative text-6xl font-black uppercase md: lg:text-8xl">Introducing <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary-500 to-primary-400">StreamWind</span></h1>

				</div>
				<div>
					<p class="text-3xl italic font-light text-center">The ultimate boilerplate WordPress theme that <br>that seamlessly blends TailwindCSS with WordPress.</p>
				</div>
				<div class="flex flex-col items-center gap-1 mt-4 text-primary-100">
					<a target="_blank" class="flex items-center self-center gap-2 px-6 py-3 tracking-wider border-2 border-purple-800 rounded-lg bg-primary-900" href="https://nikolailehbrink.gitbook.io/streamwind/">Getting started
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checklist" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
							<path d="M14 19l2 2l4 -4"></path>
							<path d="M9 8h4"></path>
							<path d="M9 12h2"></path>
						</svg>
					</a>
					<span>or</span>
					<span class="flex items-center gap-2 px-4 py-3 border-2 border-purple-800 rounded-lg bg-primary-900"><svg class="inline-flex" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M5 7l5 5l-5 5"></path>
							<path d="M13 17l6 0"></path>
						</svg>
						<code>git clone https://github.com/nikolailehbrink/streamwind.git</code>
					</span>
				</div>



			</div>
			<div class="container grid grid-cols-3 gap-4 mx-auto">
				<div class="flex flex-col gap-3 p-6 rounded-lg bg-primary-800 hover:bg-primary-500">
					<div class="inline-flex self-start p-2 mb-2 rounded-lg bg-primary-900">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
							<path d="M13 12h5"></path>
							<path d="M13 15h4"></path>
							<path d="M13 18h1"></path>
							<path d="M13 9h4"></path>
							<path d="M13 6h1"></path>
						</svg>
					</div>
					<p class="text-lg font-bold">Dark Mode, Bright Ideas</p>
					<p class="text-primary-100"> With the added feature to customize your own Dark Mode Logo and overall design, not only enhances the visual comfort for your users but also provides a unique touch to your WordPress site.</p>
				</div>
				<div class="flex flex-col gap-3 p-6 rounded-lg bg-primary-800 hover:bg-primary-500">
					<div class="inline-flex self-start p-2 mb-2 rounded-lg bg-primary-900">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
							<path d="M19 6h1a2 2 0 0 1 2 2a5 5 0 0 1 -5 5l-5 0v2"></path>
							<path d="M10 15m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
						</svg>
					</div>
					<p class="text-lg font-bold">Master the Color Spectrum</p>
					<p class="text-primary-100"> Unleash your design potential with StreamWind's Shade Generator. Effortlessly create a consistent color palette with custom shade generation for your base colors, enhancing your WordPress site's visual appeal.</p>
				</div>
				<div class="flex flex-col gap-3 p-6 rounded-lg bg-primary-800 hover:bg-primary-500">
					<div class="inline-flex self-start p-2 mb-2 rounded-lg bg-primary-900">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M13 9a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1v-10z"></path>
							<path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9"></path>
							<path d="M16 9h2"></path>
						</svg>
					</div>
					<p class="text-lg font-bold">Seamless Deployments Made Effortless</p>
					<p class="text-primary-100"> Automate and simplify your theme deployment with StreamWind’s efficient deploy actions: FTP, SFTP, and SSH. Integrate into your GitHub workflow, secure your credentials, and customize deployments according to your needs.</p>
				</div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action('streamwind_content_start'); ?>