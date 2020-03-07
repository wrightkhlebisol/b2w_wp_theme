<?php

/**
 * Template Name: Home Page
 */

get_header();

get_template_part('template-parts/home/content', 'hero');
get_template_part('template-parts/home/content', 'cta');
get_template_part('template-parts/home/content', 'boost');
get_template_part('template-parts/home/content', 'benefits');
get_template_part('template-parts/home/content', 'features');
get_template_part('template-parts/home/content', 'projects');
get_template_part('template-parts/home/content', 'video');
get_template_part('template-parts/home/content', 'instructor');
get_template_part('template-parts/home/content', 'testimonials');


get_footer();
