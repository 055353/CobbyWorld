<?php
/**
 * All settings related to preloader.
 *
 * @package NewsArc
 */
$wp_customize->add_section(
	'preloader_options',
	array(
		'title' => esc_html__( 'Preloader Options', 'newsarc' ),
		'panel' => 'general_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_preloader_options]',
    array(
        'default'           => $newsarc_default['enable_preloader_options'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_preloader_options]',
    array(
        'label'       => esc_html__( 'Enable Preloader Option', 'newsarc' ),
        'section'     => 'preloader_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[newsarc_preloader_style]',
    array(
        'default'           => $newsarc_default['newsarc_preloader_style'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[newsarc_preloader_style]',
    array(
        'label'         => esc_html__( 'Select Preloader Style', 'newsarc' ),
        'section'     => 'preloader_options',
        'type'        => 'select',
        'choices'       => newsarc_preloader_style_option(),

    )
);
