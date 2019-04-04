<?php
/**
 * The template for displaying 404 pages (Not Found).
 */
get_header(); ?>
    <article id="post-0" class="post error404 not-found">
        <div class="entry-content">
            <div class="column-two">
                <h2 style="font-size:11.0em;"><?php _e( '404', 'tp' ); ?></h2>
            </div>
            <div class="column-two-last">
                <p><?php _e( 'In understandable language: the page you requested could not be found. Perhaps try searching?', 'tp' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div><!-- .entry-content -->
    </article><!-- #post-0 -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
<?php get_footer(); ?>