<?php
/**
 * The template for posts navigation
 */
?>
<nav class="post-navigation">
    <?php previous_post_link( '%link', '<span>&laquo;</span>' . $pagination['previous'] ); ?>
    <?php next_post_link( '%link', $pagination['next'] . '<span>&raquo;</span>' ); ?>
</nav><!-- #nav-below -->