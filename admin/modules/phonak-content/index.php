<?php

/// SHORT CODE BUTTON

function phonak_content_shortcode_btn() {
    //Abort early if the user will never see TinyMCE
    if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
        return;

    //Add a callback to regiser our tinymce plugin
    add_filter("mce_external_plugins", "register_phonak_content_tinymce");

    // Add a callback to add our button to the TinyMCE toolbar
    add_filter('mce_buttons', 'add_phonak_content_tinymce_btn');
}

add_action('init', 'phonak_content_shortcode_btn');


//This callback registers our plug-in
function register_phonak_content_tinymce($plugin_array) {
    $plugin_array['phonak_content_button'] = get_stylesheet_directory_uri().'/admin/modules/phonak-content/tinymce.js';
    return $plugin_array;
}

//This callback adds our button to the toolbar
function add_phonak_content_tinymce_btn($buttons) {
    //Add the button ID to the $button array
    $buttons[] = "phonak_content_button";
    return $buttons;
}