<?php

if(! function_exists('is_homepage')) {
    function is_homepage() {
        return Request::is('/');
    }
}

if(! function_exists('bytes_to_human')) {
    function bytes_to_human($bytes){
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}