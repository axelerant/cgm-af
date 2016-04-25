<?php
function my_scripts_method() {
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '
        	<div class="chunk_topper">&nbsp;</div>
        	<div class="chunk_middle"><dl>',
        'after_widget' => '</dl></div>',
        'before_title' => '<dt>',
        'after_title' => '</dt>',
    ));


function change_login_redirect($redirect_to, $request_redirect_to, $user) {
  
    // If they're on the login page, don't do anything
    if ( !isset ( $user->user_login ) ) {
        return $redirect_to;
    }

    if (is_a($user, 'WP_User') && $user->has_cap('edit_posts') === false) {
        return get_bloginfo('siteurl');    
    }
    return $redirect_to;
}

 
// add filter with default priority (10), filter takes (3) parameters
add_filter('login_redirect','change_login_redirect', 10, 3);


// Godtube Code

define("GODTUBE_WIDTH", 400); // default width
define("GODTUBE_HEIGHT", 255); // default height
define("GODTUBE_REGEXP", "/\[godtube ([[:print:]]+)\]/");
define("GODTUBE_TARGET", '<script type="text/javascript" src="http://www.godtube.com/embed/source/###URL###/###WIDTH###/###HEIGHT###/true.js"></script>');


function godtube_plugin_callback($match)
{
	$tag_parts = explode(" ", rtrim($match[0], "]"));
	$output = GODTUBE_TARGET;
	$output = str_replace("###URL###", $tag_parts[1], $output);
	if (count($tag_parts) > 2) {
		if ($tag_parts[2] == 0) {
			$output = str_replace("###WIDTH###", GODTUBE_WIDTH, $output);
		} else {
			$output = str_replace("###WIDTH###", $tag_parts[2], $output);
		}
		if ($tag_parts[3] == 0) {
			$output = str_replace("###HEIGHT###", GODTUBE_HEIGHT, $output);
		} else {
			$output = str_replace("###HEIGHT###", $tag_parts[3], $output);
		}
	} else {
		$output = str_replace("###WIDTH###", GODTUBE_WIDTH, $output);
		$output = str_replace("###HEIGHT###", GODTUBE_HEIGHT, $output);	
	}
	return ($output);
}
function godtube_plugin($content)
{
	return (preg_replace_callback(GODTUBE_REGEXP, 'godtube_plugin_callback', $content));
}

add_filter('the_content', 'godtube_plugin',1);
add_filter('the_content_rss', 'godtube_plugin');
add_filter('comment_text', 'godtube_plugin');
add_filter('the_excerpt', 'godtube_plugin');
?>