<?php 

function add_nav_menus() {
    register_nav_menus( array(
        'nav_menu'=>'Navigation Menu',
        'social menu'=>'Social Menu',
        'footer_column_first'=>'Column First',
        'footer_column_second'=>'Column Second',
        'footer_column_third'=>'Column third',
        'footer_column_forth'=>'Column forth',
        'footer_nav_menu'=>'Footer Nav Menu',
    ));
}
add_action('init', 'add_nav_menus');

; ?>