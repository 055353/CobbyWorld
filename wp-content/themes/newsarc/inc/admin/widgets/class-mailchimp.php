<?php
if (!defined('ABSPATH')) {
    exit;
}

class Newsarc_Mailchimp extends Newsarc_Widget_Base
{
    public function __construct()
    {
        $this->widget_cssclass = 'widget_newsarc_mailchimp';
        $this->widget_description = __("Displays call to action button and text with background", 'newsarc');
        $this->widget_id = 'newsarc_mailchimp';
        $this->widget_name = __('NewsArc: Mailchimp', 'newsarc');
        $this->settings = $this->get_widget_settings();
        parent::__construct();
    }

    /**
     * Define widget settings.
     */
    protected function get_widget_settings()
    {
        return array(
            'title' => array(
                'type' => 'text',
                'label' => __('Widget Title', 'newsarc'),
            ),
            'title_text' => array(
                'type' => 'text',
                'label' => __('Mailchimp Title', 'newsarc'),
            ),
            'font_size' => array(
                'type' => 'select',
                'label' => __('Heading font size', 'newsarc'),
                'options' => array(
                    'entry-title-small' => __('Small', 'newsarc'),
                    'entry-title-medium' => __('Medium', 'newsarc'),
                    'entry-title-big' => __('Big', 'newsarc'),
                    'entry-title-large' => __('Large', 'newsarc'),
                ),
                'std' => 'entry-title-large',
            ),
            'font_style' => array(
                'type' => 'select',
                'label' => __('Heading font style', 'newsarc'),
                'options' => array(
                    'entry-title-normal' => __('Normal', 'newsarc'),
                    'entry-title-italic' => __('Italic', 'newsarc'),
                ),
                'std' => 'entry-title-normal',
            ),
            'text_alignment' => array(
                'type' => 'select',
                'label' => __('Text Alignment', 'newsarc'),
                'options' => array(
                    'align-text-center' => __('Center', 'newsarc'),
                    'align-text-left' => __('Left', 'newsarc'),
                    'align-text-right' => __('Right', 'newsarc'),
                ),
                'std' => 'align-text-left',
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => __('Mailchimp Description', 'newsarc'),
                'rows' => 10,
            ),
            'mailchimp_shortcode' => array(
                'type' => 'text',
                'label' => __('MailChimp Form Shortcode', 'newsarc'),
            ),
            'widget_settings' => array(
                'type' => 'heading',
                'label' => __('Widget Settings', 'newsarc'),
            ),
            'display_layout' => array(
                'type' => 'select',
                'label' => __('Display Layout', 'newsarc'),
                'options' => array(
                    'display-regular-layout' => __('Regular layout', 'newsarc'),
                    'display-fullwidth-layout' => __('Full Width Layout', 'newsarc'),
                ),
                'std' => 'display-regular-layout',
            ),
            'vertical_alignment' => array(
                'type' => 'select',
                'label' => __('Vertical Alignment', 'newsarc'),
                'options' => array(
                    'vertical-align-top' => __('Top', 'newsarc'),
                    'vertical-align-middle' => __('Middle', 'newsarc'),
                    'vertical-align-bottom' => __('Bottom', 'newsarc'),
                ),
                'std' => 'vertical-align-middle',
            ),
            'text_color' => array(
                'type' => 'color',
                'label' => __('Text Color', 'newsarc'),
                'std' => '#ffffff',
            ),
            'bg_color' => array(
                'type' => 'color',
                'label' => __('Background Color', 'newsarc'),
                'std' => '#000000',
                'desc' => __('Will be overridden if used background image.', 'newsarc'),
            ),
            'bg_image' => array(
                'type' => 'image',
                'label' => __('Background Image', 'newsarc'),
            ),
            'enable_fixed_bg' => array(
                'type' => 'checkbox',
                'label' => __('Enable Fixed Background Image', 'newsarc'),
                'std' => true,
            ),
            'bg_overlay_color' => array(
                'type' => 'color',
                'label' => __('Overlay Color', 'newsarc'),
                'std' => '#000000',
            ),
            'overlay_opacity' => array(
                'type' => 'number',
                'step' => 10,
                'min' => 0,
                'max' => 100,
                'std' => 50,
                'label' => __('Overlay Opacity', 'newsarc'),
            ),
            'height' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 150,
                'max' => '',
                'std' => 500,
                'label' => __('Height (px)', 'newsarc'),
                'desc' => __('Works when there is either a background color or image.', 'newsarc'),
            ),
        );
    }

    /**
     * Output widget.
     *
     * @param array $args
     * @param array $instance
     * @see WP_Widget
     *
     */
    public function widget($args, $instance)
    {
        ob_start();
        $style = '';
        $font_size = !empty($instance['font_size']) ? $instance['font_size'] : $this->settings['font_size']['std'];
        $font_style = !empty($instance['font_style']) ? $instance['font_style'] : $this->settings['font_style']['std'];
        $text_alignment = !empty($instance['text_alignment']) ? $instance['text_alignment'] : $this->settings['text_alignment']['std'];
        $vertical_alignment = !empty($instance['vertical_alignment']) ? $instance['vertical_alignment'] : $this->settings['vertical_alignment']['std'];
        $class = isset($instance['display_layout']) ? $instance['display_layout'] : $this->settings['display_layout']['std'];
        $image_enabled = false;
        echo $args['before_widget'];
        $bg_color = isset($instance['bg_color']) ? $instance['bg_color'] : $this->settings['bg_color']['std'];
        $text_color = isset($instance['text_color']) ? $instance['text_color'] : $this->settings['text_color']['std'];
        $style = 'background-color:' . esc_attr($bg_color) . ';';
        $style .= '--mailchimp-text-color:' . esc_attr($text_color) . ';';
        $height = isset($instance['height']) ? $instance['height'] : $this->settings['height']['std'];
        $style .= 'min-height:' . esc_attr($height) . 'px;';
        if ((isset($instance['bg_image']) && 0 != $instance['bg_image'])) {
            $image_enabled = true;
            if ($instance['enable_fixed_bg']) {
                $class .= ' background-image-fixed';
            }
        }
        if ($image_enabled) {
            $class .= ' widget-has-background entry-background-image';
        }
        if ($vertical_alignment) {
            $class .= ' ' . $vertical_alignment;
        }
        do_action('newsarc_before_mailchimp');
        ?>
        <div class="wpi-mailchimp-widget wpi-special-widget <?php echo esc_attr($class); ?>" style="<?php echo esc_attr($style); ?>">
            <?php
            if ($image_enabled) {
                $overlay_style = 'background-color:' . $instance['bg_overlay_color'] . ';';
                $overlay_style .= 'opacity:' . ($instance['overlay_opacity'] / 100) . ';';
                ?>
                <span aria-hidden="true" class="background-image-overlay" style="<?php echo esc_attr($overlay_style); ?>"></span>
                <?php echo wp_get_attachment_image($instance['bg_image'], 'full'); ?>
                <?php
            }
            ?>
            <div class="widget-wrapper <?php echo $text_alignment; ?>">

                <?php if ($instance['title']) : ?>
                    <h2 class="widget-title">
                        <?php echo esc_html($instance['title']); ?>
                    </h2>
                <?php endif; ?>

                <?php if (isset($instance['title_text']) && $instance['title_text']) : ?>
                    <h2 class="entry-title <?php echo $font_size . ' ' . $font_style; ?>">
                        <?php echo esc_html($instance['title_text']); ?>
                    </h2>
                <?php endif; ?>
                <?php if (isset($instance['description']) && $instance['description']) : ?>
                    <div class="site-mailchimp-summary">
                        <?php echo wpautop(wp_kses_post($instance['description'])); ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($instance['mailchimp_shortcode']) && $instance['mailchimp_shortcode']) : ?>
                    <?php echo do_shortcode($instance['mailchimp_shortcode']); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php
        do_action('newsarc_after_mailchimp');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}