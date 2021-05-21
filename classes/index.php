<?php
// Silent is gold

// Parent Admin classes
require_once( get_template_directory() . '/classes/class.theming-admin.php' );
require_once( get_template_directory() . '/classes/class.theming-setting-fields.php' );

// Theme Admin classes
require_once( get_stylesheet_directory() . '/classes/class.purple-admin-codersrank.php' );
require_once( get_stylesheet_directory() . '/classes/class.purple-admin-posts.php' );
require_once( get_stylesheet_directory() . '/classes/class.purple-admin-tech.php' );
require_once( get_stylesheet_directory() . '/classes/class.purple-admin-google-tag-manager.php' );

// General theme classes
require_once( get_stylesheet_directory() .'/classes/class.purple-enqueue.php' );
