<?php
/**
 * Google Tag Manager Section
 *
 * @since Purple 1.0.0
 */
class Purple_Admin_Google_Tag_Manager extends Theming_Setting_Fields
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
			'tag_manager_head'	=> array(
				'label'			=> __( 'Head code', 'purple' ),
				'option'		=> 'tag_manager_head',
				'type'			=> 'textarea',
			),
			'tag_manager_body'	=> array(
				'label'			=> __( 'Body code', 'purple' ),
				'option'		=> 'tag_manager_body',
				'type'			=> 'textarea',
			),
		);

		/**
		 * Filters the Coders Rank Options fields
		 * @param array $fields
		 *
		 * @since Purple 1.0.0
		 */
		return apply_filters( 'purple_codersrank_fields', $fields );
	}
}

$init = new Purple_Admin_Google_Tag_Manager(
			'purple-google-tag-manager-options',
			__( 'Google', 'purple' ),
			'purple-google-tag-manager',
			__( 'Tag Manager', 'purple' ),
		);
$init->init();
