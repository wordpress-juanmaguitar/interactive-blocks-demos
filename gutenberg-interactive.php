<?php
/**
 * Plugin file.
 *
 * @package   Gutenberg_Interactive
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/wordpress-juanmaguitar/interactive-blocks-demos/
 *
 * Plugin Name: Gutenberg&nbsp;❤️&nbsp;&nbsp;Interactivity 
 * Plugin URI:  https://github.com/wordpress-juanmaguitar/interactive-blocks-demos/
 * Description: A plugin to show different approaches of creating interactive blocks with Gutenberg.
 * Version:     0.0.1
 * Author:      Juanma Garrido
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
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

