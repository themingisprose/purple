<?php
/**
 * Posts Section
 *
 * @since Purple 1.0.0
 */
class Purple_Admin_Posts extends Theming_Setting_Fields
{

	/**
	 * Array of fields to render
	 * @return array 	Array of fields
	 *
	 * @since Purple 1.0.0
	 */
	public function fields()
	{
		$fields = array(
			'posts_title'	=> array(
				'label'			=> __( 'Title', 'purple' ),
				'option'		=> 'posts_title',
			),
		);

		/**
		 * Filters the Posts Options fields
		 * @param array $fields
		 *
		 * @since Purple 1.0.0
		 */
		return apply_filters( 'purple_posts_fields', $fields );
	}
}

$init = new Purple_Admin_Posts(
			'purple-posts-options',
			__( 'Posts Section', 'purple' ),
			'purple-posts',
			__( 'Posts', 'purple' ),
		);
$init->init();
