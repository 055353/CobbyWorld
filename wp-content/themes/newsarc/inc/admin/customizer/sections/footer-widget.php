<?php
// footer widget Options.
$wp_customize->add_section(
    'footer_widget_section',
    array(
        'title' => __('Footer Widget Options', 'newsarc'),
        'panel' => 'footer_options_panel',
    )
);



/*Enable Footer Nav*/
$wp_customize->add_setting(
    'newsarc_options[enable_footer_widget]',
    array(
        'default'           => $newsarc_default['enable_footer_widget'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_footer_widget]',
    array(
        'label'       => __( 'Show Footer widgetarea', 'newsarc' ),
        'section'     => 'footer_widget_section',
        'type'     => 'checkbox',
    )
);

// Option to choose footer column layout.
$wp_customize->add_setting(
	'newsarc_options[footer_column_layout]',
	array(
		'default'           => $newsarc_default['footer_column_layout'],
		'sanitize_callback' => 'newsarc_sanitize_radio',
	)
);
$wp_customize->add_control(
	new Newsarc_Custom_Radio_Image_Control(
		$wp_customize,
		'newsarc_options[footer_column_layout]',
		array(
			'label'       => __( 'Footer Column Layout', 'newsarc' ),
			'description' => __( 'Some footer widgetareas will not be used based on the footer column layout chosen. Also make sure to insert at least one widget on the respective widgetarea for it to display.', 'newsarc' ),
			'section'     => 'footer_widget_section',
			'choices'     => newsarc_get_footer_layouts(),
			'priority'    => 40,
		)
	)
);
