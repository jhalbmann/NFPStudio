<?php /* LOOKBOOK */ ?>
<?php if(is_page('lookbook')) { ?>
<?php get_header(); ?>

<div id="content">

<?php /* SERIES 5 */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=506&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>series 5 : fw/2011</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end SERIES 5 */ ?>

<?php /* SERIES 4 */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=32&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>series 4 : ss/2011</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end SERIES 4 */ ?>

<?php /* SERIES 3 */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=30&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>series 3 : fw/2010</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end SERIES 3 */ ?>

<?php /* SERIES 2 */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=28&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>series 2 : ss/2010</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end SERIES 2 */ ?>

<?php /* SERIES 1 */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=20&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>series 1 : fw/2009</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end SERIES 1 */ ?>
</div>

<?php get_footer(); ?>
<?php }
/* end LOOKBOOK */
/* SERIES X */
elseif($post->post_parent == 2 || $post->post_parent == 8 && !is_page('nit') || $post->post_parent == 954 && !is_page('nit')){ ?>
<?php get_header(); ?>

<div id="content">

<?php $slug = basename(get_permalink()); $page_id = get_page_id($slug); ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=' . $page_id . '&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2><?php if($post->post_parent == 954) {echo '<a href="../">nit</a> > ' . get_the_title();} else {the_title();} ?></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php else : ?>
<div class="section">
<h2><?php the_title(); ?> > <a href="../">coming soon</a></h2>
<div class="row">
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
</div>

<?php get_footer(); ?>
<?php }
/* end SERIES X */
/* LOOK */
elseif(get_post($post->post_parent)->post_parent == 2) { ?>
<?php get_header(); ?>

<div id="content">

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

<div id="thumb_nav">
<?php
$nextPage = next_page_not_post($achor_text, 'true', 'sort_column=post_title');
$prevPage = previous_page_not_post($achor_text, 'true', 'sort_column=post_title');
?>

<div id="thumb_links"><span class="prev"><?php echo $prevPage; ?></span> <span class="next"><?php echo $nextPage; ?></span></div>

<div id="thumbs">
<?php
// create a variable that stores the custom fields
$meta = get_post_custom_values("images");

//$count = 0;

// do a foreach loop to get the manufacturers
foreach ($meta as $m) {

// this is the work here...this takes each manufacturer and creates an array of their values.  In this case $info = manufacturer name, $info[1] = manufacturer url, and $info[2] = manufacturer logo   
$info = explode(", ", $m);
echo '<div class="thumb">';
echo '<a href="' . $info[0] . '">';
echo '<span class="hover">&nbsp;</span>';
echo '<img src="' . $info[1] . '" alt="" />';
echo '</a>';
echo '</div>';
//$count++;
//if ($count == 4) break; // This stops printing the array to the screen at 12 logos.  So each time the page loads, 12 new logos will be loaded
}      
?>
</div>

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
<script type="text/javascript">
$(document).ready(function() {
$("#thumbs a").first().addClass("current");
var bgimg = $("#thumbs a").first().attr("href");
$("body").css({"background-image": "url(" + bgimg + ")"});
});

$("#thumbs a").click(function(){
$("#thumbs a").removeClass("current");
$(this).addClass("current");
var bgimg = $(this).attr("href");
$("body").css({"background-image": "url(" + bgimg + ")"});
return false;
});
</script>
</div>

<?php get_footer(); ?>
<?php }
/* end LOOK */
/* SHOP */
elseif(is_page('shop')) { ?>
<?php get_header(); ?>

<div id="content">

<?php /* NIT > SWEATERS */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=962&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>nit > <a href="nit/sweaters/">sweaters</a></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end NIT > SWEATERS */ ?>

<?php /* NIT > ACCESSORIES */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=964&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>nit > <a href="nit/accessories/">accessories</a></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end NIT > ACCESSORIES */ ?>

<?php /* FELT */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=956&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>felt</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end FELT */ ?>

<?php /* PHRAME */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=958&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>phrame</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end PHRAME */ ?>
</div>

<?php get_footer(); ?>
<?php }
/* end SHOP */
/* NIT */
elseif(is_page('nit')) { ?>
<?php get_header(); ?>

<div id="content">

<?php /* NIT > SWEATERS */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=962&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>nit > <a href="nit/sweaters/">sweaters</a></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end NIT > SWEATERS */ ?>

<?php /* NIT > ACCESSORIES */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=964&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>nit > <a href="nit/accessories/">accessories</a></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php /* <span class="hover">&nbsp;</span> */ ?><?php the_post_thumbnail();?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end NIT > ACCESSORIES */ ?>
</div>

<?php get_footer(); ?>
<?php }
/* end NIT*/
/* SHOP LOOK */
elseif(get_post($post->post_parent)->post_parent == 954 || $post->post_parent == 956 || $post->post_parent == 958) { ?>
<?php get_header(); ?>

<div id="content">

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

<div id="thumb_nav">
<h2><?php $shop_look_title="shop_look_title"; echo get_post_meta($post->ID, $shop_look_title, true); ?></h2>

<div id="thumbs">
<?php
// create a variable that stores the custom fields
$meta = get_post_custom_values("images");

//$count = 0;

// do a foreach loop to get the manufacturers
foreach ($meta as $m) {

// this is the work here...this takes each manufacturer and creates an array of their values.  In this case $info = manufacturer name, $info[1] = manufacturer url, and $info[2] = manufacturer logo   
$info = explode(", ", $m);
echo '<div class="thumb">';
echo '<a href="' . $info[0] . '">';
echo '<span class="hover">&nbsp;</span>';
echo '<img src="' . $info[1] . '" alt="" />';
echo '</a>';
echo '</div>';
//$count++;
//if ($count == 4) break; // This stops printing the array to the screen at 12 logos.  So each time the page loads, 12 new logos will be loaded
}      
?>
</div>

<?php $shop_look_description="shop_look_description"; if(! get_post_meta($post->ID, $shop_look_description, true) == '') { ?>
<div id="description">
<pre>
<?php echo get_post_meta($post->ID, $shop_look_description, true); ?>
</pre>
</div>
<?php } ?>

<?php the_content(); ?>
</div>
<?php endwhile;endif; ?>

<div id="video">
<h2><a href="../">Exit</a></h2>
</div>

<script type="text/javascript">
$(document).ready(function() {
$("#thumbs a").first().addClass("current");
var bgimg = $("#thumbs a").first().attr("href");
$("body").css({"background-image": "url(" + bgimg + ")"});
});

$("#thumbs a").click(function(){
$("#thumbs a").removeClass("current");
$(this).addClass("current");
var bgimg = $(this).attr("href");
$("body").css({"background-image": "url(" + bgimg + ")"});
return false;
});
</script>
</div>

<?php get_footer(); ?>
<?php }
/* end SHOP LOOK */
/* PRESS */
elseif(is_page('press')) { ?>
<?php get_header(); ?>

<div id="content">
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('category_name=press&posts_per_page=-1'); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><a href="<?php $press_link="link"; echo get_post_meta($post->ID, $press_link, true); ?>" target="_blank"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
<?php $wp_query = clone $temp_query; ?>
</div>

<?php get_footer(); ?>
<?php }
/* end PRESS */
/* EVENTS */
elseif(is_page('events')) { ?>
<?php get_header(); ?>

<div id="content">
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('category_name=events&posts_per_page=3'); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
<?php $wp_query = clone $temp_query; ?>
</div>

<?php get_footer(); ?>
<?php }
/* end EVENTS */
else { ?>
<?php get_header(); ?>

<div id="content">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
</div>

<?php get_footer(); ?>
<?php } ?>