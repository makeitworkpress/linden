<?php
/**
 * The Template for displaying all single posts.
 */
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
        <header class="post-header">
            <?php if(has_post_thumbnail()) { ?>
                <figure class="post-image">
                    <a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" rel="bookmark" title="Continue Reading <?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                </figure>
            <?php } ?>              
            <div class="text-column">
                <h1 class="entry-title"><?php the_title(); ?></h1>  
                <div class="entry-meta">
                    <?php tp_posted_in(); ?>
                </div> 
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
                        <?php previous_post_link( '%link', _x( '<span>&laquo;</span> Vorig Bericht', '', 'tp' )   ); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_post_link( '%link', _x( 'Volgend Bericht<span>&raquo;</span>', '', 'tp' )  ); ?>
                    </div>
                </nav><!-- #nav-below -->
            </div>	                        		
        </footer><!-- .entry-utility -->              		
    </article><!-- #post--> 
    <?php // TO DO: ADD COMMENTS ?>                                    	
<?php endwhile; ?>
<?php get_footer(); ?>