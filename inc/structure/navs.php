<?php

namespace Phoenixdigi\App\Structure;

/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas() {
	register_nav_menus([
		'primary' => __( 'Primary', 'atz' ),
		'mobile' => __( 'Mobile', 'atz' ),
	]);
}
//add_action( 'after_setup_theme', 'Phoenixdigi\App\Structure\register_navigation_areas' );
