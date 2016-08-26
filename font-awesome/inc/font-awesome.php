<?php

add_action('wp_enqueue_script', 'component_enqueue_font_awesome');

function my_project_name_enqueue_font_awesome(){
	
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
	
}
