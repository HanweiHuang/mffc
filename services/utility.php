<?php

/**
 * get template by name
 */
function get_template_part( $slug, $name = null ) {

    $templates = array();
    $name = (string) $name;
    if ( '' !== $name )
        $templates[] = "{$slug}-{$name}.php";

    $templates[] = "{$slug}.php";

    locate_template($templates, true, false);
}

function locate_template($template_names, $load = false, $require_once = true ) {
    $located = '';
    foreach ( (array) $template_names as $template_name ) {
        if ( !$template_name )
            continue;
        if ( file_exists(BASE_PATH . '/' . $template_name)) {
            $located = BASE_PATH . '/' . $template_name;
            break;
        }
    }
    if ( $load && '' != $located )
        load_template( $located, $require_once );
    return $located;
}

function load_template( $_template_file, $require_once = true ) {
    if ( $require_once ) {
        require_once( $_template_file );
    } else {
        require( $_template_file );
    }
}
