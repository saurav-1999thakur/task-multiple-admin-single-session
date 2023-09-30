<?php

if(! function_exists('pr')){
    function pr($var){
        echo "<pre>";
        print_r($var);
    }     
}
