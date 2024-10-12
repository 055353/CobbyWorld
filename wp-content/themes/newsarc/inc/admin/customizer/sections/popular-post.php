<?php
// Popular Posts Options.
$wp_customize->add_section(
    'home_page_popular_post_options',
    array(
        'title' => __('Popular Section', 'newsarc'),
        'panel' => 'front_page_theme_options_panel',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_popular_posts]',
    array(
        'default' => $newsarc_default['enable_popular_posts'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_popular_posts]',
    array(
        'label' => __('Enable Popular', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
// Popular Posts Category.
$wp_customize->add_setting(
    'newsarc_options[popular_post_cat]',
    array(
        'default' => $newsarc_default['popular_post_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new Newsarc_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newsarc_options[popular_post_cat]',
        array(
            'label' => __('Choose Popular posts category', 'newsarc'),
            'section' => 'home_page_popular_post_options',
        )
    )
);
// No of posts.
$wp_customize->add_setting(
    'newsarc_options[no_of_popular_posts]',
    array(
        'default' => $newsarc_default['no_of_popular_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[no_of_popular_posts]',
    array(
        'label' => __('Number of Posts', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);
// Posts Orderby.
$wp_customize->add_setting(
    'newsarc_options[popular_post_orderby]',
    array(
        'default' => $newsarc_default['popular_post_orderby'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[popular_post_orderby]',
    array(
        'label' => __('Orderby', 'newsarc'),
        'section' => 'home_page_popular_post_options',
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
    'newsarc_options[popular_post_order]',
    array(
        'default' => $newsarc_default['popular_post_order'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[popular_post_order]',
    array(
        'label' => __('Order', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'newsarc'),
            'desc' => __('DESC', 'newsarc'),
        ),
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_popular_post_author_meta]',
    array(
        'default' => $newsarc_default['enable_popular_post_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_popular_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_popular_post_author_meta]',
    array(
        'default' => $newsarc_default['select_popular_post_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_popular_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newsarc_author_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[popular_post_author_meta_title]',
    array(
        'default' => $newsarc_default['popular_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[popular_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_popular_post_date_meta]',
    array(
        'default' => $newsarc_default['enable_popular_post_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_popular_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_popular_post_date]',
    array(
        'default' => $newsarc_default['select_popular_post_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_popular_post_date]',
    array(
        'label' => esc_html__('Select Posted on Date Meta', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newsarc_date_meta(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_popular_post_date_meta_title]',
    array(
        'default' => $newsarc_default['select_popular_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_popular_post_date_meta_title]',
    array(
        'label' => __('Date Text', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_popular_post_date_format]',
    array(
        'default' => $newsarc_default['select_popular_post_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_popular_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newsarc_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_popular_post_category_meta]',
    array(
        'default' => $newsarc_default['enable_popular_post_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_popular_post_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newsarc_options[select_popular_post_number_of_category]',
    array(
        'default' => $newsarc_default['select_popular_post_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_popular_post_number_of_category]',
    array(
        'label' => __('Number of Category', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newsarc_options[popular_post_category_label]',
    array(
        'default' => $newsarc_default['popular_post_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[popular_post_category_label]',
    array(
        'label' => __('Category Label', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_popular_post_category_color]',
    array(
        'default' => $newsarc_default['select_popular_post_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_popular_post_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newsarc_category_color(),
    )
);
$wp_customize->add_setting(
    'newsarc_options[popular_post_column]',
    array(
        'default' => $newsarc_default['popular_post_column'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[popular_post_column]',
    array(
        'label' => __('Popular Post Column', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => array(
            '2' => __('2', 'newsarc'),
            '3' => __('3', 'newsarc'),
            '4' => __('4', 'newsarc'),
            '5' => __('5', 'newsarc'),
        ),
        'active_callback' => 'newsarc_is_popular_post_enabled',
    )
);
// Enable  Autoplay.
$wp_customize->add_setting(
    'newsarc_options[enable_popular_post_autoplay]',
    array(
        'default' => $newsarc_default['enable_popular_post_autoplay'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_popular_post_autoplay]',
    array(
        'label' => __('Enable Autoplay', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'newsarc_is_popular_post_enabled',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_popular_post_arrows]',
    array(
        'default' => $newsarc_default['enable_popular_post_arrows'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_popular_post_arrows]',
    array(
        'label' => __('Enable Arrows', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'newsarc_is_popular_post_enabled',
    )
);
$wp_customize->add_setting(
    'newsarc_options[enable_popular_post_dots]',
    array(
        'default' => $newsarc_default['enable_popular_post_dots'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_popular_post_dots]',
    array(
        'label' => __('Enable Dots', 'newsarc'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'newsarc_is_popular_post_enabled',
    )
);
