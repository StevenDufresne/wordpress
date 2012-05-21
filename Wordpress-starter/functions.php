<?php

function sd() {
	bloginfo('stylesheet_directory');
}


register_nav_menus(array(
		'main' => 'Primary Navigation'
		
));

register_sidebars(1,array(
	'name' => 'Widget Name',
		'id'=> 'widget_id',
		'before_widget' => ' ',
		'after_widget' => ' '
));


//include 'widgets/widget_name.php';



function create_post_type() {
	register_post_type( 'post_name',
		array(
			'labels' => array(
				'name' => __( 'post_name - Plural' ),
				'singular_name' => __( 'post_name - Singular' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'lowercase_post_name')
		)
	);
}