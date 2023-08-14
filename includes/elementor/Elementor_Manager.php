<?php 


class Elementor_Manager{

	private $notion;
	private $databases;

    public function __construct() {
		
		require_once( PLUGIN_DIR_URL . '/includes/notion/Notion_Manager.php' );		
		$this->notion = new Notion_Manager();
		$this->databases = $this->notion->get_databases();

        add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );
		add_action( 'elementor/controls/register', [ $this, 'register_controls' ] );
		add_action( 'elementor/dynamic_tags/register', [ $this, 'register_dynamic_tags' ] );
		add_action( 'elementor/dynamic_tags/register', [ $this,'register_tag_groups']  );


    }
    	 /**
	 * Register Widgets
	 *
	 * Load widgets files and register new Elementor widgets.
	 *
	 * Fired by `elementor/widgets/register` action hook.
	 *
	 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
	 */
	public function register_widgets( $widgets_manager ) {

		//require_once( __DIR__ . '/includes/widgets/widget-1.php' );

		//$widgets_manager->register( new Widget_1() );
		

	}

	/**
	 * Register Controls
	 *
	 * Load controls files and register new Elementor controls.
	 *
	 * Fired by `elementor/controls/register` action hook.
	 *
	 * @param \Elementor\Controls_Manager $controls_manager Elementor controls manager.
	 */
	public function register_controls( $controls_manager ) {

		
		//require_once( __DIR__ . '/includes/controls/control-2.php' );

		//$controls_manager->register( new Control_1() );


	}


	/**
	 * Register Dynamic Tags
	 *
	 * Load dynamic tag files and register new Dynamic Tags.
	 *
	 * Fired by 'elementor/dynamic_tags/register' action hook.
	 *
	 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
	 */
	public function register_dynamic_tags( $dynamic_tag_manager ) {

		
		require_once( PLUGIN_DIR_URL . '/includes/elementor/Elementor_Dynamic_Tag.php' );

		$dynamyc_tag = new Elementor_Dynamic_Tag();

		$dynamic_tag_manager->register( $dynamyc_tag );
		

	}


	public function register_tag_groups( $dynamic_tags_manager ) {
		
			$dynamic_tags_manager->register_group(
				"notion_database",
				[
					'title' => "Notion Databases Fields"
		
				]
			);
		

		
	}
}

