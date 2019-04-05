<?php
/**
 * Prepares the variables that are used in our meta component template
 */
namespace Views\Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Meta extends Component {  

    /**
     * The basic attributes for our class
     * 
     * @return Void
     */
    public function init() {
        
        // Our attributes
        $this->defaults = [];

        // Our default variable
        $this->vars = [
            'author'    => false,
            'avatar'    => false,
            'category'  => false,
            'date'      => false,
            'rating'    => false,
            'tags'      => false,
            'type'      => false,
            'url'       => false,
        ];

    }

    /**
     * Automatically returns the right title based on the template we're looking at
     * 
     * @return Void
     */
    public function populate() {

		global $post;

		$this->properties['categories'] = get_the_term_list( $post->ID, 'category', '', ', ' );
		$this->properties['tags'] 		= get_the_term_list( $post->ID, 'post_tag', '<i class="fa fa-tag"></i>', ', ' );
		$this->properties['time']		= get_the_date();
		$this->properties['time_c']		= get_the_date('c');
		$this->properties['author']		= get_the_author();
		$this->properties['author_url']	= get_author_posts_url( get_the_author_meta('ID') );
	

    }

}
