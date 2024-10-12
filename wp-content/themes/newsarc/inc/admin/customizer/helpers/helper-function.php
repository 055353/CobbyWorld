<?php
if (!function_exists('newsarc_get_option')) :
    /**
     * Get customizer value by key.
     *
     * @param string $key Option key.
     * @return mixed Option value.
     * @since 1.0.0
     *
     */
    function newsarc_get_option($key)
    {
        $key_value = '';
        if (!$key) {
            return $key_value;
        }
        $default_values = newsarc_get_all_customizer_default_values();
        $customizer_values = get_theme_mod('newsarc_options');
        $customizer_values = wp_parse_args($customizer_values, $default_values);

        $key_value = (isset($customizer_values[$key])) ? $customizer_values[$key] : '';
        return $key_value;
    }
endif;


if ( ! function_exists( 'newsarc_get_archive_layouts' ) ) :
	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_get_archive_layouts() {
		$options = apply_filters(
			'newsarc_get_archive_layouts',
			array(
				'archive_style_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive-1.webp',
					'label' => esc_html__( 'Archive List View', 'newsarc' ),
				),
				'archive_style_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive-2.webp',
					'label' => esc_html__( 'Archive Grid View', 'newsarc' ),
				),
				'archive_style_3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive-3.webp',
					'label' => esc_html__( 'Archive Alternate Grid View', 'newsarc' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newsarc_get_date_formats' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_get_date_formats() {
		$options = apply_filters(
			'newsarc_archive_date_format',
			array(
				'classic'   => __( 'Classic', 'newsarc' ),
				'time_ago' => __( 'Time Ago', 'newsarc' ),
			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newsarc_line_limit_choices' ) ) :
	/**
	 * Returns title limit options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_line_limit_choices() {
		$options = apply_filters(
			'newsarc_title_limit_options',
			array(
				''              => __( '&mdash; No Limit &mdash;', 'newsarc' ),
				'limit-line-1' => __( '1 Line', 'newsarc' ),
				'limit-line-2' => __( '2 Lines', 'newsarc' ),
				'limit-line-3' => __( '3 Lines', 'newsarc' ),
				'limit-line-4' => __( '4 Lines', 'newsarc' ),
				'limit-line-5' => __( '5 Lines', 'newsarc' ),
			)
		);
		return $options;
	}
endif;
if ( ! function_exists( 'newsarc_archive_category_style' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_archive_category_style() {
		$options = apply_filters(
			'newsarc_archive_category_style',
			array(
				'archive_cat_style_1'   => __( 'Category Style 1', 'newsarc' ),
				'archive_cat_style_2'   => __( 'Category Style 2', 'newsarc' ),
				'archive_cat_style_3'   => __( 'Category Style 3', 'newsarc' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newsarc_archive_read_time_style' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_archive_read_time_style() {
		$options = apply_filters(
			'newsarc_archive_read_time_style',
			array(
				'archive_read_time_style_1'   => __( 'Read Time Style 1', 'newsarc' ),
				'archive_read_time_style_2'   => __( 'Read Time Style 2', 'newsarc' ),
				'archive_read_time_style_3'   => __( 'Read Time Style 3', 'newsarc' ),

			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newsarc_get_header_layout' ) ) :
	/**
	 * Returns header layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_get_header_layout() {
		$options = apply_filters(
			'newsarc_get_header_layout',
			array(
				'header_style_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/header-1.webp',
					'label' => esc_html__( 'Header Style 1', 'newsarc' ),
				),
				'header_style_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/header-2.webp',
					'label' => esc_html__( 'Header Style 2', 'newsarc' ),
				),
                'header_style_3' => array(
                    'url'   => get_template_directory_uri() . '/assets/images/header-3.webp',
                    'label' => esc_html__( 'Header Style 3', 'newsarc' ),
                ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newsarc_social_menu_style' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_social_menu_style() {
		$options = apply_filters(
			'newsarc_social_menu_style',
			array(
				'has-brand-background'   => __( 'Has Brand Background', 'newsarc' ),
				'has-brand-color'   => __( 'Has Brand Color', 'newsarc' ),
				'none'   => __( 'None', 'newsarc' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newsarc_pagination_style_choice' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_pagination_style_choice() {
		$options = apply_filters(
			'newsarc_pagination_style_choice',
			array(
				'pagination_none'   => __( 'None', 'newsarc' ),
				'pagination_numeric'   => __( 'Numeric', 'newsarc' ),
				'pagination_default'   => __( 'Default(New/Old Post)', 'newsarc' ),
				'pagination_ajax_on_scroll'   => __( 'Load More On Scroll', 'newsarc' ),
				'pagination_ajax_on_click'   => __( 'Load More On Click', 'newsarc' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newsarc_category_color' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_category_color() {
		$options = apply_filters(
			'newsarc_category_color',
			array(
				'none'   => __( 'None', 'newsarc' ),
				'has-background'   => __( 'Has background', 'newsarc' ),
				'has-text-color'   => __( 'Has text color', 'newsarc' ),

			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newsarc_get_footer_layouts' ) ) :
	/**
	 * Returns footer layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_get_footer_layouts() {
		$options = apply_filters(
			'newsarc_footer_layouts',
			array(
				'footer_layout_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-4.webp',
					'label' => esc_html__( 'Four Columns', 'newsarc' ),
				),
				'footer_layout_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-3.webp',
					'label' => esc_html__( 'Three Columns', 'newsarc' ),
				),
				'footer_layout_3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2.webp',
					'label' => esc_html__( 'Two Columns', 'newsarc' ),
				),
				'footer_layout_4' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2-big-left.webp',
					'label' => esc_html__( 'Two Columns Big Left', 'newsarc' ),
				),
				'footer_layout_5' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-3-big-middle.webp',
					'label' => esc_html__( 'Three Columns Big Middle', 'newsarc' ),
				),
				'footer_layout_6' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2-big-right.webp',
					'label' => esc_html__( 'Two Columns Big Right', 'newsarc' ),
				),
				'footer_layout_7' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-1.webp',
					'label' => esc_html__( 'Single Column', 'newsarc' ),
				),
			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newsarc_preloader_style_option' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_preloader_style_option() {
		$options = apply_filters(
			'newsarc_preloader_style_option',
			array(
				'style-1'   => __( 'Style - 1', 'newsarc' ),
				'style-2'   => __( 'Style - 2', 'newsarc' ),
				'style-3'   => __( 'Style - 3', 'newsarc' ),
				'style-4'   => __( 'Style - 4', 'newsarc' ),
				'style-5'   => __( 'Style - 5', 'newsarc' ),
				'style-6'   => __( 'Style - 6', 'newsarc' ),
				'style-7'   => __( 'Style - 7', 'newsarc' ),
				'style-8'   => __( 'Style - 8', 'newsarc' ),
				'style-9'   => __( 'Style - 9', 'newsarc' ),
				'style-10'   => __( 'Style - 10', 'newsarc' ),

			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newsarc_get_recommended_post' ) ) :
	/**
	 * Returns recommended layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_get_recommended_post() {
		$options = apply_filters(
			'newsarc_get_recommended_post',
			array(
				'wpi-post-recommendation-1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/recommended-1.webp',
					'label' => esc_html__( 'Recommended List View', 'newsarc' ),
				),
				'wpi-post-recommendation-2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/recommended-2.webp',
					'label' => esc_html__( 'Recommended Grid View', 'newsarc' ),
				),
				'wpi-post-recommendation-3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/recommended-3.webp',
					'label' => esc_html__( 'Recommended Alternate Grid View', 'newsarc' ),
				),
			)
		);
		return $options;
	}
endif;



if ( ! function_exists( 'newsarc_author_meta' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_author_meta() {
		$options = apply_filters(
			'newsarc_author_meta',
			array(
				'with_label'   => __( 'With Label', 'newsarc' ),
				'with_icon'   => __( 'With Icon', 'newsarc' ),
				'with_avatar_image'   => __( 'With Avatar Image', 'newsarc' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newsarc_date_meta' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_date_meta() {
		$options = apply_filters(
			'newsarc_date_meta',
			array(
				'with_label'   => __( 'With Label', 'newsarc' ),
				'with_icon'   => __( 'With Icon', 'newsarc' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newsarc_get_sidebar_layouts' ) ) :
	/**
	 * Returns general layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_get_sidebar_layouts() {
		$options = apply_filters(
			'newsarc_sidebar_layouts',
			array(
				'left-sidebar'      => array(
					'url'   => get_template_directory_uri() . '/assets/images/left-sidebar.webp',
					'label' => esc_html__( 'Left Sidebar', 'newsarc' ),
				),
				'right-sidebar'     => array(
					'url'   => get_template_directory_uri() . '/assets/images/right-sidebar.webp',
					'label' => esc_html__( 'Right Sidebar', 'newsarc' ),
				),
				'no-sidebar'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/no-sidebar.webp',
					'label' => esc_html__( 'No Sidebar - Wide', 'newsarc' ),
				),
			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newsarc_get_social_links_styles' ) ) :
	/**
	 * Returns social links styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newsarc_get_social_links_styles() {
		$options = apply_filters(
			'newsarc_social_links_styles',
			array(
				'style_1' => __( 'Style 1', 'newsarc' ),
				'style_2' => __( 'Style 2', 'newsarc' ),
				'style_3' => __( 'Style 3', 'newsarc' ),
				'style_4' => __( 'Style 4', 'newsarc' ),
			)
		);
		return $options;
	}
endif;
