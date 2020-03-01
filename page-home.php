<?php

/**
 * Template Name: Home Page
 */

get_header();
?>

<?php
get_template_part('template-parts/content', 'hero');
get_template_part('template-parts/content', 'cta');
get_template_part('template-parts/content', 'boost');
get_template_part('template-parts/content', 'benefits');
get_template_part('template-parts/content', 'features');
get_template_part('template-parts/content', 'projects');
get_template_part('template-parts/content', 'video');
get_template_part('template-parts/content', 'instructor');
get_template_part('template-parts/content', 'testimonials');

?>

<?php
get_footer();
