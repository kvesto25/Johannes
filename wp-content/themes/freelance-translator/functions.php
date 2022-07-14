<?php
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu_all' => 'Header menu all',
        'header_menu_digital' => 'header_menu_digital',
        'header_menu_specialisation' => 'header_menu_specialisation',
        'header_menu_certified' => 'header_menu_certified',
        'header_menu_about_as' => 'header_menu_about_as',
        'header_menu_technical_translations' => 'header_menu_technical_translations',
        'header_menu_Languages' => 'header_menu_Languages',
        'header_menu_areas' => 'header_menu_areas',
        'footer_menu_company' => 'footer_menu_company',
        'footer_menu_areas' => 'footer_menu_areas_of_expertise',
        'footer_menu_languages' => 'footer_menu_languages',
        'footer_menu_locations' => 'footer_menu_locations',
        'footer_menu_follow_us' => 'footer_menu_follow_us'
    ]);
});


function get_menu_items($name)
{
    // language is automatically considered in this call
    $locations = get_nav_menu_locations();

    $out = array();
    if (!empty($locations[$name])) {
        $menu = wp_get_nav_menu_object($locations[$name]);
        $out = wp_get_nav_menu_items($menu->term_id, ['update_post_term_cache' => false]);
    }
    return $out;
}

//function get_menu_items_sort($name)
//{
//    // language is automatically considered in this call
//    $locations = get_nav_menu_locations();
//
//    $out = array();
//    if (!empty($locations[$name])) {
//        $menu = wp_get_nav_menu_object($locations[$name]);
//        $out = wp_get_nav_menu_items($menu->term_id, ['update_post_term_cache' => false]);
//    }
//    $out = json_decode(json_encode($out), true);
//    $new_array = array();
//    $temp = array();
//    foreach ($out as $elem){
//        if($elem['menu_order'] == 2){
//            $elem['child'] = array();
//            array_push($temp, $elem);
//        }
//    }
//    foreach ($out as $elem){
//        if($elem['menu_order'] == 3){
//            array_push($temp[$elem['menu_item_parent']]['child'], $elem);
//        }
//        if($elem['menu_order'] == 1){
//            $elem['child'] = array();
//            $new_array[$elem['ID']] = $elem;
//        }
//    }
//    foreach ($temp as $el){
//        array_push($new_array[$el['menu_item_parent']]['child'], $el);
//    }
//
//    return $new_array;
//}

add_action('wp_ajax_get_certificates', 'get_certificates_callback');
add_action('wp_ajax_nopriv_get_certificates', 'get_certificates_callback');
function get_certificates_callback()
{
    $return_data = array();

    $certificates_object = new WP_Query( array(
        'post_type' => array('certified'),
        'posts_per_page' => -1,
        'orderby' => 'ID'
    ));

    $certificates = $certificates_object->posts;
    foreach ($certificates as $certificate){
        $fields = get_fields($certificate->ID);
        $temp_array = array(
            "id" => $certificate->ID,
            "title" => $certificate->post_title,
            "link" => get_permalink($certificate->ID),
            "small_description" => get_the_excerpt($certificate->ID)
        );
        array_push($return_data, $temp_array);
    }

    die(html_entity_decode(json_encode($return_data)));
}

add_action('wp_ajax_get_disciplines', 'get_disciplines_callback');
add_action('wp_ajax_nopriv_get_disciplines', 'get_disciplines_callback');
function get_disciplines_callback()
{
    $return_data = array();
    $disciplines_object = new WP_Query( array(
        'post_type' => array('disciplines'),
        'posts_per_page' => -1,
        'orderby' => 'ID'
    ));

    $disciplines = $disciplines_object->posts;
    foreach ($disciplines as $discipline){
        $fields = get_fields($discipline->ID);
        $temp_array = array(
            "id" => $discipline->ID,
            "title" => $discipline->post_title,
            "link" => get_permalink($discipline->ID),
            "small_description" => get_the_excerpt($discipline->ID)
        );
        array_push($return_data, $temp_array);
    }


    die(html_entity_decode(json_encode($return_data)));
}

add_action('wp_ajax_get_languages', 'get_languages_callback');
add_action('wp_ajax_nopriv_get_languages', 'get_languages_callback');
function get_languages_callback()
{
    $return_data = array();
    $languages_object = new WP_Query( array(
        'post_type' => array('languages'),
        'posts_per_page' => -1,
        'orderby' => 'ID'
    ));

    $languages = $languages_object->posts;
    foreach ($languages as $language){
        $fields = get_fields($language->ID);
        $temp_array = array(
            "id" => $language->ID,
            "title" => $language->post_title,
            "image_url" => $fields['state_flag']['url'],
            "link" => get_permalink($language->ID),
            "small_description" => get_the_excerpt($language->ID)
        );
        array_push($return_data, $temp_array);
    }

    die(html_entity_decode(json_encode($return_data)));
}

