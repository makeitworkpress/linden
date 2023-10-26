<?php
/**
 * The template for displaying the 404 pages
 * 
 * The class located in classes/templates/nothing.php defines all variables below
 */
$nothing = new Views\Nothing(); 

$nothing->header(); ?>

<article id="post-0" class="singular page error404 not-found container">
    <header class="entry-header">
        <h1><?php echo $nothing->properties['title']; ?></h1>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php if($nothing->properties['description']) { ?>
            <p><?php echo $nothing->properties['description']; ?></p>
        <?php } ?>
        <?php // get_search_form(); ?>
    </div><!-- .entry-content -->
</article><!-- #post-0 -->

<?php $nothing->footer(); ?>