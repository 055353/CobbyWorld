<?php
/**
 * All settings related to archive.
 *
 * @package NewsArc
 */
$wp_customize->add_section(
	'archive_options',
	array(
		'title' => esc_html__( 'Archive Options', 'newsarc' ),
		'panel' => 'archive_options_panel',
	)
);

// Archive Layout.
$wp_customize->add_setting(
    'newsarc_options[archive_layout]',
    array(
        'default'           => $newsarc_default['archive_layout'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newsarc_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Newsarc_Custom_Radio_Image_Control(
        $wp_customize,
        'newsarc_options[archive_layout]',
        array(
            'label'         => esc_html__( 'Archive Layout', 'newsarc' ),
            'section'       => 'archive_options',
            'choices'       => newsarc_get_archive_layouts(),
        )
    )
);

$wp_customize->add_setting(
    'newsarc_section_seperator_archive_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Newsarc_Seperator_Control(
        $wp_customize,
        'newsarc_section_seperator_archive_1',
        array(
            'label'         => esc_html__( 'Archive Meta Options', 'newsarc' ),
            'settings' => 'newsarc_section_seperator_archive_1',
            'section' => 'archive_options',
        )
    )
);


$wp_customize->add_setting(
    'newsarc_options[archive_posts_title_limit]',
    array(
        'default'           => $newsarc_default['archive_posts_title_limit'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[archive_posts_title_limit]',
    array(
        'label'    => __( 'Title Line Limit', 'newsarc' ),
        'section'  => 'archive_options',
        'type'     => 'select',
        'choices'  => newsarc_line_limit_choices(),
    )
);


$wp_customize->add_setting(
    'newsarc_options[enable_excerpt_on_archive_1]',
    array(
        'default'           => $newsarc_default['enable_excerpt_on_archive_1'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_excerpt_on_archive_1]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'newsarc_is_archive_excerpt_callbac_1',

    )
);



$wp_customize->add_setting(
    'newsarc_options[enable_excerpt_on_archive_2]',
    array(
        'default'           => $newsarc_default['enable_excerpt_on_archive_2'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_excerpt_on_archive_2]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'newsarc_is_archive_excerpt_callbac_2',
        
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_archive_author_meta]',
    array(
        'default'           => $newsarc_default['enable_archive_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_archive_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_author_meta]',
    array(
        'default'           => $newsarc_default['select_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'       => newsarc_author_meta(),
        'active_callback' => 'newsarc_is_archive_author_meta_enabled',


    )
);

$wp_customize->add_setting(
    'newsarc_options[archive_author_meta_title]',
    array(
        'default'           => $newsarc_default['archive_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[archive_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newsarc' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => function ( $control ) {
            return (
                newsarc_is_archive_author_meta_enabled( $control )
                &&
                newsarc_archive_author_meta_title( $control )
            );
        },
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_archive_date_meta]',
    array(
        'default'           => $newsarc_default['enable_archive_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_archive_date_meta]',
    array(
        'label'       => esc_html__( 'Show Date Meta', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_archive_date]',
    array(
        'default'           => $newsarc_default['select_archive_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_archive_date]',
    array(
        'label'         => esc_html__( 'Date Meta Display Options', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'       => newsarc_date_meta(),
        'active_callback' => 'newsarc_is_archive_date_meta_enabled',

    )
);

$wp_customize->add_setting(
    'newsarc_options[archive_date_meta_title]',
    array(
        'default'           => $newsarc_default['archive_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[archive_date_meta_title]',
    array(
        'label'    => __( 'Date Text', 'newsarc' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => function ( $control ) {
            return (
                newsarc_is_archive_date_meta_enabled( $control )
                &&
                newsarc_archive_date_meta_title( $control )
            );
        },
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_date_format]',
    array(
        'default'           => $newsarc_default['select_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'  		=> newsarc_get_date_formats(),
        'active_callback' => 'newsarc_is_archive_date_meta_enabled',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_category_meta]',
    array(
        'default'           => $newsarc_default['enable_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);
        
$wp_customize->add_setting(
    'newsarc_options[archive_category_label]',
    array(
        'default'           => $newsarc_default['archive_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[archive_category_label]',
    array(
        'label'    => __( 'Category Title', 'newsarc' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => 'newsarc_is_archive_category_meta_enabled',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_category_color]',
    array(
        'default'           => $newsarc_default['select_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'  		=> newsarc_category_color(),
        'active_callback' => 'newsarc_is_archive_category_meta_enabled',

    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_tag_meta]',
    array(
        'default'           => $newsarc_default['enable_tag_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_tag_meta]',
    array(
        'label'       => esc_html__( 'Enable Tag Meta', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_comment_meta]',
    array(
        'default'           => $newsarc_default['enable_comment_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_comment_meta]',
    array(
        'label'       => esc_html__( 'Enable Comment Meta', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newsarc_options[enable_read_time_meta]',
    array(
        'default'           => $newsarc_default['enable_read_time_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_read_time_meta]',
    array(
        'label'       => esc_html__( 'Enable Read Time', 'newsarc' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);
