<?php
/**
 * Template Name: Portfolio Archive 
 * The template for displaying Portfolio Archive pages.
 */
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="post-header">
        	<div class="text-column">
				<h1><?php the_title(); ?></h1>
            </div>
		</header>
		<div class="entry-content">
        	<div class="text-column">
				<?php the_content(); ?>
            </div>
		</div><!-- .entry-content -->
	</article><!-- #post -->
<?php endwhile; ?>
<?php get_template_part( 'loop', 'portfolio' ); ?>
<?php get_footer(); ?>