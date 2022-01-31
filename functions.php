<?php

//Search only one post type
function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('recipes'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');

//if search input is empty show all recipes https://wordpress.stackexchange.com/questions/29516/
if(!is_admin()){
    add_action('init', 'search_query_fix');
}
function search_query_fix(){
    if(isset($_GET['s']) && $_GET['s']==''){
        $_GET['s']='brak wpisów - wpisz coś na co masz ochotę :)';
    }
}


//ajax category filter (archive-recipes.php) // inspired by Ryan McGovern - https://www.youtube.com/watch?v=mtz8MdQXhno&list=PLSeCxQ7f7r87ayYuHVdomXZ3d6YbI5mwo&ab_channel=RyanMcGovern
require_once('inc/scripts.php');
require_once('inc/ajax/example.php');


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

//Menu Register
if(function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main_nav' => 'Główne menu nawigacji'
    ));
}
//Menu Register THE END

add_theme_support('html5', array('search-form'));

//print Recipe Ingedients
// function getRecipeIngredients($post_id) {
//     $ingredients = (string)get_post_meta($post_id, 'skladniki', true);
    
//     $ing_list = explode("\n", trim($ingredients));
    
//     $return = array();
    
//     foreach($ing_list as $row) {
//         $parts = explode(":", $row);
//         $name = trim($parts[0]);
        
//         if(!empty($name)){
//             $return[$name] = trim($parts[1]);
//         }			
//     }
    
//     return $return;
// }


// function printRecipeIngredients($post_id) {

//     $ingredients = getRecipeIngredients($post_id);
    
//     echo '<ul class="leftBox_itemColor-list">';
    
//     if(count($ingredients) < 1) {
//         echo '<li>Brak składników!</li>';
//     } else {
        
//         foreach($ingredients as $name => $value) {
//             echo "<li>{$name} <span>{$value}</span></li>";
//         }
        
//     }
    
//     echo '</ul>';

// }


//COMMENTS FUNCTION
function wyprawiamdobre_comment_theme($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    
    $tag = $args['style'];
?>

<?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?>
    id="li-comment-<?php comment_ID() ?>">
    <div id="div-comment-<?php comment_ID(); ?>" class="inner">
        <?php echo get_avatar($comment); ?>
        <h4>
            <?php echo get_comment_author_link(); ?>
            <?php echo 'w dniu ' . get_comment_date() . 'o' . get_comment_time() ?>
            <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </h4>
        <?php comment_text(); ?>

        <?php if($comment->comment_approved == '0') : ?>
        <div class="comment-awaiting-moderation">Twój komentarz oczekuje na moderację!</div>
        <?php endif; ?>
    </div>
    <?php
}



//OPTION PAGE for acf
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();

}
if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Edytor Motywu') );
}

// allow svg in media
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');

?>