<?php class ElementorHandle{
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
	public function register_dynamic_tags( $widgets_manager ) {

		
		require_once( DIR_URL . '/includes/dynamic-tags/notion-database-field-column-tag.php' );

		$widgets_manager->register( new NotionDatabaseFieldColumnTag("Fases") );
		

	}


	function register_tag_groups( $dynamic_tags_manager ) {

		$dynamic_tags_manager->register_group(
			'cwpai-dynamic-tag',
			[
				'title' => esc_html__('CodeWP Dynamic Tag', 'cwpai_dynamic_tag')
	
			]
		);
	}
}