add_action('wp_ajax_get_quote', 'get_quote_callback');
add_action('wp_ajax_nopriv_get_quote', 'get_quote_callback');
function get_quote_callback()
{
    $result = array(
        "status" => true,
        "text" => ""
    );
    if (empty($_POST)) {
        $result = array(
            "status" => false,
            "text" => "Немаэ даних"
        );
    }

    die(html_entity_decode(json_encode($result)));
}

add_action('wp_ajax_contact_as', 'contact_as_callback');
add_action('wp_ajax_nopriv_contact_as', 'contact_as_callback');
function contact_as_callback()
{
    $result = array(
        "status" => true,
        "text" => ""
    );
    if (empty($_POST)) {
        $result = array(
            "status" => false,
            "text" => "Немаэ даних"
        );
    }

    die(html_entity_decode(json_encode($result)));
}

add_action('wp_ajax_get_languages_by_source_lang', 'get_languages_by_source_lang_callback');
add_action('wp_ajax_nopriv_get_languages_by_source_lang', 'get_languages_by_source_lang_callback');
function get_languages_by_source_lang_callback()
{
    $result = array(
        "status" => true,
        "text" => "",
        "data" => array(
            "German" => array(
                "General" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Technical" => array(
                    "fullCheck" => 0.11,
                    "sampleCheck" => 0.09
                ),
                "Legal" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Medical" => array(
                    "fullCheck" => 0.15,
                    "sampleCheck" => 0.13
                ),
            ),
            "English" => array(
                "General" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Technical" => array(
                    "fullCheck" => 0.11,
                    "sampleCheck" => 0.09
                ),
                "Legal" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Medical" => array(
                    "fullCheck" => 0.15,
                    "sampleCheck" => 0.13
                ),
            ),
            "French" => array(
                "General" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Technical" => array(
                    "fullCheck" => 0.11,
                    "sampleCheck" => 0.09
                ),
                "Legal" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Medical" => array(
                    "fullCheck" => 0.15,
                    "sampleCheck" => 0.13
                ),
            ),
            "Italian" => array(
                "General" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Technical" => array(
                    "fullCheck" => 0.11,
                    "sampleCheck" => 0.09
                ),
                "Legal" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Medical" => array(
                    "fullCheck" => 0.15,
                    "sampleCheck" => 0.13
                ),
            ),
            "Spanish" => array(
                "General" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Technical" => array(
                    "fullCheck" => 0.11,
                    "sampleCheck" => 0.09
                ),
                "Legal" => array(
                    "fullCheck" => 0.10,
                    "sampleCheck" => 0.08
                ),
                "Medical" => array(
                    "fullCheck" => 0.15,
                    "sampleCheck" => 0.13
                ),
            )
        )
    );
    if (empty($_POST)) {
        $result = array(
            "status" => false,
            "text" => "Немаэ даних",
            "data" => array()
        );
    }

    die(html_entity_decode(json_encode($result)));
}
add_action('wp_ajax_get_users', 'get_users_callback');
add_action('wp_ajax_nopriv_get_users', 'get_users_callback');
function get_users_callback()
{
    $result = array();
    $users = get_users();
    $count = 0;
    foreach ($users as $user){
        $userID = $user->ID;
        $fields = get_fields('user_' . $userID);
        if (!$fields['type_user']){
            continue;
        }
        $temp = array(
            "id" => $userID,
            "personId" => $count,
            "personName" => $user->display_name,
            "personImageUrl" => $fields['image']['sizes']['large'],
            "personSubtitle" => $fields['position'],
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(
                "bigImageUrl" => "",
                "description" => "",
                "link" => "",
            ),
        );
        array_push($result, $temp);
        $count++;
    }
    die(html_entity_decode(json_encode($result)));
}
add_action('wp_ajax_get_user_by_id', 'get_user_by_id_callback');
add_action('wp_ajax_nopriv_get_user_by_id', 'get_user_by_id_callback');
function get_user_by_id_callback()
{
    $users = get_userdata( $_POST['id'] );
    $result = array(
        "status" => false,
        "text" => "Немаэ даних",
        "data" => array()
    );

    if (!empty($_POST)) {
        $fields = get_fields('user_' . $_POST['id']);
        if ($fields['type_user']){
            $users = get_users($_POST['id']);
//            print_r($users);
            $result = array(
                "status" => true,
                "text" => "",
                "data" => array(
                    "bigImageUrl" => $fields['image']['url'],
                    "description" => strip_tags($fields['small_descriptio']),
                    "link" => get_author_posts_url( false, $_POST['id'], $users->user_nicename)//get_permalink($_POST['id']),
                )
            );
        }
    }

    die(html_entity_decode(json_encode($result)));
}
