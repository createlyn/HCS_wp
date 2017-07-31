<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
    <script src="https://use.typekit.net/ykl4kim.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<header class="site__header">
		      <nav role="navigation" class="container">
		        <div class="row">
		          <div class="site-navigation__left">
		            <a href="<?php bloginfo('url'); ?>">
		              <img src="<?php bloginfo('template_url'); ?>/assets/src/img/logo-mobile.png" alt="Harold's Chicken Shack Logo" class="mobile-navigation-logo">
		              <img src="<?php bloginfo('template_url'); ?>/assets/src/img/logo-horizontal.png" alt="Harold's Chicken Shack Logo" class="navigation-logo">
		            </a>
		          </div>
		          <!-- mobile navigation -->
		            <div class="mobile-navigation__trigger">
		              <a href="#" class="site-navigation__link">
		                <img src="<?php bloginfo('template_url'); ?>/assets/src/img/icons/icon-menu.svg" alt="menu-icon" class="mobile-navigation__trigger" />
		              </a>
		            </div>
		            <ul class="mobile-navigation__list text--center" id="menu">
		              <li><a href="tel:+1800229933" class="background--purple text--white mobile-navigation__item">Call ahead!</a></li>
		              <li><a href="<?php bloginfo('url'); ?>/menu" class="link--primary mobile-navigation__item">menu</a></li>
		              <li><a href="<?php bloginfo('url'); ?>/about" class="link--primary mobile-navigation__item">our story</a></li>
		              <li><a href="<?php bloginfo('url'); ?>/blog" class="link--primary mobile-navigation__item">blog</a></li>
		              <li><a href="<?php bloginfo('url'); ?>/contact" class="link--primary mobile-navigation__item">contact us</a></li>
		            </ul>
		          <!-- desktop nav -->
		          <div class="site-navigation__center">
		            <ul class="navigation__list">
		              <li class="navigation__item"><a href="<?php bloginfo('url'); ?>/menu" class="link--primary navigation__link">menu</a></li>
		              <li class="navigation__item"><a href="<?php bloginfo('url'); ?>/about" class="link--primary navigation__link">our story</a></li>
		              <li class="navigation__item"><a href="<?php bloginfo('url'); ?>/blog" class="link--primary navigation__link">blog</a></li>
		              <li class="navigation__item"><a href="<?php bloginfo('url'); ?>/contact" class="link--primary navigation__link">contact us</a></li>
		            </ul>
		          </div>
		          <div class="site-navigation__right">
		            <div class="site-navigation__call">
		              <a href="tel:+1800229933" class="button--primary">Call ahead!</a>
		            </div>
		          </div>
		        </div>
		      </nav>
		    </header>