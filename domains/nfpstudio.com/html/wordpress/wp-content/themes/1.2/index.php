<?php get_header(); ?>

<div id="content">
	<div id="home_overlay"></div>
	<?php $temp_query = clone $wp_query; ?>
	<?php query_posts('post_type=page&p=3350&posts_per_page=1'); ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php echo do_shortcode('[gallery columns="0" link="none" size="full"]'); ?>
	<?php endwhile; ?>
	<?php $wp_query = clone $temp_query; ?>
</div>

<?php get_footer(); ?>
