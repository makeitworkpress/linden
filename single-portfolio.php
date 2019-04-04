<?php
/**
 * The Template for displaying all single portfolio posts.
 */
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article id="portfolio-<?php the_ID(); ?>" <?php post_class(); ?> >
    	<div class="portfolio-content">
            <header class="post-header">
                <?php get_template_part('slider') ?>
                <div class="text-column">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php if (get_post_meta( $post->ID, "portfolio_subtitel_value", true )) { ?>
                        <h6><?php echo get_post_meta( $post->ID, "portfolio_subtitel_value", true ); ?></h6>
                    <?php } ?>   
                </div>             
            </header>
            <div class="entry-content">
            	<div class="text-column">
                	<?php the_content(); ?>
                </div>                      
            </div><!-- .entry-content -->	
            <footer class="entry-utility"> 
            	<div class="text-column">  
                    <nav id="nav-below" class="navigation">
                        <div class="nav-previous">
                            <?php previous_post_link( '%link', _x( '<span>&laquo;</span> Vorig Project', '', 'tp' )   ); ?>
                        </div>
                        <div class="nav-next">
                            <?php next_post_link( '%link', _x( 'Volgend Project <span>&raquo;</span>', '', 'tp' )  ); ?>
                        </div>
                    </nav><!-- #nav-below -->	
                </div>                        		
           	</footer><!-- .entry-utility --> 
        </div><!-- .portfolio-content -->             		
    </article><!-- #post-->                                     	
<?php endwhile; ?>
<?php get_footer(); ?>
