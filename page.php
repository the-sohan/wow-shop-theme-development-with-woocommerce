<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wow_Shop
 */

// if (get_post_meta($post->ID, 'wowshop_page_options', true)) {
// 	$page_meta = get_post_meta($post->ID, 'wowshop_page_options', true);
// } else {
// 	$page_meta = array();
// }


// if(array_key_exists('enable_title')) {
// 	$enable_title = $page_meta['enable_title'];
// } else {	
// 	$enable_title = true;
// }


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
