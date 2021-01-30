<?php

if(!defined('WYPRAWIAMDOBRE_THEME_DIR')) {
define('WYPRAWIAMDOBRE_THEME_DIR', get_theme_root().'/'.get_template().'/');
}

if(!defined('WYPRAWIAMDOBRE_THEME_URL')) {
define('WYPRAWIAMDOBRE_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

//check in posttypes.php - function create_posttype()
require_once WYPRAWIAMDOBRE_THEME_DIR.'libs/posttypes.php';
require_once WYPRAWIAMDOBRE_THEME_DIR.'libs/utils.php';

add_theme_support('post-formats', array('gallery'));
add_theme_support('post-thumbnails', array('post', 'recipes'));

//dynamic categories functions
function printPostCategories($post_id, array $categories = array()){
    $terms_list = array();
    foreach($categories as $cname){
        $tmp = get_the_terms($post_id, $cname);
        if(is_array($tmp)){
            $terms_list = array_merge($terms_list, $tmp);
        }
    }
    
    if($terms_list){
        foreach($terms_list as $term){
            echo '<p'.get_term_link($term->slug, $term->taxonomy).'>'.$term->name.'</p>';
        }
    }
}

function printDishCategories($post_id) {
    printPostCategories($post_id, array('meal-type'));
}
//dynamic categories functions THE END

?>