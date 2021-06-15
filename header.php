<?php

/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="container header__wrapper">
			<div class="header__body">
				<div class="header__burger">
					<span></span>
				</div>

				<nav class="header__mobmenu">
					<?php
					wp_nav_menu(array(
						'container'       => 'ul',
						'theme_location'  => 'menu-1',
						'menu_id'         => '2',
						'menu_class'	  => 'header__list',
						'depth'           => 1,
					));
					?>
				</nav>

			</div>

			<div class="header__logo">
				<?php if (has_custom_logo()) :

					$custom_logo_id = get_theme_mod('custom_logo');
					$logo_img_array = wp_get_attachment_image_src($custom_logo_id, 'full');
					$logo_img_src = esc_url($logo_img_array[0]); ?>

					<a href="<?php echo esc_url(get_home_url()); ?>" rel="home" title="<?php echo esc_attr(get_bloginfo('title')); ?>"><img class="site-logo" src="<?php echo esc_url($logo_img_src); ?>" alt="<?php echo esc_attr(get_bloginfo('title')); ?>"></a>
				<?php else : ?>

					<a href="<?php echo esc_url(get_home_url()); ?>" class="h4 site-title"><?php echo esc_html(get_bloginfo('name')); ?></a>
					<p class="site-description"><?php echo esc_html(get_bloginfo('description')); ?></p>

				<?php endif; ?>
			</div>
			<nav class="header__menu">
				<?php
				wp_nav_menu(array(
					'container'       => 'ul',
					'theme_location'  => 'menu-1',
					'menu_id'         => '2',
					'menu_class'	  => 'nav',
					'depth'           => 1,
				));
				?>
			</nav>
			<a href="https://www.pochta.ru/tracking" target="_blank">
				<div class="header__button">Отслеживание посылки</div>
			</a>
		</div>
	</header>