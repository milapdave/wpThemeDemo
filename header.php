<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package snw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'snw' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a class="navbar-brand"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<h1 class="site-title"><a class="navbar-brand"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					endif;
				?>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <?php
				   wp_nav_menu([
				     'menu'            => 'primary-menu',
				     'theme_location'  => 'primary',
				     'container'       => 'div',
				     'container_id'    => 'bs4navbar',
				     'container_class' => 'collapse navbar-collapse',
				     'menu_id'         => false,
				     'menu_class'      => 'navbar-nav mr-auto',
				     'depth'           => 2,
				     'fallback_cb'     => 'bs4navwalker::fallback',
				     'walker'          => new bs4navwalker()
				   ]);
				   ?>
			    <?php //get_template_part('inc/navbar-search'); ?>
			    
			  </div>
			</div>
		</nav>
	</header><!-- #masthead -->
	<?php if ( get_header_image() ) : ?>
		<div class="jumbotron">
				<div class="header-image">
					<div class="container">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						</a>
					</div>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</div>
	<div id="content" class="site-content container">
		<div class="row">
