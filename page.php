<?php
/**
 * The template for displaying all pages, without the ability to make comments.
 * This is the template that displays all pages by default.
 */
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header">
            <?php if(has_post_thumbnail()) { ?>
                <figure>
                <?php the_post_thumbnail( 'large' ); ?>
                </figure>
            <?php } ?>                
        	<h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'tp' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
    </article><!-- #post-## -->
<?php endwhile; ?>
<?php get_footer(); ?>