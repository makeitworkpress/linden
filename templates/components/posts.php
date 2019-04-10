

<?php 
/**
 * This is the very basic loop that is used for rendering the posts with thumbnails.  
 * Pagination is also present. The loop is not used on the homepage, but only in category and tag pages.
 */
?>

<div class="posts">
    <div class="container">
    
        <?php if ( ! $posts['posts'] ) { ?>
            
            <article id="post-0" class="post error404 not-found postitem">
                <header class="entry-header"> 
                    <h2 class="entry-title"><?php _e( 'Nothing Found', 'linden' ); ?></h2>
                </header>
                <div class="entry-content">
                    <p><?php _e( 'Apologies, but no results were found for the requested archive.', 'linden' ); ?></p>
                </div><!-- .entry-content -->
            </article><!-- #post-0 -->
        
        <?php } else { ?>

            <?php foreach($posts['posts'] as $id => $post ) { ?>
                <article id="post-<?php echo $id; ?>" class="<?php echo $post['class']; ?>" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                    <header class="post-header"> 
                        <?php if( $post['image'] ) { ?>
                            <figure class="entry-image">
                                <a href="<?php echo $post['link']; ?>" rel="bookmark" title="<?php echo $post['title_attr']; ?>" itemprop="url">
                                    <?php echo $post['image'] ?>
                                </a>
                            </figure>
                        <?php } ?>            
                        <h2 class="entry-title" itemprop="name">
                            <a href="<?php echo $post['link']; ?>" rel="bookmark" title="<?php echo $post['title_attr']; ?>" itemprop="url">
                                <?php echo $post['title']; ?>
                            </a>
                        </h2>
                        <?php if( $post['meta'] ) { $post['meta']->render(); } ?>
                    </header>
                    <div class="entry-content" itemprop="text">
                        <?php echo $post['excerpt']; ?>
                    </div>
                    <?php if( $post['more'] ) { ?>
                        <footer class="entry-footer">
                            <a class="read-more" href="<?php echo $post['link']; ?>" rel="bookmark" title="<?php echo $post['title_attr']; ?>">
                                <?php echo $post['more'] ?>
                            </a>  	
                        </footer>
                    <?php } ?>
                </article>
            <?php } ?>

            <?php if ( $posts['pagination'] ) { $posts['pagination']->render(); } ?>
    
        <?php } ?>

    </div>   
</div><!-- .posts -->