<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsArc
 */
?>
<?php do_action('newsarc_before_footer'); ?>

<?php get_template_part('template-parts/footer/before-footer'); ?>

<footer id="colophon" class="site-footer">

    <?php get_template_part('template-parts/footer/footer-widgetarea'); ?>

    <div class="wrapper">
    <div class="wpi-seperator"></div>
    </div>

    <?php get_template_part('template-parts/footer/footer-copyright'); ?>


</footer><!-- #colophon -->
<?php get_template_part('template-parts/footer/after-footer'); ?>

<?php do_action('newsarc_before_footer'); ?>

<?php
$enable_footer_scroll_to_top = newsarc_get_option('enable_footer_scroll_to_top');
if ($enable_footer_scroll_to_top) { ?>
<button id="scrollToTopBtn" aria-label="Scroll to top" title="Scroll to top">
    <svg id="progressCircle" width="50" height="50" aria-hidden="true">
        <circle cx="25" cy="25" r="22" stroke-width="4" fill="none"/>
    </svg>
    <?php newsarc_the_theme_svg('arrow-up'); ?>
</button>
<?php } ?>

<?php
$enable_footer_progressbar = newsarc_get_option('enable_footer_progressbar');
if ($enable_footer_progressbar) { ?>
    <div id="progressBarContainer">
        <div id="progressBar"></div>
    </div>
<?php } ?>

</div><!-- #page -->

<?php
wp_footer(); ?>

</body>
</html>
