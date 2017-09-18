<?php

//ELEMENT SHORTCODE
function element($atts,$content){
	extract( shortcode_atts( array(
		'tag'			=> 'div',
        'class' 		=> ''
    ), $atts ) );
    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);
    $return = '';
	$return .= '<'.$tag.' class=" '.$class.'">';
        $return .= $content;
    $return .= '</'.$tag.'>';
	return $return;
}
add_shortcode('el_1','element');
add_shortcode('el_2','element');
add_shortcode('el_3','element');

//**********************************************************BOOK YOUR HEARING TEST TODAY! Banner & Button**************************************************************//
function book_today($atts) {
   extract(shortcode_atts(array(
      'title'               => 'BOOK YOUR HEARING TEST TODAY!',
      'buttontitle'         => 'CONTACT US',
      'buttonurl'           => '/contact',
   ), $atts));
return '
<div class="container-fluid book_now_banner">
  <div class="container">
    <div class="row ">
      <div class="col-lg-7 col-sm-12 col-xsm-12"><span class="book_now_text">'. $title .'</span></div>
      <div class="col-lg-5 col-sm-12 col-xsm-12"><a class="button" href="'. $buttonurl .'">'. $buttontitle .'</a></div>
    </div>
  </div>
</div>';
}
add_shortcode('hearingBanner', 'book_today');

//**********************************************************Info Box**************************************************************//
function info_box($atts, $content = null) {
    extract(shortcode_atts(array(
        'class' => '',
        'text' => '',
        'link' => '',
        'link_text' => 'Learn More',
        'button_class' => ''
    ), $atts));
    $colorcode = '';
    $colorcode .=  '<div class="container info_box">';
      $colorcode .=  '<div class="container">';
        $colorcode .=  '<div class="row ">';
         $colorcode .=  '<div class="col col-lg-12">';
                $colorcode .=  '<p class="left infotitle">'.$text.'</p>';
                $colorcode .=  '<a href="'.$link.'" class="button right '.$button_class.'">'.$link_text.'</a>';
          $colorcode .= '</div>';
        $colorcode .= '</div>';
      $colorcode .= '</div>';
    $colorcode .= '</div>';
    return $colorcode;
}
add_shortcode('info_box', 'info_box');

//**********************************************************Image Banner With Text And Button**************************************************************//
function main_banner_content($atts, $content = null) {
   extract(shortcode_atts(array(
     'title' => 'Do I Need A Hearing Test?',
     'subtitle' => 'Click below to complete a hearing quiz',
     'buttontitle' => 'Hearing Quiz',
     'buttonurl' => '/hearing-quiz',
     'imageurl' => '',
   ), $atts));
   return '
   <div class="container-fluid HearingBanner">
     <div class="container">
        <div class="row ">
           <div class="col col-lg-12 nopadding">
              <p><img src="'. $imageurl .'" alt="Hearing Test" class="featuredbanner" width="100%"></p>
               <div id="Bannertext">
                   <h1>'. $title .'</h1>
                   <p>'. $subtitle .'</p>
                   <p>&nbsp;<br>
                   <a href="'. $buttonurl .'" class="squarebutton">'. $buttontitle .'</a>
                   </p>
               </div>
           </div>
        </div>
    </div>
  </div>
   ';
}
add_shortcode('BannerContent', 'main_banner_content');

//********************************************Book Today Form!!!!!!!!**********************************************************************//
function book_today_form() {
    $booktodayform .=  '<div class="container-fluid HearingForm">';
      $booktodayform .=  '<div class="container">';
        $booktodayform .=  '<div class="row ">';
            $booktodayform .=  do_shortcode('[contact-form-7 id="46" title="Quick Blog Form"]');
        $booktodayform .=  '</div>';
      $booktodayform .=  '</div>';
    $booktodayform .=  '</div>';
   return $booktodayform;
}
add_shortcode('HearingBannerForm', 'book_today_form');

//********************************************Bootstrap's responsive video**********************************************************************//
function nga_responsive_video_shortcode($atts){
	extract( shortcode_atts( array(
		'ratio'   => '16by9',
		'url'   => '',
		'class' => ''
	), $atts ) );

	$url = str_ireplace(array('http://','https://'), '', $url);

	$return = '';
	$return .= '<div class="embed-responsive embed-responsive-' . $ratio . ' ' . $class .'">';
	 $return .= '<iframe class="embed-responsive-item" src="//' . $url . '" allowfullscreen="allowfullscreen"></iframe>';
	$return .= '</div>';
	return $return;
}
add_shortcode('responsive_video','nga_responsive_video_shortcode');
