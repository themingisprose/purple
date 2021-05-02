<?php
/**
 * The front page template file
 *
 * @since Purple 1.0.0
 */

get_header();

	do_action( 'purple_front_page_before' );
?>

		<div class="container">
			<div class="post-container mx-auto">
<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

			endif;
?>
			</div>
		</div>
<?php
	do_action( 'purple_front_page_after' );

get_footer();
