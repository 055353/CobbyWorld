<?php
$enable_main_banner_section = newsarc_get_option('enable_main_banner_section');
$banner_list_post_title = newsarc_get_option('banner_list_post_title');
$banner_list_post_category = newsarc_get_option('banner_list_post_category');
$banner_grid_post_category = newsarc_get_option('banner_grid_post_category');

$enable_banner_author_meta = newsarc_get_option('enable_banner_author_meta');
$select_banner_author_meta = newsarc_get_option('select_banner_author_meta');
$banner_author_meta_title = newsarc_get_option('banner_author_meta_title');

$enable_banner_date_meta = newsarc_get_option('enable_banner_date_meta');
$select_banner_date = newsarc_get_option('select_banner_date');
$select_banner_date_meta_title = newsarc_get_option('select_banner_date_meta_title');
$select_banner_date_format = newsarc_get_option('select_banner_date_format');

$enable_banner_category_meta = newsarc_get_option('enable_banner_category_meta');
$banner_category_label = newsarc_get_option('banner_category_label');
$select_banner_category_color = newsarc_get_option('select_banner_category_color');
$select_banner_number_of_category = newsarc_get_option('select_banner_number_of_category');
if (empty($enable_main_banner_section)) {
    return;
}

?>
    <section class="wpi-section wpi-banner-section">
        <div class="wrapper">
            <div class="row-group">
                <div class="column-lg-8 column-md-12 column-sm-12">
                    <?php
                    // post grid middle section
                    $post_grid_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'post_status' => 'publish',
                        'no_found_rows' => 1,
                        'ignore_sticky_posts' => 1,
                    );
                    // Check for category.
                    if (!empty($banner_grid_post_category)) :
                        $post_grid_args['tax_query'] = array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => $banner_grid_post_category,
                            ),
                        );
                    endif;
                    $counts = 1;
                    $grid_posts = new WP_Query($post_grid_args);
                    if ($grid_posts->have_posts()) :
                        while ($grid_posts->have_posts()) :
                            $grid_posts->the_post(); ?>
                            <?php
                            $image_class = "";
                            $title_class = "";
                            switch ($counts) {
                                case "1":
                                    $image_class = "entry-image-large";
                                    $title_class = "entry-title-large";
                                    break;
                                case "2":
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                                    break;
                                case "3":
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                                    break;
                                default:
                                    $image_class = "entry-image-small";
                                    $title_class = "entry-title-medium";
                            }
                            ?>
                            <?php if ($counts == 1) {
                                echo "<div class='banner-center-top'>";
                            } ?>
                            <?php if ($counts <= 3) { ?>
                                <article id="banner-center-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-tile-post'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="entry-image <?php echo esc_attr($image_class); ?> image-hover-effect hover-effect-shine">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true"
                                               tabindex="-1">
                                                <?php
                                                the_post_thumbnail(
                                                    'medium',
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
                                        if ($enable_banner_category_meta) {
                                            newsarc_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                        }
                                        ?>
                                        <h3 class="entry-title <?php echo esc_attr($title_class); ?>">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta-wrapper">

                                            <?php
                                            if ($enable_banner_date_meta) {
                                                newsarc_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                            }
                                            ?>

                                            <?php
                                            if ($enable_banner_author_meta) {
                                                newsarc_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </article>
                                <?php $counts++;
                                if (($grid_posts->current_post + 1 == $grid_posts->post_count) || $counts == 4) {
                                    echo "</div>";
                                }
                            } else { ?>
                                <article id="banner-center-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list wpi-post-list-reverse'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="entry-image <?php echo esc_attr($image_class); ?> image-hover-effect hover-effect-shine">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true"
                                               tabindex="-1">
                                                <?php
                                                the_post_thumbnail(
                                                    'medium',
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
                                        if ($enable_banner_category_meta) {
                                            newsarc_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                        }
                                        ?>
                                        <h3 class="entry-title <?php echo esc_attr($title_class); ?>">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta-wrapper">

                                            <?php
                                            if ($enable_banner_date_meta) {
                                                newsarc_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                            }
                                            ?>

                                            <?php
                                            if ($enable_banner_author_meta) {
                                                newsarc_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </article>
                            <?php } ?>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <div class="column-lg-4 column-md-12 column-sm-12 border-lg-l">
                    <?php
                    // post list middle section
                    $post_list_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'post_status' => 'publish',
                        'no_found_rows' => 1,
                        'ignore_sticky_posts' => 1,
                    );
                    // Check for category.
                    if (!empty($banner_list_post_category)) :
                        $post_list_args['tax_query'] = array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => $banner_list_post_category,
                            ),
                        );
                    endif;
                    $count = 1;
                    $list_posts = new WP_Query($post_list_args); ?>

                    <header class="wpi-section-header">
                        <h2 class="section-header-title">
                            <?php echo esc_html($banner_list_post_title); ?>
                        </h2>
                    </header>

                    <?php
                    if ($list_posts->have_posts()) :
                        while ($list_posts->have_posts()) :
                            $list_posts->the_post(); ?>
                            <?php if ($count == 1) { ?>
                            <article id="banner-left-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-post-prime'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image entry-image-medium image-hover-effect hover-effect-shine">
                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true"
                                           tabindex="-1">
                                            <?php
                                            the_post_thumbnail(
                                                'medium',
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
                                    if ($enable_banner_category_meta) {
                                        newsarc_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                    }
                                    ?>
                                    <h3 class="entry-title entry-title-medium">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="entry-meta-wrapper">

                                        <?php
                                        if ($enable_banner_date_meta) {
                                            newsarc_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                        }
                                        ?>

                                        <?php
                                        if ($enable_banner_author_meta) {
                                            newsarc_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                        }
                                        ?>

                                    </div>
                                </div>
                            </article>
                            <?php $count++;
                        } else { ?>
                            <article id="banner-left-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image entry-image-thumbnail image-hover-effect hover-effect-zoom">
                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                            <?php
                                            the_post_thumbnail(
                                                'medium',
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
                                    if ($enable_banner_category_meta) {
                                        newsarc_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                    }
                                    ?>
                                    <h3 class="entry-title entry-title-small">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="entry-meta-wrapper">

                                        <?php
                                        if ($enable_banner_date_meta) {
                                            newsarc_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                        }
                                        ?>

                                        <?php
                                        if ($enable_banner_author_meta) {
                                            newsarc_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                        }
                                        ?>

                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>