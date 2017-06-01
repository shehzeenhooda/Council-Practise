<!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <title>Council EventManagment System</title>
  <link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/bxslider/jquery.bxslider.css">
<!-- End bxslider -->
<!-- flexslider -->
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/flexslider/flexslider.css">
<!-- End flexslider -->

<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/radial-progress/style.css">
<!-- End bxslider -->

<!-- Animate css -->
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/css/animate.css">
<!-- End Animate css -->

<!-- Bootstrap css -->
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/css/bootstrap.min.css">
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css">
<!-- End Bootstrap css -->

<!-- Jquery UI css -->
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/jqueryui/jquery-ui.css">
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/jqueryui/jquery-ui.structure.css">
<!-- End Jquery UI css -->

<!-- Fancybox -->
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/fancybox/jquery.fancybox.css">
<!-- End Fancybox -->

//<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/fonts/fonts.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link type="text/css" data-themecolor="default" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/css/main-default.css">

<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/rs-plugin/css/settings.css">
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/rs-plugin/css/settings-custom.css">
<link type="text/css" rel='stylesheet' href="<?php bloginfo("template_url"); ?>/js/rs-plugin/videojs/video-js.css">
  <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container b-header__box b-relative">
      <a href="/" class="b-left b-logo "><img class="color-theme" data-retina src="<?php bloginfo('template_url'); ?>/img/logo-header-default.jpg" alt="Logo" /></a>
      <div class="b-header-r b-right b-header-r--icon">
        <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
        <nav class="b-top-nav f-top-nav b-right j-top-nav">
            <ul class="b-top-nav__1level_wrap">
      <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="homepage-1-index.html"><i class="fa fa-home b-menu-1level-ico"></i>Home <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
      </li>
      <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
          <a href="contact_us.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>Event Managment<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
          <div class="b-top-nav__dropdomn">
              <ul class="b-top-nav__2level_wrap">
                  <li class="b-top-nav__2level_title f-top-nav__2level_title">Event Managment</li>
                  <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?php echo get_site_url(); ?>/register-event"><i class="fa fa-angle-right"></i>Register Event</a></li>
                  <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?php echo get_site_url(); ?>/event-listing-page"><i class="fa fa-angle-right"></i>Event list</a></li>
              </ul>
          </div>
      </li>
      <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="homepage-1-index.html"><i class="fa fa-home b-menu-1level-ico"></i>About Us<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
      </li>
  </ul>

        </nav>
      </div>
    </div>
  </header>
