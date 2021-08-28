<?php 
        function awesome_script_enqueue() {
            wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/css/awesome.css', array(), time(), false );
            wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/awesome.js', array(),'', true );
        }

        add_action('wp_enqueue_scripts','awesome_script_enqueue');
?>