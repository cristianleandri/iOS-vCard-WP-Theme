<!doctype html>
<!--[if lt IE 7]>    <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>       <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>       <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Info -->
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="I'm a web developer at Volta Web in Antwerp working mostly on Content Management Systems and web applications. I also recently started working with iOS. Check out CaMo App, a Campaign Monitor client that I'm building.">
    
    <!-- Viewport Fix -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- Typekit -->
    <script type="text/javascript" src="//use.typekit.net/jcf6bud.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    <!-- Wordpress -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
        if ( is_singular() && get_option( 'thread_comments' ) ) 
            wp_enqueue_script( 'comment-reply' );
    ?>

    <?php wp_head(); ?>

    <!-- Workaround for Wordpress adminbar. -->
    <style>
        html { margin-top: 0 !important; }
        * html body { margin-top: 0 !important; }
    </style>
</head>
<body <?php body_class(); ?>>
    
<div id="wrapper">
    <div id="wrapper-cell">
        <div id="content">