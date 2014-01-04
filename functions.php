<?php

// Alt text for ACF get_sub_field images
function get_image_with_alt($imagefield, $postID, $imagesize = 'full'){
$imageID = get_sub_field($imagefield, $postID); 
$image = wp_get_attachment_image_src( $imageID, $imagesize ); 
$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); 
return '<img src="' . $image[0] . '" alt="' . $alt_text . '" />';
}

/**
 * Hooks the WP cpt_post_types filter 
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 **/
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'res_proj';
    $post_types[] = 'inst_proj';
    $post_types[] = 'com_proj';
    $post_types[] = 'home_page';
    $post_types[] = 'bio';
    $post_types[] = 'firm_prof';

    return $post_types;
}
add_filter('cpt_post_types', 'my_cpt_post_types');

function enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js', null, null, true);
    }
}
add_action('init', 'enqueue_scripts');

function enqueue_royal_slider_files() {
    if (!is_admin()) {
        register_new_royalslider_files(1);
    }
}
add_action('init', 'enqueue_royal_slider_files');

function enqueue_css() {
    if (!is_admin()) {
        wp_enqueue_style('bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css', null, null, null);
        wp_enqueue_style('local', get_bloginfo('stylesheet_url'), null, null, null);
    }
}
add_action('init', 'enqueue_css');
?>
