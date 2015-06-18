<?php

// Output Favicon
function berry_options_favicon() 
{  
    $output = '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.ico">';
    echo $output;
}
add_action('wp_head', 'berry_options_favicon'); 

?>
