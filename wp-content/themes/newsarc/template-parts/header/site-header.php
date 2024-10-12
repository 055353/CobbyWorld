<?php
/**
 * Displays the site header.
 *
 * @package NewsArc
 */
do_action('newsarc_before_header');

$select_header_layout_style = newsarc_get_option('select_header_layout_style');

switch ($select_header_layout_style) {
    case 'header_style_1':
        get_template_part('template-parts/header/styles/style-1');
        break;
    case 'header_style_2':
        get_template_part('template-parts/header/styles/style-2');
        break;
    case 'header_style_3':
        get_template_part('template-parts/header/styles/style-3');
        break;
    default:
        return;
}


do_action('newsarc_after_header');