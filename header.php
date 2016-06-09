<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/805048/771508/css/fonts.css" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="page hfeed site">

<a href="#main" id="skipLink" class="hide" accesskey="s">Skip to main content</a>

<header class="masthead" role="banner">

	<div class="header-container">

		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
		</div>

		<?php wp_nav_menu( array(
			'theme_location' 	=> 'primary',
			'container' 			=> 'nav',
			'container_id' 		=> 'dl-menu',
			'container_class' => 'dl-menuwrapper',
			'items_wrap' => '<ul id="%1$s" class="%2$s dl-menu" role="navigation" >%3$s</ul>',
		) ); ?>

	</div>

</header>
