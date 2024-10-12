<?php
// Tags Posts Options.
$wp_customize->add_section(
	'home_page_tags_options',
	array(
		'title' => __( 'Tagged Section', 'newsarc' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_tags]',
    array(
        'default'           => $newsarc_default['enable_tags'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_tags]',
    array(
		'label'    => __( 'Enable Tags', 'newsarc' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_tags_label]',
    array(
        'default'           => $newsarc_default['enable_tags_label'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_tags_label]',
    array(
		'label'           => __( 'Enable Tags Label', 'newsarc' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);

// Tags Label Style.
$wp_customize->add_setting(
    'newsarc_options[tags_label_style]',
    array(
        'default'           => $newsarc_default['tags_label_style'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[tags_label_style]',
    array(
        'label'           => __( 'Label Style', 'newsarc' ),
        'section'         => 'home_page_tags_options',
        'type'            => 'select',
        'choices'         => array(
            'style_1' => __( 'Plain', 'newsarc' ),
            'style_2' => __( 'With Icon', 'newsarc' ),
        ),
    )
);


// Tags Label Text.
$wp_customize->add_setting(
    'newsarc_options[tags_label_text]',
    array(
        'default'           => $newsarc_default['tags_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[tags_label_text]',
    array(
        'label'           => __( 'Tags Label Text', 'newsarc' ),
        'description'     => __( 'Leave empty if you want it blank', 'newsarc' ),
        'section'         => 'home_page_tags_options',
        'type'            => 'text',
    )
);

// No of posts.
$wp_customize->add_setting(
    'newsarc_options[no_of_tags]',
    array(
        'default'           => $newsarc_default['no_of_tags'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[no_of_tags]',
    array(
		'label'           => __( 'Number of Tags', 'newsarc' ),
		'section'         => 'home_page_tags_options',
		'type'            => 'number',
    )
);


// Posts Orderby.
$wp_customize->add_setting(
    'newsarc_options[tags_orderby]',
    array(
        'default'           => $newsarc_default['tags_orderby'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[tags_orderby]',
    array(
		'label'           => __( 'Orderby', 'newsarc' ),
		'section'         => 'home_page_tags_options',
		'type'            => 'select',
		'choices'         => array(
			'date'  => __( 'Date', 'newsarc' ),
			'id'    => __( 'ID', 'newsarc' ),
			'title' => __( 'Title', 'newsarc' ),
			'rand'  => __( 'Random', 'newsarc' ),
		),
    )
);


// Posts Order.
$wp_customize->add_setting(
    'newsarc_options[tags_order]',
    array(
        'default'           => $newsarc_default['tags_order'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[tags_order]',
    array(
		'label'           => __( 'Orderby', 'newsarc' ),
		'section'         => 'home_page_tags_options',
		'type'            => 'select',
		'choices'         => array(
			'asc'  => __( 'ASC', 'newsarc' ),
			'desc' => __( 'DESC', 'newsarc' ),
		),
    )
);


$wp_customize->add_setting(
    'newsarc_options[hide_tags_label_responsive]',
    array(
        'default'           => $newsarc_default['hide_tags_label_responsive'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[hide_tags_label_responsive]',
    array(
		'label'           => __( 'Hide Label on Responsive', 'newsarc' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);