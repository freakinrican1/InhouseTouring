<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="Inhouse Touring official Website">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_enqueue_script("jquery"); ?>
  
  <link rel="stylesheet" id="inhouse-style-css" href="<?php bloginfo('template_directory');?>/style.css" type="text/css" media="all">

	<?php wp_head(); ?>
  <script type="text/javascript"
     src="<?php bloginfo('template_directory');?>/menu.js"></script>
</head>

