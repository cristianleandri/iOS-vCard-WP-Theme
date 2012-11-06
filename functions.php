<?php

/**
 * Load Javascript files into the theme.
 */

function load_scripts() {
	wp_enqueue_script(
		'retina-images',
		get_template_directory_uri() . '/js/retina.js'
	);
}
 
add_action('wp_enqueue_scripts', 'load_scripts');