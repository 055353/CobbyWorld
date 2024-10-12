<?php
/**
 * Default customizer values.
 *
 * @package NewsArc
 */
if (!function_exists('newsarc_get_all_customizer_default_values')) :
    /**
     * Get default customizer values.
     *
     * @return array Default customizer values.
     * @since 1.0.0
     *
     */
    function newsarc_get_all_customizer_default_values()
    {

        $defaults = array();

        // sidebar
        $defaults['hide_title'] = false;
        $defaults['hide_tagline'] = false;

        $defaults['sidebar_layout_option'] = 'right-sidebar';
        $defaults['single_sidebar_layout_option'] = 'right-sidebar';
        $defaults['enable_sidebar_fix_archive'] = true;
        $defaults['enable_sidebar_fix_single'] = true;

        // preloader
        $defaults['enable_preloader_options'] = true;
        $defaults['newsarc_preloader_style'] = 'style-1';

        // breadrumbs
        $defaults['enable_breadcrumb'] = true;

        $defaults['enable_social_mobile_menu'] = true;
        $defaults['select_mobile_social_menu_style'] = 'has-brand-background ';
        $defaults['enable_mobile_social_nav_border_radius'] = true;
        $defaults['enable_copyright_in_menu'] = true;

        // topbar
        $defaults['select_header_layout_style'] = 'header_style_1';
        $defaults['enable_top_bar'] = false;
        $defaults['hide_topbar_on_mobile'] = false;
        $defaults['enable_header_time'] = true;
        $defaults['enable_header_date'] = true;
        $defaults['date_label_text'] = esc_html__('Today:', 'newsarc');
        $defaults['todays_date_format'] = 'l, F j Y';
        $defaults['enable_social_nav_on_topbar'] = true;
        $defaults['enable_social_nav_border_radius'] = false;
        $defaults['select_top_bar_social_menu_style'] = 'none';

        //ticker post
        $defaults['enable_ticker_posts'] = true;
        $defaults['enable_ticker_label'] = true;
        $defaults['ticker_label_text'] = esc_html__('News Flash', 'newsarc');
        $defaults['ticker_posts_cat'] = '';
        $defaults['no_of_ticker_posts'] = 7;
        $defaults['ticker_posts_orderby'] = 'date';
        $defaults['ticker_posts_order'] = 'desc';
        $defaults['enable_ticker_posts_author_meta'] = true;
        $defaults['select_ticker_posts_author_meta'] = 'with_icon';
        $defaults['single_ticker_post_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['ticker_posts_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_ticker_posts_date_meta'] = true;
        $defaults['select_ticker_posts_date'] = 'with_icon';
        $defaults['select_ticker_posts_date_format'] = 'classic';
        $defaults['enable_ticker_posts_category_meta'] = false;
        $defaults['ticker_posts_category_label'] = '';
        $defaults['select_ticker_posts_category_color'] = 'none';
        $defaults['select_ticker_posts_number_of_category'] = 1;

        //must read post
        $defaults['enable_must_reads'] = true;
        $defaults['must_read_cat'] = '';
        $defaults['no_of_must_reads'] = 8;
        $defaults['must_read_orderby'] = 'date';
        $defaults['must_read_order'] = 'desc';
        $defaults['must_read_title'] = esc_html__('Must Read', 'newsarc');
        $defaults['enable_must_read_author_meta'] = false;
        $defaults['select_must_read_author_meta'] = 'with_icon';
        $defaults['select_must_read_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['must_read_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_must_read_date_meta'] = true;
        $defaults['select_must_read_date'] = 'with_icon';
        $defaults['select_must_read_date_format'] = 'classic';
        $defaults['enable_must_read_category_meta'] = true;
        $defaults['must_read_category_label'] = '';
        $defaults['select_must_read_category_color'] = 'has-text-color';
        $defaults['select_must_read_number_of_category'] = 1;

        //popular post
        $defaults['enable_popular_posts'] = false;
        $defaults['popular_post_cat'] = '';
        $defaults['no_of_popular_posts'] = 8;
        $defaults['popular_post_orderby'] = 'date';
        $defaults['popular_post_order'] = 'desc';

        $defaults['enable_popular_post_author_meta'] = false;
        $defaults['select_popular_post_author_meta'] = 'with_icon';
        $defaults['select_popular_post_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['popular_post_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_popular_post_date_meta'] = true;
        $defaults['select_popular_post_date'] = 'with_icon';
        $defaults['select_popular_post_date_format'] = 'classic';
        $defaults['enable_popular_post_category_meta'] = true;
        $defaults['popular_post_category_label'] = '';
        $defaults['select_popular_post_category_color'] = 'has-text-color';
        $defaults['select_popular_post_number_of_category'] = 1;

        $defaults['popular_post_column'] = 3;
        $defaults['enable_popular_post_autoplay'] = false;
        $defaults['enable_popular_post_arrows'] = true;
        $defaults['enable_popular_post_dots'] = false;


        // fullwidth slider 
        $defaults['enable_slider_banner_section'] = true;
        $defaults['number_of_slider_post'] = 4;
        $defaults['banner_section_cat'] = '';
        $defaults['enable_banner_overlay'] = true;
        $defaults['enable_banner_post_description'] = false;
        $defaults['enable_banner_slider_author_meta'] = false;
        $defaults['select_banner_slider_author_meta'] = 'with_avatar_image';
        $defaults['select_banner_slider_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['banner_slider_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_banner_slider_date_meta'] = true;
        $defaults['select_banner_slider_date'] = 'with_icon';
        $defaults['select_banner_slider_date_format'] = 'classic';
        $defaults['enable_banner_slider_category_meta'] = true;
        $defaults['banner_slider_category_label'] = '';
        $defaults['select_banner_slider_category_color'] = 'has-text-color';
        $defaults['select_banner_slider_number_of_category'] = 1;

        // banner post
        $defaults['enable_main_banner_section'] = true;
        $defaults['banner_list_post_title']     = esc_html__('Breaking News', 'newsarc');
        $defaults['banner_list_post_category']  = '';
        $defaults['banner_grid_post_category']  = '';
        $defaults['enable_banner_author_meta'] = false;
        $defaults['select_banner_author_meta'] = 'with_avatar_image';
        $defaults['select_banner_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['banner_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_banner_date_meta'] = true;
        $defaults['select_banner_date'] = 'with_icon';
        $defaults['select_banner_date_format'] = 'classic';
        $defaults['enable_banner_category_meta'] = true;
        $defaults['banner_category_label'] = '';
        $defaults['select_banner_category_color'] = 'has-text-color';
        $defaults['select_banner_number_of_category'] = 1;

        // tags
        $defaults['enable_tags'] = false;
        $defaults['enable_tags_label'] = true;
        $defaults['tags_label_text'] = esc_html__('Tagged', 'newsarc');
        $defaults['tags_orderby'] = 'date';
        $defaults['tags_order'] = 'desc';
        $defaults['no_of_tags'] = 6;
        $defaults['tags_label_style'] = 'style_2';
        $defaults['hide_tags_label_responsive'] = true;

        // excerpt
        $defaults['number_of_word_in_excerpt'] = '20';
        $defaults['excerpt_posts_title_limit'] = '';
        $defaults['archive_excerpt_button_text'] = esc_html__('Learn More', 'newsarc');

        // archive options
        $defaults['archive_layout'] = 'archive_style_1';
        $defaults['archive_posts_title_limit'] = '';
        $defaults['enable_excerpt_on_archive_1'] = true;
        $defaults['enable_excerpt_on_archive_2'] = true;
        $defaults['select_author_meta'] = 'with_label';
        $defaults['archive_author_meta_title'] = esc_html__('by', 'newsarc');
        $defaults['enable_archive_author_meta'] = true;
        $defaults['enable_archive_date_meta'] = true;
        $defaults['archive_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['select_date_format'] = 'classic';
        $defaults['select_archive_date'] = 'with_label';


        $defaults['enable_category_meta'] = true;
        $defaults['archive_category_label'] = '';
        $defaults['select_category_style'] = 'archive_cat_style_2';
        $defaults['number_of_category_to_display'] = '1';
        $defaults['select_category_color'] = 'none';
        $defaults['enable_tag_meta'] = false;
        $defaults['enable_comment_meta'] = true;
        $defaults['enable_read_time_meta'] = true;
        $defaults['select_read_time_style'] = 'archive_read_time_style_1';
        $defaults['enable_excerpt'] = true;

        $defaults['select_pagination_style'] = 'pagination_default';


        // single options
        $defaults['enable_single_author_meta'] = true;
        $defaults['single_author_meta_title'] = esc_html__('by', 'newsarc');
        $defaults['select_single_author_meta'] = 'with_label';
        $defaults['enable_single_date_meta'] = true;
        $defaults['select_single_date'] = 'with_label';
        $defaults['single_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['select_single_date_format'] = 'classic';
        $defaults['enable_single_category_meta'] = true;
        $defaults['single_category_label'] = '';
        $defaults['select_single_category_color'] = 'has-text-color';
        $defaults['enable_single_tag_meta'] = true;
        $defaults['enable_single_read_time_meta'] = true;


        $defaults['show_author_info'] = true;
        $defaults['show_sticky_article_navigation'] = true;

        // single related post
        $defaults['show_related_posts'] = true;
        $defaults['related_posts_text'] = __('You May Also Like', 'newsarc');
        $defaults['no_of_related_posts'] = 3;
        $defaults['related_posts_orderby'] = 'date';
        $defaults['related_posts_order'] = 'desc';
        $defaults['author_posts_orderby'] = 'date';
        $defaults['enable_related_posts_author_meta'] = true;
        $defaults['select_related_posts_author_meta'] = 'with_icon';
        $defaults['single_related_post_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['related_posts_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_related_posts_date_meta'] = true;
        $defaults['select_related_posts_date'] = 'with_icon';
        $defaults['select_related_posts_date_format'] = 'classic';
        $defaults['enable_related_posts_category_meta'] = true;
        $defaults['related_posts_category_label'] = '';
        $defaults['select_related_posts_category_color'] = 'none';
        $defaults['select_related_posts_number_of_category'] = 1;

        // single author post
        $defaults['author_posts_order'] = 'desc';
        $defaults['show_author_posts'] = true;
        $defaults['author_posts_text'] = __('More From Author', 'newsarc');
        $defaults['no_of_author_posts'] = 3;

        $defaults['enable_author_posts_author_meta'] = true;
        $defaults['select_author_posts_author_meta'] = 'with_icon';
        $defaults['single_author_post_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['author_posts_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_author_posts_date_meta'] = true;
        $defaults['select_author_posts_date'] = 'with_icon';
        $defaults['select_author_posts_date_format'] = 'classic';
        $defaults['enable_author_posts_category_meta'] = true;
        $defaults['author_posts_category_label'] = '';
        $defaults['select_author_posts_category_color'] = 'none';
        $defaults['select_author_posts_number_of_category'] = 1;


        // footer recommended section
        $defaults['enable_recommended_post'] = true;
        $defaults['recommended_post_layout'] = 'wpi-post-recommendation-1';
        $defaults['recommended_post_title'] = esc_html__('Just For You', 'newsarc');
        $defaults['recommended_post_category'] = '';
        
        $defaults['enable_recommended_post_author_meta'] = false;
        $defaults['select_recommended_post_author_meta'] = 'with_avatar_image';
        $defaults['select_recommended_post_date_meta_title'] = esc_html__('Posted on', 'newsarc');
        $defaults['recommended_post_author_meta_title'] = esc_html__('Posted by', 'newsarc');
        $defaults['enable_recommended_post_date_meta'] = true;
        $defaults['select_recommended_post_date'] = 'with_icon';
        $defaults['select_recommended_post_date_format'] = 'classic';
        $defaults['enable_recommended_post_category_meta'] = true;
        $defaults['recommended_post_category_label'] = '';
        $defaults['select_recommended_post_category_color'] = 'has-text-color';
        $defaults['select_recommended_post_number_of_category'] = 1;

        //featured category section
        $defaults['enable_featured_category'] = false;
        $defaults['featured_category_title'] = esc_html__('Categories', 'newsarc');
        // footer widget section
        $defaults['enable_footer_widget'] = true;
        $defaults['footer_column_layout'] = 'footer_layout_2';

        // footer section
        $defaults['copyright_text'] = esc_html__('&copy; All rights reserved. Proudly powered by WordPress.', 'newsarc');
        $defaults['copyright_date_format'] = 'Y';
        $defaults['enable_footer_nav'] = false;
        $defaults['enable_footer_social_nav'] = true;
        $defaults['enable_footer_social_nav_border_radius'] = false;
        $defaults['select_footer_social_menu_style'] = 'none';
        
        $defaults['enable_footer_scroll_to_top'] = true;
        $defaults['enable_footer_progressbar'] = true;


        $defaults = apply_filters('newsarc_default_customizer_values', $defaults);
        return $defaults;
    }
endif;
