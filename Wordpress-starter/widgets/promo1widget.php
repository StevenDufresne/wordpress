<?php

class Promo1Widget extends WP_Widget {
	
	public function Promo1Widget () {
		parent::WP_Widget(false, 'Promo 1 Widget'); 
	}

	public function widget () {
		include 'promo1widget.html';
	}
}

register_widget('promo1widget'); 