<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<header>
      <div class="img-fluid">
        <a href="">
          <img src="<?php bloginfo('template_directory');?>/images/Alta-Logo.webp" />
        </a>
      </div>
      <nav>
        <?php wp_nav_menu( $args = array( 'theme_location' => 'header-menu',
				'menu-class' => 'nav',
			 	'container-class' => 'nav') ); ?>
      </nav>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
