<?php

class Shareshop_Setting {

	protected $plugin_name;
	protected $version;

	public function __construct() {

		$this->plugin_name = 'shop-share-test';
		$this->version = '1.0.0';

		$this->set_plugin_in_menu();


		
	}


	private function set_plugin_in_menu(){
		add_action('admin_menu', function() {
			// add_submenu_page(
			// 	'woocommerce',
			add_menu_page(
				'Share & Shop THUYEN',
				'Share & Shop THUYEN',
				'manage_options',
				'woo_api',
				[$this, 'display_plugin_menu_page'],
				'',
				57
			);
		});
	}


	public function display_plugin_menu_page() {
	    include_once( SHARESHOP__PLUGIN_DIR . 'views/shop-share-menu-display.php' );
	}


}