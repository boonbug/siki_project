<?php

if (!function_exists('slugTitle')) {
    function slugTitle($string)
    {
        if($string != "")
        {
            return Str::ucfirst($string);
        }
    }
}
