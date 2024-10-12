<?php
/**
 * NewsArc Elementor Global Widget Title.
 *
 * @package    NewsArc
 * @since      NewsArc 1.0.0
 */

namespace elementor\widgets;

use elementor\widgets\Newsarc_Elementor_Widget_Base;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * NewsArc Elementor Global Widget Title.
 *
 * Class NewsArc_Elementor_Global_Widgets_Title
 */
class NewsArc_Elementor_Global_Widgets_Title extends Newsarc_Elementor_Widget_Base
{

    /**
     * Retrieve NewsArc_Elementor_Global_Widgets_Title widget name.
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'NewsArc-Global-Widgets-Title';
    }

    /**
     * Retrieve NewsArc_Elementor_Global_Widgets_Title widget title.
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return esc_html__('Title Widget', 'newsarc');
    }

    /**
     * Retrieve NewsArc_Elementor_Global_Widgets_Title widget icon.
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'eicon-type-tool';
    }

    /**
     * Retrieve the list of categories the NewsArc_Elementor_Global_Widgets_Title widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return array('newsarc-widget-global');
    }

    /**
     * Disable posts control for this widget.
     */
    public function posts_controls()
    {
    }

    /**
     * Disable posts filter control for this widget.
     */
    public function posts_filter_controls()
    {
    }

    /**
     * Render NewsArc_Elementor_Global_Widgets_Title widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render()
    {

        $widget_title = $this->get_settings('widget_title');

        if (!empty($widget_title)) :
            ?>

            <div class="newsarc-element-wrapper">
                <?php
                // Displays the widget title.
                $this->widget_title($widget_title);
                ?>
            </div>

        <?php
        endif;

    }

}
