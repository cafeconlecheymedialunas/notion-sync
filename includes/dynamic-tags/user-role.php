<?php
use ElementorPro\Modules\DynamicTags\Module;

Class UserRole extends \Elementor\Core\DynamicTags\Tag {

    public function get_name() {

        return 'dynamic-tags-user-role';
    }

    public function get_title() {
        return __( 'User role', 'dynamic-tags' );
    }


    public function get_group() {
        return [ Module::SITE_GROUP ];
    }

    public function get_categories() {
        return [ Module::TEXT_CATEGORY ];
    }

    protected function _register_controls() {
        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'Databases', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
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
        $userId = get_current_user_id();

        if ( empty( $userId ) ) {
            return;
        }
        $userInfo = get_userdata( $userId );
        $userRoles = implode( ', ', $userInfo->roles );
        echo $userRoles;
    }

}



//FILE 2 - DYNAMIC TAG - dynamic-tags/cwpai-demo-field-tag.php
