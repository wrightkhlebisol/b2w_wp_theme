<?php $testimonial_title = get_field('testimonial_title'); ?>

<!-- TESTIMONIALS
	================================================== -->
<section id="kudos">
    <div class="container">
        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $testimonial_title; ?></h2>
                <?php $loop = new WP_Query(['post_type' => 'testimonials', 'orderby' => '', 'order' => 'ASC']); ?>
                <?php while ($loop->have_posts()) : $loop->the_post() ?>
                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <?php if (has_post_thumbnail()) : the_post_thumbnail();
                            endif; ?>

                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <blockquote>
                                <?php the_content() ?>
                                <cite><?php if (has_excerpt()) : the_excerpt();
                                        endif; ?></cite>
                            </blockquote>
                        </div><!-- end col -->
                    </div><!-- row -->
                <?php endwhile; ?>
            </div><!-- end col -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- kudos -->