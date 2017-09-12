<?php
class modularWpCp{

    public function createMenuGroup(){
        add_action('admin_menu', array($this, 'createAdminMenu'));

        add_action('admin_print_scripts', array($this,'modular_wp_admin_scripts'));
        add_action('admin_print_styles', array($this,'modular_wp_admin_styles'));
    }

    function modular_wp_admin_styles() {
        wp_enqueue_style('thickbox');
    }

    function modular_wp_admin_scripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_register_script('my-upload',get_template_directory_uri().'/admin/js/uploader.js', array('jquery','media-upload','thickbox'));
        wp_enqueue_script('my-upload');
    }

    public function createAdminMenu(){
        add_menu_page( 'Modular Wp Control Panel', 'Modular Wp Control Panel', 10, 'modular-wp-control-panel', array($this, 'modularWpControlPanel') );
        add_submenu_page( 'modular-wp-control-panel', 'Social Settings', 'Social Settings', 10, 'modular-wp-control-panel-social-settings', array($this,'modularWpControlPanelSocialSettings') );
        add_submenu_page( 'modular-wp-control-panel', 'Sidebars', 'Sidebars', 10, 'modular-wp-control-panel-sidebars', array($this,'modularWpControlPanelSidebars') );
        add_submenu_page( 'modular-wp-control-panel', 'Fonts', 'Fonts', 10, 'modular-wp-control-panel-fonts', array($this,'modularWpControlPanelFonts') );
        add_action( 'admin_init', array($this,'register_modularWpSettings'));
    }

    function register_modularWpSettings(){
        /*-- FONTS ---*/
        register_setting( 'modularwp-fonts-group', 'modular_wp_font_imports' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_h1_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h1_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h1_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h1_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_h2_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h2_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h2_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h2_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_h3_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h3_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h3_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h3_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_h4_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h4_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h4_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h4_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_h5_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h5_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h5_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h5_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_h6_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h6_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h6_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_h6_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_p_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_p_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_p_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_p_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_li_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_li_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_li_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_li_color' );

        register_setting( 'modularwp-fonts-group', 'modular_wp_a_font_family' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_a_weight' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_a_style' );
        register_setting( 'modularwp-fonts-group', 'modular_wp_a_color' );

        /*-- GENERAL SETTINGS ---*/
        register_setting( 'modularwp-settings-group', 'modular_wp_logo' );
        register_setting( 'modularwp-settings-group', 'modular_wp_favicon' );
        register_setting( 'modularwp-settings-group', 'modular_wp_site_style' );

        register_setting( 'modularwp-settings-group', 'modular_wp_excerpt_length' );
        register_setting( 'modularwp-settings-group', 'modular_wp_custom_css' );
        register_setting( 'modularwp-settings-group', 'modular_wp_custom_css_1225' );
        register_setting( 'modularwp-settings-group', 'modular_wp_custom_css_935' );
        register_setting( 'modularwp-settings-group', 'modular_wp_custom_css_730' );
        register_setting( 'modularwp-settings-group', 'modular_wp_custom_css_530' );
        register_setting( 'modularwp-settings-group', 'modular_wp_header_js' );
        register_setting( 'modularwp-settings-group', 'modular_wp_footer_js' );

        /*-- SOCIAL SETTINGS ---*/
        register_setting( 'modularwp-social-group', 'modular_wp_facebook_url' );
        register_setting( 'modularwp-social-group', 'modular_wp_twitter_url' );
        register_setting( 'modularwp-social-group', 'modular_wp_linkedin_url' );
        register_setting( 'modularwp-social-group', 'modular_wp_google_plus_url' );
        register_setting( 'modularwp-social-group', 'modular_wp_youtube_url' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_url_1' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_url_2' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_url_3' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_url_4' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_url_5' );

        register_setting( 'modularwp-social-group', 'modular_wp_facebook_icon' );
        register_setting( 'modularwp-social-group', 'modular_wp_twitter_icon' );
        register_setting( 'modularwp-social-group', 'modular_wp_linkedin_icon' );
        register_setting( 'modularwp-social-group', 'modular_wp_google_plus_icon' );
        register_setting( 'modularwp-social-group', 'modular_wp_youtube_icon' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_icon_1' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_icon_2' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_icon_3' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_icon_4' );
        register_setting( 'modularwp-social-group', 'modular_social_custom_icon_5' );

        /*--- Sidebar Settings ---*/
        register_setting( 'modularwp-sidebar', 'modular_wp_sidebars' );
    }

    function modularWpControlPanel(){
        echo '<div class="wrap">';
            echo '<h2>Modular WP Control Panel</h2>';

            echo '<form method="post" action="options.php">';
                settings_fields( 'modularwp-settings-group' );
                do_settings_sections( 'modularwp-settings-group' );

                echo '<h4>General</h4>';
                echo '<p>Logo URL<br/><input style="width: 100%" type="text" name="modular_wp_logo" value="'.get_option('modular_wp_logo').'" />
                <input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" />
                </p>';
                echo '<p>Favicon URL<br/><input style="width: 100%" type="text" name="modular_wp_favicon" value="'.get_option('modular_wp_favicon').'" />
                <input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" />
                </p>';
                echo '<p>Site Style<br/><select name="modular_wp_site_style"><option '.((get_option('modular_wp_site_style') == "Full Width")?"SELECTED":"").'>Full Width</option><option '.((get_option('modular_wp_site_style') == "Boxed")?"SELECTED":"").'>Boxed</option></select>
                </p>';
                echo '<p>Excerpt Length<br/><input style="width: 100%" type="text" name="modular_wp_excerpt_length" value="'.get_option('modular_wp_excerpt_length').'" /></p>';

                echo '<p>Header JS<br/><textarea style="width: 100%" name="modular_wp_header_js">'.get_option('modular_wp_header_js').'</textarea></p>';
                echo '<p>Footer JS<br/><textarea style="width: 100%" name="modular_wp_footer_js">'.get_option('modular_wp_footer_js').'</textarea></p>';
                submit_button();
            echo '</form>';
        echo '</div>';
    }

    function modularWpControlPanelSocialSettings(){
        echo '<div class="wrap">';
            echo '<h2>Social Settings</h2>';
            echo '<form method="post" action="options.php">';
                settings_fields( 'modularwp-social-group' );
                do_settings_sections( 'modularwp-social-group' );
                echo '<p>Facebook URL<br/><input style="width: 100%" type="text" name="modular_wp_facebook_url" value="'.get_option('modular_wp_facebook_url').'" /></p>';
                echo '<p>Facebook Icon<br/><input style="width: 100%" type="text" name="modular_wp_facebook_icon" value="'.get_option('modular_wp_facebook_icon').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';

                echo '<p>Twitter URL<br/><input style="width: 100%" type="text" name="modular_wp_twitter_url" value="'.get_option('modular_wp_twitter_url').'" /></p>';
                echo '<p>Twitter Icon<br/><input style="width: 100%" type="text" name="modular_wp_twitter_icon" value="'.get_option('modular_wp_twitter_icon').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';

                echo '<p>Linked In URL<br/><input style="width: 100%" type="text" name="modular_wp_linkedin_url" value="'.get_option('modular_wp_linkedin_url').'" /></p>';
                echo '<p>Linked In Icon<br/><input style="width: 100%" type="text" name="modular_wp_linkedin_icon" value="'.get_option('modular_wp_linkedin_icon').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';

                echo '<p>Google Plus URL<br/><input style="width: 100%" type="text" name="modular_wp_google_plus_url" value="'.get_option('modular_wp_google_plus_url').'" /></p>';
                echo '<p>Google Plus Icon<br/><input style="width: 100%" type="text" name="modular_wp_google_plus_icon" value="'.get_option('modular_wp_google_plus_icon').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';

                echo '<p>You Tube URL<br/><input style="width: 100%" type="text" name="modular_wp_youtube_url" value="'.get_option('modular_wp_youtube_url').'" /></p>';
                echo '<p>You Tube Icon<br/><input style="width: 100%" type="text" name="modular_wp_youtube_icon" value="'.get_option('modular_wp_youtube_icon').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';


                echo '<hr />';
                echo '<p>Custom URL<br/><input style="width: 100%" type="text" name="modular_social_custom_url_1" value="'.get_option('modular_social_custom_url_1').'" /></p>';
                echo '<p>Custom Icon<br/><input style="width: 100%" type="text" name="modular_social_custom_icon_1" value="'.get_option('modular_social_custom_icon_1').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';
                echo '<p>Custom URL<br/><input style="width: 100%" type="text" name="modular_social_custom_url_2" value="'.get_option('modular_social_custom_url_2').'" /></p>';
                echo '<p>Custom Icon<br/><input style="width: 100%" type="text" name="modular_social_custom_icon_2" value="'.get_option('modular_social_custom_icon_2').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';
                echo '<p>Custom URL<br/><input style="width: 100%" type="text" name="modular_social_custom_url_3" value="'.get_option('modular_social_custom_url_3').'" /></p>';
                echo '<p>Custom Icon<br/><input style="width: 100%" type="text" name="modular_wp_h1_font_family" value="'.get_option('modular_social_custom_icon_3').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';
                echo '<p>Custom URL<br/><input style="width: 100%" type="text" name="modular_social_custom_url_4" value="'.get_option('modular_social_custom_url_4').'" /></p>';
                echo '<p>Custom Icon<br/><input style="width: 100%" type="text" name="modular_social_custom_icon_4" value="'.get_option('modular_social_custom_icon_4').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';

                echo '<hr />';
                echo '<p>Custom URL<br/><input style="width: 100%" type="text" name="modular_social_custom_url_5" value="'.get_option('modular_social_custom_url_5').'" /></p>';
                echo '<p>Custom Icon<br/><input style="width: 100%" type="text" name="modular_social_custom_icon_5" value="'.get_option('modular_social_custom_icon_5').'" /><input class="upload_image_button button button-primary button-small" type="button" value="Upload Image" /></p>';


        submit_button();
            echo '</form>';
        echo '</div>';
    }

    function modularWpControlPanelSidebars(){
        echo '<div class="wrap">';
            echo '<form method="post" action="options.php">';
                settings_fields( 'modularwp-sidebar' );
                do_settings_sections( 'modularwp-sidebar' );
                echo '<h2>Sidebars</h2>';
                echo '<p>Create and manage dynamic sidebars.</p>';

                echo '<h4>Theme Sidebars</h4>';
                echo '<ul>';
                if($GLOBALS['wp_registered_sidebars'] != 0){
                    foreach($GLOBALS['wp_registered_sidebars'] as $sidebar){
                        echo '<li>'.$sidebar['name'].'</li>';
                    }
                }

                echo '</ul>';

                echo '<h4>Additional Sidebars</h4>';

                $modular_sidebars = get_option('modular_wp_sidebars');
                if(is_array($modular_sidebars)){
                    $counter = 0;
                    foreach($modular_sidebars as $sidebar){
                        echo '<p>';
                            echo '<input class="modular_additional_sidebar" type="text" name="modular_wp_sidebars[modular_wp_sidebar-'.$counter.']" value="'.$sidebar.'" />';
                            echo '<a href=\'#\' class=\'removeSidebar button button-primary button-small\' style=\'margin-left:20px\'>Remove Sidebar</a>';
                        echo '</p>';
                        $counter ++;
                    }
                }

                echo '<div id="additionalSidebars"></div>';

                echo '<a id="addSidebar" href="#" class="button button-primary">Add Sidebar</a>';

                echo '<script>
                    jQuery("#addSidebar").click(function(){
                        var numItems = jQuery(".modular_additional_sidebar").length;
                        jQuery("#additionalSidebars").append("<p><input class=\'modular_additional_sidebar\' type=\'text\' name=\'modular_wp_sidebars[modular_wp_sidebar-"+numItems+"]\' /><a href=\'#\' class=\'removeSidebar button button-primary button-small\' style=\'margin-left:20px\'>Remove Sidebar</a></p>");
                        return false;
                    });

                    jQuery(document).on("click",".removeSidebar",function(){
                        var r = confirm("Are you sure you want to permanently delete this sidebar.");
                        if (r == true) {
                            jQuery(this).parent("p").remove();
                        }
                        return false;
                    });

                </script>';

            submit_button();
            echo '</form>';
        echo '</div>';
    }

    function modularWpControlPanelFonts(){
        echo '<div class="wrap">';
            echo '<h2>Modular WP Control Panel</h2>';

            echo '<form method="post" action="options.php">';
            settings_fields( 'modularwp-fonts-group' );
            do_settings_sections( 'modularwp-fonts-group' );

            echo '<h4>Google Fonts @import</h4>';
            echo '<p>Copy / past @import code from google fonts</p>';

            echo '<p><textarea style="width: 100%" name="modular_wp_font_imports">'.get_option('modular_wp_font_imports').'</textarea></p>';

            echo '<h4>H1</h4>';
            echo '<p>Font Family</p>';
            echo '<input type="text" name="modular_wp_h1_font_family" value="'.get_option('modular_wp_h1_font_family').'" />';
            echo '<p>Font Color</p>';
            echo '<input type="text" name="modular_wp_h1_color" value="'.get_option('modular_wp_h1_color').'" />';
            echo '<p>Font Weight</p>';
            echo '<select name="modular_wp_h1_weight">
                <option '.((get_option('modular_wp_h1_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h1_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_h1_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_h1_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_h1_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_h1_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_h1_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_h1_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_h1_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_h1_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
            echo '<select name="modular_wp_h1_style">
                <option '.((get_option('modular_wp_h1_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h1_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_h1_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';


        echo '<h4>H2</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_h2_font_family" value="'.get_option('modular_wp_h2_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_h2_color" value="'.get_option('modular_wp_h2_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_h2_weight">
                <option '.((get_option('modular_wp_h2_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h2_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_h2_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_h2_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_h2_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_h2_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_h2_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_h2_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_h2_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_h2_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_h2_style">
                <option '.((get_option('modular_wp_h2_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h2_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_h2_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

        echo '<h4>H3</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_h3_font_family" value="'.get_option('modular_wp_h3_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_h3_color" value="'.get_option('modular_wp_h3_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_h3_weight">
                <option '.((get_option('modular_wp_h3_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h3_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_h3_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_h3_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_h3_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_h3_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_h3_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_h3_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_h3_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_h3_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_h3_style">
                <option '.((get_option('modular_wp_h3_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h3_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_h3_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

        echo '<h4>H4</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_h4_font_family" value="'.get_option('modular_wp_h4_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_h4_color" value="'.get_option('modular_wp_h4_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_h4_weight">
                <option '.((get_option('modular_wp_h4_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h4_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_h4_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_h4_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_h4_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_h4_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_h4_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_h4_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_h4_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_h4_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_h4_style">
                <option '.((get_option('modular_wp_h4_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h4_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_h4_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

        echo '<h4>H5</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_h5_font_family" value="'.get_option('modular_wp_h5_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_h5_color" value="'.get_option('modular_wp_h5_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_h5_weight">
                <option '.((get_option('modular_wp_h5_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h5_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_h5_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_h5_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_h5_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_h5_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_h5_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_h5_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_h5_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_h5_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_h5_style">
                <option '.((get_option('modular_wp_h5_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h5_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_h5_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

        echo '<h4>H6</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_h6_font_family" value="'.get_option('modular_wp_h6_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_h6_color" value="'.get_option('modular_wp_h6_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_h6_weight">
                <option '.((get_option('modular_wp_h6_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h6_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_h6_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_h6_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_h6_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_h6_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_h6_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_h6_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_h6_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_h6_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_h6_style">
                <option '.((get_option('modular_wp_h6_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_h6_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_h6_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

        echo '<h4>P</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_p_font_family" value="'.get_option('modular_wp_p_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_p_color" value="'.get_option('modular_wp_p_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_p_weight">
                <option '.((get_option('modular_wp_p_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_p_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_p_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_p_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_p_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_p_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_p_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_p_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_p_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_p_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_p_style">
                <option '.((get_option('modular_wp_p_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_p_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_p_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

        echo '<h4>LI</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_li_font_family" value="'.get_option('modular_wp_li_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_li_color" value="'.get_option('modular_wp_li_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_li_weight">
                <option '.((get_option('modular_wp_li_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_li_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_li_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_li_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_li_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_li_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_li_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_li_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_li_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_li_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_li_style">
                <option '.((get_option('modular_wp_li_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_li_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_li_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

        echo '<h4>A</h4>';
        echo '<p>Font Family</p>';
        echo '<input type="text" name="modular_wp_a_font_family" value="'.get_option('modular_wp_a_font_family').'" />';
        echo '<p>Font Color</p>';
        echo '<input type="text" name="modular_wp_a_color" value="'.get_option('modular_wp_a_color').'" />';
        echo '<p>Font Weight</p>';
        echo '<select name="modular_wp_a_weight">
                <option '.((get_option('modular_wp_a_weight') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_a_weight') == "100")?"SELECTED":"").'>100</option>
                <option '.((get_option('modular_wp_a_weight') == "200")?"SELECTED":"").'>200</option>
                <option '.((get_option('modular_wp_a_weight') == "300")?"SELECTED":"").'>300</option>
                <option '.((get_option('modular_wp_a_weight') == "400")?"SELECTED":"").'>400</option>
                <option '.((get_option('modular_wp_a_weight') == "500")?"SELECTED":"").'>500</option>
                <option '.((get_option('modular_wp_a_weight') == "600")?"SELECTED":"").'>600</option>
                <option '.((get_option('modular_wp_a_weight') == "700")?"SELECTED":"").'>700</option>
                <option '.((get_option('modular_wp_a_weight') == "800")?"SELECTED":"").'>800</option>
                <option '.((get_option('modular_wp_a_weight') == "900")?"SELECTED":"").'>900</option>
            </select>';
        echo '<p>Font Style</p>';
        echo '<select name="modular_wp_a_style">
                <option '.((get_option('modular_wp_a_style') == "Theme Default")?"SELECTED":"").'>Theme Default</option>
                <option '.((get_option('modular_wp_a_style') == "normal")?"SELECTED":"").'>normal</option>
                <option '.((get_option('modular_wp_a_style') == "italic")?"SELECTED":"").'>italic</option>
            </select>';

            submit_button();
            echo '</form>';
        echo '</div>';
    }

    function modularWpSettings(){

    }

}