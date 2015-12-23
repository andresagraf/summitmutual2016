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

