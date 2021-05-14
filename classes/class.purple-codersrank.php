<?php
/**
 * Coders Rank
 *
 * @since Purple 1.0.0
 */
class Purple_Coders_Rank extends Theming_Setting_Fields
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
			'codersrank_user'	=> array(
				'label'			=> __( 'User Name', 'purple' ),
				'option'		=> 'codersrank_user',
			),
			'codersrank_title'	=> array(
				'label'			=> __( 'Title', 'purple' ),
				'option'		=> 'codersrank_title',
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

$init = new Purple_Coders_Rank(
			'purple-codersrank-options',
			__( 'Coders Rank Section', 'purple' ),
			'purple-codersrank',
			__( 'Coders Rank', 'purple' ),
		);
$init->init();
