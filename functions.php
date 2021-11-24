<?php 
    function add_head_files() {

        wp_enqueue_script( 'jquery');
        wp_enqueue_script('jstheme', get_template_directory_uri() . '/js/theme.js', array('jquery'), true);




         wp_register_script('animateNumber', get_template_directory_uri() . '/vendor/animateNumber/jquery.animateNumber.min.js', array('jquery'), true);

        
         wp_enqueue_script('owl', get_template_directory_uri() . '/vendor/owl-carousel/js/owl-carousel.min.js', array('jquery'), true);
        

         wp_enqueue_script('ertge', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), true);
         wp_enqueue_script('jrg', get_template_directory_uri() . '/js/google-maps.js', array('jquery'), true);

         
         wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
         wp_enqueue_style('main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'add_head_files');
