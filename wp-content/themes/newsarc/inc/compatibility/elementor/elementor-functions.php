<?php
/**
 * Custom functions to be used within Elementor plugin.
 *
 * @package    NewsArc
 * @since      NewsArc 1.0.0
 */

if ( ! function_exists( 'newsarc_elementor_categories' ) ) :

	/**
	 * Return the values of all the categories of the posts present in the site.
	 *
	 * @return array of category ids and its respective names.
	 *
	 * @since NewsArc 1.0.0
	 */
	function newsarc_elementor_categories() {
		$output     = array();
		$categories = get_categories();

		foreach ( $categories as $category ) {
			$output[ $category->term_id ] = $category->name;
		}

		return $output;
	}

endif;

if ( ! function_exists( 'newsarc_elementor_styles' ) ) :

	/**
	 * Loads styles on elementor editor.
	 *
	 * @since NewsArc 1.0.0
	 */
	function newsarc_elementor_styles() {
		wp_enqueue_style( 'newsarc-econs', get_template_directory_uri() . '/inc/compatibility/elementor/assets/css/newsarc-econs.css', false, '1.0' );
	}

endif;

add_action( 'elementor/editor/after_enqueue_styles', 'newsarc_elementor_styles' );
