<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsArc
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e('Skip to content', 'newsarc'); ?></a>
    <?php
    $enable_preloader_options = newsarc_get_option('enable_preloader_options');
    if ($enable_preloader_options) {
        get_template_part('template-parts/general/preloader');
    }
    get_template_part('template-parts/header/site-header');

    get_template_part('template-parts/modal-search');
    get_template_part('template-parts/modal-menu');

    if (!is_paged() && is_front_page()) {
        get_template_part('template-parts/widgetarea/after-header');
    }
