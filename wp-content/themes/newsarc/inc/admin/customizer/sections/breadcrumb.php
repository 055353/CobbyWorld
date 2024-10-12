<?php
$wp_customize->add_section(
	'breadcrumb_options',
	array(
		'title' => __( 'Breadcrumb Options', 'newsarc' ),
		'panel' => 'general_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_breadcrumb]',
    array(
        'default'           => $newsarc_default['enable_breadcrumb'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_breadcrumb]',
    array(
		'label'    => __( 'Enable Breadcrumb', 'newsarc' ),
        'section'     => 'breadcrumb_options',
        'type'        => 'checkbox',
    )
);
