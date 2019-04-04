<!-- Start the Loop. -->

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<article id="portfolio-0" class="portfolio error404 not-found">
		<header class="post-header"> 
			<h1 class="entry-title"><?php _e( 'Not Found', 'tp' ); ?></h1>
		</header>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive.', 'tp' ); ?></p>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->
<?php endif; ?>
<?php 
$args = array( 'post_type' => 'portfolio');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="single-entry">
        <header class="portfolio-header">
            <a class="caption" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">  
                <h2>
                    <?php the_title(); ?>
                </h2>
                <?php if (get_post_meta( $post->ID, "portfolio_subtitel_value", true )) { ?>
                    <h6><?php echo get_post_meta( $post->ID, "portfolio_subtitel_value", true ); ?></h6>
                <?php } ?>
            </a>
            <?php if(has_post_thumbnail()) { ?>
                <figure class="post-image">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    	<?php the_post_thumbnail( 'large' ); ?>
                    </a>
                </figure>
        	<?php } ?>
        </header>
        <div class="ajax-load">
        	<!-- Loads ajax content -->
        </div>
    </article>
<?php endwhile;?>
