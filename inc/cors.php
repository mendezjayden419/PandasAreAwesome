<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 3/30/2019
 * Time: 11:07 AM
 */

if ( ! class_exists('RegisterCors')):

    class RegisterCors {

        public function __construct()
        {
            $this->init_cors();
        }

        private function init_cors(){
            header("Access-Control-Allow-Origin: *");
        }

    }

endif;

function init_cors_header(){
    $cors = new RegisterCors();
}
add_action('init','init_cors_header');

?>
