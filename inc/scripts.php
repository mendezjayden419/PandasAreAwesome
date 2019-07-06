<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 3/30/2019
 * Time: 11:07 AM
 */

if ( ! class_exists('RegisterScripts')):

    class RegisterScripts {

        public function __construct()
        {
            $this->register_scripts();
            $this->enqueue_scripts();
        }

        private function register_scripts(){
            // TODO: register AJAX endpoint for forms, etc...
            wp_register_style('nick-style', get_template_directory_uri() . '/assets/css/main.css');
            //wp_register_style('nick-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
            wp_register_script('nick-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), "", true );
            wp_register_script('nick-main', get_template_directory_uri() . '/assets/js/main.js', array(), "", true );

        }

        private function enqueue_scripts()
        {
            // TODO: Enqueue Internal AJAX endpoint for forms, etc...
            wp_enqueue_style('nick-style');
            //wp_enqueue_style('nick-bootstrap-css');
            wp_enqueue_script('jquery');
            wp_enqueue_script('nick-bootstrap-js');
            wp_enqueue_script('nick-main');

        }

    }

endif;

function create_Scripts_obj()
{
    $script_register = new RegisterScripts();
}

add_action( 'wp_enqueue_scripts', 'create_Scripts_obj' );

?>
