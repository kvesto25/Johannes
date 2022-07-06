<?php
/*
Plugin Name: Freelance-translator
Description: Plugin for freelance translator function in site
Version: 1.0
Author: Taras Lavrin
Author URI:
Plugin URI:
*/
define('READEXCELFILE_DIR', plugin_dir_path(__FILE__));
define('READEXCELFILE_URL', plugin_dir_url(__FILE__));


function contentTranslator(){
    if(is_admin()) {
        require_once(READEXCELFILE_DIR . 'components/admin.php');
    }
}

contentTranslator();

register_activation_hook(__FILE__, 'translator_activation');
register_deactivation_hook(__FILE__, 'translator_deactivation');

function translator_activation() {
    require_once(READEXCELFILE_DIR . 'components/models/Currency.php');
    createCurrency();
    register_uninstall_hook(__FILE__, 'translator_uninstall');
}
function translator_deactivation() {
}

function translator_uninstall(){
}