<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php do_action( 'bp_head' ); ?>
	<title><?php tri_the_title() ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php  /* TODO: minimize wphead entries */ wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="container">
		<header role="banner">
			<hgroup>
				<h1>
					<a href="<?php echo home_url(); ?>" rel="home"><?php bp_site_name(); ?></a>
				</h1>
				<h2><?php bloginfo('description'); ?></h2>
			</hgroup>
			<nav>
				<?php wp_nav_menu(array(
					'container'	=> false,
					'menu'		=> 'main'
				)); ?>
				 <a href="#" id="pull">Menu</a>
			</nav>
		</header>
		<div id="main" role="main">