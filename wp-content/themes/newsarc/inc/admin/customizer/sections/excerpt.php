<?php
$wp_customize->add_section(
    'pagination_options',
    array(
        'title' => esc_html__( 'Pagination Options', 'newsarc' ),
        'panel' => 'archive_options_panel',
    )
);


$wp_customize->add_setting(
    'newsarc_options[select_pagination_style]',
    array(
        'default'           => $newsarc_default['select_pagination_style'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_pagination_style]',
    array(
        'label'         => esc_html__( 'Select Pagination Style', 'newsarc' ),
        'section'     => 'pagination_options',
        'type'        => 'select',
        'choices'       => newsarc_pagination_style_choice(),

    )
);


$wp_customize->add_section(
    'excerpt_options',
    array(
        'title' => esc_html__( 'Excerpt Options', 'newsarc' ),
        'panel' => 'archive_options_panel',
    )
);

$wp_customize->add_setting(
    'newsarc_options[number_of_word_in_excerpt]',
    array(
        'default'           => $newsarc_default['number_of_word_in_excerpt'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[number_of_word_in_excerpt]',
    array(
        'label'         => esc_html__( 'Number Of Excerpt Word', 'newsarc' ),
        'section'     => 'excerpt_options',
        'type'        => 'number',

    )
);


$wp_customize->add_setting(
    'newsarc_options[excerpt_posts_title_limit]',
    array(
        'default'           => $newsarc_default['excerpt_posts_title_limit'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[excerpt_posts_title_limit]',
    array(
        'label'    => __( 'Excerpt Line Limit', 'newsarc' ),
        'section'  => 'excerpt_options',
        'type'     => 'select',
        'choices'  => newsarc_line_limit_choices(),
    )
);

$wp_customize->add_setting(
    'newsarc_options[archive_excerpt_button_text]',
    array(
        'default'           => $newsarc_default['archive_excerpt_button_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[archive_excerpt_button_text]',
    array(
        'label'    => __( 'Excerpt Button Text', 'newsarc' ),
        'section'  => 'excerpt_options',
        'type'     => 'text',
    )
);