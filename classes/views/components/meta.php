

/*
 * Prints HTML with meta information for the current post (category, tags and permalink).
 ****************************************************/
if ( ! function_exists( 'tp_posted_in' ) ) :
	function tp_posted_in() {
		// Retrieves tag list of current post, separated by commas.
		$tag_list = get_the_tag_list( '', ', ' );
		if ( $tag_list ) {
			$posted_in = __( 'Filled under %1$s and tagged %2$s.', 'tp' );
		} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
			$posted_in = __( 'Filled under %1$s.', 'tp' );
		} else {
			$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'tp' );
		}
		// Prints the string, replacing the placeholders.
		printf(
			$posted_in,
			get_the_term_list( $post->ID, 'category', '', ', ', '' ), 
			$tag_list,
			get_permalink(),
			the_title_attribute( 'echo=0' )
		);
	}
endif;

/*
 * Prints HTML with meta information for the current post—date/time and author.
 ****************************************************/
if ( ! function_exists( 'tp_posted_on' ) ) :
	function tp_posted_on() {
			printf( __( '%2$s by %3$s', 'tp' ),
				'meta-prep meta-prep-author',
				sprintf( '<a href="%1$s" rel="bookmark"><time datetime="%2$s" pubdate>%3$s</time></a>',
				get_permalink(),
				get_the_date('c'),
				get_the_date()
			),
			sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
				get_author_posts_url( get_the_author_meta( 'ID' ) ),
				sprintf( esc_attr__( 'View all posts by %s', 'tpn' ), get_the_author() ),
				get_the_author()
			)
		);
	}
endif;