<?php
$wp_customize->add_section(
    'single_related_options',
    array(
        'title' => esc_html__( 'Single Related Options', 'newsarc' ),
        'panel' => 'single_options_panel',
    )
);
/*Show Related Posts
*-------------------------------*/
$wp_customize->add_setting(
    'newsarc_options[show_related_posts]',
    array(
        'default'           => $newsarc_default['show_related_posts'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[show_related_posts]',
    array(
        'label'    => __( 'Show Related Posts', 'newsarc' ),
        'section'  => 'single_related_options',
        'type'     => 'checkbox',
    )
);

/*Related Posts Text.*/
$wp_customize->add_setting(
    'newsarc_options[related_posts_text]',
    array(
        'default'           => $newsarc_default['related_posts_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[related_posts_text]',
    array(
        'label'    => __( 'Related Posts Text', 'newsarc' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

/* Number of Related Posts */
$wp_customize->add_setting(
    'newsarc_options[no_of_related_posts]',
    array(
        'default'           => $newsarc_default['no_of_related_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[no_of_related_posts]',
    array(
        'label'       => __( 'Number of Related Posts', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'number',
    )
);

/*Related Posts Orderby*/
$wp_customize->add_setting(
    'newsarc_options[related_posts_orderby]',
    array(
        'default'           => $newsarc_default['related_posts_orderby'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[related_posts_orderby]',
    array(
        'label'       => __( 'Orderby', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices' => array(
            'date' => __('Date', 'newsarc'),
            'id' => __('ID', 'newsarc'),
            'title' => __('Title', 'newsarc'),
            'rand' => __('Random', 'newsarc'),
        ),
    )
);

/*Related Posts Order*/
$wp_customize->add_setting(
    'newsarc_options[related_posts_order]',
    array(
        'default'           => $newsarc_default['related_posts_order'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[related_posts_order]',
    array(
        'label'       => __( 'Order', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices' => array(
            'asc' => __('ASC', 'newsarc'),
            'desc' => __('DESC', 'newsarc'),
        ),
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_related_posts_author_meta]',
    array(
        'default'           => $newsarc_default['enable_related_posts_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_related_posts_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_related_posts_author_meta]',
    array(
        'default'           => $newsarc_default['select_related_posts_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_related_posts_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newsarc_author_meta(),


    )
);

$wp_customize->add_setting(
    'newsarc_options[related_posts_author_meta_title]',
    array(
        'default'           => $newsarc_default['related_posts_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[related_posts_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newsarc' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_related_posts_date_meta]',
    array(
        'default'           => $newsarc_default['enable_related_posts_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_related_posts_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_related_posts_date]',
    array(
        'default'           => $newsarc_default['select_related_posts_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_related_posts_date]',
    array(
        'label'         => esc_html__( 'Select Posted on Date Meta', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newsarc_date_meta(),

    )
);

$wp_customize->add_setting(
    'newsarc_options[single_related_post_date_meta_title]',
    array(
        'default'           => $newsarc_default['single_related_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[single_related_post_date_meta_title]',
    array(
        'label'    => __( 'Date Text', 'newsarc' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_related_posts_date_format]',
    array(
        'default'           => $newsarc_default['select_related_posts_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_related_posts_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newsarc_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_related_posts_category_meta]',
    array(
        'default'           => $newsarc_default['enable_related_posts_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_related_posts_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_related_posts_number_of_category]',
    array(
        'default'           => $newsarc_default['select_related_posts_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_related_posts_number_of_category]',
    array(
        'label'       => __( 'Number of Category', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'number',
    )
);

$wp_customize->add_setting(
    'newsarc_options[related_posts_category_label]',
    array(
        'default'           => $newsarc_default['related_posts_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[related_posts_category_label]',
    array(
        'label'    => __( 'Category Label', 'newsarc' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_related_posts_category_color]',
    array(
        'default'           => $newsarc_default['select_related_posts_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_related_posts_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newsarc' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newsarc_category_color(),

    )
);