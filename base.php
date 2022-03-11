<?php

use \Elementor\Plugin as Plugin;
// use QuikthemeAddons\Includes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Quik_Theme_Extension {

	const VERSION = '1.0.0';
	const MINIMUM_ELEMENTOR_VERSION = '2.6.0';
	const MINIMUM_PHP_VERSION = '5.6';


	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


	public function __construct() {

		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );

	}

	public function i18n() {
		load_plugin_textdomain( 'quik-theme-addons' );
	}



	public function init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}



		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		add_action( 'elementor/elements/categories_registered',[$this,'register_new_category']);

		add_action( 'elementor/editor/after_enqueue_scripts', [$this, 'quik_theme_editor_scripts_js'], 100);
		add_action( 'elementor/frontend/before_register_scripts', [ $this, 'quik_theme_register_frontend_scripts' ] );
	}

	/**
	* Load Frontend Script
	*
	*/
	public function quik_theme_register_frontend_scripts(){

		// css enqueue
		wp_enqueue_style(
			'quiktheme-addons-style',
			QUIK_THEME_ASSETS_PUBLIC .'/css/widget-style.css',
			null,QUIK_THEME_VERSION
		);

		wp_enqueue_style(
			'quiktheme-creative-button-style',
			QUIK_THEME_ASSETS_PUBLIC .'/css/creative-button.css',
			null,QUIK_THEME_VERSION
		);

		wp_enqueue_style(
			'quiktheme-inline-button-style',
			QUIK_THEME_ASSETS_PUBLIC .'/css/inline-button.css',
			null, QUIK_THEME_VERSION
		);


		wp_enqueue_style(
			'prism',
			QUIK_THEME_ASSETS_PUBLIC .'/css/prism.css',
			null,QUIK_THEME_VERSION
		);

		// Js enqueue
		wp_enqueue_script(
			'quiktheme-widget',
			QUIK_THEME_ASSETS_PUBLIC .'/js/widget.js',
			['jquery'], QUIK_THEME_VERSION, true
		);


		wp_enqueue_script(
			'prism',
			QUIK_THEME_ASSETS_PUBLIC .'/js/prism.js',
			['jquery'], QUIK_THEME_VERSION, true
		);


	}

	public function quik_theme_editor_scripts_js(){
		wp_enqueue_style(
			'feather-icon',
			QUIK_THEME_ASSETS_PUBLIC .'/fonts/feather-icon/feather-icon-style.min.css',
			null,QUIK_THEME_VERSION
		);
		wp_enqueue_script(
			'quiktheme-addons-editor',
			QUIK_THEME_ASSETS_PUBLIC .'/js/editor.js',
			['jquery'], QUIK_THEME_VERSION, true
		);


	}



	/**
	 * Widgets Catgory
	 *
	*/
	public function register_new_category($manager){
	   $manager->add_category('quik-theme-addons',
			[
				'title' => __( 'QuikTheme Elementor Helper  Addons', 'quik-theme-addons' ),
			]);
	}

	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'quik-theme-addons' ),
			'<strong>' . esc_html__( 'Elementor Pawelements Extension', 'quik-theme-addons' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'quik-theme-addons' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'quik-theme-addons' ),
			'<strong>' . esc_html__( 'Elementor quiktheme- Extension', 'quik-theme-addons' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'quik-theme-addons' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'quik-theme-addons' ),
			'<strong>' . esc_html__( 'Elementor Quiktheme Extension', 'quik-theme-addons' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'quik-theme-addons' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function init_widgets() {

		$widgets_manager = \Elementor\Plugin::instance()->widgets_manager;


		/*
		* Extensions Include
		*/
		require_once( QUIK_THEME_WIDGET_EXTENSIONS . 'custom-css.php' );
		require_once( QUIK_THEME_WIDGET_EXTENSIONS . 'icons-manager.php' );


		/*
		* Widget Include
		*/
		require_once( QUIK_THEME_WIDGET_DIR . 'DualHeading/widget.php' );
		require_once( QUIK_THEME_WIDGET_DIR . 'DualButton/widget.php' );
		require_once( QUIK_THEME_WIDGET_DIR . 'CreativeButton/widget.php' );
		require_once( QUIK_THEME_WIDGET_DIR . 'InlineButton/widget.php' );

	}
}
Quik_Theme_Extension::instance();
