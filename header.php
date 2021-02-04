<?php
/*
 * Header template.
 *
 * @package Aquila
 */
?>

<!doctype html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
if ( function_exists( 'wp_body_open' )) {
    wp_body_open(); 
}
?>

<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <?php get_template_part( 'template-parts/header/nav' ); ?>
    </header>
    <div id="content" class="site-content">