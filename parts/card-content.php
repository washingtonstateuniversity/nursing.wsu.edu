<article class="card">

	<?php if ( spine_has_featured_image() ) { ?>
	<figure class="card-image">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'spine-small_size' ); ?>
		</a>
	</figure>
	<?php } ?>

	<header class="card-title"><?php the_title(); ?></header>

	<div class="card-excerpt">
		<?php the_excerpt(); ?>
	</div>

	<div class="card-cta">
		<a href="<?php the_permalink(); ?>">Read more</a>
	</div>

</article>
