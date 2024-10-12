<?php
/**
 * Add custom fields to post categories.
 *
 * @package WordPress
 * @subpackage NewsArc
 * @since NewsArc 1.0.0
 */

// Add custom fields to the category add form
function newsarc_add_category_fields() {
    ?>
    <div class="form-field term-thumbnail-wrap">
        <label><?php esc_html_e( 'Thumbnail', 'newsarc' ); ?></label>
        <div id="post_cat_thumbnail" style="float: left; margin-right: 10px;">
            <img src="<?php echo esc_url( newsarc_placeholder_image() ); ?>" width="60px" height="60px" />
        </div>
        <div style="line-height: 60px;">
            <input type="hidden" id="post_cat_thumbnail_id" name="post_cat_thumbnail_id" />
            <button type="button" class="upload_image_button button"><?php esc_html_e( 'Upload/Add image', 'newsarc' ); ?></button>
            <button type="button" class="remove_image_button button"><?php esc_html_e( 'Remove image', 'newsarc' ); ?></button>
        </div>
        <div class="clear"></div>
    </div>
    <div class="form-field term-color-wrap">
        <label for="term-colorpicker"><?php esc_html_e( 'Category Color', 'newsarc' ); ?></label>
        <input name="category_color" class="colorpicker" id="term-colorpicker" />
        <p><?php esc_html_e( 'Select color for this category that will be displayed on the front end in many sections.', 'newsarc' ); ?></p>
    </div>
    <?php
}
add_action( 'category_add_form_fields', 'newsarc_add_category_fields' );

// Add custom fields to the category edit form
function newsarc_edit_category_fields( $term ) {
    $color = get_term_meta( $term->term_id, 'category_color', true );
    $thumbnail_id = absint( get_term_meta( $term->term_id, 'thumbnail_id', true ) );
    $image = $thumbnail_id ? wp_get_attachment_thumb_url( $thumbnail_id ) : newsarc_placeholder_image();
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label><?php esc_html_e( 'Thumbnail', 'newsarc' ); ?></label></th>
        <td>
            <div id="post_cat_thumbnail" style="float: left; margin-right: 10px;">
                <img src="<?php echo esc_url( $image ); ?>" width="60px" height="60px" />
            </div>
            <div style="line-height: 60px;">
                <input type="hidden" id="post_cat_thumbnail_id" name="post_cat_thumbnail_id" value="<?php echo $thumbnail_id; ?>" />
                <button type="button" class="upload_image_button button"><?php esc_html_e( 'Upload/Add image', 'newsarc' ); ?></button>
                <button type="button" class="remove_image_button button"><?php esc_html_e( 'Remove image', 'newsarc' ); ?></button>
            </div>
            <div class="clear"></div>
        </td>
    </tr>
    <tr class="form-field term-color-wrap">
        <th scope="row"><label for="term-colorpicker"><?php esc_html_e( 'Category Color', 'newsarc' ); ?></label></th>
        <td>
            <input name="category_color" value="<?php echo esc_attr( $color ); ?>" class="colorpicker" id="term-colorpicker" />
            <p class="description"><?php esc_html_e( 'Select color for this category that will be displayed on the front end in many sections.', 'newsarc' ); ?></p>
        </td>
    </tr>
    <?php
}
add_action( 'category_edit_form_fields', 'newsarc_edit_category_fields', 10 );

// Save custom category fields
function newsarc_save_category_fields( $term_id ) {
    if ( isset( $_POST['post_cat_thumbnail_id'] ) ) {
        update_term_meta( $term_id, 'thumbnail_id', absint( $_POST['post_cat_thumbnail_id'] ) );
    }

    if ( isset( $_POST['category_color'] ) && ! empty( $_POST['category_color'] ) ) {
        update_term_meta( $term_id, 'category_color', sanitize_hex_color( $_POST['category_color'] ) );
    } else {
        delete_term_meta( $term_id, 'category_color' );
    }
}
add_action( 'created_category', 'newsarc_save_category_fields', 10, 3 );
add_action( 'edited_category', 'newsarc_save_category_fields', 10, 3 );

// Enqueue scripts and styles for category fields
function newsarc_admin_category_meta_js( $hook ) {
    if ( ! in_array( $hook, array( 'edit-tags.php', 'term.php' ), true ) ) {
        return;
    }

    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker' );
    wp_enqueue_media();
    wp_enqueue_script( 'newsarc_post_cat_js', get_template_directory_uri() . '/inc/admin/meta-box/assets/category-meta-box.js', array( 'wp-color-picker' ), NEWSARC_VERSION, true );

    wp_localize_script(
        'newsarc_post_cat_js',
        'WPINTERFACEADMIN',
        array(
            'title'   => __( 'Choose an image', 'newsarc' ),
            'btn_txt' => __( 'Use image', 'newsarc' ),
            'img'     => esc_js( newsarc_placeholder_image() ),
        )
    );
}
add_action( 'admin_enqueue_scripts', 'newsarc_admin_category_meta_js' );

// Display category image in admin columns
function newsarc_post_cat_column_head( $columns ) {
    $new_columns = array();

    if ( isset( $columns['cb'] ) ) {
        $new_columns['cb'] = $columns['cb'];
        unset( $columns['cb'] );
    }

    $new_columns['thumb'] = __( 'Image', 'newsarc' );

    return array_merge( $new_columns, $columns );
}
add_filter( 'manage_edit-category_columns', 'newsarc_post_cat_column_head' );

function newsarc_post_cat_column_body( $columns, $column, $id ) {
    if ( 'thumb' === $column ) {
        $thumbnail_id = get_term_meta( $id, 'thumbnail_id', true );
        $image = $thumbnail_id ? wp_get_attachment_thumb_url( $thumbnail_id ) : newsarc_placeholder_image();
        if (!empty($image)) {
            $columns .= '<img src="' . esc_url( $image ) . '" alt="' . esc_attr__( 'Thumbnail', 'newsarc' ) . '" class="wp-post-image" height="48" width="48" />';
        }
    }
    return $columns;
}
add_filter( 'manage_category_custom_column', 'newsarc_post_cat_column_body', 10, 3 );
