<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */
/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if (!function_exists('newsarc_hex2rgb')) {
    function newsarc_hex2rgb($colour, $opacity = 1)
    {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }
        if (strlen($colour) == 6) {
            list($r, $g, $b) = array($colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]);
        } elseif (strlen($colour) == 3) {
            list($r, $g, $b) = array($colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]);
        } else {
            return false;
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $opacity . ')';
    }
}
if (!function_exists('newsarc_get_inline_css')) :
    /**
     * Outputs theme custom CSS.
     *
     * @since 1.0.0
     */
    function newsarc_get_inline_css()
    {
        $defaults = newsarc_get_all_customizer_default_values();
        $background_color = get_theme_mod('background_color');
        ob_start();
        ?>
        <?php if (!empty($background_color) && $background_color != 'ffffff') :
            ?>
            :root {
            --theme-bg-color: #<?php echo esc_attr($background_color); ?>;
            }
        <?php endif; ?>
        <?php
        return ob_get_clean();
    }
endif;
