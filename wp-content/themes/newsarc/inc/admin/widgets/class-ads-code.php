<?php
if (!defined('ABSPATH')) {
    exit;
}

class Newsarc_Ads_Code extends Newsarc_Widget_Base
{
    public function __construct()
    {
        $this->widget_cssclass = 'widget_newsarc_ads_code';
        $this->widget_description = __("Displays Advertisements or anything placed under this", 'newsarc');
        $this->widget_id = 'newsarc_ads_code';
        $this->widget_name = __('NewsArc: Advertisements Code', 'newsarc');
        $this->settings = $this->get_widget_settings();
        parent::__construct();
    }

    /**
     * Define widget settings.
     */
    protected function get_widget_settings()
    {
        return array(
            'title'            => array(
                'type'  => 'text',
                'label' => __( 'Widget Title', 'newsarc' ),
            ),
            'ads_code'        => array(
                'type'  => 'textarea',
                'label' => __( 'Ads Code', 'newsarc' ),
            ),
            'content_alignment'           => array(
                'type'    => 'select',
                'label'   => __( 'Content Alignment', 'newsarc' ),
                'options' => array(
                    'left'    => __( 'Left', 'newsarc' ),
                    'center'  => __( 'Center', 'newsarc' ),
                    'right'   => __( 'Right', 'newsarc' ),
                    'stretch' => __( 'Stretch', 'newsarc' ),
                ),
                'std'     => 'center',
            ),
            'hide_on_desktop' => array(
                'type'  => 'checkbox',
                'label' => __( 'Hide on Desktop', 'newsarc' ),
                'std'   => false,
            ),
            'hide_on_tablet'  => array(
                'type'  => 'checkbox',
                'label' => __( 'Hide on Tablet', 'newsarc' ),
                'std'   => false,
            ),
            'hide_on_mobile'  => array(
                'type'  => 'checkbox',
                'label' => __( 'Hide on Mobile', 'newsarc' ),
                'std'   => false,
            ),
        );
    }

    /**
     * Output widget.
     *
     * @see WP_Widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {

        ob_start();

        $this->widget_start( $args, $instance );

        $ad_class = '';
        if ( isset( $instance['hide_on_desktop'] ) && $instance['hide_on_desktop'] ) {
            $ad_class .= ' hide-on-desktop';
        }
        if ( isset( $instance['hide_on_tablet'] ) && $instance['hide_on_tablet'] ) {
            $ad_class .= ' hide-on-tablet';
        }
        if ( isset( $instance['hide_on_mobile'] ) && $instance['hide_on_mobile'] ) {
            $ad_class .= ' hide-on-mobile';
        }

        do_action( 'newsarc_before_ads_code' );

        if ( isset( $instance['ads_code'] ) && $instance['ads_code'] ) {
            ?>

            <div class="wpi-avs-widget<?php echo esc_attr( $ad_class ); ?>" style="justify-items:<?php echo esc_attr( $instance['content_alignment'] ); ?>;" >
                <?php echo $this->filter_ads_code( $instance['ads_code'] ); ?>
            </div>

            <?php
        }

        do_action( 'newsarc_after_ads_code' );

        $this->widget_end( $args );

        echo ob_get_clean();
    }

    /**
     * Filter the ads code to allow scripts and other HTML tags.
     *
     * @param string $code The ads code to filter.
     * @return string The filtered ads code.
     */
    protected function filter_ads_code( $code ) {
        $allowed_tags = array(
            'script' => array(
                'type' => true,
                'src' => true,
                'async' => true,
                'defer' => true
            ),
            'iframe' => array(
                'src' => true,
                'height' => true,
                'width' => true,
                'frameborder' => true,
                'allow' => true,
                'allowfullscreen' => true
            ),
            'div' => array(
                'class' => true,
                'id' => true,
                'style' => true,
            ),
            'a' => array(
                'href' => true,
                'title' => true,
                'target' => true,
                'rel' => true
            ),
            'img' => array(
                'src' => true,
                'alt' => true,
                'height' => true,
                'width' => true,
                'style' => true
            ),
            'p' => array(),
            'br' => array(),
            'strong' => array(),
            'em' => array(),
            'span' => array(
                'class' => true,
                'id' => true,
                'style' => true,
            ),
            // Add more tags and attributes as needed
        );

        return wp_kses( $code, $allowed_tags );
    }
}
