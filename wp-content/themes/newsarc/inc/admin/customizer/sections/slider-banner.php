<?php
$wp_customize->add_section(
    'homepage_slider_banner_option',
    array(
        'title' => __('Slider Banner', 'newsarc'),
        'panel' => 'front_page_theme_options_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'newsarc_options[enable_slider_banner_section]',
    array(
        'default' => $newsarc_default['enable_slider_banner_section'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_slider_banner_section]',
    array(
        'label' => __('Enable Slider Banner Section', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[number_of_slider_post]',
    array(
        'default' => $newsarc_default['number_of_slider_post'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[number_of_slider_post]',
    array(
        'label' => __('Post In Slider', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => array(
            '3' => __('3', 'newsarc'),
            '4' => __('4', 'newsarc'),
            '5' => __('5', 'newsarc'),
            '6' => __('6', 'newsarc'),
        ),
    )
);


$wp_customize->add_setting(
    'newsarc_options[banner_section_cat]',
    array(
        'default'           => $newsarc_default['banner_section_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Newsarc_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newsarc_options[banner_section_cat]',
        array(
            'label'           => __( 'Choose slider Post Category', 'newsarc' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newsarc' ),
            'section'         => 'homepage_slider_banner_option',
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[enable_banner_post_description]',
    array(
        'default' => $newsarc_default['enable_banner_post_description'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_post_description]',
    array(
        'label' => __('Enable Post Description', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newsarc_options[enable_banner_overlay]',
    array(
        'default' => $newsarc_default['enable_banner_overlay'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_overlay]',
    array(
        'label' => __('Enable Banner Overlay', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
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
            'label'         => esc_html__( 'Banner Slider Meta', 'newsarc' ),
            'settings' => 'newsarc_section_seperator_banner',
            'section' => 'homepage_slider_banner_option',
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[enable_banner_slider_author_meta]',
    array(
        'default' => $newsarc_default['enable_banner_slider_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_slider_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_slider_author_meta]',
    array(
        'default' => $newsarc_default['select_banner_slider_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_slider_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newsarc_author_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[banner_slider_author_meta_title]',
    array(
        'default' => $newsarc_default['banner_slider_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[banner_slider_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_banner_slider_date_meta]',
    array(
        'default' => $newsarc_default['enable_banner_slider_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_slider_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_slider_date]',
    array(
        'default' => $newsarc_default['select_banner_slider_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_slider_date]',
    array(
        'label' => esc_html__('Select Posted on Date Meta', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newsarc_date_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_slider_date_meta_title]',
    array(
        'default' => $newsarc_default['select_banner_slider_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_slider_date_meta_title]',
    array(
        'label' => __('Date Text', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_slider_date_format]',
    array(
        'default' => $newsarc_default['select_banner_slider_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_slider_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newsarc_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_banner_slider_category_meta]',
    array(
        'default' => $newsarc_default['enable_banner_slider_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_banner_slider_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_banner_slider_number_of_category]',
    array(
        'default' => $newsarc_default['select_banner_slider_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_slider_number_of_category]',
    array(
        'label' => __('Number of Category', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newsarc_options[banner_slider_category_label]',
    array(
        'default' => $newsarc_default['banner_slider_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[banner_slider_category_label]',
    array(
        'label' => __('Category Label', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_banner_slider_category_color]',
    array(
        'default' => $newsarc_default['select_banner_slider_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_banner_slider_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newsarc'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newsarc_category_color(),
    )
);