<?php

/**
 * Template Name: Resources page
 */

get_header();
$thumbnail_url = get_the_post_thumbnail_url();
?>

<!-- FEATURE IMAGE ================================ -->
<?php if (has_post_thumbnail()) : ?>
    <section class="feature-image" data-type="background" data-speed="2" style="background-image: url('<?php echo $thumbnail_url ?>'); background-repeat: no-repeat; background-size: cover;">
        <h1><?php the_title(); ?></h1>
    </section>
<?php else : ?>
    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1><?php the_title(); ?></h1>
    </section>
<?php endif; ?>


<!-- MAIN CONTENT =========================== -->
<div class="container">
    <div class="row" id="primary">

        <div id="content" class="col-sm-12">

            <section class="main-content">
                <?php while (have_posts()) :
                    the_post();
                    the_content();
                endwhile; ?>

                <hr>

                <div class="resource-row clearfix">
                    <?php $loop = new WP_Query(['post_type' => 'free_resources', 'orderby' => 'ID', 'order' => 'ASC']) ?>
                    <?php while ($loop->have_posts()) : $loop->the_post() ?>
                        <div class="resource">
                            <?php if (has_post_thumbnail()) : the_post_thumbnail() ?>

                            <?php endif; ?>
                            <h3><a href="<?php echo get_field('resource_button_link'); ?>"><?php the_title(); ?></a></h3>
                            <?php the_content() ?>
                            <a href="<?php echo get_field('resource_button_link'); ?>" class="btn btn-success"><?php echo get_field('resource_button_text'); ?></a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>

        </div><!-- content -->

    </div><!-- primary -->
</div><!-- container -->

<?php
get_footer();
