<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Eighties
 * @author Justin Kopepasah
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimun-scale=1 user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

    <?php if( is_home() ): ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery_002.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready( function() {
                $('.subMenu').smint({
    	            'scrollSpeed' : 1000
                });
            });
        </script>
    <?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="site-toggles">
			<a href class="main-navigation-toggle"><i class="fa fa-bars"></i></a>
			<?php if ( is_active_sidebar( 'eighties-interactive-sidebar' ) ) : ?>
				<a href class="widget-area-toggle"><i class="fa fa-align-right"></i></a>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href class="main-navigation-toggle"><i class="fa fa-times"></i></a>
			<h4 class="main-navigation-title"><?php _e( 'Menu', 'eighties' ); ?></h4>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_class' => 'menu menu-social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if ( eighties_header_image() || get_theme_mod( 'header_textcolor' ) !== 'blank' ) : ?>
            <?php if ( is_singular() ) : ?>
			    <header id="masthead" class="site-header singular" role="banner">
				    <a class="skip-link screen-reader-text" href="#content" <?php echo ( eighties_header_image() ) ? 'data-backstretch="' . eighties_header_image() . '"' : ''; ?>><?php _e( 'Skip to content', 'eighties' ); ?></a>
				    <div class="site-branding">
					    <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><span class="blink-code">_</span></a></h2>
					    <h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
				    </div>
			    </header><!-- #masthead -->
            <?php elseif ( is_home() ) : ?>
			   <!-- empty #masthead -->
            <?php else: ?>
                <header id="masthead" class="site-header singular" role="banner">
				    <a class="skip-link screen-reader-text" href="#content" <?php echo ( eighties_header_image() ) ? 'data-backstretch="' . eighties_header_image() . '"' : ''; ?>><?php _e( 'Skip to content', 'eighties' ); ?></a>
				    <div class="site-branding">
					    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><span class="blink-code">_</span></a></h1>
					    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				    </div>
			    </header><!-- #masthead -->
            <?php endif; ?>
		<?php endif; ?>

		<div id="content" class="site-content">
