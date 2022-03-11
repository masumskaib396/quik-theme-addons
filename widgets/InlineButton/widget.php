<?php
namespace Quiktheme\Widgets\Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Widget_Base;
use Quiktheme\Elementor\Traits\Quik_Theme_Inline_Button_Markup;

class Quik_Theme_Inline_Button extends Widget_Base {

	use Quik_Theme_Inline_Button_Markup;

    /**
     * Get widget name.
     */
    public function get_name() {
		return 'quiktheme-inline-button';
	}

	/**
	 * Get widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Inline Button', 'quik-theme-addons' );
	}

	/**
     * Get widget icon.
     */
    public function get_icon() {
        return 'feather icon-paperclip';
    }

    /**
     * Get widget category.
     */
    public function get_categories() {
		return [ 'quik-theme-addons' ];
	}

	public function get_keywords() {
		return ['link', 'hover', 'animation', 'quik-theme-addons', 'inline'];
	}

	/**
     * Register widget content controls
     */
	protected function register_controls() {

		$this->start_controls_section(
			'_section_title',
			[
				'label' => __( 'Button Content', 'quik-theme-addons' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
            ]
		);

		$this->add_control(
			'animation_style',
			[
				'label'   => __( 'Animation Style', 'quik-theme-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'carpo',
				'options' => [
					'carpo'   => __( 'Carpo', 'quik-theme-addons' ),
					'carme'   => __( 'Carme', 'quik-theme-addons' ),
					'dia'     => __( 'Dia', 'quik-theme-addons' ),
					'eirene'  => __( 'Eirene', 'quik-theme-addons' ),
					'elara'   => __( 'Elara', 'quik-theme-addons' ),
					'ersa'    => __( 'Ersa', 'quik-theme-addons' ),
					'helike'  => __( 'Helike', 'quik-theme-addons' ),
					'herse'   => __( 'Herse', 'quik-theme-addons' ),
					'io'      => __( 'Io', 'quik-theme-addons' ),
					'iocaste' => __( 'Iocaste', 'quik-theme-addons' ),
					'kale'    => __( 'Kale', 'quik-theme-addons' ),
					'leda'    => __( 'Leda', 'quik-theme-addons' ),
					'metis'   => __( 'Metis', 'quik-theme-addons' ),
					'mneme'   => __( 'Mneme', 'quik-theme-addons' ),
					'thebe'   => __( 'Thebe', 'quik-theme-addons' ),
                ],
            ]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => __( 'Title', 'quik-theme-addons' ),
				'label_block' => true,
				'type'        => Controls_Manager::TEXT,
				'default'     => __( 'Inline Button', 'quik-theme-addons' ),
				'placeholder' => __( 'Type Link Title', 'quik-theme-addons' ),
				'dynamic'     => [
					'active' => true,
                ],
            ]
		);

		$this->add_responsive_control(
            'link_align',
            [
                'label' => __( 'Alignment', 'quik-theme-addons' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'quik-theme-addons' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'quik-theme-addons' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'quik-theme-addons' ),
                        'icon' => 'eicon-text-align-right',
                    ]
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors_dictionary' => [
                    'left' => 'justify-content: flex-start',
                    'center' => 'justify-content: center',
                    'right' => 'justify-content: flex-end',
                ],
                'selectors' => [
                    '{{WRAPPER}} .quik_theme_content__item' => '{{VALUE}}'
                ]
            ]
        );

		$this->add_control(
			'link_url',
			[
				'label'         => __( 'Link', 'quik-theme-addons' ),
				'type'          => Controls_Manager::URL,
				'placeholder'   => __( 'https://your-link.com', 'quik-theme-addons' ),
				'show_external' => true,
				'default'       => [
					'url'         => '',
					'is_external' => false,
					'nofollow'    => true,
                ],
            ]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'_section_media_style',
			[
				'label' => __( 'Button Content', 'quik-theme-addons' ),
				'tab'   => Controls_Manager::TAB_STYLE,
            ]
		);

		$this->add_responsive_control(
			'content_padding',
			[
				'label'      => __( 'Content Box Padding', 'quik-theme-addons' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors'  => [
					'{{WRAPPER}} .quik_theme_content__item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
		);

		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Link Color', 'quik-theme-addons' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .quiktheme-link' => 'color: {{VALUE}};',
                ],
            ]
		);

        $this->add_control(
			'title_hover_color',
			[
				'label'     => __( 'Link Hover Color', 'quik-theme-addons' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .quiktheme-link:hover' => 'color: {{VALUE}};',
                ],
            ]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'title_typography',
				'label'    => __( 'Typography', 'quik-theme-addons' ),
				'selector' => '{{WRAPPER}} .quiktheme-link',
				'scheme'   => Typography::TYPOGRAPHY_2,
            ]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		self::{'render_' . $settings['animation_style'] . '_markup'}( $settings );
	}

}
$widgets_manager->register_widget_type(new \Quiktheme\Widgets\Elementor\Quik_Theme_Inline_Button());