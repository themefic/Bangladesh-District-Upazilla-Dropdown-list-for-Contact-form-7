<?php
/*
Plugin Name: Bangladesh (District & Upazilla) Dropdown list for Contact form 7
Plugin URI: https://themefic.com/
Description: Add Dropdown List of Bangladesh District and Upazilla to the popular Contact Form 7 plugin.
Version: 0.1.2
Author: Themefic
Author URI: https://psdtowpservice.com/meet-the-team/
License: GPLv2 or later
Text Domain: cf7-bdlist
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CF7BDLIST_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Tag Generator Register
require_once( CF7BDLIST_PLUGIN_DIR.'inc/en/district-list-english.php' );
require_once( CF7BDLIST_PLUGIN_DIR.'inc/en/upazilla-list-english.php' );
require_once( CF7BDLIST_PLUGIN_DIR.'inc/bn/district-list-bangla.php' );
require_once( CF7BDLIST_PLUGIN_DIR.'inc/bn/upazilla-list-bangla.php' );

/**
 * 
 * Check if CF7 is installed and activated.
 * 		Deliver a message to install CF7 if not.
 * 
 */

add_action( 'admin_init', 'cf7bdlist_has_parent_plugin' );
function cf7bdlist_has_parent_plugin() {
	if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
		add_action( 'admin_notices', 'cf7bdlist_nocf7_notice' );

		deactivate_plugins( plugin_basename( __FILE__ ) ); 

		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}
	}
}

function cf7bdlist_nocf7_notice() { ?>
	<div class="error">
		<p>
			<?php printf(
				__('%s must be installed and activated for the Bangladesh (District & Upazilla) Dropdown list for Contact form 7 plugin to work', 'contact-form-7-bd'),
				'<a href="'.admin_url('plugin-install.php?tab=search&s=contact+form+7').'">Contact Form 7</a>'
			); ?>
		</p>
	</div>
	<?php
}