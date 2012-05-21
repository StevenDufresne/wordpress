<?php
	get_header();
	the_post();
?>
<div class="wrapper ">
	<div class="unit-group about">
	<h2><?php the_title(); ?></h2>
		<div class="unit unit-triple" role="main">
			<div class="content" role="main" id="main">
					<div class="photo-group clearfix">
						<figure><img src="<?php sd();?>/img/berryfarm.jpg" alt="Photo of the berry farm."></figure>
						<figure><img src="<?php sd();?>/img/gran-gramp.jpg" alt="Old picture of gran and gramp."></figure>
						<figure><img src="<?php sd();?>/img/berryfarm-field.jpg" alt="Overlooking the berry fields."></figure>
						<figure><img src="<?php sd();?>/img/berryfarm-sunlight.jpg" alt="Sunlight shines through the trees."></figure>
					</div>
				<h4>What is Berry Good Farms?</h4>
				<?php the_content(); ?>		
			</div>
		</div>
		<div class="unit">
		<h3>Promotions</h3>
			<?php dynamic_sidebar('promo1');?>	
			<?php dynamic_sidebar('promo2');?>
		</div>
	</div>	
</div>
<?php get_footer(); ?>
		