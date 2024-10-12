<?php
$wp_customize->add_section(
   'header_style_options' ,
    array(
        'title' => __( 'Header style Option', 'newsarc' ),
        'panel' => 'header_options_panel',
    )
);


$wp_customize->add_setting(
    'newsarc_options[select_header_layout_style]',
    array(
        'default'           => $newsarc_default['select_header_layout_style'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newsarc_sanitize_radio'
    )
);

$wp_customize->add_control(
    new Newsarc_Custom_Radio_Image_Control(
        $wp_customize,
        'newsarc_options[select_header_layout_style]',
        array(
            'label'         => esc_html__( 'Select Header Layout', 'newsarc' ),
            'section'       => 'header_style_options',
            'choices'       => newsarc_get_header_layout(),
        )
    )
);