<?php
/**
 * Google Tracking Section
 *
 * @since Purple 1.0.0
 */
class Purple_Admin_Google_Tracking extends Theming_Setting_Fields
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
				'label'			=> __( 'Tag Manager Head code', 'purple' ),
				'option'		=> 'tag_manager_head',
				'type'			=> 'textarea',
			),
			'tag_manager_body'	=> array(
				'label'			=> __( 'Tag Manager Body code', 'purple' ),
				'option'		=> 'tag_manager_body',
				'type'			=> 'textarea',
			),
			'analytics'	=> array(
				'label'			=> __( 'Analytics code', 'purple' ),
				'option'		=> 'analytics',
				'type'			=> 'textarea',
			),
		);

		/**
		 * Filters the Google Tracking Options fields
		 * @param array $fields
		 *
		 * @since Purple 1.0.0
		 */
		return apply_filters( 'purple_google_tracking_fields', $fields );
	}
}

$init = new Purple_Admin_Google_Tracking(
			'purple-google-tracking-options',
			__( 'Google', 'purple' ),
			'purple-google-tracking',
			__( 'Tracking Codes', 'purple' ),
		);
$init->init();
