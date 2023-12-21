<?php

/**
 * Plugin Name: ACF Custom Field Enabler
 * Plugin URI: https://github.com/hulmannk/acf-custom-field-enabler
 * Description: ACF Custom Field Enabler seamlessly integrates standard WordPress custom fields with ACF.
 * Version: 1.0
 * Author: Kristof Hulmann
 * Author URI: https://github.com/hulmannk/
 **/

 if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( current_user_can( 'manage_options' ) ) {
    add_filter('acf/settings/remove_wp_meta_box', '__return_false');
}

?>
