<?php

/**
 *
 * Header template
 *
 * @package Hadras Theme
 */
?>


<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
	<title>Page Title</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}

?>

<div id ='page' class="site">
     <header id="masthead" class="site-header" role="banner">
         <?php get_template_part('template-parts/header/nav')?>

     </header>

    <div id="content" class="site-content">





