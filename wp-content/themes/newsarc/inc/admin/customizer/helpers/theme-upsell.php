<?php
// Upsell.
$wp_customize->add_section(
	'theme_upsell',
	array(
		'title'    => esc_html__( 'Unlock More Features', 'newsarc' ),
		'priority' => 1,
	)
);
$wp_customize->add_setting(
	'theme_pro_features',
	array(
		'sanitize_callback' => '__return_true',
	)
);
$wp_customize->add_control(
	new Newsarc_Upsell(
		$wp_customize,
		'theme_pro_features',
		array(
			'section' => 'theme_upsell',
			'type'    => 'upsell',
		)
	)
);

$wp_customize->add_section(
	new Newsarc_Section_Features_List(
		$wp_customize,
		'theme_header_features',
		array(
			'title'         => esc_html__( 'More Options on NewsArc Pro!', 'newsarc' ),
			'features_list' => array(
				esc_html__( 'Dark mode options', 'newsarc' ),
				esc_html__( 'Menu badge options', 'newsarc' ),
				esc_html__( '17+ Preloader options', 'newsarc' ),
				esc_html__( 'More color options', 'newsarc' ),
				esc_html__( '404 page options', 'newsarc' ),
				esc_html__( '... and many other premium features', 'newsarc' ),
			),
			'panel'         => 'header_options_panel',
			'priority'      => 999,
		)
	)
);
