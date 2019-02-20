<?php
    class Login implements i_login{
        public static function login($mat,$pwd){
            if($mat != 0 && $pwd != 0){
                echo "ok";
            }
        }
    }
?>