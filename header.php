<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wow_Shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="site-branding">
						<?php
						if(has_custom_logo()) :
							the_custom_logo();
						else : ?>
							<h4 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h4>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-lg-8 text-center main-menu">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-lg-2 text-right">
					<div class="header-right-content">
						<a href=""><i class="fa fa-user"></i></a>
						<a href=""><i class="fa fa-search"></i></a>
						<a href=""><i class="fa fa-heart-o"></i></a>
					</div>
					<?php if( class_exists( 'WooCommerce' ) ) : ?>
					<div class="header-shopping-cart">
						<?php wowshop_woocommerce_cart_link(); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col">
					
	