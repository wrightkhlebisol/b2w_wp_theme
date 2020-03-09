<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BootstrapToWordpress
 */

get_header();
?>

<div class="container">
	<div class="row" id="primary">

		<!-- MAIN CONTENT ================================= -->
		<main id="content" class="col-sm-8">
			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', get_post_type());

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main>
		<!-- SIDEBAR ====================================== -->
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>


<?php
get_footer();
