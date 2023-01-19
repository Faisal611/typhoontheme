<?php

// CPT-UI
require_once ('cpt-ui/cpt-ui.php');

//custom widget
require_once ('custom-widget/recent-post-widget.php');
require_once ('custom-widget/search-post-widget.php');
require_once ('custom-widget/category-post-widget.php');


if ( ! function_exists('typhoon_theme_setup')) {
    add_action('after_setup_theme','typhoon_theme_setup');
    function typhoon_theme_setup () {
        flush_rewrite_rules();
        load_theme_textdomain( 'typhoontheme', get_template_directory() . '/languages' );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support( 'automatic-feed-links' );

        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script','style', 'navigation-widgets',
        ));
        add_theme_support('post-formats',array(
            'aside','image','video', 'quote','link','gallery','status','audio','chat',
        ));

        // Menu Register
        register_nav_menus(array(
            'main-menu' =>__('Main Menu','typhoontheme')
        ));
        function default_main_menu (){
            echo '<ul class="nav navbar-nav main-menu">';
            echo '<li><a href="' . home_url() . '" class="transition">HOME</a></li>';
            echo '</ul>';
        }

    }
}

//register sidebar
add_action('widgets_init','post_right_sidebar');
    function post_right_sidebar () {
       register_sidebar(array(
          'name' => 'Right Sidebar',
           'id' =>'right-sidebar',
           'before_title' => '</h3 class="title">',
           'after_title' => '</h3>'
       ));
    }

//acf option
add_action('acf/init','acf_options');
    function acf_options () {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(array(
                'page_title'    => __('Theme Settings','else-blog'),
                'menu_title'    => __('Theme Option','theme-blog'),
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'edit_posts',
                'redirect'      => false
            ));
        }
    }




add_action('wp_enqueue_scripts','sheikh_enqueue_style');
function sheikh_enqueue_style () {
    wp_enqueue_style('shortcut-icon',get_template_directory_uri().'/assets/images/fav.png');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-css',get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style('flaticon-css',get_template_directory_uri().'/assets/fonts/flaticon.css');
    wp_enqueue_style('animate-css',get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style('carousel-css',get_template_directory_uri().'/assets/css/owl.carousel.css');
    wp_enqueue_style('canvas-css',get_template_directory_uri().'/assets/css/off-canvas.css');
    wp_enqueue_style('magnific-css',get_template_directory_uri().'/assets/css/magnific-popup.css');
    wp_enqueue_style('rsmenu-css',get_template_directory_uri().'/assets/css/rsmenu-main.css');
    wp_enqueue_style('nivo-slider-css',get_template_directory_uri().'/assets/inc/custom-slider/css/nivo-slider.css');
    wp_enqueue_style('preview-css',get_template_directory_uri().'/assets/inc/custom-slider/css/preview.css');
    wp_enqueue_style('spacing-css',get_template_directory_uri().'/assets/css/rs-spacing.css');
    wp_enqueue_style('main-css',get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_style('responsive_css',get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style('stylesheet',get_stylesheet_uri());
}


add_action('wp_enqueue_scripts','sheikh_enqueue_script');
function sheikh_enqueue_script () {
    wp_enqueue_script('modernizr-js',get_template_directory_uri().'/assets/js/modernizr-2.8.3.min.js',array('jquery'));
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'));
    wp_enqueue_script('nav-js',get_template_directory_uri().'/assets/js/jquery.nav.js',array('jquery'));
    wp_enqueue_script('isotope-js',get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',array('jquery'));
    wp_enqueue_script('carousel-js',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'));
    wp_enqueue_script('wow-js',get_template_directory_uri().'/assets/js/wow.min.js',array('jquery'));
    wp_enqueue_script('skill-js',get_template_directory_uri().'/assets/js/skill.bars.jquery.js',array('jquery'));
    wp_enqueue_script('imagesloaded-js',get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js',array('jquery'));
    wp_enqueue_script('waypoints-js',get_template_directory_uri().'/assets/js/waypoints.min.js',array('jquery'));
    wp_enqueue_script('counterup-js',get_template_directory_uri().'/assets/js/jquery.counterup.min.js',array('jquery'));
    wp_enqueue_script('popup-js',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array('jquery'));
    wp_enqueue_script('nivo-slider-js',get_template_directory_uri().'/assets/inc/custom-slider/js/jquery.nivo.slider.js',array('jquery'));
    wp_enqueue_script('contact-js',get_template_directory_uri().'/assets/js/contact.form.js',array('jquery'));
    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js',array('jquery'));
}