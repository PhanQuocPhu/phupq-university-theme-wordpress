<?php
//Này là để thêm css của theme vào Gutenberg editor
function setup_theme(){
    add_theme_support( 'title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocation1', 'Footer Location 1');
    register_nav_menu('footerLocation2', 'Footer Location 2');

}