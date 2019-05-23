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
      <div class="img-container">
        <a href="#">
          <img src="<?php bloginfo('template_directory');?>/images/Alta-Logo.webp" />
        </a>
      </div>
      <nav>
        <ul class="nav justify-content-end">
					<li class="nav-item"><a class="nav-link" href="#">Alta</a></li>
					<li class="nav-item"><a class="nav-link" href=/projects>Projects</a></li>
					<li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="/global-operations">Global Opertaions</a></li>
					<li class="nav-item"><a class="nav-link" href="innovation-lab">Innovation Lab</a></li>
					<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="contact-us">Contact Us</a></li>
        </ul>
      </nav>
		</header>

	<div id="content" class="site-content">
