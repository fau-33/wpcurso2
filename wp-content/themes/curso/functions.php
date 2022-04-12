<?php

function carrega_scripts() {
  
  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
  wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array( ), '1.0', 'all');
  wp_enqueue_script( 'templete', get_template_directory() . '/js/template.js', array(), null, true);
  
}
add_action('wp_enqueue_scripts', 'carrega_scripts');