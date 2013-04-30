<?php /* INSTRUCTIONS */ ?>
<?php if(is_page('instructions') || $post->post_parent == 2744) { ?>
<?php get_header(); ?>

<div id="content">

<?php /* THUMBS */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=2744&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section" style="margin-top:380px;">
<h2>choose below style for wearing and look possibilities</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end THUMBS */ ?>

<?php while(have_posts()) : the_post(); ?>
<div id="container">
	<?php $shop_video = "shop_video"; if(! get_post_meta($post->ID, $shop_video, true) == '') { ?>
	<div id="video">
		<h2><?php $shop_look_title="shop_look_title"; echo get_post_meta($post->ID, $shop_look_title, true); ?> / how to wear video</h2>
		<?php echo get_post_meta($post->ID, $shop_video, true); ?>
	</div>
	<?php } ?>
	<div id="gallery">
		<h2>look options</h2>
		<?php the_content(); ?>
	<?php $shop_link = "shop_link"; if(! get_post_meta($post->ID, $shop_link, true) == '') { ?>
		<p class="link"><a href="<?php echo get_post_meta($post->ID, $shop_link, true); ?>">Link</a></p>
	<?php } ?>
	</div>
	<span class="clear"></span>
</div>
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
<?php }
/* end INSTRUCTIONS */
/* LOOKBOOK */
elseif(is_page('lookbook')) { ?>
<?php get_header(); ?>

<div id="content">

<?php /* SERIES 6 */ ?>
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('post_type=page&post_parent=2799&orderby=title&order=ASC&posts_per_page=-1'); ?>
<?php $x=0; if(have_posts()) :  ?>
<div class="section">
<h2>series 6 : ss/2012</h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
</div>

<?php $x++;endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php $wp_query = clone $temp_query; ?>
<?php /* end SERIES 6 */ ?>

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
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
$nextPage = next_page_not_post('Next&nbsp;&nbsp;>', 'true', 'sort_column=post_title');
$prevPage = previous_page_not_post('<&nbsp;&nbsp;Prev', 'true', 'sort_column=post_title');
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
echo '<img src="' . $info[1] . '" alt="" />';
echo '</a>';
echo '</div>';
//$count++;
//if ($count == 4) break; // This stops printing the array to the screen at 12 logos.  So each time the page loads, 12 new logos will be loaded
}      
?>
</div>

<?php $shop_video = "shop_video"; if(! get_post_meta($post->ID, $shop_video, true) == '') { ?>
<div style="border-top:1px solid #bfbfbf;clear:both;padding:16px 0;">
<h2 style="border:0;clear:none;float:left;margin:0;padding:0;width:auto;"><?php the_title(); ?></h2>
<a href="#" id="video_link">Tutorial Video</a>
 </div>
<?php } else { ?>
<h2><?php the_title(); ?></h2>
<?php } ?>

<?php the_content(); ?>
</div>

<div id="img">
<img src="" alt="<?php the_title(); ?>" class="full-image first" />
</div>

