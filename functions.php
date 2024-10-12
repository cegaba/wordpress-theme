<?php 

    function load_stylesheet()
    {

        wp_register_style('icon', get_template_directory_uri() . '/assets/img/favicon.png', array(), 1, 'all' );
        wp_enqueue_style('icon');


        wp_register_style('text', get_template_directory_uri() . '/assets/fonts/unicons/unicons.css', array(), 1, 'all' );
        wp_enqueue_style('text');

        wp_register_style('plugin', get_template_directory_uri() . '/assets/css/plugins.css', array(), 1, 'all' );
        wp_enqueue_style('plugin');

        wp_register_style('preload', get_template_directory_uri() . '/assets/css/fonts/dm.css', array(), 1, 'all' );
        wp_enqueue_style('preload');

        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all' );
        wp_enqueue_style('style');

    }

    add_action('wp_enqueue_scripts', 'load_stylesheet');








    // load scripts

    function addjs()
    {


        wp_register_script('plugin', get_template_directory_uri() . '/assets/js/plugins.js', array() , 1, 1, 1);
        wp_enqueue_script('plugin');

        wp_register_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array() , 1, 1, 1);
        wp_enqueue_script('theme');

    }





?>