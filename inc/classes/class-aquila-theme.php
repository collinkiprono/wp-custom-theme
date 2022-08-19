<?php
/**
 * 
 * Boostraps the theme - add everything from the theme
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;
 use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME{
     use Singleton;

     protected function __construct(){

        Assets::get_instance();
      
         //Load class
        $this->setup_hooks();
     }
     protected function setup_hooks(){
         //Actions & Filters

         add_action( 'after_setup_theme', [$this, 'setup_theme'] );
         add_theme_support( 'custom-logo', [
            'header-text'          =>  ['site-title', 'site-description'],
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true, 
          ] );
    
     }
     public function setup_theme(){
        add_theme_support( 'title-tag' );
     }

 }

 ?>