<?php
/**
 * The template for displaying the 404 pages
 * 
 * The class located in classes/templates/nothing.php defines all variables below
 */
$nothing = new Views\Nothing(); 

$nothing->header(); ?>

<article id="post-0" class="page error404 not-found">
    <header class="entry-header">
        <h1><?php echo $this->properties['title']; ?></h1>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php if($this->properties['description']) { ?>
            <p><?php echo $this->properties['description']; ?></p>
        <?php } ?>
        <?php get_search_form(); ?>
    </div><!-- .entry-content -->
</article><!-- #post-0 -->

<?php $nothing->footer(); ?>