<?php
$wp_customize->add_section(
	'sidebar_options',
	array(
		'title' => esc_html__( 'SideBar Options', 'newsarc' ),
		'panel' => 'archive_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[sidebar_layout_option]',
    array(
        'default'           => $newsarc_default['sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newsarc_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Newsarc_Custom_Radio_Image_Control(
        $wp_customize,
        'newsarc_options[sidebar_layout_option]',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (archive)', 'newsarc' ),
            'section'       => 'sidebar_options',
            'choices'       => newsarc_get_sidebar_layouts(),
        )
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
            'section'       => 'sidebar_options',
            'choices'       => newsarc_get_sidebar_layouts(),
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[enable_sidebar_fix_archive]',
    array(
        'default'           => $newsarc_default['enable_sidebar_fix_archive'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_sidebar_fix_archive]',
    array(
        'label'    => __( 'Enable Sticky Sidebar', 'newsarc' ),
        'section'     => 'sidebar_options',
        'type'        => 'checkbox',
    )
);
