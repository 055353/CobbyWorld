<?php
/**
 * Displays Banner Section
 *
 * @package NewsArc
 */
$is_banner_section = newsarc_get_option('enable_slider_banner_section');
$enable_banner_overlay = newsarc_get_option('enable_banner_overlay');
$site_fallback_image = newsarc_get_option('site_fallback_image');
$banner_section_cat = newsarc_get_option('banner_section_cat');
$number_of_slider_post = newsarc_get_option('number_of_slider_post');
$enable_banner_cat_meta_color = newsarc_get_option('enable_banner_cat_meta_color');
$enable_banner_post_description = newsarc_get_option('enable_banner_post_description');

$enable_banner_slider_author_meta = newsarc_get_option('enable_banner_slider_author_meta');
$select_banner_slider_author_meta = newsarc_get_option('select_banner_slider_author_meta');
$banner_slider_author_meta_title = newsarc_get_option('banner_slider_author_meta_title');
$enable_banner_slider_date_meta = newsarc_get_option('enable_banner_slider_date_meta');
$select_banner_slider_date = newsarc_get_option('select_banner_slider_date');
$select_banner_slider_date_meta_title = newsarc_get_option('select_banner_slider_date_meta_title');
$select_banner_slider_date_format = newsarc_get_option('select_banner_slider_date_format');
$enable_banner_slider_category_meta = newsarc_get_option('enable_banner_slider_category_meta');
$banner_slider_category_label = newsarc_get_option('banner_slider_category_label');
$select_banner_slider_category_color = newsarc_get_option('select_banner_slider_category_color');
$select_banner_slider_number_of_category = newsarc_get_option('select_banner_slider_number_of_category');

$banner_overlay_class = '';
if ($enable_banner_overlay) {
    $banner_overlay_class = 'slider-banner-has-overlay';
}

if ($is_banner_section) :
    ?>
    <section class="wpi-section wpi-slider-banner <?php echo $banner_overlay_class; ?>">

        <?php
        $slider_pagenav = '';
        $post_args = array(
            'post_type' => 'post',
            'posts_per_page' => absint($number_of_slider_post),
            'post_status' => 'publish',
            'no_found_rows' => 1,
            'ignore_sticky_posts' => 1,
        );
        // Check for category.
        if (!empty($banner_section_cat)) :
            $post_args['tax_query'] = array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $banner_section_cat,
                ),
            );
        endif;

        $banner_post_query = new WP_Query($post_args);
        if ($banner_post_query->have_posts()): ?>
            <div class="swiper site-banner-hero">
                <div class="swiper-wrapper">
                    <?php while ($banner_post_query->have_posts()): $banner_post_query->the_post(); ?>
                        <div class="swiper-slide swiper-hero-slide">
                            <div class="swiper-slide-image hero-slide-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php
                                    the_post_thumbnail('full', array(
                                        'alt' => the_title_attribute(array(
                                            'echo' => false,
                                        )),
                                    ));
                                    ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url($site_fallback_image); ?>"
                                         alt="<?php echo esc_attr(get_the_title()); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="site-banner-description">
                                <div class="wrapper">
                                    <div class="row-group">
                                        <div class="column-lg-8 column-md-10 column-sm-12">
                                            <?php
                                            if ($enable_banner_slider_category_meta) {
                                                newsarc_post_category($select_banner_slider_category_color, $banner_slider_category_label, $select_banner_slider_number_of_category);
                                            }
                                            ?>
                                            <header class="entry-header">
                                                <?php the_title('<h2 class="entry-title entry-title-large"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                            </header>

                                            <div class="entry-meta-wrapper">
                                                <?php
                                                if ($enable_banner_slider_date_meta) {
                                                    newsarc_posted_on($select_banner_slider_date_format, $select_banner_slider_date_meta_title, $select_banner_slider_date);
                                                }
                                                ?>

                                                <?php
                                                if ($enable_banner_slider_date_meta && $enable_banner_slider_author_meta) { ?>
                                                    <div class="entry-meta-separator"></div>
                                                <?php } ?>

                                                <?php
                                                if ($enable_banner_slider_author_meta) {
                                                    newsarc_posted_by($select_banner_slider_author_meta, $banner_slider_author_meta_title);
                                                }
                                                ?>
                                            </div>

                                            <?php
                                            if ($enable_banner_post_description && has_excerpt()): ?>
                                                <div class="entry-content">
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            <?php elseif ($enable_banner_post_description): ?>
                                                <div class="entry-content">
                                                    <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                                </div>
                                            <?php endif; ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $slider_pagenav .= '<div class="swiper-slide swiper-pagination-slide">';
                        $slider_pagenav .= '<div class="entry-details">';
                        $slider_pagenav .= '<h3 class="entry-title entry-title-small">' . get_the_title() . "</h3>";
                        $slider_pagenav .= '<div class="entry-meta-wrapper">';
                        $slider_pagenav .= '<div class="entry-meta entry-author posted-by">' . get_the_author() . "</div>";
                        $slider_pagenav .= '<div class="entry-meta entry-date posted-on">' . get_the_time('Y M d', $post->ID) . "</div>";
                        $slider_pagenav .= '</div>';
                        $slider_pagenav .= '</div>';
                        $slider_pagenav .= '</div>';
                        ?>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="site-pagination-panel hide-on-mobile">
            <div class="wrapper">
                <div class="theme-swiper-control swiper-control">
                    <div class="banner-slider-prev">
                        <?php newsarc_the_theme_svg('arrow-left'); ?>
                        <?php _e('Prev', 'newsarc'); ?>
                    </div>
                    <div class="banner-slider-next">
                        <?php _e('Next', 'newsarc'); ?>
                        <?php newsarc_the_theme_svg('arrow-right'); ?>
                    </div>
                </div>
                <div class="swiper banner-pagination-slider">
                    <div class="banner-pagination-progress">
                        <div class="pagination-progress-bar"></div>
                    </div>
                    <div class="swiper-wrapper">
                        <?php echo $slider_pagenav; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;