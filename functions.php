<?php
    //Functions with the theme support and styles/scripts
    function portfolio_script_enqueue(){
        wp_enqueue_style('bundledstyle', get_template_directory_uri() . '/css/bundle.css', array(), '1.0.0','all');
        wp_enqueue_script('bundledscript', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true);
    }
    function portfolio_support_setup(){
        add_theme_support('menus');
        register_nav_menu('primary', 'Primary Navigation Menu');
        register_nav_menu('mobile', 'Mobile Navigation Menu');
    }

    add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_typekit' );
    function portfolio_enqueue_typekit() {
        wp_enqueue_script( 'typekit', '//use.typekit.net/uel3rjl.js', array(), '1.0.0' );
    }
    //Adding actions
    add_action( 'wp_head', 'portfolio_typekit_inline' );
    function portfolio_typekit_inline() {
        if ( wp_script_is( 'typekit', 'enqueued' ) ) {
            echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
        }
    }
    add_action('wp_enqueue_scripts', 'portfolio_script_enqueue');
    add_action('init', 'portfolio_support_setup');
    add_theme_support( 'post-thumbnails' ); 
    
?>