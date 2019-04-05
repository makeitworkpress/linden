<?php
/**
 * Prepares the variables that are used in our comments component template
 */
namespace Views\Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Posts extends Component {  

    /**
     * The basic attributes for our class
     * 
     * @return Void
     */
    public function init() {
        
        // Our attributes
        $this->defaults     = ['customize' => ['container_width' => 0, 'post_meta_disable' => false], 'query' => ''];
        $this->properties   = ['posts' => [], 'pagination' => false];

    }

    /**
     * Automatically returns the right title based on the template we're looking at
     * 
     * @return Void
     */
    public function populate() {

        if( $this->atts['query'] ) {
            $wp_query = new WP_Query($this->atts['query']);
        } else {
            global $wp_query;
        }

        // There is nothing queried
        if( ! isset($wp_query) || ! isset($wp_query->query->posts) ) {
            return;
        }

        $size = $this->atts['customize']['container_width'] > 490 ? 'linden' : 'linden-s';

        foreach( $wp_query->query->posts as $post ) {
            $this->properties['posts'][$post->ID] = [ 
                'excerpt'       => $this->excerpt($post),
                'image'         => has_post_thumbnail($post) ? get_the_post_thumbnail( $post, $size, ['itemprop' => 'image'] ) : false, 
                'link'          => esc_url( get_permalink($post) ),   
                'meta'          => $this->atts['customize']['post_meta_disable'] ? false : new Meta(),
                'title'         => esc_html( get_the_title($post) ),                 
            ];   
        }

        // Set-up the pagination
        if( $wp_query->query->max_num_pages > 1 ) {
            $this->properties['pagination'] = paginate_links( [
                'base'          => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
                'current'       => get_query_var('paged') ? get_query_var('paged') : 1,
                'next_text'     => '&raquo;', 
                'prev_text'     => '&laquo;',
                'total'         => $wp_query->query->max_num_pages                      
            ] ); 
        }         

    }

    /**
     * Generates a custom excerpt for our post. Based upon wp_trim_excerpt;
     * 
     * @param WP_Post $post The WP_Post object
     */
    private function excerpt( $post = null ) {

        $raw_excerpt    = '';
        $text           = '';

        // Should be an instance of WP_Post
        if( isset($post->post_content) ) {
            $text = strip_shortcodes( $post->post_content );
            $text = apply_filters( 'the_content', $text );
            $text = str_replace(']]>', ']]&gt;', $text);

            $excerpt_length = apply_filters( 'excerpt_length', 55 );
            $excerpt_more   = apply_filters( 'excerpt_more', ' ' . '&hellip;' );
            $text           = wp_trim_words( $text, $excerpt_length, $excerpt_more ); 

        }
        
        return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );

    }    

}


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