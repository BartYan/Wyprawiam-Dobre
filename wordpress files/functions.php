<?php

if(!defined('WYPRAWIAMDOBRE_THEME_DIR')) {
define('WYPRAWIAMDOBRE_THEME_DIR', get_theme_root().'/'.get_template().'/');
}

if(!defined('WYPRAWIAMDOBRE_THEME_URL')) {
define('WYPRAWIAMDOBRE_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

//check in posttypes.php - function create_posttype()
require_once WYPRAWIAMDOBRE_THEME_DIR.'libs/posttypes.php';

?>