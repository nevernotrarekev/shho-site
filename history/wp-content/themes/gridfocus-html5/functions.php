<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Primary - Index',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</nav></div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3><nav>'
	));
	register_sidebar(array(
		'name' => 'Primary - Post',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</nav></div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3><nav>'
	));
	register_sidebar(array(
		'name' => 'Secondary - Shared',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</nav></div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3><nav>'
	));
} 

if (!is_admin()) {

    remove_action( 'wp_head', 'feed_links_extra'); // Display the links to the extra feeds such as category feeds
    remove_action( 'wp_head', 'feed_links'); // Display the links to the general feeds: Post and Comment Feed
    remove_action( 'wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
    remove_action( 'wp_head', 'index_rel_link' ); // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10); // prev link
    remove_action( 'wp_head', 'start_post_rel_link', 10); // start link
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10); // Display relational links for the posts adjacent to the current post.
    remove_action( 'wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version

}

if (!is_admin()) {
    function site_init()
    {
        // remove jQuery
    }

    function nextgen_styles()
    {
        // goodbye NextGen junk
        wp_deregister_style('NextGEN');
    }

    add_action('init', 'site_init');
    add_action('wp_print_styles', 'nextgen_styles', 100);
}

add_filter('comments_template', 'legacy_comments');
	function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
	$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;
	return $file;
}


//Get the First Image 

function catch_that_image() { global $post, $posts; $first_img = ''; $url = get_bloginfo('url'); ob_start(); ob_end_clean(); $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches); $first_img = $matches [1] [0];   $not_broken = @fopen("$first_img","r"); // checks if the image exists
 if(empty($first_img) || !($not_broken)){ //Defines a default image 
 unset($first_img); } else { $first_img = str_replace($url, '', $first_img); } return $first_img; }

function limit_words($string, $word_limit) {
 
	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character
 
	$words = explode(' ', $string);
 
	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character
 
	return implode(' ', array_slice($words, 0, $word_limit));
 
}


function new_badge(){
if ( (time()-get_the_time('U')) <= (3*86400) ) { // The number 3 is how many days to keep posts marked as new
echo '<div class="new-badge"></div>';
}

}	
?>