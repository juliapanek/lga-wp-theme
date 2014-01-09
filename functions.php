<?php

function magic_homepage_post($query) {
  if ( $query->is_home() && $query->is_main_query() ) {
      $query->set('p', 102);
      $query->set('post_type', 'any');
  }
}

add_action('pre_get_posts','magic_homepage_post');

function enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js', null, null, true);
        wp_enqueue_script('lga-menu', get_bloginfo('template_url') . '/js/menu.js', null, null, true);
    }
}
add_action('init', 'enqueue_scripts');

function enqueue_new_royalslider_files() {
    if (!is_admin()) {
        register_new_royalslider_files(1);
    }
}
add_action('init', 'enqueue_new_royalslider_files');

function enqueue_css() {
    if (!is_admin()) {
        wp_enqueue_style('bootstrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css', null, null, null);
        wp_enqueue_style('local', get_bloginfo('stylesheet_url'), null, null, null);
    }
}
add_action('init', 'enqueue_css');

function new_royalslider_add_lga_skins($skins) {
      $skins['rsLGA'] = array(
           'label' => 'LGA skin',
           'path' => get_stylesheet_directory_uri() . '/rs-skins/rs-lga.css'
      );
      return $skins;
}
add_filter('new_royalslider_skins', 'new_royalslider_add_lga_skins');

class RoyalSliderLGARendererHelper {
    private $pid;

    function __construct($data, $options) {
        $this->pid = $data->pid;
    }
    
    function image_id() {
        return array($this, 'get_image_id');
    }

    function get_image_id() {
        return $this->pid;
    }
}

function new_royalslider_add_custom_variables($m, $data, $options) {
    $helper = new RoyalSliderLGARendererHelper($data, $options);
    $m->addHelper('lga', $helper);
}
add_filter('new_rs_slides_renderer_helper', 'new_royalslider_add_custom_variables', 10, 4);

function get_image_details() {
  $image = nggcf_get_field($_GET['pid'], 'Image');
  if (!empty($image))
    echo '<img src="' . $image . '" width="80%"></img>';

  $caption = nggcf_get_field($_GET['pid'], 'Caption');
  if (!empty($caption))
    echo '<h2>' . $caption . '</h2>';

  $text = nggcf_get_field($_GET['pid'], 'Process Text');
  if (!empty($caption))
    echo '<p>' . $text . '</p>';

  echo '<img src="' . wp_get_attachment_url(104) . '" width="' . rand(50, 300) . '"></img>';

  die();
}

add_action('wp_ajax_get_image_details', 'get_image_details');
add_action('wp_ajax_nopriv_get_image_details', 'get_image_details');
?>
