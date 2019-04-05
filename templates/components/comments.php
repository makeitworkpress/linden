<?php 
/**
 * Displays the comments template. We have to use the function comments_template to ensure WordPress compatibility
 * The variable $comments is defined by the classes/components/components.php file and filled by classes/components/comments.php
 */
comments_template( $comments['file'] ); ?>