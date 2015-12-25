<?php
/**
 * Add js scripts and css styles
 *
 * Created by Eugene
 * Date: 12/25/2015
 * Time: 11:45 AM
 */


function storex_scripts() {
    wp_enqueue_style( 'storex-style', get_stylesheet_uri() );
    wp_enqueue_style( 'storex-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'storex-font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'storex-header', get_template_directory_uri() . '/css/MyHeader.css' );
    wp_enqueue_style( 'storex-main', get_template_directory_uri() . '/css/MyMain.css' );
    wp_enqueue_style( 'storex-footer', get_template_directory_uri() . '/css/MyFooter.css' );

    wp_enqueue_script( 'storex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    wp_enqueue_script( 'storex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    wp_enqueue_script( 'storex-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20120206', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'storex_scripts' );