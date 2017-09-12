<?php
add_action( 'admin_init', 'modular_template_one_custom_page_meta' );
add_action( 'save_post', 'modular_template_one_custom_fields_update', 10, 2 );

function modular_template_one_custom_page_meta() {
    add_meta_box( 'modular_template_one_page_meta_box',
        'Page Information',
        'display_modular_template_one_page_meta_box',
        'page', 'normal', 'high'
    );
}

function display_modular_template_one_page_meta_box( $page ) {
    $show_page_sidebar = esc_html( get_post_meta( $page->ID, 'show_page_sidebar', true ) );
    $sidebar_location = esc_html( get_post_meta( $page->ID, 'sidebar_location', true ) );
    $show_page_title = esc_html( get_post_meta( $page->ID, 'show_page_title', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Show Sidebar</td>
            <td>
                <select name="show_page_sidebar">
                    <option value="1" <?php if($show_page_sidebar == '1'){ echo 'SELECTED'; } ?>>Yes</option>
                    <option value="0" <?php if($show_page_sidebar == '0'){ echo 'SELECTED'; } ?>>No</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 100%">Sidebar Location</td>
            <td>
                <select name="sidebar_location">
                    <option value="left" <?php if($sidebar_location == 'left'){ echo 'SELECTED'; } ?>>Left</option>
                    <option value="right" <?php if($sidebar_location == 'right'){ echo 'SELECTED'; } ?>>Right</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 100%">Show Page Title</td>
            <td>
                <select name="show_page_title">
                    <option value="1" <?php if($show_page_title == '1'){ echo 'SELECTED'; } ?>>Yes</option>
                    <option value="0" <?php if($show_page_title == '0'){ echo 'SELECTED'; } ?>>No</option>
                </select>
            </td>
        </tr>
    </table>
<?php
}

function modular_template_one_custom_fields_update($post_id, $post ){
    if ( $post->post_type == 'page' ) {
        if ( isset( $_POST['show_page_sidebar'] ) ) {
            update_post_meta( $post_id, 'show_page_sidebar', $_POST['show_page_sidebar'] );
        }
        if ( isset( $_POST['sidebar_location'] ) ) {
            update_post_meta( $post_id, 'sidebar_location', $_POST['sidebar_location'] );
        }
        if ( isset( $_POST['show_page_title'] ) ) {
            update_post_meta( $post_id, 'show_page_title', $_POST['show_page_title'] );
        }
    }
}
