<?php
if ( is_page_template( 'templates/people.php' ) || is_singular( 'wsuwp_people_profile' ) ) { ?>
<section class="row single sitetitle">
	<div class="column one">
		<p class="sitetitle">WSU College of Nursing | Faculty &amp; Staff</p>
	</div>
</section>
<div class="gray-back colorheader">
	<section class="row single gutter">
		<div class="column one">
			<h1 class="colorheaderreg"><?php the_title(); ?></h1>
		</div>
	</section>
</div>
<?php }
