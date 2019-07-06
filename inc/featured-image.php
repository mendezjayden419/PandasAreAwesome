<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 3/30/2019
 * Time: 11:08 AM
 */


if ( ! class_exists('')):

    class RegisterFeaturedImage {

        public function __construct()
        {
            $this->enable_featured_image();
        }

        private function enable_featured_image(){
            add_theme_support( 'post-thumbnails' );
        }

    }

endif;

function initiate_featured_img(){
    $featured_img_obj = new RegisterFeaturedImage();
}

add_action('after_setup_theme', 'initiate_featured_img');
