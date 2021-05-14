<?php
/**
 * Coders Rank section
 *
 * @since Purple 1.0.0
 */
function purple_codersrank(){
?>
	<section id="hero-codersrank" class="codersrank">
		<div class="container text-center">
			<h3 class="h1 mb-5"><?php theming_option( 'codersrank_title' ) ?></h3>
			<codersrank-activity username="<?php theming_option( 'codersrank_user' ) ?>" labels legend tooltip branding="false"></codersrank-activity>
		</div>
	</section>
<?php
	$enqueue = new Purple_Enqueue;
	$enqueue->codersrank_activity( true );
}
add_action( 'purple_front_page_after', 'purple_codersrank' );
