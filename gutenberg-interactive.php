<?php
/**
 * Plugin file.
 *
 * @package   Gutenberg_Interactive
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link      https://github.com/swissspidy/gutenberg-interactive
 *
 * Plugin Name: Gutenberg&nbsp;❤️&nbsp;&nbsp;Interactivity 
 * Plugin URI:  https://github.com/swissspidy/gutenberg-interactive/
 * Description: A plugin to show different approaches of creating interactive blocks with Gutenberg.
 * Version:     0.0.1
 * Author:      Pascal Birchler
 * Author URI:  https://pascalbirchler.com
 * License:     Apache License 2.0
 * License URI: https://www.apache.org/licenses/LICENSE-2.0
 * Text Domain: gutenberg-interactive
 * Requires at least: 5.8
 * Requires PHP: 5.6
 */

function interactive_block_demos_alpine_render_callback( $attributes, $content ) {
	wp_enqueue_script( 'AlpineJS' );
	return $content;
}

function interactive_block_demos_register() {
	wp_register_script(
		'AlpineJS',
		'https://unpkg.com/alpinejs@3.9.6/dist/cdn.min.js',
		array(),
		"3.9.6", 
		true // Load it in the footer
	);

	register_block_type(  __DIR__ . '/build/counter-js/block.json' );
	register_block_type(  __DIR__ . '/build/counter-web-component/block.json' );
	register_block_type(  __DIR__ . '/build/counter-alpine/block.json', array(
		'render_callback' => 'interactive_block_demos_alpine_render_callback'
	));
}

add_action( 'init', 'interactive_block_demos_register');

