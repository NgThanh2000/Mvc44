<?php
    class session{
        static function setSeccion($key,$values)
        {
            $_SESSION[$key] = $values;
        }

        static function getSeccion($key)
        {
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }

        static function deleteSeccion($key)
        {
            if(isset($_SESSION[$key]))
            {
                unset($_SESSION[$key]);
            }
        }
    }
?>