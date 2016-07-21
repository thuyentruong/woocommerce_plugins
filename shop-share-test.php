<?php
 /*
 * Plugin Name:       THUYEN Share Shop 2
 * Plugin URI:        http://localhost
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            ThuyenTruong
 * Author URI:        http://localhost
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       thuyen-share-shop
 * Domain Path:       /languages
 */


define( 'SHARESHOP__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( SHARESHOP__PLUGIN_DIR . 'includes/class.shareshop-setting.php' );

$plugin = new Shareshop_Setting();



