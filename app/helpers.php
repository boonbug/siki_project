<?php




if (!function_exists('slugTitle')) {
    function slugTitle($string)
    {
        if($string != "")
        {
            return ucwords($string);
        }
    }
}

if (!function_exists('checkEdit')) {
    function checkEdit($string)
    {
        return $string  != "" ? $string : "";
    }
}

if (!function_exists('defaultName')) {
    function defaultName($string, $def_string)
    {
        return $string  != "" ? $string : $def_string;
    }
}

