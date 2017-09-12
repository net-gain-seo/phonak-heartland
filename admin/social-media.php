<?php
class socialMedia{
    function __construct(){

    }
    function renderIcons(){
        if(get_option('modular_wp_facebook_url') != ''){ echo '<a id="facebook-icon" target="_blank" title="'.get_bloginfo('name').' Facebook Page" href="'.get_option('modular_wp_facebook_url').'"><img alt="'.get_bloginfo('name').' Facebook Page" src="'.get_option('modular_wp_facebook_icon').'" /></a>'; }
        if(get_option('modular_wp_twitter_url') != ''){ echo '<a id="twitter-icon" target="_blank" title="'.get_bloginfo('name').' Twitter Page" href="'.get_option('modular_wp_twitter_url').'"><img alt="'.get_bloginfo('name').' Twitter Page" src="'.get_option('modular_wp_twitter_icon').'" /></a>'; }
        if(get_option('modular_wp_linkedin_url') != ''){ echo '<a id="linkedin-icon" target="_blank" title="'.get_bloginfo('name').' Linked In Page" href="'.get_option('modular_wp_linkedin_url').'"><img alt="'.get_bloginfo('name').' Linked In Page" src="'.get_option('modular_wp_linkedin_icon').'" /></a>'; }
        if(get_option('modular_wp_google_plus_url') != ''){ echo '<a id="google-icon" target="_blank" title="'.get_bloginfo('name').' Google Plus Page" href="'.get_option('modular_wp_google_plus_url').'"><img alt="'.get_bloginfo('name').' Google Plus Page" src="'.get_option('modular_wp_google_plus_icon').'" /></a>'; }
        if(get_option('modular_wp_youtube_url') != ''){ echo '<a id="youtube-icon" target="_blank" title="'.get_bloginfo('name').' YouTube Page" href="'.get_option('modular_wp_youtube_url').'"><img alt="'.get_bloginfo('name').' YouTube Page" src="'.get_option('modular_wp_youtube_icon').'" /></a>'; }

        if(get_option('modular_social_custom_url_1') != ''){ echo '<a id="youtube-icon" target="_blank"  href="'.get_option('modular_social_custom_url_1').'"><img src="'.get_option('modular_social_custom_icon_1').'" /></a>'; }
        if(get_option('modular_social_custom_url_2') != ''){ echo '<a id="youtube-icon" target="_blank" href="'.get_option('modular_social_custom_url_2').'"><img src="'.get_option('modular_social_custom_icon_2').'" /></a>'; }
        if(get_option('modular_social_custom_url_3') != ''){ echo '<a id="youtube-icon" target="_blank" href="'.get_option('modular_social_custom_url_3').'"><img src="'.get_option('modular_social_custom_icon_3').'" /></a>'; }
        if(get_option('modular_social_custom_url_4') != ''){ echo '<a id="youtube-icon" target="_blank" href="'.get_option('modular_social_custom_url_4').'"><img src="'.get_option('modular_social_custom_icon_4').'" /></a>'; }
        if(get_option('modular_social_custom_url_5') != ''){ echo '<a id="youtube-icon" target="_blank" href="'.get_option('modular_social_custom_url_5').'"><img src="'.get_option('modular_social_custom_icon_5').'" /></a>'; }
    }

    function ificonsexist() {
        $theicons = array();

        $facebook = get_option('modular_wp_facebook_url');
        $twitter = get_option('modular_wp_twitter_url');
        $linkedin = get_option('modular_wp_linkedin_url');
        $google = get_option('modular_wp_google_plus_url');
        $youtube = get_option('modular_wp_youtube_url');
        $custom1 = get_option('modular_social_custom_url_1');
        $custom2 = get_option('modular_social_custom_url_2');
        $custom3 = get_option('modular_social_custom_url_3');
        $custom4 = get_option('modular_social_custom_url_4');
        $custom5 = get_option('modular_social_custom_url_5');

        if($facebook != ''){
            $theicons[] = $facebook;
        }

        if($twitter != ''){
            $theicons[] = $twitter;
        }

        if($linkedin != ''){
            $theicons[] = $linkedin;
        }

        if($google != ''){
            $theicons[] = $google;
        }

        if($facebook != ''){
            $theicons[] = $facebook;
        }

        if($youtube != ''){
            $theicons[] = $youtube;
        }

        if($custom1 != ''){
            $theicons[] = $custom1;
        }

        if($custom2 != ''){
            $theicons[] = $custom2;
        }

        if($custom3 != ''){
            $theicons[] = $custom3;
        }

        if($custom4 != ''){
            $theicons[] = $custom4;
        }

        if($custom5 != ''){
            $theicons[] = $custom5;
        }

        return $theicons;
    }
}