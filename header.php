<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ko-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#102942">
	<meta name="robots" content="noindex, nofollow">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site d-flex flex-column min-vh-100">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ko-portfolio' ); ?></a>

	<header id="masthead" class="site-header header">
		<div class="header__container container">
			<div class="site-branding">
				<?php
				if ( is_front_page() || is_home() ) :
					?>
				<h1 class="site-title header__logo h3 m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
				<p class="site-title header__logo h3 m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$ko_portfolio_description = get_bloginfo( 'description', 'display' );
				if ( $ko_portfolio_description || is_customize_preview() ) :
					?>
				<p class="site-description"><?php echo $ko_portfolio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav class="gnav">
				<ul class="gnav__list">
					<li class="gnav__item">
						<?php
						if ( is_front_page() || is_home() ) :
							?>
						<a class="gnav__link" href="#works">Works
							<span class="gnav__desc">制作実績</span>
						</a>
						<?php else : ?>
						<a class="gnav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#works">Works
							<span class="gnav__desc">制作実績</span>
						</a>
						<?php endif; ?>
					</li>
					<li class="gnav__item">
						<?php
						if ( is_front_page() || is_home() ) :
							?>
						<a class="gnav__link" href="#about">About
							<span class="gnav__desc">私について</span>
						</a>
						<?php else : ?>
						<a class="gnav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About
							<span class="gnav__desc">私について</span>
						</a>
						<?php endif; ?>
					</li>
					<li class="gnav__item">
						<?php
						if ( is_front_page() || is_home() ) :
							?>
						<a class="gnav__link" href="#contact">Contact
							<span class="gnav__desc">お問合せ</span>
						</a>
						<?php else : ?>
						<a class="gnav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact
							<span class="gnav__desc">お問合せ</span>
						</a>
						<?php endif; ?>
					</li>
					<li class="gnav__item">
						<a class="gnav__link btn btn-accent" href="https://github.com/kyodk/" target="_blank" rel="noopener noreferrer">GitHub</a>
					</li>
				</ul>
			</nav><!-- .gnav -->
			<div class="hamburger" id="hamburger">
				<span class="hamburger__icon"></span>
			</div><!-- .hamburger -->
		</div><!-- .header__container -->
	</header><!-- #masthead -->
