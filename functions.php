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
add_filter( 'cpt_post_types', 'my_cpt_post_types' );

// incude jquery
function include_jQuery() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'include_jQuery');









?>