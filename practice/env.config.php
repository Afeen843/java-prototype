<?php

include_once('classes/SoapAPI.class.php');

define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASSWORD', 'admin123');
define('DB_NAME', 'test');
define('DB_PORT', '3306');


global $wpDB;

/**
 * WP DB
 */
$soapApiModel = new SoapAPI();

/**
 * WP DB Soap Api model
 */



/**
 * @param $vars
 */
function dump($vars){
    var_dump('<pre>', $vars);
}