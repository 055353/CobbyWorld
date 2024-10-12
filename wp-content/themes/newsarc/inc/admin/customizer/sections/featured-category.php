<?php
/**
 * All settings related to Featured Category.
 *
 * @package NewsArc
 */
$wp_customize->add_section(
	'featured_category',
	array(
		'title' => esc_html__( 'Category Section', 'newsarc' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_featured_category]',
    array(
        'default'           => $newsarc_default['enable_featured_category'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_featured_category]',
    array(
        'label'       => esc_html__( 'Enable Featured Category', 'newsarc' ),
        'section'     => 'featured_category',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[featured_category_title]',
    array(
        'default'           => $newsarc_default['featured_category_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[featured_category_title]',
    array(
        'label'    => __( 'Featured Category', 'newsarc' ),
        'section'  => 'featured_category',
        'type'     => 'text',
    )
);

for ($i=1; $i <=4 ; $i++) { 
    $wp_customize->add_setting(
    'newsarc_options[featured_category_'.$i.']',
    array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    )
    );
    $wp_customize->add_control(
        new Newsarc_Dropdown_Taxonomies_Control(
            $wp_customize,
            'newsarc_options[featured_category_'.$i.']',
            array(
                'label'           => __( 'Choose Category -', 'newsarc' ).$i,
                'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newsarc' ),
                'section'         => 'featured_category',
            )
        )
    );
}

