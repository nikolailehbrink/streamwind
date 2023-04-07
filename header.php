<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('text-gray-950 bg-white antialiased flex flex-col min-h-screen dark:bg-slate-900 dark:text-white'); ?>>

	<header class="sticky top-0 mb-4 bg-white border-b-2 dark:bg-slate-950 border-slate-50 dark:border-slate-800">

		<div class="container mx-auto">
			<div class="py-6 lg:flex lg:justify-between lg:items-center">
				<div class="flex items-center justify-between">
					<div>
						<?php
						$custom_logo_id = get_theme_mod('custom_logo');
						$dark_mode_logo_id = get_theme_mod('dark_mode_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						$dark_mode_logo = wp_get_attachment_image_src($dark_mode_logo_id, 'full');
						?>

						<?php if (has_custom_logo()) { ?>
							<?php the_custom_logo(); ?>
							<?php if ($dark_mode_logo_id) { ?>
								<img class="hidden object-contain w-auto dark-mode-logo h-7 dark:block" src="<?php echo esc_url($dark_mode_logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>">
							<?php } ?>

						<?php } else { ?>
							<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-extrabold uppercase">
								<?php echo get_bloginfo('name'); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo('description'); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
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

				<div class="flex items-center gap-6">
					<?php
					wp_nav_menu(
						array(
							'container'       => 'nav',
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>

					<button id="darkModeToggle" class="p-1 rounded-full bg-slate-100 dark:bg-slate-600 dark:text-white">
						<svg xmlns="http://www.w3.org/2000/svg" class="dark:hidden h-7 w-7" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
						<svg xmlns="http://www.w3.org/2000/svg" class="hidden dark:block h-7 w-7" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
							<path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2"></path>
							<path d="M19 11h2m-1 -1v2"></path>
						</svg>
					</button>
				</div>
			</div>
		</div>
	</header>

	<main class="flex flex-col flex-grow site-content">

		<?php if (is_front_page()) { ?>
			<!-- Start introduction -->
			<div class="container flex flex-col items-center justify-center flex-grow h-full mx-auto ">
				<h1 class="mb-8 text-6xl font-bold">Introducing <span class="text-[#7B2CBF]">"StreamWind"</span></h1>
				<div class="p-8 rounded-md bg-gradient-to-r from-[#f9efff] to-[#f0dcff] text-black flex flex-col items-center">
					<p class="text-xl">The ultimate boilerplate WordPress theme that effortlessly marries <a href="http:s//tailwindcss.com" target="_blank" rel="noopener noreferrer">Tailwind CSS</a> with WordPress, providing a solid foundation for those who aspire to create their own custom themes. Designed with developers and designers in mind, Streamwind focuses on clean HTML markup and easy-to-understand functions, allowing you to kickstart your theme development journey with confidence. Streamwind comes with built-in bundling capabilities, a pre-configured menu, and a wealth of practical features to streamline your creative process. Unleash your potential and build captivating, tailor-made themes with the unmatched versatility and convenience of Streamwind - your go-to boilerplate for blazing new trails in WordPress theme design!</p>
				</div>
				<a class="mt-4 inline-flex uppercase font-bold items-center gap-3 px-6 py-3 border-2 border-[#e5c7ff] rounded-md bg-gradient-to-r from-[#f9efff] to-[#f0dcff] text-[#7B2CBF]" href="https://" target="_blank" rel="noopener noreferrer">Discover theme <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M3 21v-4a4 4 0 1 1 4 4h-4"></path>
						<path d="M21 3a16 16 0 0 0 -12.8 10.2"></path>
						<path d="M21 3a16 16 0 0 1 -10.2 12.8"></path>
						<path d="M10.6 9a9 9 0 0 1 4.4 4.4"></path>
					</svg></a>


			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action('streamwind_content_start'); ?>