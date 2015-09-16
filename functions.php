<?php

// Remove WP version meta
remove_action('wp_head', 'wp_generator');

// Load custom scripts 
function ie_scripts() {
    wp_enqueue_style( 'ie-only', get_stylesheet_directory_uri().'/css/ie.css' );
    global $wp_styles;
    $wp_styles->add_data( 'ie-only', 'conditional', 'lte IE 9' );
}
add_action( 'wp_print_styles', 'ie_scripts' );

function custom_scripts() {
    // css
    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'dfp', get_stylesheet_directory_uri().'/css/dfp.css', array('upbootwp-css'), '1.0');
    wp_register_style( 'dfp-dev', get_stylesheet_directory_uri().'/css/dfpdev.css', array('upbootwp-css'), '1.0');
    // js
    wp_enqueue_script( 'js', get_stylesheet_directory_uri().'/js/js.js',array('upbootwp-basefile'),'',true);
    if ( !is_page_template( 'page-templates/landing-page.php' ) ) {
        wp_enqueue_style( 'dfp-dev' );
    }
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

// Add ACF Options Page
if(function_exists('acf_add_options_page')) { 
    acf_add_options_page();
}

// Move Options menu link
function custom_menu_order( $menu_ord ) {  
    if (!$menu_ord) return true;  
    $menu = 'acf-options';    
    $menu_ord = array_diff($menu_ord, array( $menu ));
    array_splice( $menu_ord, 1, 0, array( $menu ) );
    return $menu_ord;
}  
add_filter('custom_menu_order', 'custom_menu_order'); 
add_filter('menu_order', 'custom_menu_order');

// show admin bar only for admins and editors
if (!current_user_can('edit_posts')) {
	add_filter('show_admin_bar', '__return_false');
}

/**
*   Enable shortcodes
*/
add_filter('widget_text', 'do_shortcode');
add_filter('the_content', 'do_shortcode');
?>
