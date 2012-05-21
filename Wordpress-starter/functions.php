<?php

function sd() {
	bloginfo('stylesheet_directory');
}


register_nav_menus(array(
		'main' => 'Primary Navigation'
		
));

register_sidebars(1,array(
	'name' => 'Promotions Widget #1',
		'id'=> 'promo1',
		'before_widget' => ' ',
		'after_widget' => ' '
));


//include 'widgets/promo1widget.php';



function create_post_type() {
	register_post_type( 'recipes',
		array(
			'labels' => array(
				'name' => __( 'Recipes' ),
				'singular_name' => __( 'Recipe' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'recipes')
		)
	);
}