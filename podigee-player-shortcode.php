<?php
/*
Plugin Name: Podigee Player Shortcode
Plugin URI:  https://www.podigee.com
Description: A shortcode to embed the Podigee Podcast Player
Version:     1.0
*/

function podigee_player( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'url' => '',
		),
		$atts
	);

	return '<script class="podigee-podcast-player" src="https://cdn.podigee.com/podcast-player/javascripts/podigee-podcast-player.js" data-configuration="' . $atts['url'] . '/embed?context=external"></script>';

}
add_shortcode( 'podigee-player', 'podigee_player' );
