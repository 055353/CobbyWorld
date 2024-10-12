<?php
// Must Read Posts Options.
$wp_customize->add_section(
    'home_page_must_read_options',
    array(
        'title' => __('Must Read Section', 'newsarc'),
        'panel' => 'front_page_theme_options_panel',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_must_reads]',
    array(
        'default' => $newsarc_default['enable_must_reads'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_must_reads]',
    array(
        'label' => __('Enable Must Read', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[must_read_title]',
    array(
        'default'           => $newsarc_default['must_read_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[must_read_title]',
    array(
        'label'    => __( 'Section Title', 'newsarc' ),
        'section'  => 'main_banner_post',
        'type'     => 'text',
    )
);
// Must Read Posts Category.
$wp_customize->add_setting(
    'newsarc_options[must_read_cat]',
    array(
        'default' => $newsarc_default['must_read_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Newsarc_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newsarc_options[must_read_cat]',
        array(
            'label' => __('Choose Must Read category', 'newsarc'),
            'section' => 'home_page_must_read_options',
        )
    )
);
// No of posts.
$wp_customize->add_setting(
    'newsarc_options[no_of_must_reads]',
    array(
        'default' => $newsarc_default['no_of_must_reads'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[no_of_must_reads]',
    array(
        'label' => __('Number of Posts', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);
// Posts Orderby.
$wp_customize->add_setting(
    'newsarc_options[must_read_orderby]',
    array(
        'default' => $newsarc_default['must_read_orderby'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[must_read_orderby]',
    array(
        'label' => __('Orderby', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => array(
            'date' => __('Date', 'newsarc'),
            'id' => __('ID', 'newsarc'),
            'title' => __('Title', 'newsarc'),
            'rand' => __('Random', 'newsarc'),
        ),
    )
);
// Posts Order.
$wp_customize->add_setting(
    'newsarc_options[must_read_order]',
    array(
        'default' => $newsarc_default['must_read_order'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[must_read_order]',
    array(
        'label' => __('Order', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'newsarc'),
            'desc' => __('DESC', 'newsarc'),
        ),
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_must_read_author_meta]',
    array(
        'default' => $newsarc_default['enable_must_read_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_must_read_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_must_read_author_meta]',
    array(
        'default' => $newsarc_default['select_must_read_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_must_read_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newsarc_author_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[must_read_author_meta_title]',
    array(
        'default' => $newsarc_default['must_read_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[must_read_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_must_read_date_meta]',
    array(
        'default' => $newsarc_default['enable_must_read_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_must_read_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_must_read_date]',
    array(
        'default' => $newsarc_default['select_must_read_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_must_read_date]',
    array(
        'label' => esc_html__('Select Posted on Date Meta', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newsarc_date_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_must_read_date_meta_title]',
    array(
        'default' => $newsarc_default['select_must_read_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_must_read_date_meta_title]',
    array(
        'label' => __('Date Text', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_must_read_date_format]',
    array(
        'default' => $newsarc_default['select_must_read_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_must_read_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newsarc_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_must_read_category_meta]',
    array(
        'default' => $newsarc_default['enable_must_read_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_must_read_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_must_read_number_of_category]',
    array(
        'default' => $newsarc_default['select_must_read_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_must_read_number_of_category]',
    array(
        'label' => __('Number of Category', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newsarc_options[must_read_category_label]',
    array(
        'default' => $newsarc_default['must_read_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[must_read_category_label]',
    array(
        'label' => __('Category Label', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_must_read_category_color]',
    array(
        'default' => $newsarc_default['select_must_read_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_must_read_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newsarc'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newsarc_category_color(),
    )
);
