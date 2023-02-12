<?php
/**
 * The header for the exported theme
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<html <?php language_attributes(); ?>
 class="no-js no-svg">

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>
">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="profile" href="http://gmpg.org/xfn/11">



<?php wp_head(); ?>




<link rel='stylesheet' id='dashicons-css'  href='<?php echo get_stylesheet_directory_uri()."/css/style.css";?>
' type='text/css' media='all' />


</head>

<span id='tgback-0'>
</span>

<body <?php body_class(); ?>
>

<div id="iw95co">
<div id="iwakl">
<div id="i0enc" class="aut-colA">
<a href="<?php if( get_theme_mod( "tglink-1") != "" ) {echo get_theme_mod( "tglink-1");} else {echo "https://www.linkedin.com/in/matias-maciel-dev/";} ?>
" target="_blank" id="i7cu48">
<span id="tgimg-46">
<img <?php if( get_theme_mod( "tgimg-46") != "" ) {echo "src='".get_theme_mod( "tgimg-46")."'";} else {echo " src='".get_template_directory_uri()."/images/logo_600x450-266.png'";} ?>
 id="i5ri3q" />
</span>
</a>
</div>
<div id="i17yi" class="aut-colB">
<div data-gjs='navbar' class='navbar' style='overflow: visible;'>
 <div class='navbar-container containermymenu1' style='overflow: visible;'>
 <div class='navbar-burger mobilemymenu1' style='overflow: visible;'>
 <div class='navbar-burger-line'>
 </div>
 <div class='navbar-burger-line'>
 </div>
 <div class='navbar-burger-line'>
 </div>
 <div style='clear:both;'>
</div>
 </div>
 <div data-gjs='navbar-items' class='navbar-items-c itemsmymenu1' style='overflow: visible;'>
 <nav data-gjs='navbar-menu' class='navbar-menu' style='overflow: visible;'>
<?php if ( has_nav_menu( 'menu1' ) ) { wp_nav_menu(array('menu_class' =>
 'menu mymenu1', 'walker' =>
 new Excerpt_Walker(), 'container' =>
 false, 'theme_location' =>
 'menu1', 'menu' =>
 'primary')); } else { echo '<span style=\'color:#9c9c9c;\'>
Please, go to <strong>
Customize ->
 Menus ->
 Locations</strong>
 and assign a menu to the <strong>
menu1 menu</strong>
 location</span>
';}; ?>
<div style='clear:both;'>
</div>
 </nav>
 <div style='clear:both;'>
</div>
</div>
 <div style='clear:both;'>
</div>
</div>
 <div style='clear:both;'>
</div>
</div>
</div>
<div id="ifhjs">
</div>
</div>
</div>
</div>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'themesgenerator' ); ?>
</a>


	<header id="masthead" class="site-header" role="banner">


		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>


		<?php if ( has_nav_menu( 'top' ) ) : ?>

			<div class="navigation-top">

				<div class="wrap">

					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

				</div>
<!-- .wrap -->

			</div>
<!-- .navigation-top -->

		<?php endif; ?>


	</header>
<!-- #masthead -->


	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! themesgenerator_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">
';
		echo get_the_post_thumbnail( get_queried_object_id(), 'themesgenerator-featured-image' );
		echo '</div>
<!-- .single-featured-image-header -->
';
	endif;
	?>


	<div class="site-content-contain">

		<div id="content" class="site-content">

