<?php
/**
 * All Site Panel.
 *
 * @package NewsArc
 */
$widgets_link = admin_url( 'widgets.php' );
$wp_customize->remove_setting( 'display_header_text' );
$wp_customize->remove_control( 'display_header_text' );

$wp_customize->add_setting(
    'newsarc_options[hide_title]',
    array(
        'default' => $newsarc_default['hide_title'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[hide_title]',
    array(
			'label'    => __( 'Hide Site Title', 'newsarc' ),
        'section' => 'title_tagline',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[hide_tagline]',
    array(
        'default' => $newsarc_default['hide_tagline'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[hide_tagline]',
    array(
			'label'    => __( 'Hide Tagline', 'newsarc' ),
        'section' => 'title_tagline',
        'type' => 'checkbox',
    )
);

// Move Site Identity section inside our basic panel.
$site_identity = $wp_customize->get_section( 'title_tagline' );
$site_identity->panel = 'general_options_panel';

// Move Header Image section inside our basic panel.
$site_identity = $wp_customize->get_section( 'header_image' );
$site_identity->panel = 'general_options_panel';

// Move background Image section inside our basic panel.
$site_identity = $wp_customize->get_section( 'background_image' );
$site_identity->panel = 'general_options_panel';

// Move background Image section inside our basic panel.
$site_identity = $wp_customize->get_section( 'colors' );
$site_identity->panel = 'general_options_panel';

// Add General Settings Panel.
$wp_customize->add_panel(
	'general_options_panel',
	array(
		'title'       => __( 'General Settings', 'newsarc' ),
		'description' => __( 'Some basic options for the site.', 'newsarc' ),
		'priority'    => 10,
	)
);

// Add Header Options Panel.
$wp_customize->add_panel(
	'header_options_panel',
	array(
		'title'       => __( 'Header Options', 'newsarc' ),
		'description' => __( 'Some basic options for the site.', 'newsarc' ),
		'priority'    => 15,
	)
);

// single options panel
$wp_customize->add_panel(
	'single_options_panel',
	array(
		'title'       => __( 'Single Options', 'newsarc' ),
		'description' => __( 'Some basic options for single page of the site.', 'newsarc' ),
		'priority'    => 15,
	)
);


// archive options panel
$wp_customize->add_panel(
	'archive_options_panel',
	array(
		'title'       => __( 'Archive Options', 'newsarc' ),
		'description' => __( 'Some basic options for Archive of the site.', 'newsarc' ),
		'priority'    => 15,
	)
);


// Add Header Options Panel.
$wp_customize->add_panel(
	'front_page_theme_options_panel',
	array(
		'title'       => __( 'Front Page Option', 'newsarc' ),
		'description' => __( 'Some basic options for the site.', 'newsarc' ),
		'priority'    => 15,
	)
);


// Footer Options
$wp_customize->add_panel(
	'footer_options_panel',
	array(
		'title'       => __( 'Footer Options', 'newsarc' ),
		'description' => __( 'Some basic options for Footer of the site.', 'newsarc' ),
		'priority'    => 15,
	)
);

// general section
require get_template_directory() . '/inc/admin/customizer/sections/breadcrumb.php';
require get_template_directory() . '/inc/admin/customizer/sections/preloader.php';

// header section
require get_template_directory() . '/inc/admin/customizer/sections/header-style.php';
require get_template_directory() . '/inc/admin/customizer/sections/top-bar.php';
require get_template_directory() . '/inc/admin/customizer/sections/mobile-menu.php';

// archive section
require get_template_directory() . '/inc/admin/customizer/sections/archive.php';
require get_template_directory() . '/inc/admin/customizer/sections/excerpt.php';
require get_template_directory() . '/inc/admin/customizer/sections/sidebar.php';

// single page section
require get_template_directory() . '/inc/admin/customizer/sections/single.php';
require get_template_directory() . '/inc/admin/customizer/sections/single-related-post.php';
require get_template_directory() . '/inc/admin/customizer/sections/show-author-post.php';

// front page section
require get_template_directory() . '/inc/admin/customizer/sections/tags.php';
require get_template_directory() . '/inc/admin/customizer/sections/ticker-post.php';
require get_template_directory() . '/inc/admin/customizer/sections/popular-post.php';
require get_template_directory() . '/inc/admin/customizer/sections/slider-banner.php';
require get_template_directory() . '/inc/admin/customizer/sections/main-banner.php';
require get_template_directory() . '/inc/admin/customizer/sections/must-read.php';
require get_template_directory() . '/inc/admin/customizer/sections/featured-category.php';
require get_template_directory() . '/inc/admin/customizer/sections/footer-recommended.php';

//footer section
require get_template_directory() . '/inc/admin/customizer/sections/footer-widget.php';
require get_template_directory() . '/inc/admin/customizer/sections/footer.php';

// upsell
require get_template_directory() . '/inc/admin/customizer/helpers/theme-upsell.php';


