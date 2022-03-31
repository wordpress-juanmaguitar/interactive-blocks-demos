<?php
/**
 * Plugin file.
 *
 * @package   Gutenberg_Interactive
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link      https://github.com/swissspidy/gutenberg-interactive
 *
 * Plugin Name: Gutenberg&nbsp;❤️&nbsp;&nbsp;Bento
 * Plugin URI:  https://github.com/swissspidy/gutenberg-interactive/
 * Description: An exploratory plugin for using <a href="https://amp.dev/documentation/guides-and-tutorials/start/bento_guide/">Bento components</a> in Gutenberg.
 * Version:     0.0.1
 * Author:      Pascal Birchler
 * Author URI:  https://pascalbirchler.com
 * License:     Apache License 2.0
 * License URI: https://www.apache.org/licenses/LICENSE-2.0
 * Text Domain: gutenberg-interactive
 * Requires at least: 5.8
 * Requires PHP: 5.6
 */

// Define WP_BOOTSTRAP_BLOCKS_PLUGIN_FILE.
if ( ! defined( 'GUTENBERG_INTERACTIVE_BLOCKS_PLUGIN_FILE' ) ) {
	define( 'GUTENBERG_INTERACTIVE_BLOCKS_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH' ) ) {
	define( 'GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH', trailingslashit( dirname( GUTENBERG_INTERACTIVE_BLOCKS_PLUGIN_FILE ) ) );
}

if ( ! defined( 'GUTENBERG_INTERACTIVE_BLOCKS_ASSETSURL' ) ) {
	define( 'GUTENBERG_INTERACTIVE_BLOCKS_ASSETSURL', esc_url( trailingslashit( plugins_url( '/build/', GUTENBERG_INTERACTIVE_BLOCKS_PLUGIN_FILE ) ) ) );
}

require_once __DIR__ . '/inc/class-blocks.php';
Gutenberg_Interactive\Blocks::instance();
