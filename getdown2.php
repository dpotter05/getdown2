<?php
/**
 * Plugin Name:       Getdown2
 * Description:       This custom Gutenberg block adds a lightweight slider with an option to turn your slides into polaroid pictures.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           2.0
 * Author:            David Potter
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       getdown2
 *
 * @package           create-block
 */

 defined( "ABSPATH" ) or die( "Access not allowed." );

function getdown2_getdown2_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'getdown2_getdown2_block_init' );

