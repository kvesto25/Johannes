<?php
add_action('after_setup_theme', function () {
    register_nav_menus([
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

add_action('wp_ajax_get_certificates', 'get_certificates_callback');
add_action('wp_ajax_nopriv_get_certificates', 'get_certificates_callback');
function get_certificates_callback()
{
    $return_data = array();

    for ($i = 0; $i < 10; $i++) {
        $temp_array = array(
            "id" => ($i + 1),
            "title" => "certificates " . ($i + 1),
            "link" => "https://serikplusplus.github.io/Johanes--front/dist/all-languages.html",
            "small_description" => "The majority of assignments we do for clients are document translations. From brochures to reports and from manuals to contracts. Translation Agency Perfect has been providing these types. certificates" . ($i + 1)
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

    for ($i = 0; $i < 10; $i++) {
        $temp_array = array(
            "id" => ($i + 1),
            "title" => "certificates " . ($i + 1),
            "link" => "https://serikplusplus.github.io/Johanes--front/dist/all-languages.html",
            "small_description" => "The majority of assignments we do for clients are document translations. From brochures to reports and from manuals to contracts. Translation Agency Perfect has been providing these types. certificates" . ($i + 1)
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

    $image = array(
        "https://serikplusplus.github.io/Johanes--front/dist/img/flag-azerbaijan.png",
        "https://serikplusplus.github.io/Johanes--front/dist/img/flag-china.png",
        "https://serikplusplus.github.io/Johanes--front/dist/img/flag-cyprus.png"
    );

    for ($i = 0; $i < 10; $i++) {
        $temp_array = array(
            "id" => ($i + 1),
            "title" => "title " . ($i + 1),
            "image_url" => $image[rand(0, 2)],
            "link" => "https://serikplusplus.github.io/Johanes--front/dist/all-languages.html",
            "small_description" => "Azerbaijani is spoken all over the world and is widely seen as the mother tongue of the Islamic world.title " . ($i + 1)
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
function get_users_callback(){
    $result = array(
        array(
            "personId" => 0,
            "personName" => 'Melissa Becker',
            "personImageUrl" => 'meet-team-1.jpg',
            "personSubtitle" => 'Co-founder',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
        array(
            "personId" => 1,
            "personName" => 'John Crimson',
            "personImageUrl" => 'meet-team-2.jpg',
            "personSubtitle" => 'CEO',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
        array(
            "personId" => 2,
            "personName" => 'Jack Billigan',
            "personImageUrl" => 'meet-team-3.jpg',
            "personSubtitle" => 'Co-founder',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
        array(
            "personId" => 3,
            "personName" => 'Steve Coulberg',
            "personImageUrl" => 'meet-team-4.jpg',
            "personSubtitle" => 'SMM manager',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
        array(
            "personId" => 4,
            "personName" => 'Steve Coulberg',
            "personImageUrl" => 'meet-team-5.jpg',
            "personSubtitle" => 'SMM manager',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
        array(
            "personId" => 5,
            "personName" => 'Steve Coulberg',
            "personImageUrl" => 'meet-team-6.jpg',
            "personSubtitle" => 'SMM manager',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
        array(
            "personId" => 6,
            "personName" => 'Steve Coulberg',
            "personImageUrl" => 'meet-team-7.jpg',
            "personSubtitle" => 'SMM manager',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
        array(
            "personId" => 7,
            "personName" => 'Steve Coulberg',
            "personImageUrl" => 'meet-team-8.jpg',
            "personSubtitle" => 'SMM manager',
            "isHaveMoreInfo" => false,
            "personMoreInfo" => array(),
        ),
    );
    die(html_entity_decode(json_encode($result)));
}
add_action('wp_ajax_get_user_by_id', 'get_user_by_id_callback');
add_action('wp_ajax_nopriv_get_user_by_id', 'get_user_by_id_callback');
function get_user_by_id_callback(){
    $result = array(
        "status" => true,
        "text" => "",
        "data" => array(
            "bigImageUrl" => "meet-team-1.jpg",
            "description" => "This company is the best i’ve ever cooperate with! This company is the best i’ve ever cooperate with! This company is the best i’ve ever cooperate with! This company is the best i’ve ever cooperate with!",
            "link" => "http://johannes.taras-lavrin.online/author/melissa_becker/",
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
