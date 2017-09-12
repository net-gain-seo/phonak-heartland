<?php
add_action('admin_menu', 'phonakCreateAdminMenu');

function phonakCreateAdminMenu(){
    add_menu_page( 'Phonak Options', 'Phonak Theme Options', 10, 'phonak-theme-options', 'modularWpControlPanelPhonakThemeOptions' );
    add_action( 'admin_init', 'register_modularWpPhonakSettings');
}

function register_modularWpPhonakSettings(){
    register_setting( 'phonak-theme-options', 'hearing_quiz_url' );
    register_setting( 'phonak-theme-options', 'hearing_quiz_title' );
    register_setting( 'phonak-theme-options', 'hearing_quiz_email_to' );
    register_setting( 'phonak-theme-options', 'header_social_icons' );
    register_setting( 'phonak-theme-options', 'request_appointment_url' );
}

function modularWpControlPanelPhonakThemeOptions(){
    echo '<div class="wrap">';
        echo '<h2>Theme Styles</h2>';
        echo '<form method="post" action="options.php">';
            settings_fields( 'phonak-theme-options' );
            do_settings_sections( 'phonak-theme-options' );

            echo '<div class="themeOptions">';

                echo '<div>';
                    echo '<label>Hearing Quiz URL</label>';
                    echo '<input type="text" name="hearing_quiz_url" value="'.get_option('hearing_quiz_url').'" />';
                echo '</div>';

                echo '<div>';
                    echo '<label>Hearing Quiz Title</label>';
                    echo '<input type="text" name="hearing_quiz_title" value="'.get_option('hearing_quiz_title').'" />';
                echo '</div>';

                echo '<div>';
                    echo '<label>Hearing Quiz Email TO</label>';
                    echo '<input type="text" name="hearing_quiz_email_to" value="'.get_option('hearing_quiz_email_to').'" />';
                echo '</div>';

                echo '<div>';
                    echo '<label>Request Appointment URL</label>';
                    echo '<input type="text" name="request_appointment_url" value="'.get_option('request_appointment_url').'" />';
                echo '</div>';

                echo '<div>';
                    echo '<label>Header Social Icons</label>';
                    echo '<input type="text" name="header_social_icons" value="'.get_option('header_social_icons').'" />';
                echo '</div>';

                submit_button();

            echo '</div>';

        echo '</form>';
    echo '</div>';


?>
<style>
    .themeOptions{

    }
    .themeOptions > div{
        position: relative;
        clear: both;
        margin-top: 20px;
    }

    .themeOptions > div label{
        display: block;
        margin-bottom: 5px;
    }

</style>
<?php

}
