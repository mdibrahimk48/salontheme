<?php

add_action('after_setup_theme','salontheme');

if(!function_exists('salontheme')){

    function salontheme(){
	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
    load_theme_textdomain( 'classicsalon', get_template_directory() .'/languages' );

    add_theme_support('post-formats', array ('aside','link','gallery','qoute','video'));
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );


    register_nav_menus( array(
        'primary' => __('Primary Menu', 'classicsalon'),
        'secondary' => __('Secondary Menu', 'classicsalon')
    ) );


        if(!function_exists('salonthemescript')){

            function salonthemescript(){

                wp_enqueue_style( 'style', get_stylesheet_uri() );

                // <!-- Google Fonts CDN Link -->
                wp_register_style( 'fontlink', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i' );
                wp_enqueue_style('fontlink');
                
                // <!-- Style -->
                // wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() .'/css/bootstrap.min.css');
                wp_register_style( 'bscdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' );
                wp_enqueue_style('bscdn');

                wp_enqueue_style( 'stylecss', get_template_directory_uri() . '/css/style.css', array(), null, 'all');

                // <!-- Font Awesome -->
                wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null, 'all');

                // <!-- /.footer-->
                // <!-- Main JS -->
                wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/jquery.min.js', null, null, true);
                // <!-- Include all compiled plugins (below), or include individual files as needed -->
                wp_enqueue_script( 'bootstarpjs', get_template_directory_uri() . '/js/bootstrap.min.js', null, null, true);
                wp_enqueue_script( 'menumakerjs', get_template_directory_uri() . '/js/menumaker.js', null, null, true);
                // <!-- sticky header -->
                wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/js/jquery.sticky.js', null, null, true);
                wp_enqueue_script( 'stickyjs', get_template_directory_uri() . '/js/sticky-header.js', null, null, true); 
                
                
                if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                    wp_enqueue_script( 'comment-reply' );
                }
            
            }

        }

        add_action( 'wp_enqueue_scripts', 'salonthemescript' );

    }

} 


?>