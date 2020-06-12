<?php

/* Template Name: Homepage */

get_header();

?>

<?php 
    get_template_part('partials/hero');
    get_template_part('partials/services');
    get_template_part('partials/gallery');
    get_template_part('partials/location');
    get_template_part('partials/news');
?>

<!-- Start Point -->

<?php get_footer(); ?>