<?php
/*
 * Bootstraps the Theme.
 * 
 * @package Auqila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    protected function __construct() {
        // Load class.
        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters
        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    public function setup_theme() {
        add_theme_support( 'title-tag' );

        # https://developer.wordpress.org/reference/functions/add_theme_support/#description
        add_theme_support( 'custom-logo', [
           'header-text' => array( 'site-title', 'site-description' ),
           'height'      => 100,
           'width'       => 400,
           'flex-height' => true,
           'flex-width'  => true,
        ]);

        # https://developer.wordpress.org/reference/functions/add_theme_support/#custom-background
        add_theme_support( 'custom-background', [
           'default-color'          => '#fff',
           'default-image'          => '',
           'default-repeat'         => 'no-repeat',
        ]);

        # Featured image when adding new post
        add_theme_support( 'post-thumbnails' );

        /**
         * Register image sizes
         */
        add_image_size( 'featured-thumbnail', 350, 233, true);

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

        add_editor_style();

        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'align-wide' );

        global $content_width;
        if ( ! isset ( $content_width ) ) {
            $content_width = 1240;
        }
    }

}