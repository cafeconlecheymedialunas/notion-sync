<?php


class NotionDatabaseFieldColumnTag extends \Elementor\Core\DynamicTags\Tag {

    private $name = "";
    private $key;

    public function __construct(string $name = "", string $group = "") {
        $this->name = $name;
        $this->key = sanitize_title($this->name);
        $this->group = $group;
    }
	public function get_name() {
        return $this->key;
    }
	public function get_title() {
        return $this->name;
    }
	public function get_group() {
        return $this->group;
    }
	public function get_categories() {
        return [\Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY];
    }
	protected function register_controls() {

      

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Databases', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,

				'options' => [
					'title'  => esc_html__( 'Title', 'textdomain' ),
					'description' => esc_html__( 'Description', 'textdomain' ),
					'button' => esc_html__( 'Button', 'textdomain' ),
				],
				'default' => [ 'title', 'description' ],
			]
		);

		
    }

	public function render() {
        global $post;
        $value = get_post_meta( $post->ID, 'my_custom_field', true );
        echo $value ? $value : 'DNE';
    }
}

