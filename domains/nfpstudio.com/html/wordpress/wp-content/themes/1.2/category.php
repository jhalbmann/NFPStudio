<?php get_header(); ?>

<div id="content">

	<div id="sidenav">
		<ul> 
			<?php wp_list_categories('orderby=id&show_count=0&use_desc_for_title=0&child_of=19'); ?>
		</ul>
	</div>

	<div id="main">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container">
				<?php echo do_shortcode('[gallery columns="0" link="none" size="blog"]'); ?>
				<div class="meta">
					<span class="comments_link"><a href="<?php comments_link(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/comment.gif" alt="Comment"> <?php comments_number( '0', '1', '%' ); ?></a></span>
					<span class="date"><?php the_time('m/d/Y') ?></span>
<?php /*
					<span class="category"><?php the_category(', ', ''); ?></span>
*/ ?>
					<span class="clear"></span>
				</div>
			</div>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>
	
	<?php endwhile;endif; ?>
	</div>

</div>

<?php get_footer(); ?>
