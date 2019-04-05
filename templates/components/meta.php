<?php
/**
 * The template for meta information 
 */		
?>
<div class="entry-meta">
    <?php if($meta['categories']) { ?>
        <div class="single-meta" itemprop="genre">
            <?php printf( __( 'Filled under %s.', 'linden'), $meta['categories'] ); ?>
        </div>
    <?php } ?>
    <?php if($meta['tags']) { ?>
        <div class="single-meta" itemprop="keywords">
            <?php echo $meta['tags']; ?>
        </div>
    <?php } ?>
    <div class="single-meta">
        
        <?php 
            printf( 
                __('Posted %1$s by %2$s', 'linden'), 
                '<time datetime="' . $meta['time_c'] . '" pubdate>' . $meta['time'] . '</time>',  
                '<span class="author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
                    <span class="vcard" itemprop="name">' 
                        . sprintf(
                            '<a class="url fn n" href="%1$s" title="%2$s" itemprop="url">%3$s</a>',
                            $meta['author_url'],
                            sprintf( __('View all posts by %s'), $meta['author']),
                            $meta['author']
                        ) .
                '   </span>
                </span>'  
            ); 
        ?>

    </div>     
</div>