<?php
/**
 * Coders Rank section
 *
 * @since Purple 1.0.0
 */
function purple_codersrank(){
?>
	<section id="hero-codersrank" class="py-5">
		<div class="container">
			<header class="text-center">
				<h3 class="h1 mb-5"><?php theming_option( 'codersrank_title' ) ?></h3>
			</header>
			<codersrank-activity username="<?php theming_option( 'codersrank_user' ) ?>" labels legend tooltip branding="false"></codersrank-activity>
		</div>
	</section>
<?php
	$enqueue = new Purple_Enqueue;
	$enqueue->codersrank_activity( true );
}
add_action( 'purple_front_page_after', 'purple_codersrank' );

/**
 * Post on Front
 *
 * @since Purple 1.0.0
 */
function purple_front_posts(){
	$args = array(
		'posts_per_page'	=> 3
	);

	$the_query = new WP_Query ( $args );

	if ( $the_query->have_posts() ) :
?>
	<section id="hero-posts" class="py-5">
		<div class="container">
			<header class="text-center">
				<h3 class="h1 mb-5"><?php theming_option( 'posts_title' ) ?></h3>
			</header>
			<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
			while ( $the_query->have_posts() ) :
				$the_query->the_post();

				get_template_part( '/template-parts/card', get_post_type() );

			endwhile;
?>
			</div>
		</div>
	</section>
<?php
	endif;
	wp_reset_postdata();
}
add_action( 'purple_front_page_after', 'purple_front_posts' );
