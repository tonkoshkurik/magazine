<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );


function my_bb_custom_fonts ( $system_fonts ) {
    $system_fonts[ 'Savoy' ] = array(
        'fallback' => 'Georgia, serif',
        'weights' => array(
            '400', 700
        ),
    );
    $system_fonts[ 'FoundersGrotesk' ] = array(
        'fallback' => 'Georgia, serif',
        'weights' => array(
            '400',
        ),
    );
    $system_fonts[ 'FranklinGothic' ] = array(
        'fallback' => 'Georgia, serif',
        'weights' => array(
            '400', 700
        ),
    );
    $system_fonts[ 'VogueAvantGarde' ] = array(
        'fallback' => 'Georgia, serif',
        'weights' => array(
            '400' 
        ),
    );
    $system_fonts[ 'OstiaAntica' ] = array(
        'fallback' => 'Georgia, serif',
        'weights' => array(
            '400' 
        ),
    );
    return $system_fonts;
}

//Add to Beaver Builder Theme Customizer
add_filter( 'fl_theme_system_fonts', 'my_bb_custom_fonts' );

//Add to Page Builder modules
add_filter( 'fl_builder_font_families_system', 'my_bb_custom_fonts' );
