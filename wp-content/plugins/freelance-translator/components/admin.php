<?php
add_action('admin_menu', 'register_exchanger_event');

function register_exchanger_event() {
    $mainPage = add_menu_page('Валюты', 'Валюты', 'manage_options', 'currency-page', 'currency');
    $addPage = add_submenu_page( 'currency-page', 'Добавить валюту', 'Добавить валюту', 'manage_options', 'currencyAdd-page', 'currencyAdd' );
    add_action( 'load-' . $mainPage, 'my_plugin_admin_scripts' );
    add_action( 'load-' . $addPage, 'my_plugin_admin_scripts' );
    add_action('load-'. $mainPage, 'my_plugin_admin_styles');
    add_action('load-'. $addPage, 'my_plugin_admin_styles');
}

function my_plugin_admin_scripts() {
    wp_enqueue_script('vue', plugins_url('/assets/js/vue.js', __FILE__));
    wp_enqueue_script('axios', plugins_url('/assets/js/axios.js', __FILE__));
}
function my_plugin_admin_styles() {
    wp_enqueue_style( 'custom_style', plugins_url('/assets/css/style.css', __FILE__) );
}

function currency(){
    include READEXCELFILE_DIR . 'components/views/all-currency.php';
    wp_enqueue_script('currency', plugins_url('/assets/js/component-vue/all-currency.js', __FILE__));
}
function currencyAdd(){
    include READEXCELFILE_DIR . 'components/views/add-currency.php';
    wp_enqueue_script('currency', plugins_url('/assets/js/component-vue/add-currency.js', __FILE__));
}