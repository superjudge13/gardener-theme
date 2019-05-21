<?php

//======================================
//  Enqueue Scripts
//======================================

function barrytheme_script_enqueue(){
	//css
	
	wp_enqueue_style('bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
	
	wp_enqueue_style('customstylecss', get_template_directory_uri() . '/css/gardentheme.css', array(), '1.0.0', 'all');
	
	//js
	
	//jQuery first, then popper, then bootstrap and finally any custom js
	wp_enqueue_script('jqueryjs', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '', true);
	
	//wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), '', true);
	wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '', true);
	
	//wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '', true);
	
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/gardentheme.js', array(), '1.0.0', true);
	
	
	
	
}

add_action('wp_enqueue_scripts', 'barrytheme_script_enqueue');

//======================================
//  Menu setup
//======================================

require get_template_directory() . '/bootstrap-navwalker.php';

register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

register_nav_menus( array(
    'menu-2' => esc_html__( 'Footer', 'theme-textdomain' ),
) );

/*function barrytheme_setup(){
	
add_theme_support('menus');  
	
	register_nav_menu('primary', 'Primary Header Nav');
	register_nav_menu('secondary', 'Footer Nav');
}

add_action('init', 'barrytheme_setup');


function register_header_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}	
add_action( 'init', 'register_header_menu' );
*/

//======================================
//  Theme support
//======================================


add_theme_support('custom-background');
add_theme_support('custom-header');

add_theme_support('custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
));

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'gallery', 'image', 'video',));

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function custom_logo(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	echo $image[0];
}

// function for adding the category badges to the cards 
function addCategoryBadge($type){
	
	//get the category slug
	
	$thisCat = get_the_category();
	$catName = $thisCat[0]->slug;
	$catCount = "";
	//echo("catName = " . $catName );
	$catLink = get_category_link($thisCat[0]->cat_ID);
	$newColour = "";
	//check slug against category names and switch the CSS class
	
	switch ($catName) {
    case "graphics":
        $newColour = "graphics";
        break;
    case "websites":
        $newColour = "websites";
        break;
    case "video":
        $newColour = "video";
        break;
	case "coding":
		$newColour = "coding";
		break;
	default:
      $newColour = "secondary";
}
	if($type === "tab"){
	//add the required class to the badge span
	echo ('<span class="badge badge-' .$newColour. ' category-badge"><a href="' .$catLink. '">' .$catName. '</a></span>');
	}
	else if($type === "header")
	{
	echo ('<span class="badge badge-' .$newColour. ' category-badge category-header"><a href="' .$catLink. '">' .$catName. '</a></span>');	
	}
	  
}



function wpgood_nav_search($items, $args) {
    // If this isn't the primary menu, do nothing
    if( !($args->theme_location == 'menu-1') ) 
    return $items;
    // Otherwise, add search form
    return $items . '<li>' . get_search_form(false) . '</li>';
}
add_filter('wp_nav_menu_items', 'wpgood_nav_search', 10, 2);



function split_content($pos){
	global $post;
	$split_content = get_extended( $post->post_content );
	return $split_content[$pos];
}


//adds sharing buttons to page
function addSharingButtons(){
	//create sharing buttons for facebook and twitter
	echo('<a class="btn btn-primary ml-1" target="_blank" href="http://www.facebook.com/share.php?u=' .get_permalink($post). '">Facebook</a>');
	echo('<a class="btn btn-success ml-1" target="_blank" href="https://twitter.com/intent/tweet?text=' .get_the_title(). '&url=' .get_permalink($post). '">Twitter</a>');
	
}

function get_the_post_thumbnail_alt($post_id) {
    return get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
}

function the_post_thumbnail_alt($post_id) {
    echo get_the_post_thumbnail_alt($post_id);
}










