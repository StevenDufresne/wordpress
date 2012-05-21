
<?php get_header();

?>

<div class= "wrapper">
	<h2>News and Events</h2>
	<div class="content">
	 <?php
				$args = array( 'order'=> 'ASC', 'orderby' => 'post_date', 'category_name' => 'front' );
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post); ?> 
				

		<article class="main-posts" role="main" id="main">
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read More</a>
		</article><?php endforeach;?>
	</div>
</div>
<?php get_footer();?>
