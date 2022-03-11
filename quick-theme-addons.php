<?php
/*
Plugin Name: Quik Theme Addons For Elementor
Plugin URI: https://github.com/masumskaib396/quik-theme-addons
Description: The Quiktheme is an Elementor helping plugin that will make your designing work easier.
Our specialities are custom CSS, Nested section, Creative Buttons.
Version: 1.0.0
Author: FinestWP
Author URI: http://finestdevs.com
License: GPLv2 or later
Text Domain: quick-theme-addons
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//Set plugin version constant.
define( 'QUIK_THEME_VERSION', '1.0.0');

/* Set constant path to the plugin directory. */
define( 'QUIK_THEME_WIDGET', trailingslashit( plugin_dir_path( __FILE__ ) ) );
// Plugin Function Folder Path
define( 'QUIK_THEME_WIDGET_INC', plugin_dir_path( __FILE__ ) . 'inc/' );

// Plugin Extensions Folder Path
define( 'QUIK_THEME_WIDGET_EXTENSIONS', plugin_dir_path( __FILE__ ) . 'extensions/' );

// Plugin Widget Folder Path
define( 'QUIK_THEME_WIDGET_DIR', plugin_dir_path( __FILE__ ) . 'widgets/' );

// Assets Folder URL
define( 'QUIK_THEME_ASSETS_PUBLIC', plugins_url( 'assets/frontend', __FILE__ ) );
define( 'QUIK_THEME_ASSETS_ADMIN', plugins_url( 'assets/admin/', __FILE__ ) );

// Assets Folder URL
define( 'QUIK_THEME_ASSETS_VERDOR', plugins_url( 'assets/vendor', __FILE__ ) );



require_once( QUIK_THEME_WIDGET . 'base.php' );
require_once( QUIK_THEME_WIDGET . 'traits/quiktheme-button-murkup.php');
require_once( QUIK_THEME_WIDGET . 'traits/quiktheme-inline-button-murkup.php');

?>
