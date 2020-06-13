<?php
    include 'includes/classesloader.inc.php';  // Classes loader function to include_once a class has been called
    
    class Helper {

        private static $instance;  // The instance will be created depending on the data sent (hamming,levenshtein)

        public static function instantiate($type ,$str1 ,$str2){  
            // Creating an instance based on the type to determine the calculation method
            self::$instance = new $type();
            
            // Configuring the instance to do the calculation and return the result
            self::$instance->setFirst($str1);
            self::$instance->setSecond($str2);
            return self::$instance->calculate($type, $str1, $str2);
        }
    }
