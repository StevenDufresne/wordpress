<?php
	get_header();
	the_post();
	
	$files = get_posts(array(
	'numberposts' => 1,
	'post_type' => 'attachment',
	'post_parent' => $post->ID
	
));

?>
<div class="wrapper recipe">
	<div class="content single-post" role="main" id="main">
		<div class="single-img pic">
			<img src="<?php echo wp_get_attachment_url($files[0]->ID);?>" alt="<?php echo $files[0]->post_excerpt;?>">
		</div>
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<footer>
			<small>
				Published <?php echo get_the_date('Y-m-d'); ?> : 
			</small>
		</footer>
			<?php the_content(); ?>
		<ul class="commentlist">
			<?php comments_template(); ?>
		</ul>
	</div>
</div>
<?php get_footer();?>