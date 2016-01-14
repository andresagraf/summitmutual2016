<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package summit_2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<!-- Super Slide -->

<!-- Super Reloj-->
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.countdown.css?v=1.0.0.0" rel="stylesheet">
<!-- CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/css/home.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="cenefa">
    <div class="container">
    <?php wp_nav_menu( array( 'theme_location' => 'cenefa-menu' ) ); ?>
    </div>
</div>
  <header class="content_header">
    <div class="container">
      <div class="row">
        <div class="col-md-1 logo_home">
			<a href="<?php get_home_url(); ?>/">
			<?php if( get_field('logotipo_summit', 'option') ): ?>

				<img src="<?php the_field('logotipo_summit', 'option'); ?>" />

			<?php endif; ?>
        </a>
        
        
        </div>
               <div class="col-md-2"></div>
        <div class="col-md-9">
          <div class="content_slogan">
            <div class="punta_izq_slogan"></div>
            <div class="centro_slogan"><?php the_field('bajada', 'option'); ?></div>
            <div class="punta_derecha_slogan">2016</div>
          </div>
         
          <!-- Nav -->
          <nav class="menu-nav">
             <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
          </nav><!-- End Nav -->
        </div>
      </div>
    </div>
  </header>

