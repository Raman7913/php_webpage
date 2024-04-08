<?php
    namespace core;
    class Validation{
        public static function string( $value, $min = 1, $max = INF ){
            $trimmedValue=trim($value);
            return strlen($trimmedValue)>=$min && strlen($trimmedValue)<=$max;
        }
        public static function email($value)
        {
            return filter_var($value,FILTER_VALIDATE_EMAIL);
        }
    }