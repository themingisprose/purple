<?php
/**
 * Tech Section
 *
 * @since Purple 1.0.0
 */
class Purple_Admin_Tech extends Theming_Setting_Fields
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
			'tech_title'	=> array(
				'label'			=> __( 'Title', 'purple' ),
				'option'		=> 'tech_title',
			),
			'tech_items'	=> array(
				'label'			=> __( 'Items to display (coma separated)', 'purple' ),
				'option'		=> 'tech_items',
			),
		);

		/**
		 * Filters the Tech Options fields
		 * @param array $fields
		 *
		 * @since Purple 1.0.0
		 */
		return apply_filters( 'purple_tech_fields', $fields );
	}
}

$init = new Purple_Admin_Tech(
			'purple-tech-options',
			__( 'Tech Section', 'purple' ),
			'purple-tech',
			__( 'Tech', 'purple' ),
		);
$init->init();
