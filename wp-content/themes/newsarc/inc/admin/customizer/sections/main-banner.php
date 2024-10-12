<?php
/**
 * All settings related to main banner post.
 *
 * @package NewsArc
 */
$wp_customize->add_section(
	'main_banner_post',
	array(
		'title' => esc_html__( 'Main Banner Section', 'newsarc' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_main_banner_section]',
    array(
        'default'           => $newsarc_default['enable_main_banner_section'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_main_banner_section]',
    array(
        'label'       => esc_html__( 'Enable Main Banner', 'newsarc' ),
        'section'     => 'main_banner_post',
        'type'        => 'checkbox',
    )
);



$wp_customize->add_setting(
    'newsarc_section_seperator_banner_column_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Newsarc_Seperator_Control(
        $wp_customize,
        'newsarc_section_seperator_banner_column_1',
        array(
            'label'         => esc_html__( 'Banner Column - 1', 'newsarc' ),
            'settings' => 'newsarc_section_seperator_banner_column_1',
            'section' => 'main_banner_post',
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[banner_grid_post_category]',
    array(
        'default'           => $newsarc_default['banner_grid_post_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Newsarc_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newsarc_options[banner_grid_post_category]',
        array(
            'label'           => __( 'Choose Grid Category', 'newsarc' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newsarc' ),
            'section'         => 'main_banner_post',
        )
    )
);




$wp_customize->add_setting(
    'newsarc_section_seperator_banner_column_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Newsarc_Seperator_Control(
        $wp_customize,
        'newsarc_section_seperator_banner_column_2',
        array(
            'label'         => esc_html__( 'Banner Column - 2', 'newsarc' ),
            'settings' => 'newsarc_section_seperator_banner_column_2',
            'section' => 'main_banner_post',
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[banner_list_post_title]',
    array(
        'default'           => $newsarc_default['banner_list_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[banner_list_post_title]',
    array(
        'label'    => __( 'Banner List Post', 'newsarc' ),
        'section'  => 'main_banner_post',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[banner_list_post_category]',
    array(
        'default'           => $newsarc_default['banner_list_post_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Newsarc_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newsarc_options[banner_list_post_category]',
        array(
            'label'           => __( 'Choose List Post Category', 'newsarc' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newsarc' ),
            'section'         => 'main_banner_post',
        )
    )
);





$wp_customize->add_setting(
    'newsarc_section_seperator_banner',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Newsarc_Seperator_Control(
        $wp_customize,
        'newsarc_section_seperator_banner',
        array(
            'label'         => esc_html__( 'Banner Section Meta', 'newsarc' ),
            'settings' => 'newsarc_section_seperator_banner',
            'section' => 'main_banner_post',
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[enable_banner_author_meta]',
    array(
        'default' => $newsarc_default['enable_banner_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_author_meta]',
    array(
        'default' => $newsarc_default['select_banner_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newsarc_author_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[banner_author_meta_title]',
    array(
        'default' => $newsarc_default['banner_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[banner_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_banner_date_meta]',
    array(
        'default' => $newsarc_default['enable_banner_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_date]',
    array(
        'default' => $newsarc_default['select_banner_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_date]',
    array(
        'label' => esc_html__('Select Posted on Date Meta', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newsarc_date_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_date_meta_title]',
    array(
        'default' => $newsarc_default['select_banner_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_date_meta_title]',
    array(
        'label' => __('Date Text', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_date_format]',
    array(
        'default' => $newsarc_default['select_banner_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newsarc_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_banner_category_meta]',
    array(
        'default' => $newsarc_default['enable_banner_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_number_of_category]',
    array(
        'default' => $newsarc_default['select_banner_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_number_of_category]',
    array(
        'label' => __('Number of Category', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newsarc_options[banner_category_label]',
    array(
        'default' => $newsarc_default['banner_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[banner_category_label]',
    array(
        'label' => __('Category Label', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_banner_category_color]',
    array(
        'default' => $newsarc_default['select_banner_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newsarc'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newsarc_category_color(),
    )
);