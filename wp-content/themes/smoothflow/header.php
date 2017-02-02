<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="BenWorldwide">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/css/trunk.css" />
	 <script src="<?php bloginfo('template_url');?>/js/scrollreveal.min.js"></script>
    <script>
    window.sr = ScrollReveal();
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25969875-75', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<div class="container">
        <header class="slide">
            <ul id="navToggle" class="burger slide">
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="logo"><a href="<?php bloginfo('url');?>" title="Smooth Flow"><img alt="Smooth Flow" src="<?php bloginfo('template_url')?>/images/logo.png"></a></div>
        </header>
        <nav class="slide">
            <?php wp_nav_menu( array('menu' => 'Main Menu', 'menu_class' => 'mainmenu' )); ?>
        </nav>
        <div class="content slide topspace">
            <div id="wrapper">
