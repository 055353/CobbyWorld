<?php
/**
 * NewsArc Admin Class.
 *
 * @package NewsArc
 * @since   1.0.0
 */
if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('NewsArc_Admin')) :
    /**
     * NewsArc_Admin Class.
     */
    class NewsArc_Admin
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
        }

        /**
         * Localize array for import button AJAX request.
         */
        public function enqueue_scripts()
        {
            $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';

            wp_enqueue_style('newsarc-admin-style', get_template_directory_uri() . '/inc/admin/dashboard/css/admin' . $suffix . '.css', array(), NEWSARC_VERSION);
            wp_style_add_data('newsarc-admin-style', 'rtl', 'replace');

            wp_enqueue_script('newsarc-plugin-install-helper', get_template_directory_uri() . '/inc/admin/dashboard/js/admin.js', array('jquery'), NEWSARC_VERSION, true);
            $welcome_data = array(
                'uri' => esc_url(admin_url('/themes.php?page=newsarc&tab=starter-templates')),
                'btn_text' => esc_html__('Processing...', 'newsarc'),
                'nonce' => wp_create_nonce('newsarc_demo_import_nonce'),
                'admin_url' => esc_url(admin_url()),
                'ajaxurl' => admin_url('admin-ajax.php'), // Include this line for using admin-ajax.php
            );
            wp_localize_script('newsarc-plugin-install-helper', 'newsarcRedirectDemoPage', $welcome_data);
        }
    }
endif;
return new NewsArc_Admin();
