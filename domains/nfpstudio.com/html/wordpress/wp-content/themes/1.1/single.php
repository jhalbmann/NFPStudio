<?php get_header(); ?>

<div id="content">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>

</div>

<?php get_footer(); ?>
