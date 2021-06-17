<?php
/**
 * Plugin Name:       CI-CD
 * Description:       Example block written with ESNext standard and JSX support – build step required.lala
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ci-cd
 *
 * @package           create-block
 */
// Test add code
function cc_load_footer_scripts() {
	$index_js     = 'scripts/index.js';
	wp_enqueue_script('script-name', plugins_url( $index_js, __FILE__ ), false, '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'cc_load_footer_scripts' );