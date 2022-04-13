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

function register_interactive_block_demos() {
	register_block_type(  __DIR__ . '/build/counter-js/block.json' );
	register_block_type(  __DIR__ . '/build/counter-web-component/block.json' );
	register_block_type(  __DIR__ . '/build/counter-alpine/block.json' );
}

add_action( 'init', 'register_interactive_block_demos');