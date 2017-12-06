<section class="row side-right gutter pad-top">

	<div class="column one deck">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'parts/card-content' ); ?>

		<?php endwhile; ?>

	</div><!--/column-->

	<div class="column two">

		<?php get_sidebar(); ?>

	</div><!--/column two-->

</section>
