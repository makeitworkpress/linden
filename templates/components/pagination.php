<?php
/**
 * The template for posts navigation
 */
?>

<nav class="navigation-<?php echo $pagination['type']; ?>">
    <?php 
        // Archive pagination 
        if( $pagination['type'] == 'archive' ) {
            echo $pagination['numbers'];
        // Post Navigation
        } elseif( $pagination['type'] == 'single' ) { 
            previous_post_link( '%link', '<span>&laquo;</span>' . $pagination['previous'] );
            next_post_link( '%link', $pagination['next'] . '<span>&raquo;</span>' ); 
        } 
    ?>
</nav><!-- #nav-below -->