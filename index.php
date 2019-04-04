<?php
/**
 * The main template file, being able to display a slider, a midbar with widgets and a given number of posts.
 */
get_header(); ?>
 <?php get_template_part('loop', 'portfolio'); ?>
<?php get_footer(); ?>