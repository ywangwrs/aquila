<?php
/**
 * Register Menus
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus {
    use Singleton;

    protected function __construct() {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions and filters

        add_action ( 'init', [ $this, 'register_menus' ] );
    }

    public function register_menus () {
        register_nav_menus([
            # esc_html__ is for translation
            'aquila-header-menu' => esc_html__( 'Header Menu', 'aquila' ),
            'aquila-footer-menu' => esc_html__( 'Footer Menu', 'aquila' )
        ]);
    }
 }