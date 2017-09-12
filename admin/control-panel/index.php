<?php
include(TEMPLATEPATH.'/admin/control-panel/helpers/common_helper.php');
include(TEMPLATEPATH.'/admin/control-panel/modularWpCp.php');

$cp = new modularWpCp();
$cp->createMenuGroup();

function modular_wp_excerpt_length($length) {
    return get_option('modular_wp_excerpt_length');
}

if(get_option('modular_wp_excerpt_length') != ''){
    add_filter('excerpt_length', 'modular_wp_excerpt_length');
}


/*--- register sidebars----*/
/*
 * this should maybe be put into a class
 */
$modular_sidebars = get_option('modular_wp_sidebars');

if(is_array($modular_sidebars)){
    $counter = 0;
    foreach($modular_sidebars as $sidebar){
        register_sidebar(array(
            'name' => $sidebar,
            'id' => friendlyUrl($sidebar)
        ));
    }
}





/*---- check custom fonts... if so add styles to header---*/
function font_check_render() {
    $imports = get_option('modular_wp_font_imports');

    $h1_font_family = get_option('modular_wp_h1_font_family');
    $h1_color = get_option('modular_wp_h1_color');
    $h1_font_weight = get_option('modular_wp_h1_weight');
    $h1_font_style = get_option('modular_wp_h1_style');

    $h2_font_family = get_option('modular_wp_h2_font_family');
    $h2_color = get_option('modular_wp_h2_color');
    $h2_font_weight = get_option('modular_wp_h2_weight');
    $h2_font_style = get_option('modular_wp_h2_style');

    $h3_font_family = get_option('modular_wp_h3_font_family');
    $h3_color = get_option('modular_wp_h3_color');
    $h3_font_weight = get_option('modular_wp_h3_weight');
    $h3_font_style = get_option('modular_wp_h3_style');

    $h4_font_family = get_option('modular_wp_h4_font_family');
    $h4_color = get_option('modular_wp_h4_color');
    $h4_font_weight = get_option('modular_wp_h4_weight');
    $h4_font_style = get_option('modular_wp_h4_style');

    $h5_font_family = get_option('modular_wp_h5_font_family');
    $h5_color = get_option('modular_wp_h5_color');
    $h5_font_weight = get_option('modular_wp_h5_weight');
    $h5_font_style = get_option('modular_wp_h5_style');

    $h6_font_family = get_option('modular_wp_h6_font_family');
    $h6_color = get_option('modular_wp_h6_color');
    $h6_font_weight = get_option('modular_wp_h6_weight');
    $h6_font_style = get_option('modular_wp_h6_style');

    $p_font_family = get_option('modular_wp_p_font_family');
    $p_color = get_option('modular_wp_p_color');
    $p_font_weight = get_option('modular_wp_p_weight');
    $p_font_style = get_option('modular_wp_p_style');

    $li_font_family = get_option('modular_wp_li_font_family');
    $li_color = get_option('modular_wp_li_color');
    $li_font_weight = get_option('modular_wp_li_weight');
    $li_font_style = get_option('modular_wp_li_style');

    $a_font_family = get_option('modular_wp_a_font_family');
    $a_color = get_option('modular_wp_a_color');
    $a_font_weight = get_option('modular_wp_a_weight');
    $a_font_style = get_option('modular_wp_a_style');


    //if($imports != ''){
        echo '<style>';
            echo $imports;
            if($h1_font_family != '' || $h1_font_weight != 'Theme Default' || $h1_font_style != 'Theme Default' || $h1_color != ''){
                echo 'h1, h1 a{
                    '.(($h1_font_family != '')?"font-family: $h1_font_family;":"").'
                    '.(($h1_font_weight != 'Theme Default')?"font-weight: $h1_font_weight;":"").'
                    '.(($h1_font_style != 'Theme Default')?"font-style: $h1_font_style;":"").'
                    '.(($h1_color != '')?"color: $h1_color;":"").'
                }';
            }
            if($h2_font_family != '' || $h2_font_weight != 'Theme Default' || $h2_font_style != 'Theme Default' || $h2_color != ''){
                echo 'h2, h2 a{
                        '.(($h2_font_family != '')?"font-family: $h2_font_family;":"").'
                        '.(($h2_font_weight != 'Theme Default')?"font-weight: $h2_font_weight;":"").'
                        '.(($h2_font_style != 'Theme Default')?"font-style: $h2_font_style;":"").'
                        '.(($h2_color != '')?"color: $h2_color;":"").'
                    }';
            }
            if($h3_font_family != '' || $h3_font_weight != 'Theme Default' || $h3_font_style != 'Theme Default' || $h3_color != ''){
                echo 'h3, h3 a{
                        '.(($h3_font_family != '')?"font-family: $h3_font_family;":"").'
                        '.(($h3_font_weight != 'Theme Default')?"font-weight: $h3_font_weight;":"").'
                        '.(($h3_font_style != 'Theme Default')?"font-style: $h3_font_style;":"").'
                        '.(($h3_color != '')?"color: $h3_color;":"").'
                    }';
            }
            if($h4_font_family != '' || $h4_font_weight != 'Theme Default' || $h4_font_style != 'Theme Default' || $h4_color != ''){
                echo 'h4, h4 a{
                        '.(($h4_font_family != '')?"font-family: $h4_font_family;":"").'
                        '.(($h4_font_weight != 'Theme Default')?"font-weight: $h4_font_weight;":"").'
                        '.(($h4_font_style != 'Theme Default')?"font-style: $h4_font_style;":"").'
                        '.(($h4_color != '')?"color: $h4_color;":"").'
                    }';
            }
            if($h5_font_family != '' || $h5_font_weight != 'Theme Default' || $h5_font_style != 'Theme Default' || $h5_color != ''){
                echo 'h5, h5 a{
                        '.(($h5_font_family != '')?"font-family: $h5_font_family;":"").'
                        '.(($h5_font_weight != 'Theme Default')?"font-weight: $h5_font_weight;":"").'
                        '.(($h5_font_style != 'Theme Default')?"font-style: $h5_font_style;":"").'
                        '.(($h5_color != '')?"color: $h5_color;":"").'
                    }';
            }
            if($h6_font_family != '' || $h6_font_weight != 'Theme Default' || $h6_font_style != 'Theme Default' || $h6_color != ''){
                echo 'h6, h6 a{
                        '.(($h6_font_family != '')?"font-family: $h6_font_family;":"").'
                        '.(($h6_font_weight != 'Theme Default')?"font-weight: $h6_font_weight;":"").'
                        '.(($h6_font_style != 'Theme Default')?"font-style: $h6_font_style;":"").'
                        '.(($h6_color != '')?"color: $h6_color;":"").'
                    }';
            }
            if($p_font_family != '' || $p_font_weight != 'Theme Default' || $p_font_style != 'Theme Default' || $p_color != ''){
                echo 'p{
                        '.(($p_font_family != '')?"font-family: $p_font_family;":"").'
                        '.(($p_font_weight != 'Theme Default')?"font-weight: $p_font_weight;":"").'
                        '.(($p_font_style != 'Theme Default')?"font-style: $p_font_style;":"").'
                        '.(($p_color != '')?"color: $p_color;":"").'
                    }';
            }
            if($li_font_family != '' || $li_font_weight != 'Theme Default' || $li_font_style != 'Theme Default' || $li_color != ''){
                echo 'li, li a{
                        '.(($li_font_family != '')?"font-family: $li_font_family;":"").'
                        '.(($li_font_weight != 'Theme Default')?"font-weight: $li_font_weight;":"").'
                        '.(($li_font_style != 'Theme Default')?"font-style: $li_font_style;":"").'
                        '.(($li_color != '')?"color: $li_color;":"").'
                    }';
            }
            if($a_font_family != '' || $a_font_weight != 'Theme Default' || $a_font_style != 'Theme Default' || $a_color != ''){
                echo 'a{
                        '.(($a_font_family != '')?"font-family: $a_font_family;":"").'
                        '.(($a_font_weight != 'Theme Default')?"font-weight: $a_font_weight;":"").'
                        '.(($a_font_style != 'Theme Default')?"font-style: $a_font_style;":"").'
                        '.(($a_color != '')?"color: $a_color;":"").'
                    }';
            }
        echo '</style>';
    //}


}
// Add hook for front-end <head></head>
add_action('wp_head', 'font_check_render');