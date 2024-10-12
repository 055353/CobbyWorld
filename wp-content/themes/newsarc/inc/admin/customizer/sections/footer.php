<?php
// Popular Posts Options.
$wp_customize->add_section(
    'footer_section_options',
    array(
        'title' => __('Footer Copyright Options', 'newsarc'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('newsarc_options[copyright_text]'
    ,
    array(
        'default'           => $newsarc_default['copyright_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('newsarc_options[copyright_text]'
    ,
    array(
        'label'           => __( 'Copyright Text', 'newsarc' ),
        'description'     => __( 'Use {{ date }} to get the current date.', 'newsarc' ),
        'section'         => 'footer_section_options',
        'type'            => 'text',
    )
);

/*Copyright Date Format*/
$wp_customize->add_setting(
    'newsarc_options[copyright_date_format]',
    array(
        'default'           => $newsarc_default['copyright_date_format'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[copyright_date_format]',
    array(
        'label'           => __( 'Copyright Date Format', 'newsarc' ),
        'description'     => sprintf(
            wp_kses(
                __( '<a href="%s" target="_blank">Date and Time Formatting Documentation</a>.', 'newsarc' ),
                array(
                    'a' => array(
                        'href'   => array(),
                        'target' => array(),
                    ),
                )
            ),
            esc_url( 'https://wordpress.org/support/article/formatting-date-and-time' )
        ),
        'section'         => 'footer_section_options',
        'type'            => 'text',
    )
);
/*Enable Footer Nav*/
$wp_customize->add_setting(
    'newsarc_options[enable_footer_nav]',
    array(
        'default'           => $newsarc_default['enable_footer_nav'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_footer_nav]',
    array(
        'label'       => __( 'Show Footer Nav Menu', 'newsarc' ),
        'description' => sprintf( __( 'You can add/edit footer nav menu from <a href="%s">here</a>.', 'newsarc' ), "javascript:wp.customize.control( 'nav_menu_locations[footer]' ).focus();" ),
        'section'     => 'footer_section_options',
        'type'     => 'checkbox',
    )
);


/*Enable Footer Social Nav*/

$wp_customize->add_setting(
    'newsarc_options[enable_footer_social_nav]',
    array(
        'default'           => $newsarc_default['enable_footer_social_nav'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_footer_social_nav]',
    array(
        'label'       => __( 'Show Social Nav Menu in Footer', 'newsarc' ),
        'description' => sprintf( __( 'You can add/edit social nav menu from <a href="%s">here</a>.', 'newsarc' ), "javascript:wp.customize.control( 'nav_menu_locations[social]' ).focus();" ),
        'section'     => 'footer_section_options',
        'type'     => 'checkbox',
    )
);



$wp_customize->add_setting(
    'newsarc_options[select_footer_social_menu_style]',
    array(
        'default'           => $newsarc_default['select_footer_social_menu_style'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_footer_social_menu_style]',
    array(
        'label'         => esc_html__( 'Social Menu Options', 'newsarc' ),
        'section'     => 'footer_section_options',
        'type'        => 'select',
        'choices'       => newsarc_social_menu_style(),


    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_footer_social_nav_border_radius]',
    array(
        'default'           => $newsarc_default['enable_footer_social_nav_border_radius'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_footer_social_nav_border_radius]',
    array(
        'label'    => __( 'Enable Border Radius', 'newsarc' ),
        'section'  => 'footer_section_options',
        'type'     => 'checkbox',
    )
);

// Popular Posts Options.
$wp_customize->add_section(
    'footer_scroll_to_top_options',
    array(
        'title' => __('Footer Scroll To Top', 'newsarc'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('newsarc_options[enable_footer_scroll_to_top]'
    ,
    array(
        'default'           => $newsarc_default['enable_footer_scroll_to_top'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
        
    )
);
$wp_customize->add_control('newsarc_options[enable_footer_scroll_to_top]'
    ,
    array(
        'label'           => __( 'Enable Footer Scroll To Top', 'newsarc' ),
        'section'         => 'footer_scroll_to_top_options',
        'type'            => 'checkbox',
    )
);


// Popular Posts Options.
$wp_customize->add_section(
    'footer_progressbar_options',
    array(
        'title' => __('Footer ProgressBar', 'newsarc'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('newsarc_options[enable_footer_progressbar]'
    ,
    array(
        'default'           => $newsarc_default['enable_footer_progressbar'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',

    )
);
$wp_customize->add_control('newsarc_options[enable_footer_progressbar]'
    ,
    array(
        'label'           => __( 'Enable Footer ProgressBar', 'newsarc' ),
        'description'     => __( 'Screen Progressbar enable option', 'newsarc' ),
        'section'         => 'footer_progressbar_options',
        'type'            => 'checkbox',
    )
);

