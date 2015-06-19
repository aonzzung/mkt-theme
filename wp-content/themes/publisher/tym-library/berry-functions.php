<?php

// Output Favicon
function berry_options_favicon() 
{  
    $output = '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.ico">';
    echo $output;
}
add_action('wp_head', 'berry_options_favicon'); 

// Post excerpt read more [...] link
function new_excerpt_more( $more ) {
	return ' <a class="block-read-more-link" href="' . get_permalink( get_the_ID() ) . '">' . __( '[...]', 'publisher' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
?>
