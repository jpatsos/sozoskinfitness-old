<?php 


// -------------------------------------
//   Schema
// -------------------------------------

function html_tag_schema() {
    $schema = 'http://schema.org/';
    // Is single post
    if(is_single()) {
        $type = "Article";
    }
    // Is author page
    elseif( is_author() ) {
        $type = 'ProfilePage';
    }
    
    // Is search results page
    elseif( is_search() ) {
        $type = 'SearchResultsPage';
    }
    else {
        $type = 'WebPage';
    }
    echo 'itemscope="itemscope" itemtype="' . $schema . $type . '"';
}


// -------------------------------------
//   Featured Image
// -------------------------------------

add_theme_support( 'post-thumbnails' ); 



// -------------------------------------
//   Navigation
// -------------------------------------

function register_my_menu() {
  register_nav_menu('nav',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


// -------------------------------------
//   Avatar
// -------------------------------------

// function get_avatar_url($get_avatar){
//     preg_match("/src='(.*?)'/i", $get_avatar, $matches);
//     return $matches[1];
// }

// -------------------------------------
//   Remove <p>'s on images
// -------------------------------------

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

