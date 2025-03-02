<?php

function theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_support');

function my_theme_enqueue_styles()
{
  wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function load_javascript()
{
  wp_register_script('custom', get_template_directory_uri() . '/main.js', '', 1, true);
  wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');
