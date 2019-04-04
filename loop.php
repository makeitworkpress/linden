<?php /**
 * This is the very basic loop that is used for rendering the posts with thumbnails.  
 * Pagination is also present. The loop is not used on the homepage, but only in category and tag pages.
 */
 ?>
<!-- Start the Loop. -->
<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<article id="post-0" class="post error404 not-found postitem">
		<header class="post-header"> 
			<h1 class="entry-title"><?php _e( 'Not Found', 'tp' ); ?></h1>
		</header>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'tp' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->
<?php endif; ?>
<div id="postbox">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('postitem'); ?>>
        <header class="post-header"> 
			<?php if(has_post_thumbnail()) { ?>
                <figure class="post-image">
                    <a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                    	<?php the_post_thumbnail(); ?>
                    </a>
                </figure>
            <?php } ?>            
            <h2 class="entry-title">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div class="entry-meta">
                <?php tp_posted_on(); ?>	
            </div>
    	</header>
        <div class="entry-content">
			<?php global $more; $more = 0;  the_content(''); ?>
        </div>
        <footer class="entry-utility">
            <div class="continue-reading"> 
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Continue Reading <?php the_title_attribute(); ?>">
                	<?php _e('Read more&hellip;', 'tp'); ?>
                </a>  	
            </div>
      	</footer>
    </article>
 	<?php endwhile; else: ?>
 		<p><?php _e('Sorry, but no posts matched your criteria.', 'tp'); ?></p>
	<?php endif; ?>
</div>
