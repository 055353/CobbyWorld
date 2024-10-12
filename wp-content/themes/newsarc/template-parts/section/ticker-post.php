<?php
$enable_ticker_posts = newsarc_get_option('enable_ticker_posts');
if ($enable_ticker_posts) {
    $ticker_posts_cat = newsarc_get_option('ticker_posts_cat');
    $no_of_ticker_posts = newsarc_get_option('no_of_ticker_posts', 4);
    $ticker_posts_orderby = newsarc_get_option('ticker_posts_orderby', 'date');
    $ticker_posts_order = newsarc_get_option('ticker_posts_order', 'desc');
    $enable_ticker_posts_author_meta = newsarc_get_option('enable_ticker_posts_author_meta');
    $select_ticker_posts_author_meta = newsarc_get_option('select_ticker_posts_author_meta');
    $ticker_posts_author_meta_title = newsarc_get_option('ticker_posts_author_meta_title');
    $enable_ticker_posts_date_meta = newsarc_get_option('enable_ticker_posts_date_meta');
    $select_ticker_posts_date = newsarc_get_option('select_ticker_posts_date');
    $single_ticker_post_date_meta_title = newsarc_get_option('single_ticker_post_date_meta_title');
    $select_ticker_posts_date_format = newsarc_get_option('select_ticker_posts_date_format');
    $enable_ticker_posts_category_meta = newsarc_get_option('enable_ticker_posts_category_meta');
    $ticker_posts_category_label = newsarc_get_option('ticker_posts_category_label');
    $select_ticker_posts_category_color = newsarc_get_option('select_ticker_posts_category_color');
    $select_ticker_posts_number_of_category = newsarc_get_option('select_ticker_posts_number_of_category');
    // Covert id to ID to make it work with query
    if ('id' == $ticker_posts_orderby) {
        $ticker_posts_orderby = 'ID';
    }
    $post_args = array(
        'post_type' => 'post',
        'posts_per_page' => absint($no_of_ticker_posts),
        'post_status' => 'publish',
        'no_found_rows' => 1,
        'ignore_sticky_posts' => 1,
        'orderby' => esc_attr($ticker_posts_orderby),
        'order' => esc_attr($ticker_posts_order),
    );
    // Check for category.
    if (!empty($ticker_posts_cat)) :
        $post_args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $ticker_posts_cat,
            ),
        );
    endif;
    $ticker_posts = new WP_Query($post_args);
    if ($ticker_posts->have_posts()) :
        $ticker_label_text = newsarc_get_option('ticker_label_text');
        // Build attributes.
        $data_slider = array();
        $data_slider['spaceBetween'] = 0;
        $data_slider['slidesPerView'] = 1;
        $data_slider['autoplay'] = array(
            'delay' => 3500,
            'disableOnInteraction' => false,
        );
        $data_slider['loop'] = true;
        $data_slider['effect'] = 'fade';
        $data_slider['fadeEffect'] = array(
            'crossFade' => true,
        );
        $data_slider['navigation'] = array(
            'nextEl' => '.wpi-ticker-section .swiper-button-next',
            'prevEl' => '.wpi-ticker-section .swiper-button-prev',
        );
        ?>
        <section class="wpi-section wpi-ticker-section">
            <div class="wrapper">
                <div class="wpi-ticker-panel">
                    <?php if (newsarc_get_option('enable_ticker_label', true)) : ?>
                        <div class="wpi-ticker-title">
                            <span class="ticker-loader"></span>
                            <?php
                            if ($ticker_label_text) :
                                echo esc_html($ticker_label_text);
                            else :
                                esc_html_e('News Flash', 'newsarc');
                            endif;
                            ?>
                        </div>
                    <?php endif; ?>
                    <div class="wpi-ticker-content">
                        <div class="wpi-ticker-init swiper" data-slider='<?php echo esc_attr(json_encode($data_slider)); ?>'>
                            <div class="swiper-wrapper">
                                <?php
                                while ($ticker_posts->have_posts()) :
                                    $ticker_posts->the_post();
                                    ?>
                                    <div class="swiper-slide">
                                        <article id="ticker-post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-ticker'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image">
                                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                        <?php
                                                        the_post_thumbnail(
                                                            'thumbnail',
                                                            array(
                                                                'alt' => the_title_attribute(
                                                                    array(
                                                                        'echo' => false,
                                                                    )
                                                                ),
                                                            )
                                                        );
                                                        ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="entry-details">
                                                <?php
                                                if ($enable_ticker_posts_category_meta) {
                                                    newsarc_post_category($select_ticker_posts_category_color, $ticker_posts_category_label, $select_ticker_posts_number_of_category);
                                                }
                                                ?>
                                                <h3 class="entry-title entry-title-xsmall">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <div class="entry-meta-wrapper hide-on-tablet hide-on-mobile">
                                                    <?php
                                                    if ($enable_ticker_posts_date_meta) {
                                                        newsarc_posted_on($select_ticker_posts_date_format, $single_ticker_post_date_meta_title, $select_ticker_posts_date);
                                                    }
                                                    ?>

                                                    <?php
                                                    if ($enable_ticker_posts_date_meta && $enable_ticker_posts_author_meta) { ?>
                                                        <div class="entry-meta-separator"></div>
                                                    <?php } ?>

                                                    <?php
                                                    if ($enable_ticker_posts_author_meta) {
                                                        newsarc_posted_by($select_ticker_posts_author_meta, $ticker_posts_author_meta_title);
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="wpi-ticker-navigation">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endif;
}
