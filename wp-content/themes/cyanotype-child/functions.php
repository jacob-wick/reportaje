<?php
/**
 * Cyanotype Child functions and definitions
 *
 * @package Cyanotype
 * @since Cyanotype 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

function cyanotype_child_enqueue_styles() {

	$parent_style = 'cyanotype-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
    	get_stylesheet_directory_uri() . '/style.css',
    	array( $parent_style ),
    	wp_get_theme()->get('Version')
	);
}

add_action( 'wp_enqueue_scripts', 'cyanotype_child_enqueue_styles' );


function the_Details() {

    $location = get_field( 'location' );
    $dates = get_field( 'dates' );
    $curator = get_field ( 'curator' );
    $funding = get_field ( 'funding' );

    echo '<ul class="details">';

    if ( $location ) {
        echo '<li>' . $location . '</li>';
    }
    if ( $dates ) {
        echo '<li>' . $dates . '</li>';
    }
    if ( $curator ) {
        echo '<li>' . $curator . '</li>';
    }
    if ( $funding ) {
        echo '<li>' . $funding . '</li>';
    }

    echo '</ul>';

}

?>