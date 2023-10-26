<?php
/**
 * The Template for displaying all singular templates
 */
$singular = new Views\Singular(); 
$singular->header(); ?>
<article id="post-<?php echo $singular->properties['id']; ?>" <?php post_class('singular'); ?> <?php echo $singular->properties['schema']; ?>>
    
    <?php  if ( $singular->properties['image'] ) { ?>
        <meta itemprop="image" content="<?php echo get_the_post_thumbnail_url( $singular->properties['id'], 'large' ); ?>" />
    <?php } ?>

    <?php if($singular->properties['type'] == 'post') { ?>

        <span class="structured-data hidden" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
            <meta itemprop="name" content="<?php echo $singular->properties['author']; ?>">
        </span>

        <span class="structured-data hidden" itemprop="publisher" itemscope="itemscope" itemtype="http://schema.org/Organization">
            <span itemprop="logo"itemscope="itemscope" itemtype="http://schema.org/ImageObject">
                <?php if( strpos($singular->properties['logo'], '.svg') ) { ?>
                    <meta itemprop="contentUrl" content="<?php echo $singular->properties['logo']; ?>" />
                    <meta itemprop="url" content="<?php echo $singular->properties['blogUrl']; ?>" />
                <?php } else { ?>
                    <meta itemprop="url" content="<?php echo $singular->properties['logo']; ?>" />
                <?php } ?>
            </span>
            <meta itemprop="name" content="<?php echo $singular->properties['blogName']; ?>" />
        </span>                    

        <meta itemprop="mainEntityOfPage" content="<?php echo $singular->properties['postUrl']; ?>" />
        <meta itemprop="datePublished" content="<?php echo $singular->properties['published']; ?>" />
        <meta itemprop="dateModified" content="<?php echo $singular->properties['modified']; ?>" />   

    <?php } ?>    
    
    <header class="entry-header">
        <?php if( $singular->slider ) { 
            $singular->slider->render();
        } elseif( $singular->properties['image'] ) { ?>
            <figure class="entry-image"><?php echo $singular->properties['image']; ?></figure>
        <?php } ?>
        <div class="container">
            <h1 class="entry-title" itemprop="name headline"><?php echo $singular->properties['title']; ?></h1>
            <?php if( $singular->properties['subtitle'] ) { ?>
                <p class="sub-title"><?php echo $singular->properties['subtitle']; ?></p>
            <?php } ?> 
            
            <?php if( $singular->meta ) {  $singular->meta->render(); } ?>
        </div>
    </header>
    
    <?php if( $singular->properties['content'] ) { ?> 
        <div class="entry-content" itemprop="<?php echo $singular->properties['text_schema']; ?>">
            <div class="container">
                <?php echo $singular->properties['content']; ?>
                <?php echo $singular->properties['pages']; ?>
            </div>
        </div> 
    <?php } ?>
    
    <?php if( $singular->pagination || $singular->comments  ) { ?>
        <footer class="entry-footer">
            <div class="container">
                <?php 
                    // Pagination
                    if($singular->pagination) { $singular->pagination->render(); } 

                    // Comments
                    if($singular->comments) { $singular->comments->render(); }  
                ?>
            </div>
        </footer>
    <?php } ?>

    <?php 
        // Displays the loop of posts or projects displayed in page templates. Thus, only is applied in page templates.
        if($singular->loop) { 
            $singular->loop->render(); 
        } 
    ?>
</article>
<?php $singular->footer(); ?>