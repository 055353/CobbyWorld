<?php
// Ticker Posts Options.
$wp_customize->add_section(
	'home_page_ticker_posts_options',
	array(
		'title' => __( 'News Ticker Section', 'newsarc' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newsarc_options[enable_ticker_posts]',
    array(
        'default'           => $newsarc_default['enable_ticker_posts'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_ticker_posts]',
    array(
		'label'    => __( 'Enable Ticker', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_ticker_label]',
    array(
        'default'           => $newsarc_default['enable_ticker_label'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_ticker_label]',
    array(
		'label'           => __( 'Enable Ticker Label', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

// Ticker Label Text.
$wp_customize->add_setting(
    'newsarc_options[ticker_label_text]',
    array(
        'default'           => $newsarc_default['ticker_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[ticker_label_text]',
    array(
        'label'           => __( 'Ticker Label Text', 'newsarc' ),
        'description'     => __( 'Leave empty if you want to use the default text "Latest".', 'newsarc' ),
        'section'         => 'home_page_ticker_posts_options',
        'type'            => 'text',
    )
);

// Ticker Posts Category.
$wp_customize->add_setting(
	'newsarc_options[ticker_posts_cat]',
	array(
		'default'           => $newsarc_default['ticker_posts_cat'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Newsarc_Dropdown_Taxonomies_Control(
		$wp_customize,
		'newsarc_options[ticker_posts_cat]',
		array(
			'label'           => __( 'Choose Ticker posts category', 'newsarc' ),
			'section'         => 'home_page_ticker_posts_options',
		)
	)
);

// No of posts.
$wp_customize->add_setting(
	'newsarc_options[no_of_ticker_posts]',
	array(
		'default'           => $newsarc_default['no_of_ticker_posts'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'newsarc_options[no_of_ticker_posts]',
	array(
		'label'           => __( 'Number of Posts', 'newsarc' ),
		'section'         => 'home_page_ticker_posts_options',
		'type'            => 'number',
	)
);

// Posts Orderby.
$wp_customize->add_setting(
	'newsarc_options[ticker_posts_orderby]',
	array(
		'default'           => $newsarc_default['ticker_posts_orderby'],
		'sanitize_callback' => 'newsarc_sanitize_select',
	)
);
$wp_customize->add_control(
	'newsarc_options[ticker_posts_orderby]',
	array(
		'label'           => __( 'Orderby', 'newsarc' ),
		'section'         => 'home_page_ticker_posts_options',
		'type'            => 'select',
		'choices'         => array(
			'date'  => __( 'Date', 'newsarc' ),
			'id'    => __( 'ID', 'newsarc' ),
			'title' => __( 'Title', 'newsarc' ),
			'rand'  => __( 'Random', 'newsarc' ),
		),
	)
);

// Posts Order.
$wp_customize->add_setting(
	'newsarc_options[ticker_posts_order]',
	array(
		'default'           => $newsarc_default['ticker_posts_order'],
		'sanitize_callback' => 'newsarc_sanitize_select',
	)
);
$wp_customize->add_control(
	'newsarc_options[ticker_posts_order]',
	array(
		'label'           => __( 'Order', 'newsarc' ),
		'section'         => 'home_page_ticker_posts_options',
		'type'            => 'select',
		'choices'         => array(
			'asc'  => __( 'ASC', 'newsarc' ),
			'desc' => __( 'DESC', 'newsarc' ),
		),
	)
);


$wp_customize->add_setting(
    'newsarc_options[enable_ticker_posts_author_meta]',
    array(
        'default'           => $newsarc_default['enable_ticker_posts_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_ticker_posts_author_meta]',
    array(
        'label'       => esc_html__( 'Display Author Meta', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_ticker_posts_author_meta]',
    array(
        'default'           => $newsarc_default['select_ticker_posts_author_meta'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_ticker_posts_author_meta]',
    array(
        'label'         => esc_html__( 'Select Author Meta', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newsarc_author_meta(),


    )
);

$wp_customize->add_setting(
    'newsarc_options[ticker_posts_author_meta_title]',
    array(
        'default'           => $newsarc_default['ticker_posts_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[ticker_posts_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newsarc' ),
        'section'  => 'home_page_ticker_posts_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_ticker_posts_date_meta]',
    array(
        'default'           => $newsarc_default['enable_ticker_posts_date_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_ticker_posts_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_ticker_posts_date]',
    array(
        'default'           => $newsarc_default['select_ticker_posts_date'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_ticker_posts_date]',
    array(
        'label'         => esc_html__( 'Select Posted on Date Meta', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newsarc_date_meta(),

    )
);

$wp_customize->add_setting(
    'newsarc_options[single_ticker_post_date_meta_title]',
    array(
        'default'           => $newsarc_default['single_ticker_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[single_ticker_post_date_meta_title]',
    array(
        'label'    => __( 'Date Text', 'newsarc' ),
        'section'  => 'home_page_ticker_posts_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_ticker_posts_date_format]',
    array(
        'default'           => $newsarc_default['select_ticker_posts_date_format'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_ticker_posts_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newsarc_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newsarc_options[enable_ticker_posts_category_meta]',
    array(
        'default'           => $newsarc_default['enable_ticker_posts_category_meta'],
        'sanitize_callback' => 'newsarc_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newsarc_options[enable_ticker_posts_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_ticker_posts_number_of_category]',
    array(
        'default'           => $newsarc_default['select_ticker_posts_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_ticker_posts_number_of_category]',
    array(
        'label'       => __( 'Number of Category', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'number',
    )
);

$wp_customize->add_setting(
    'newsarc_options[ticker_posts_category_label]',
    array(
        'default'           => $newsarc_default['ticker_posts_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newsarc_options[ticker_posts_category_label]',
    array(
        'label'       => esc_html__( 'Category Label', 'newsarc' ),
        'section'  => 'home_page_ticker_posts_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newsarc_options[select_ticker_posts_category_color]',
    array(
        'default'           => $newsarc_default['select_ticker_posts_category_color'],
        'sanitize_callback' => 'newsarc_sanitize_select',
    )
);
$wp_customize->add_control(
    'newsarc_options[select_ticker_posts_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newsarc' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newsarc_category_color(),

    )
);