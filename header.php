<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <?php if(get_option('modular_wp_favicon') != ''){ echo '<link rel="icon" type="image/png" href="'.get_option('modular_wp_favicon').'">'; } ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>

    <?php if(get_option('modular_wp_header_js') != ''){ echo '<script>'.get_option('modular_wp_header_js').'</script>'; } ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body <?php body_class(array('theme_style'.get_option('phonak_theme_style'),'modular-phonak')); ?>>
<?php
/*--- if boxed open wrapper---*/
if(get_option('modular_wp_site_style') == "Boxed"){ echo '<div id="modular_site_wrap">'; }
?>

<header class="header clear" role="banner">
    <section id="headerTop" class="clearfix">
        <div class="container">
	        <div class="left">
		        <?php
		        if(get_option('modular_wp_logo') != ''){
			        echo '<a id="logo" href="'.get_bloginfo('url').'"><img alt="'.get_bloginfo('name').'" src="'.get_option('modular_wp_logo').'" /></a>';
		        }else{
			        echo '<a id="logo_text" href="'.get_bloginfo('url').'"><h1 id="textLogo">'.get_bloginfo('name').'</h1></a>';
		        }
		        ?>
	        </div>

	        <div class="right">
	            <div class="contactButtons">
	                <a href="<?php echo get_option('hearing_quiz_url'); ?>" class="btn btn-secondary" id="quizButton" ><?php echo get_option('hearing_quiz_title'); ?></a>
	            </div>
		        <div class="extras">
			        <a href="#" id="incfont" title="Increase font size" class="plusfont">A+</a><a href="#" id="decfont" title="Decrease font size" class="minusfont">A-</a>
		        </div>
	            <div id="callToAction">
	                <?php dynamic_sidebar('call-to-action'); ?>
	            </div>
	        </div>
	     </div>
    </section>

    <section id="headerBottom" class="<?php echo get_theme_mod('get_header_style'); ?>">
        <div class="container">
          <nav class="navbar navbar-inverse navbar-toggleable-lg navbar-light" role="navigation">
  					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  						<span class="navbar-toggler-icon"></span>
  					</button>

  					<div id="mainMenu" class="collapse navbar-collapse">
  						<div class="closen-responsive-nav hide-screen-lg-min" data-toggle="collapse" data-target="#mainMenu">Close X</div>
  						<?php
  						wp_nav_menu(
  							array(
  								'theme_location'    => 'main-menu',
  								'container'         => 'false',
  								'menu_class'        => 'navbar-nav mr-auto',
  								'walker'			=> new bootstrap_Walker(false)
  							)
  						);
  						?>
  					</div>
  			    </nav>
        </div>
    </section>
</header>

<a id="floatingAppointment" class="btn btn-secondary buttonVertical" href="<?php echo get_option('request_appointment_url'); ?>">
    Request Appointment
</a>
