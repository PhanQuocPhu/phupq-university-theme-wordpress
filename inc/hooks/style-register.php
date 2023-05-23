<?php

function style_register()
{
    wp_register_style(
        'phupq__extra_styles',
        get_theme_file_uri('assets/build/index.css')
    );
    wp_register_style(
        'phupq_styles',
        get_theme_file_uri('assets/build/style-index.css')
    );
    wp_register_style(
        'font_awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
    );
    wp_register_style(
        'custom_google_fonts',
        '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'
    );
    wp_enqueue_style('custom-google-fonts');
    wp_enqueue_style('font_awesome');
    wp_enqueue_style('phupq_styles');
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), ['jquery'], '1.0', true);
}