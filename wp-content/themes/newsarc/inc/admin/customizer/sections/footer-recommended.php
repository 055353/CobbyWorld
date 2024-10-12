<?php
/**
 * All settings related to footer recommended post.
 *
 * @package NewsArc
 */
$wp_customize->add_section(
	'footer_recommended_post',
	array(
		'title' => esc_html__( 'Recommended Section', 'newsarc' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_recommended_post]',
    array(
        'default'           => $newsarc_default['enable_recommended_post'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_recommended_post]',
    array(
        'label'       => esc_html__( 'Enable Recommended Post', 'newsarc' ),
        'section'     => 'footer_recommended_post',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newsarc_options[recommended_post_layout]',
    array(
        'default'           => $newsarc_default['recommended_post_layout'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newsarc_sanitize_radio'
    )
);


$wp_customize->add_control(
    new Newsarc_Custom_Radio_Image_Control(
        $wp_customize,
        'newsarc_options[recommended_post_layout]',
        array(
            'label'         => esc_html__( 'Recommended Post Layout', 'newsarc' ),
            'section'       => 'footer_recommended_post',
            'choices'       => newsarc_get_recommended_post(),
        )
    )
);



$wp_customize->add_setting(
    'newsarc_options[recommended_post_title]',
    array(
        'default'           => $newsarc_default['recommended_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[recommended_post_title]',
    array(
        'label'    => __( 'Recommended Post', 'newsarc' ),
        'section'  => 'footer_recommended_post',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[recommended_post_category]',
    array(
        'default'           => $newsarc_default['recommended_post_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Newsarc_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newsarc_options[recommended_post_category]',
        array(
            'label'           => __( 'Choose Category', 'newsarc' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newsarc' ),
            'section'         => 'footer_recommended_post',
        )
    )
);









$wp_customize->add_setting(
    'newsarc_options[enable_recommended_post_author_meta]',
    array(
        'default' => $newsarc_default['enable_recommended_post_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_recommended_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_recommended_post_author_meta]',
    array(
        'default' => $newsarc_default['select_recommended_post_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_recommended_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newsarc_author_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[recommended_post_author_meta_title]',
    array(
        'default' => $newsarc_default['recommended_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[recommended_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_recommended_post_date_meta]',
    array(
        'default' => $newsarc_default['enable_recommended_post_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_recommended_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_recommended_post_date]',
    array(
        'default' => $newsarc_default['select_recommended_post_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_recommended_post_date]',
    array(
        'label' => esc_html__('Select Posted on Date Meta', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newsarc_date_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_recommended_post_date_meta_title]',
    array(
        'default' => $newsarc_default['select_recommended_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_recommended_post_date_meta_title]',
    array(
        'label' => __('Date Text', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_recommended_post_date_format]',
    array(
        'default' => $newsarc_default['select_recommended_post_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_recommended_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newsarc_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_recommended_post_category_meta]',
    array(
        'default' => $newsarc_default['enable_recommended_post_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_recommended_post_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_recommended_post_number_of_category]',
    array(
        'default' => $newsarc_default['select_recommended_post_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_recommended_post_number_of_category]',
    array(
        'label' => __('Number of Category', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newsarc_options[recommended_post_category_label]',
    array(
        'default' => $newsarc_default['recommended_post_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[recommended_post_category_label]',
    array(
        'label' => __('Category Label', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_recommended_post_category_color]',
    array(
        'default' => $newsarc_default['select_recommended_post_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_recommended_post_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newsarc'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newsarc_category_color(),
    )
);