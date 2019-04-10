<?php
/**
 * The template file that renders the slideshow
 */
if( ! $slider['slides'] ) {
    return;
} ?>
<ul class="entry-slider">
    <?php foreach($slider['slides'] as $slide ) { ?>
        <li class="slide">
            <?php echo $slide; ?>
        </li>
    <?php } ?>
</ul><!-- .entry-slider -->