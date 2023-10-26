
<?php
/**
 * This is the basic loop for displaying portfolio projects in an archive
 */
?>
<div class="projects">

    <?php if ( ! $projects['posts'] ) { ?>
        
        <article id="portfolio-0" class="portfolio error404 not-found container">
            <header class="entry-header"> 
                <h2 class="entry-title"><?php _e( 'Nothing Found', 'linden' ); ?></h2>
            </header>
            <div class="entry-content">
                <p><?php _e( 'Apologies, but no results were found for the requested archive.', 'linden' ); ?></p>
            </div><!-- .entry-content -->
        </article><!-- #post-0 -->
    
    <?php } else { ?>

        <?php foreach($projects['posts'] as $id => $post ) { ?>
            <article id="post-<?php echo $id; ?>" class="<?php echo $post['class']; ?>" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                <header class="entry-header">
                    <a class="project-caption" href="<?php echo $post['link']; ?>" title="<?php echo $post['title_attr']; ?>" rel="bookmark">  
                        <h2 class="entry-title" itemprop="name">
                            <?php echo $post['title']; ?>
                        </h2>
                        <?php if( $post['subtitle'] ) { ?>
                            <p class="sub-title"><?php echo $post['subtitle']; ?></p>
                        <?php } ?>
                    </a>
                    <?php if( $post['image'] ) { ?>
                        <figure class="entry-image">
                            <a href="<?php echo $post['link']; ?>" rel="bookmark" title="<?php echo $post['title_attr']; ?>">
                                <?php echo $post['image']; ?>
                            </a>
                        </figure>
                    <?php } ?>
                </header>
            </article>
        <?php } ?>
        
        <?php if ( $projects['pagination'] ) { $projects['pagination']->render(); } ?>
    
    <?php } ?>

</div><!-- .projects -->