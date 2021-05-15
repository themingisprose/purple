<?php
/**
 * Template part for post card content
 *
 * @since Purple 1.0.0
 */
?>
<div class="col">
	<div class="card h-100 bg-transparent">
		<div class="card-body">
			<a href="<?php the_permalink() ?>" class="stretched-link mt-5">
			<?php the_title( '<h5 class="card-title fw-bold entry-title mb-4">', '</h5>' ) ?>
			</a>
			<?php the_excerpt() ?>
		</div>
	</div>
</div>
