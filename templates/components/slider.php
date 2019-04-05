<?php
/**
 * The template file that renders the slideshow
 */
?>
<ul class="entry-slider">
    <?php foreach($slider['slides'] as $slide ) { ?>
        <li class="slide">
            <?php if($slide['video']) { ?>
                <div class="video-container">
                    <?php echo $slide['video']; ?>
                </div>
            <?php } elseif($slide['image']) { ?>
                <?php echo $slide['image']; ?>
            <?php } ?>
        </li>
    <?php } ?>
</ul><!-- .entry-slider -->