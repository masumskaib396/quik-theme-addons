<?php
namespace Quiktheme\Widgets\Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Widget_Base;
use Quiktheme\Elementor\Traits\Button_Markup;



class Quik_Theme_Creative_Button extends Widget_Base {

	 use Button_Markup;

    /**
     * Get widget name.
     */
    public function get_name() {
		return 'quiktheme-creative-button';
	}
    /**
     * Get widget title.
     */
    public function get_title() {
        return __( 'Creative Button', 'quik-theme-addons' );
    }

    /**
     * Get widget icon.
     */
    public function get_icon() {
		return 'feather icon-log-in';
    }

    /**
     * Get widget category.
     */
    public function get_categories() {
		return [ 'quik-theme-addons' ];
	}

    public function get_keywords() {
        return [ 'button', 'btn', 'advance', 'link', 'creative', 'creative-button', 'quik-theme-addons' ];
    }

	/**
     * Register widget content controls
     */
    protected function register_controls() {

        $this->start_controls_section(
            '_section_button',
            [
                'label' => __( 'Creative Button', 'quik-theme-addons' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'btn_style',
			[
				'label'   => __( 'Style', 'quik-theme-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'hermosa',
				'options' => [
					'hermosa'   => __( 'Hermosa', 'quik-theme-addons' ),
					'montino'   => __( 'Montino', 'quik-theme-addons' ),
					'iconica'   => __( 'Iconica', 'quik-theme-addons' ),
					'symbolab'   => __( 'Symbolab', 'quik-theme-addons' ),
					'estilo'   => __( 'Estilo', 'quik-theme-addons' ),
				],
			]
		);

		$this->add_control(
			'estilo_effect',
			[
				'label'   => __( 'Effects', 'quik-theme-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'dissolve',
				'options' =>[
					'dissolve'   => __( 'Dissolve', 'quik-theme-addons' ),
					'slide-down'   => __( 'Slide In Down', 'quik-theme-addons' ),
					'slide-right'   => __( 'Slide In Right', 'quik-theme-addons' ),
					'slide-x'   => __( 'Slide Out X', 'quik-theme-addons' ),
					'cross-slider'   => __( 'Cross Slider', 'quik-theme-addons' ),
					'slide-y'   => __( 'Slide Out Y', 'quik-theme-addons' ),
				],
                'condition' => [
                    'btn_style' => 'estilo'
                ]
			]
		);

		$this->add_control(
			'symbolab_effect',
			[
				'label'   => __( 'Effects', 'quik-theme-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'back-in-right',
				'options' =>[
					'back-in-right'   => __( 'Back In Right', 'quik-theme-addons' ),
					'back-in-left'   => __( 'Back In Left', 'quik-theme-addons' ),
					'back-out-right'   => __( 'Back Out Right', 'quik-theme-addons' ),
					'back-out-left'   => __( 'Back Out Left', 'quik-theme-addons' ),
				],
                'condition' => [
                    'btn_style' => 'symbolab'
                ]
			]
		);

		$this->add_control(
			'iconica_effect',
			[
				'label'   => __( 'Effects', 'quik-theme-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'slide-in-down',
				'options' =>[
					'slide-in-down'   => __( 'Slide In Down', 'quik-theme-addons' ),
					'slide-in-top'   => __( 'Slide In Top', 'quik-theme-addons' ),
					'slide-in-right'   => __( 'Slide In Right', 'quik-theme-addons' ),
					'slide-in-left'   => __( 'Slide In Left', 'quik-theme-addons' ),
				],
                'condition' => [
                    'btn_style' => 'iconica'
                ]
			]
		);

		$this->add_control(
			'montino_effect',
			[
				'label'   => __( 'Effects', 'quik-theme-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'winona',
				'options' =>[
					'winona'   => __( 'Winona', 'quik-theme-addons' ),
					'rayen'   => __( 'Rayen', 'quik-theme-addons' ),
					'aylen'   => __( 'Aylen', 'quik-theme-addons' ),
					'wapasha'   => __( 'Wapasha', 'quik-theme-addons' ),
					'nina'   => __( 'Nina', 'quik-theme-addons' ),
					'antiman'   => __( 'Antiman', 'quik-theme-addons' ),
					'sacnite'   => __( 'Sacnite', 'quik-theme-addons' ),
				],
                'condition' => [
                    'btn_style' => 'montino'
                ]
			]
		);

		$this->add_control(
			'hermosa_effect',
			[
				'label'   => __( 'Effects', 'quik-theme-addons' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'exploit',
				'options' =>[
					'exploit'   => __( 'Exploit', 'quik-theme-addons' ),
					'upward'   => __( 'Upward', 'quik-theme-addons' ),
					'newbie'   => __( 'Newbie', 'quik-theme-addons' ),
					'render'   => __( 'Render', 'quik-theme-addons' ),
					'reshape'   => __( 'Reshape', 'quik-theme-addons' ),
					'expandable'   => __( 'Expandable', 'quik-theme-addons' ),
					'downhill'   => __( 'Downhill', 'quik-theme-addons' ),
					'bloom'   => __( 'Bloom', 'quik-theme-addons' ),
					'roundup'   => __( 'Roundup', 'quik-theme-addons' ),
				],
                'condition' => [
                    'btn_style' => 'hermosa'
                ]
			]
		);

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Text', 'quik-theme-addons' ),
                'label_block'=> true,
                'type' => Controls_Manager::TEXT,
                'default' => 'Button Text',
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

		$this->add_control(
			'button_link',
			array(
				'label'         => __( 'Link', 'quik-theme-addons' ),
				'type'          => Controls_Manager::URL,
				'placeholder'   => __( 'https://your-link.com', 'quik-theme-addons' ),
				'show_external' => true,
				'default'       => array(
					'url'         => '#',
					'is_external' => false,
					'nofollow'    => true,
				),
			)
		);

		$this->add_control(
			'icon',
			[
				'label' => __( 'Icon', 'quik-theme-addons' ),
				'description' => __( 'Please set an icon for the button.', 'quik-theme-addons' ),
				'label_block' => false,
				'type' => Controls_Manager::ICONS,
				'skin' => 'inline',
				'exclude_inline_options' => [ 'svg' ],
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'conditions' => [
					'relation' => 'or',
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'symbolab',
								],
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'iconica',
								],
							],
						],
						[
							'relation' => 'and',
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'hermosa',
								],
								[
									'name' => 'hermosa_effect',
									'operator' => '==',
									'value' => 'expandable',
								],
							],
						]
					]
				],
			]
		);

        $this->add_responsive_control(
            'align_x',
            [
                'label' => __( 'Alignment', 'quik-theme-addons' ),
                'type' => Controls_Manager::CHOOSE,
                'label_block' => false,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'quik-theme-addons' ),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'quik-theme-addons' ),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'quik-theme-addons' ),
                        'icon' => 'eicon-h-align-right',
                    ]
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-container' => 'text-align: {{VALUE}};',
                ],
            ]
        );


		$this->add_control(
            'magnetic_enable',
            [
                'label'        => __('Magnetic Effect', 'quik-theme-addons'),
                'type'         => Controls_Manager::SWITCHER,
                'label_block'  => false,
                'return_value' => 'yes',
				'separator' => 'before'
            ]
        );

		$this->add_control(
			'threshold',
			[
				'label' => __( 'Threshold', 'quik-theme-addons'),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'step' => 1,
				'default' => 30,
				'condition' => [
                    'magnetic_enable' => 'yes'
				],
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn' => 'margin: {{VALUE}}px;',
                ],
			]
		);

	$this->end_controls_section();




	/**
	 * Style section for Estilo, Symbolab, Iconica
	 *
	 * @return void
	 */

        $this->start_controls_section(
            '_estilo_symbolab_iconica_style_section',
            [
                'label' => __( 'Common', 'quik-theme-addons' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
		);

		$this->add_responsive_control(
			'button_item_width',
			[
				'label' => __('Size', 'quik-theme-addons'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .quiktheme-creative-btn.quiktheme-eft--downhill' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .quiktheme-creative-btn.quiktheme-eft--roundup' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .quiktheme-creative-btn.quiktheme-eft--roundup .progress' => 'width: calc({{SIZE}}{{UNIT}} - (({{SIZE}}{{UNIT}} / 100) * 20) ); height:auto;',
				],
                'conditions' => [
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'hermosa_effect',
									'operator' => '==',
									'value' => 'roundup',
								],
								[
									'name' => 'hermosa_effect',
									'operator' => '==',
									'value' => 'downhill',
								],
							],
						],
						[
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'hermosa',
								],
							],
						]
					]
				]
			]
		);

		$this->add_responsive_control(
			'button_icon_size',
			[
				'label' => __('Icon Size', 'quik-theme-addons'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 24,
				],
				'selectors' => [
					'{{WRAPPER}} .quiktheme-creative-btn i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'conditions' => [
					'relation' => 'or',
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'symbolab',
								],
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'iconica',
								],
							],
						],
						[
							'relation' => 'and',
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'hermosa',
								],
								[
									'name' => 'hermosa_effect',
									'operator' => '==',
									'value' => 'expandable',
								],
							],
						]
					]
				],
			]
		);

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'label' => __( 'Typography', 'quik-theme-addons' ),
                'selector' => '{{WRAPPER}} .quiktheme-creative-btn',
                'scheme' => Typography::TYPOGRAPHY_4,
            ]
		);

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_border',
				'exclude' => ['color'], //remove border color
                'selector' => '{{WRAPPER}} .quiktheme-creative-btn, {{WRAPPER}} .quiktheme-creative-btn.quiktheme-eft--bloom div',
                'conditions' => [
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'hermosa_effect',
									'operator' => '!=',
									'value' => 'roundup',
								],
							],
						],
						[
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '!=',
									'value' => '',
								],
							],
						]
					]
				]
            ]
        );

        $this->add_responsive_control(
            'button_border_radius',
            [
                'label' => __( 'Border Radius', 'quik-theme-addons' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--hermosa.quiktheme-eft--bloom div' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_responsive_control(
			'button_hermosa_roundup_stroke_width',
			[
				'label' => __('Stroke Width', 'quik-theme-addons'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 10,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .quiktheme-creative-btn.quiktheme-eft--roundup' => '--ha-ctv-btn-stroke-width: {{SIZE}}{{UNIT}};',
				],
                'conditions' => [
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'hermosa_effect',
									'operator' => '==',
									'value' => 'roundup',
								],
							],
						],
						[
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'hermosa',
								],
							],
						]
					]
				]
			]
		);


		$this->add_responsive_control(
            'button_padding',
            [
                'label' => __( 'Padding', 'quik-theme-addons' ),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--iconica > span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--montino.quiktheme-eft--winona > span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--montino.quiktheme-eft--winona::after' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--montino.quiktheme-eft--rayen > span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--montino.quiktheme-eft--rayen::before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--montino.quiktheme-eft--nina' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--montino.quiktheme-eft--nina::before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

                    '{{WRAPPER}} .quiktheme-creative-btn.quiktheme-stl--hermosa.quiktheme-eft--bloom span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'separator' => 'before'
            ]
		);

		$conditions = [
			'terms' => [
				[
					'relation' => 'or',
					'terms' => [
						[
							'name' => 'hermosa_effect',
							'operator' => '!=',
							'value' => 'roundup',
						],
					],
				],
				[
					'terms' => [
						[
							'name' => 'btn_style',
							'operator' => '!=',
							'value' => '',
						],
					],
				]
			]
		];
		$this->start_controls_tabs( '_tabs_button' );

        $this->start_controls_tab(
            '_tab_button_normal',
            [
                'label' => __( 'Normal', 'quik-theme-addons' ),
            ]
		);

        $this->add_control(
            'button_text_color',
            [
                'label' => __( 'Text Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn' => '--ha-ctv-btn-txt-clr: {{VALUE}}',
                ],
            ]
        );

		$this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Background Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn' => '--ha-ctv-btn-bg-clr: {{VALUE}}',
                ],
				'conditions' => $conditions,
            ]
        );

        $this->add_control(
            'button_border_color',
            [
                'label' => __( 'Border Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn' => '--ha-ctv-btn-border-clr: {{VALUE}}',
                ],
                'conditions' => [
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'hermosa_effect',
									'operator' => '!=',
									'value' => 'roundup',
								],
							],
						],
						[
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '!=',
									'value' => '',
								],
								[
									'name' => 'button_border_border',
									'operator' => '!=',
									'value' => '',
								],
							],
						]
					]
				]
            ]
        );

        $this->add_control(
            'button_roundup_circle_color',
            [
                'label' => __( 'Circle Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn.quiktheme-eft--roundup' => '--ha-ctv-btn-border-clr: {{VALUE}}',
                ],
                'conditions' => [
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'hermosa_effect',
									'operator' => '==',
									'value' => 'roundup',
								],
							],
						],
						[
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'hermosa',
								],
							],
						]
					]
				]
            ]
        );

		$this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'button_box_shadow',
                'selector' => '{{WRAPPER}} .quiktheme-creative-btn'
            ]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
            '_tabs_button_hover',
            [
                'label' => __( 'Hover', 'quik-theme-addons' ),
            ]
		);

		$this->add_control(
            'button_hover_text_color',
            [
                'label' => __( 'Text Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn' => '--ha-ctv-btn-txt-hvr-clr: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => __( 'Background Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn' => '--ha-ctv-btn-bg-hvr-clr: {{VALUE}}',
                ],
				'conditions' => $conditions,
            ]
        );

        $this->add_control(
            'button_hover_border_color',
            [
                'label' => __( 'Border Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn' => '--ha-ctv-btn-border-hvr-clr: {{VALUE}}',
                ],
                'conditions' => [
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'hermosa_effect',
									'operator' => '!=',
									'value' => 'roundup',
								],
							],
						],
						[
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '!=',
									'value' => '',
								],
								[
									'name' => 'button_border_border',
									'operator' => '!=',
									'value' => '',
								],
							],
						]
					]
				]
            ]
        );

        $this->add_control(
            'button_hover_roundup_circle_color',
            [
                'label' => __( 'Circle Color', 'quik-theme-addons' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .quiktheme-creative-btn-wrap .quiktheme-creative-btn.quiktheme-eft--roundup' => '--ha-ctv-btn-border-hvr-clr: {{VALUE}}',
                ],
                'conditions' => [
					'terms' => [
						[
							'relation' => 'or',
							'terms' => [
								[
									'name' => 'hermosa_effect',
									'operator' => '==',
									'value' => 'roundup',
								],
							],
						],
						[
							'terms' => [
								[
									'name' => 'btn_style',
									'operator' => '==',
									'value' => 'hermosa',
								],
							],
						]
					]
				]
            ]
        );

		$this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'button_hover_box_shadow',
                'selector' => '{{WRAPPER}} .quiktheme-creative-btn:hover'
            ]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}

    protected function render() {
		$settings = $this->get_settings_for_display();
		$this->add_render_attribute( 'wrap', 'data-magnetic', $settings['magnetic_enable'] ? $settings['magnetic_enable'] : 'no' );
		$this->{'render_' . $settings['btn_style'] . '_markup'}($settings);

	}

}
$widgets_manager->register_widget_type(new \Quiktheme\Widgets\Elementor\Quik_Theme_Creative_Button());