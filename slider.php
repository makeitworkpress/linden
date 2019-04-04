<?php
/**
 * The template file that renders the slideshow
 */
?>
<div id="slider" class="loading">
	<ul class="slides">
    	<?php for($i = 1; $i <= 5; $i++) { 
			$field = get_post_meta( $post->ID, "portfolio_image".$i."_value", true );
			if ( $field ) { ?>
                <li class="slide">
                	<?php $ext = pathinfo($field, PATHINFO_EXTENSION); // Checks if we have a video or image 
                    if($ext == 'png' || $ext == 'gif' || $ext == 'jpg' || $ext == 'bmp' || $ext == 'tiff' || $ext == 'svg' ) { ?>
                		<img src="<?php echo $field; ?>" alt="<?php the_title(); ?>" />
                    <?php } else { ?>
                    	<div class="video-container">
                        	<?php echo $field; ?>
                        </div>
                    <?php } ?>
                </li>    
    		<?php }
		} ?>
    </ul>
</div>