<?php $shop_video = "shop_video"; if(! get_post_meta($post->ID, $shop_video, true) == '') { ?>
<div id="video">
<p><a href="#" class="close"><img src="<?php bloginfo('template_url'); ?>/img/close.gif" alt="Close" /> Close Window</a></p>
<?php echo get_post_meta($post->ID, $shop_video, true); ?>
</div>
<?php } ?>
<?php endwhile;endif; ?>
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
<h2><span class="nav">nit&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;<a href="nit/sweaters/">sweaters</a></span><br class="none" />
<span class="description"><strong>N</strong> : piece offers Convertible Knitwear Sweater Design possibilities</span><span class="clear"></span></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<!--This Will Not Be Displayed -->
<?php if($x==10) { $x=0; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<h2><span class="nav">nit&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;<a href="nit/accessories/">accessories</a></span><br class="none" />
<span class="description"><strong>NA</strong> : piece offers Linkable Accessory Building Block possibilities</span><span class="clear"></span></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<h2><span class="nav">felt&nbsp;&nbsp;&nbsp;&nbsp;</span><br class="none" />
<span class="description"><strong>F</strong> : piece offers a Hand-Felted customized design with varying silhouette and color possibilities</span><span class="clear"></span></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<h2><span class="nav">phrame&nbsp;&nbsp;&nbsp;&nbsp;></span><br class="none" />
<span class="description"><strong>P</strong> : piece offers an N:F:P Basic Jersey design to construct an individualized comfort foundation : N:F:P Framework</span><span class="clear"></span></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<h2><span class="nav">nit&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;<a href="nit/sweaters/">sweaters</a></span><br class="none" />
<span class="description"><strong>N</strong> : piece offers Convertible Knitwear Sweater Design possibilities</span><span class="clear"></span></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
<h2><span class="nav">nit&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;<a href="nit/accessories/">accessories</a></span><br class="none" />
<span class="description"><strong>NA</strong> : piece offers Linkable Accessory Building Block possibilities</span><span class="clear"></span></h2>
<div class="row">
<?php while(have_posts()) : the_post(); ?>

<?php if($x==10) { $x=-1; ?>
</div>
<div class="row">
<?php } ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><br class="none" /><span class="title"><?php the_title(); ?></span></a>
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
echo '<img src="' . $info[1] . '" alt="" />';
echo '</a>';
echo '</div>';
//$count++;
//if ($count == 4) break; // This stops printing the array to the screen at 12 logos.  So each time the page loads, 12 new logos will be loaded
}      
?>
</div>

<?php $shop_video = "shop_video"; if(! get_post_meta($post->ID, $shop_video, true) == '') { ?>
<div id="description">
<h3>Ways to Wear</h3>
<a href="#" id="video_link">Tutorial Video</a>
<pre>
<?php $shop_look_description="shop_look_description"; if(! get_post_meta($post->ID, $shop_look_description, true) == '') { ?>
<?php echo get_post_meta($post->ID, $shop_look_description, true); ?>
<?php } else { ?>
Description coming soon. Please refer to video.
<?php } ?>
</pre>
</div>
<?php } ?>

<div id="details">
<?php the_content(); ?>
</div>
</div>

<div id="img">
<p><img src="" alt="<?php the_title(); ?>" class="full-image first" /></p>
<p><a href="#" class="close"><img src="<?php bloginfo('template_url'); ?>/img/close.gif" alt="Close" /></a></p>
</div>

<?php $shop_video = "shop_video"; if(! get_post_meta($post->ID, $shop_video, true) == '') { ?>
<div id="video">
<p><a href="#" class="close"><img src="<?php bloginfo('template_url'); ?>/img/close.gif" alt="Close" /> Close Window</a></p>
<?php echo get_post_meta($post->ID, $shop_video, true); ?>
</div>
<?php } ?>
<?php endwhile;endif; ?>

</div>

