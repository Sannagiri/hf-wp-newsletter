<?php
/**
 * @package HelloFomoNewsletter
 */

 /*
 Plugin Name: HelloFomo Newsletter Plugin
 Description: Used to Subscribe for the different types of Newsletters. 
 version: 1.0.0
 Author: Sannagiri Raviteja
 License: GPL-2.0+
 Text Domain: hf-newsletter
 */

// If this file is called directly abort
if ( ! defined( 'WPINC' ) ) {
	die;
}
if(!defined('ABSPATH')){
    die('Hey you dont have access, you silly human!');
}

if( ! function_exists('add_action')){
    echo 'Hey you dont have access this file, SOrry';
    exit;
}

if (file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use HFNewsletter\Base\Activate;
use HFNewsletter\Base\Deactivate;

define ('PLUGIN', plugin_basename(__FILE__));

function activate_hfnewsletter_plugin(){
    Activate::activate();
}

function deactivate_hfnewsletter_plugin(){
    Deactivate::deactivate();
}

register_activation_hook(__FILE__,'activate_hfnewsletter_plugin');
register_activation_hook(__FILE__,'deactivate_hfnewsletter_plugin');

if (class_exists('HFNewsletter\\Init')){
    HFNewsletter\Init::register_services();
}