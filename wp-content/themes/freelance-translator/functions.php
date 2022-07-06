<?php
add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'header_menu_all' => 'Header menu all',
        'header_menu_areas' => 'header_menu_areas',
        'header_menu_certified' => 'header_menu_certified',
        'header_menu_specialisation' => 'header_menu_specialisation',
        'header_menu_digital' => 'header_menu_digital',
        'footer_menu_company' => 'footer_menu_company',
        'footer_menu_areas' => 'footer_menu_areas_of_expertise',
        'footer_menu_languages' => 'footer_menu_languages',
        'footer_menu_locations' => 'footer_menu_locations',
        'footer_menu_follow_us' => 'footer_menu_follow_us'
    ] );
} );


function get_menu_items($name) {
    // language is automatically considered in this call
    $locations = get_nav_menu_locations();

    $out = array();
    if (!empty($locations[$name])) {
        $menu = wp_get_nav_menu_object($locations[$name]);
        $out = wp_get_nav_menu_items($menu->term_id, ['update_post_term_cache' => false]);
    }
    return $out;
}