<?php get_footer(); ?>
<?php }
/* end SHOP LOOK */
/* EVENTS */
elseif(is_page('events') || $post->post_parent == 12) { ?>
<?php get_header(); ?>

<div id="content">
<div id="sidenav">
<dl>
<dt>Events</dt>
<dd<?php if(is_page('markets')) {echo ' class="current_page_item"';}?>><a href="/events/markets/">Markets</a></dd>
<dd<?php if(is_page('pop-up-shops')) {echo ' class="current_page_item"';}?>><a href="/events/pop-up-shops/">Pop Up Shops</a></dd>
<dd<?php if(is_page('special-events-shows')) {echo ' class="current_page_item"';}?>><a href="/events/special-events-shows/">Special Events / Shows</a></dd>
</dl>
</div>

<a href="#" class="close"><img src="<?php bloginfo('template_url'); ?>/img/close.gif" alt="Close" /></a>
<div id="main">
<?php $temp_query = clone $wp_query; ?>
<?php if(is_page('events')) {query_posts('category_name=events&posts_per_page=-1');}
elseif(is_page('markets')) {query_posts('p=1607&posts_per_page=1');}
elseif(is_page('pop-up-shops')) {query_posts('p=329&posts_per_page=1');}
elseif(is_page('special-events-shows')) {query_posts('p=332&posts_per_page=1');} ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
<?php $wp_query = clone $temp_query; ?>
</div>
</div>

<?php get_footer(); ?>
<?php }
/* end EVENTS */
/* PRESS */
elseif(is_page('press')) { ?>
<?php get_header(); ?>

<div id="content">

<div id="sidenav">
<dl>
<dt>About</dt>
<dd<?php if(is_page('modular-design-concept')) {echo ' class="current_page_item"';} ?>><a href="/about/modular-design-concept/">Modular Design Concept</a></dd>
<dd<?php if(is_page('bio')) {echo ' class="current_page_item"';} ?>><a href="/about/bio/">Bio</a></dd>
<dd<?php if(is_page('inspiration')) {echo ' class="current_page_item"';} ?>><a href="/about/inspiration/">Inspiration</a></dd>
<dd<?php if(is_page('press')) {echo ' class="current_page_item"';} ?>><a href="/about/press/">Press</a></dd>
<dd<?php if(is_page('studio')) {echo ' class="current_page_item"';} ?>><a href="/about/studio/">Studio</a></dd>
</dl>
</div>

<a href="#" class="close"><img src="<?php bloginfo('template_url'); ?>/img/close.gif" alt="Close" /></a>
<div id="main">
<?php $temp_query = clone $wp_query; ?>
<?php query_posts('category_name=press&posts_per_page=-1'); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('press-thumb display_inline float_left'); ?>>
<a href="<?php $press_link="link"; echo get_post_meta($post->ID, $press_link, true); ?>" target="_blank"><span class="none"><strong><?php the_title(); ?></strong><?php the_content(); ?></span><br class="none" /><?php the_post_thumbnail(); ?></a>
</div>

<?php endwhile;endif; ?>
<?php $wp_query = clone $temp_query; ?>
</div>

</div>

<?php get_footer(); ?>
<?php }
/* end PRESS */
/* PROCESS */
elseif(is_page('process')) { ?>
<?php get_header(); ?>

<div id="content">

	<div id="sidenav">
		<ul> 
			<?php wp_list_categories('orderby=id&show_count=0&use_desc_for_title=0&child_of=19'); ?>
		</ul>
	</div>

	<div id="main">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;endif; ?>
	</div>

</div>

<?php get_footer(); ?>
<?php }
/* end PROCESS */
/* CONTACT */
elseif(is_page('contact') || $post->post_parent == 296) { ?>
<?php get_header(); ?>

<div id="content">
<div id="sidenav">
<dl>
<dt>Contact</dt>
<dd<?php if(is_page('contact')) {echo ' class="current_page_item"';}?>><a href="/contact/">Contact Information</a></dd>
<dd<?php if(is_page('whereabouts')) {echo ' class="current_page_item"';}?>><a href="/contact/whereabouts/">Whereabouts</a></dd>
<dd<?php if(is_page('social-networking')) {echo ' class="current_page_item"';}?>><a href="/contact/social-networking/">Social Networking</a></dd>
<dd<?php if(is_page('return-policy')) {echo ' class="current_page_item"';}?>><a href="/contact/return-policy/">Return Policy</a></dd>
</dl>
</div>

<a href="#" class="close"><img src="<?php bloginfo('template_url'); ?>/img/close.gif" alt="Close" /></a>
<div id="main">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
</div>
</div>

<?php get_footer(); ?>
<?php }
/* end CONTACT */
else { ?>
<?php get_header(); ?>

<div id="content">

<div id="sidenav">
<dl>
<dt>About</dt>
<dd<?php if(is_page('modular-design-concept')) {echo ' class="current_page_item"';} ?>><a href="/about/modular-design-concept/">Modular Design Concept</a></dd>
<dd<?php if(is_page('bio')) {echo ' class="current_page_item"';} ?>><a href="/about/bio/">Bio</a></dd>
<dd<?php if(is_page('inspiration')) {echo ' class="current_page_item"';} ?>><a href="/about/inspiration/">Inspiration</a></dd>
<dd<?php if(is_page('press')) {echo ' class="current_page_item"';} ?>><a href="/about/press/">Press</a></dd>
<dd<?php if(is_page('studio')) {echo ' class="current_page_item"';} ?>><a href="/about/studio/">Studio</a></dd>
</dl>
</div>

<a href="#" class="close"><img src="<?php bloginfo('template_url'); ?>/img/close.gif" alt="Close" /></a>
<div id="main">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div>

<?php endwhile;endif; ?>
</div>
</div>

<?php get_footer(); ?>
<?php } ?>