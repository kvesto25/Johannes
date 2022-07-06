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

add_action('wp_ajax_get_languages', 'get_languages_callback');
add_action('wp_ajax_nopriv_get_languages', 'get_languages_callback');
function get_languages_callback(){
    $return_data = array();

    $image = array(
        "https://serikplusplus.github.io/Johanes--front/dist/img/flag-azerbaijan.png",
        "https://serikplusplus.github.io/Johanes--front/dist/img/flag-china.png",
        "https://serikplusplus.github.io/Johanes--front/dist/img/flag-cyprus.png"
    );

    for($i = 0; $i < 10; $i++){
        $temp_array = array(
            "id" => ($i+1),
            "title" => "title " . ($i+1),
            "image_url" => $image[rand(0,2)],
            "link" => "https://serikplusplus.github.io/Johanes--front/dist/all-languages.html",
            "small_description" => "Azerbaijani is spoken all over the world and is widely seen as the mother tongue of the Islamic world.title " . ($i+1)
        );
        array_push($return_data, $temp_array);
    }


    die(html_entity_decode(json_encode($return_data)));
}