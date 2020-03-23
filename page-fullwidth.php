<?php
    /**
     * Template Name: Full-width Template
    */
    get_header()
?>

<?php if(has_post_thumbnail($post)): ?>
    <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title() ?></h1>
    </section>
<?php else: ?>
    <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title() ?></h1>
    </section>
<?php endif; ?>

<!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">Have any questions about the course? Feel free to get in touch with me! I&rsquo;ll do my best to get back to you ASAP.</p>
			    	
			    	<?php while(have_posts()): the_post(); ?>
                    <?php the_content(); endwhile; ?>

			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer() ?>