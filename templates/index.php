<?php
/**
 * The template for displaying Archive pages.
 */
new Views\Index();
$index->header(); ?>
<article id="archive" class="page" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
	<?php if($index->properties['title']) { ?>
		<header class="entry-header">
			<div class="container">
				<h1 class="entry-title" itemprop="name"><?php echo $index->properties['title']; ?></h1>
				<?php if( $index->properties['description'] ) { ?> 
					<p class="description" itemprop="description"><?php echo $index->properties['description']; ?></p>
				<?php } ?>
			</div>
		</header>
	<?php } ?>
	<div class="entry-content">
		<?php $index->loop->render(); ?>
	</div>
</article>
<?php $index->footer(); ?>