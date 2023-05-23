<?php

//Var
$a = 10;

//Include
include(get_theme_file_path('./inc/hooks/style-register.php'));
//include(get_theme_file_path('./inc/hooks/head-register.php'));
include(get_theme_file_path('./inc/hooks/setup-theme.php'));
include(get_theme_file_path('./inc/hooks/custom-post-type.php'));

//Hooks
add_action('wp_enqueue_scripts', 'style_register');
//add_action('wp_head', 'head_register', 5);
add_action('after_setup_theme', 'setup_theme');
//Add new post type
add_action('init', 'university_post_types');
//Set Custom query for event post types
//add_action('pre_get_posts', 'university_adjust_queries');