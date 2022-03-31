<?php
/**
 * Main plugin functionality.
 *
 * @package   Gutenberg_Interactive
 */

namespace Gutenberg_Interactive;

/**
 * Class Blocks
 */
class Blocks {

	const COMPONENTS = array(
		GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH . '/src/accordion/class-accordion-block-type.php' => Accordion_Block_Type::class,
		GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH . '/src/carousel/class-carousel-block-type.php' => Carousel_Block_Type::class,
		GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH . '/src/social-share/class-social-share-block-type.php' => Social_Share_Block_Type::class,
		GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH . '/src/date-countdown/class-date-countdown-block-type.php' => Date_Countdown_Block_Type::class,
		GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH . '/src/fit-text/class-fit-text-block-type.php' => Fit_Text_Block_Type::class,
		GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH . '/src/sidebar/class-sidebar-block-type.php' => Sidebar_Block_Type::class,
		GUTENBERG_INTERACTIVE_BLOCKS_ABSPATH . '/src/lightbox-gallery/class-lightbox-gallery.php' => Lightbox_Gallery::class,
	);

	const INTERACTIVE_RUNTIME_SCRIPT_HANDLE = 'interactive-runtime';

	/**
	 * Blocks instance.
	 *
	 * @var Blocks
	 */
	protected static $instance = null;

	/**
	 * Gutenberg_Interactive constructor.
	 */
	public function __construct() {
		$this->includes();
		$this->init_hooks();
		$this->register_block_types();
	}

	/**
	 * Include required core files.
	 */
	public function includes() {

		// Load components class files.
		foreach ( self::COMPONENTS as $filepath => $classname ) {
			require_once $filepath;
		}
	}

	/**
	 * Initializes hooks.
	 */
	protected function init_hooks() {

		add_action( 'init', array( $this, 'register_interactive_assets' ) );

		// Register custom block category.
		if ( class_exists( 'WP_Block_Editor_Context' ) ) {
			// Class WP_Block_Editor_Context does only exist in WP >= 5.8.
			add_filter( 'block_categories_all', array( $this, 'register_custom_block_category' ), 10, 2 );
		} else {
			add_filter( 'block_categories', array( $this, 'register_custom_block_category_old' ), 10, 2 );
		}

	}

	/**
	 * Registers the scripts and styles for Bento components.
	 *
	 * Note that 'amp-runtime' and 'interactive-base-carousel' are scripts registered by the AMP plugin. The Bento versions aren't
	 * currently registered, so that is why this function needs to run currently on AMP pages.
	 *
	 * @return void
	 */
	function register_bento_assets() {
		wp_register_script( self::INTERACTIVE_RUNTIME_SCRIPT_HANDLE, 'https://cdn.ampproject.org/bento.js', array(), false, true );
	}

	/**
	 * Register custom block category
	 *
	 * @param array[]                  $block_categories     Array of categories for block types.
	 * @param \WP_Block_Editor_Context $block_editor_context The current block editor context.
	 *
	 * @return array
	 */
	public function register_custom_block_category( $block_categories, $block_editor_context ) {
		return $this->add_custom_block_category( $block_categories );
	}

	/**
	 * Register custom block category (Pre WP 5.8)
	 *
	 * @param array    $categories List of all registered categories.
	 * @param \WP_Post $post    Current post object.
	 *
	 * @return array
	 */
	public function register_custom_block_category_old( $categories, $post ) {
		return $this->add_custom_block_category( $categories );
	}

	/**
	 * Adds custom block category to given categories array
	 *
	 * @param array $block_categories List of all registered categories.
	 *
	 * @return array
	 */
	protected function add_custom_block_category( $block_categories ) {
		return array_merge(
			$block_categories,
			array(
				array(
					'slug'  => 'gutenberg-interactive-blocks',
					'title' => __( 'Bento Blocks', 'gutenberg-interactive' ),
				),
			)
		);
	}

	/**
	 * Load plugin textdomain
	 */
	public function load_plugin_textdomain() {
		$domain = 'gutenberg-interactive';
		load_plugin_textdomain( $domain, false, $this->languages_dir );
	}

	/**
	 * Register block types
	 */
	public function register_block_types() {

		foreach ( self::COMPONENTS as $classname ) {
			$block_type = new $classname();
			$block_type->register();
		}
	}

	/**
	 * Main Gutenberg_Interactive_Blocks Instance
	 * Ensures only one instance of Gutenberg_Interactive_Blocks is loaded or can be loaded.
	 *
	 * @return Blocks Plugin instance
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

}
