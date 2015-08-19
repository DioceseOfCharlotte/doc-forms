<?php
/**
 * @package    doc
 * @author     Marty Helmick <info@martyhelmick.com>
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */


add_action( 'after_setup_theme', 'doc_forms_theme_setup' );


/**
 * Setup function.
 */
function doc_forms_theme_setup() {

    /*
     * Add a custom background to overwrite the defaults.
     *
     * @link http://codex.wordpress.org/Custom_Backgrounds
     */
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'fbfbfb',
            'default-image' => '',
        )
    );


    add_filter( 'theme_mod_primary_color', 'doc_forms_primary_color' );
    add_filter( 'theme_mod_secondary_color', 'doc_forms_secondary_color' );
    add_filter( 'theme_mod_accent_color', 'doc_forms_accent_color' );
}



function doc_forms_primary_color( $hex ) {
    return $hex ? $hex : '34495e';
}

function doc_forms_secondary_color( $hex ) {
    return $hex ? $hex : '1abc9c';
}

function doc_forms_accent_color( $hex ) {
    return $hex ? $hex : 'EEEEEE';
}


add_action( 'init', 'gravity_view_layouts_register_meta' );

function gravity_view_layouts_register_meta() {
add_post_type_support( 'gravityview', 'theme-layouts' );
}
