<?php
/**
 * Enqueue styles and scripts
 *
 * @since Purple 1.0.0
 */
class Purple_Enqueue
{

	/**
	 * @var null
	 */
	protected static $instance = null;

	/**
	 * Enqueue
	 *
	 * @since Purple 1.0.0
	 */
	public function init()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'dequeue_parent_styles' ), 999 );
		add_action( 'wp_enqueue_scripts', array( $this, 'codersrank_activity' ) );
	}

	/**
	 * Handle styles
	 *
	 * @since Purple 1.0.0
	 */
	public function styles()
	{
		wp_register_style( 'purple-style', get_stylesheet_directory_uri() .'/assets/dist/css/purple-style.css', array(), $this->theme_version() );
		wp_enqueue_style( 'purple-style' );
	}

	/**
	 * Dequeue parent styles
	 *
	 * @since Purple 1.0.0
	 */
	public function dequeue_parent_styles()
	{
		wp_dequeue_style( 'theming-style' );
		wp_deregister_style( 'theming-style' );
	}

	/**
	 * Get the theme version
	 *
	 * @since Purple 1.0.0
	 */
	public function theme_version()
	{
		return wp_get_theme()->get( 'Version' );
	}

	/**
	 * Enqueue Codersrank Activity
	 * @param bool $enqueue
	 *
	 * @since Purple 1.0.0
	 */
	public function codersrank_activity( $enqueue = false )
	{
		if ( ! $enqueue )
			return;

		wp_register_script( 'codersrank-activity', get_stylesheet_directory_uri() .'/assets/dist/js/codersrank-activity.js', array(), $this->theme_version(), true );
		wp_enqueue_script( 'codersrank-activity' );
	}

	/**
	 * Get Instance
	 *
	 * @since Purple 1.0.0
	 */
    public static function get_instance() : self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

Purple_Enqueue::get_instance()->init();
