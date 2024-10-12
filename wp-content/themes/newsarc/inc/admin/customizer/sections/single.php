<?php
/**
 * All settings related to single.
 *
 * @package NewsArc
 */
$wp_customize->add_section(
	'single_options',
	array(
		'title' => esc_html__( 'Single Page Options', 'newsarc' ),
		'panel' => 'single_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_single_author_meta]',
    array(
        'default'           => $newsarc_default['enable_single_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_single_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_single_author_meta]',
    array(
        'default'           => $newsarc_default['select_single_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_single_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'       => newsarc_author_meta(),


    )
);

$wp_customize->add_setting(
    'newsarc_options[single_author_meta_title]',
    array(
        'default'           => $newsarc_default['single_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[single_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newsarc' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_single_date_meta]',
    array(
        'default'           => $newsarc_default['enable_single_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_single_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_single_date]',
    array(
        'default'           => $newsarc_default['select_single_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_single_date]',
    array(
        'label'         => esc_html__( 'Select Posted on Date Meta', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'       => newsarc_date_meta(),

    )
);

$wp_customize->add_setting(
    'newsarc_options[single_date_meta_title]',
    array(
        'default'           => $newsarc_default['single_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[single_date_meta_title]',
    array(
        'label'    => __( 'Date Text', 'newsarc' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_single_date_format]',
    array(
        'default'           => $newsarc_default['select_single_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_single_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'  		=> newsarc_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_single_category_meta]',
    array(
        'default'           => $newsarc_default['enable_single_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_single_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Single Category Meta', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newsarc_options[single_category_label]',
    array(
        'default'           => $newsarc_default['single_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[single_category_label]',
    array(
        'label'    => __( 'Category Title', 'newsarc' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_single_category_color]',
    array(
        'default'           => $newsarc_default['select_single_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_single_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'  		=> newsarc_category_color(),

    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_single_tag_meta]',
    array(
        'default'           => $newsarc_default['enable_single_tag_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_single_tag_meta]',
    array(
        'label'       => esc_html__( 'Enable Tag Meta', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_single_read_time_meta]',
    array(
        'default'           => $newsarc_default['enable_single_read_time_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_single_read_time_meta]',
    array(
        'label'       => esc_html__( 'Enable Read Time', 'newsarc' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);



$wp_customize->add_setting(
    'newsarc_section_seperator_single_5',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Newsarc_Seperator_Control(
        $wp_customize,
        'newsarc_section_seperator_single_5',
        array(
            'settings' => 'newsarc_section_seperator_single_5',
            'section'       => 'single_options',
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[show_sticky_article_navigation]',
    array(
        'default'           => $newsarc_default['show_sticky_article_navigation'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[show_sticky_article_navigation]',
    array(
        'label'    => __( 'Show Sticky Article Navigation', 'newsarc' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Show Author Info Box start
*-------------------------------*/
$wp_customize->add_setting(
    'newsarc_section_seperator_single_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Newsarc_Seperator_Control(
        $wp_customize,
        'newsarc_section_seperator_single_2',
        array(
            'settings' => 'newsarc_section_seperator_single_2',
            'section'       => 'single_options',
        )
    )
);

$wp_customize->add_setting(
    'newsarc_options[show_author_info]',
    array(
        'default'           => $newsarc_default['show_author_info'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[show_author_info]',
    array(
        'label'    => __( 'Show Author Info Box', 'newsarc' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_section(
    'single_sidebar_options',
    array(
        'title' => esc_html__( 'SideBar Options', 'newsarc' ),
        'panel' => 'single_options_panel',
    )
);


$wp_customize->add_setting(
    'newsarc_options[single_sidebar_layout_option]',
    array(
        'default'           => $newsarc_default['single_sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newsarc_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Newsarc_Custom_Radio_Image_Control(
        $wp_customize,
        'newsarc_options[single_sidebar_layout_option]',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (Single)', 'newsarc' ),
            'section'       => 'single_sidebar_options',
            'choices'       => newsarc_get_sidebar_layouts(),
        )
    )
);




$wp_customize->add_setting(
    'newsarc_options[enable_sidebar_fix_single]',
    array(
        'default'           => $newsarc_default['enable_sidebar_fix_single'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_sidebar_fix_single]',
    array(
        'label'    => __( 'Enable Sticky Sidebar', 'newsarc' ),
        'section'     => 'single_options_panel',
        'type'        => 'checkbox',
    )
);