<?php

/*
 * Plugin Name: Saber Dashboard
 * Version: 0.0.1
 */

namespace SaberDashboard;

define( 'SABER_DASHBOARD_PATH', \plugin_dir_path( __FILE__ ) );
define( 'SABER_DASHBOARD_URL', \plugin_dir_url( __FILE__ ) );

class Plugin {

	public function __construct() {

		add_filter( 'template_include', [$this, 'templates'] );

	}

	public function templates( $template ) {

		// Provide single template.
		global $post;
    if ( is_page() && $post->post_name === 'dashboard' ) {
    	$template = SABER_DASHBOARD_PATH . '/templates/page-dashboard.php';
    }

    return $template;
		
	}

}

new Plugin();
