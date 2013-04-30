<?php
$blog_base_url = home_url();
if(is_page('about')) {wp_redirect($blog_base_url . '/about/bio/'); exit;}
elseif(is_page('information')) {wp_redirect($blog_base_url . '/information/contact/'); exit;}
?>
<?php $slug = basename(get_permalink()); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="Description" content="" />
<meta name="Keywords" content="gail travis, knitwear, sweaters, fashion design, architecture, felting, versatility, clothing design, womens sweaters, beacon NY, convertible, pop up shop" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="ImageToolbar" content="false" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>?080811" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/domWindow.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?> id="<?php if(is_home()) {echo "home";} elseif(is_page('lookbook') || $post->post_parent == 2) {echo "lookbook";} elseif(get_post($post->post_parent)->post_parent == 2) {echo "look";} elseif(is_page('shop') || $post->post_parent == 8 || $post->post_parent == 954 || is_page('felt') || is_page('phrame')) {echo "shop";} elseif(get_post($post->post_parent)->post_parent == 954 || $post->post_parent == 956 || $post->post_parent == 958) {echo "shop_look";} elseif(is_page('about') || $post->post_parent == 10) {echo "about";} elseif(is_page('events') || $post->post_parent == 12) {echo "events";} elseif(is_page('information') || $post->post_parent == 14) {echo "information";} else{echo $slug;} ?>">
<div id="page">

<?php if(is_page('about') || $post->post_parent == 10) { ?>
<div id="header">
<a href="javascript:parent.$('#DOMWindow').closeDOMWindow();" id="close">Close</a>

<div id="nav">
<ul>
<?php wp_list_pages('title_li=&sort_order=desc&child_of=10&depth=1'); ?>
</ul>
</div>
</div>
<?php } elseif(is_page('events')) { ?>
<div id="header">
<a href="javascript:parent.$('#DOMWindow').closeDOMWindow();" id="close">Close</a>
</div>
<?php } elseif(is_page('information') || $post->post_parent == 14) { ?>
<div id="header">
<a href="javascript:parent.$('#DOMWindow').closeDOMWindow();" id="close">Close</a>

<div id="nav">
<ul>
<?php wp_list_pages('title_li=&sort_order=desc&child_of=14&depth=1'); ?>
</ul>
</div>
</div>
<?php } else { ?>
<div id="header">
<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>

<div id="nav">
<div class="none"><a href="#content" title="Skip to content">Skip to content</a></div>
<?php wp_nav_menu(array('container' => 'none','theme_location' => 'lookbook-shop' )); ?>
<ul id="menu-secondary-nav">
<li><a href="<?php bloginfo('url'); ?>/about/" class="about-section">About</a></li>
<li><a href="<?php bloginfo('url'); ?>/events/" class="events-section">Events</a></li>
<li><a href="<?php bloginfo('url'); ?>/information/" class="information-section">Information</a></li>
</ul>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
" />
<input type="image" src="<?php bloginfo('template_url'); ?>/img/view-cart.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" />
</form>
</div>
</div>

<?php if(is_page('lookbook') || $post->post_parent == 2 || get_post($post->post_parent)->post_parent == 2) { ?>
<div id="subnav">
<ul>
<?php wp_list_pages('title_li=&sort_order=desc&child_of=2&depth=1'); ?>
</ul>
</div>
<?php } elseif(is_page('shop') || $post->post_parent == 8 || get_post($post->post_parent)->post_parent == 8 || get_post($post->post_parent)->post_parent == 954) { ?>
<div id="subnav">
<ul>
<li><a href="<?php bloginfo('url'); ?>/shop/nit/" <?php if(is_page('nit') || $post->post_parent == 954 || get_post($post->post_parent)->post_parent == 954) {echo ' class="current_page_item"';} ?>>nit</a><span>&nbsp;&nbsp;&nbsp; >&nbsp;&nbsp;&nbsp; <a href="<?php bloginfo('url'); ?>/shop/nit/sweaters/"<?php if(is_page('sweaters') || $post->post_parent == 962) {echo ' class="current_page_item"';} ?>>sweaters</a>&nbsp;&nbsp;&nbsp; /&nbsp;&nbsp;&nbsp; <a href="<?php bloginfo('url'); ?>/shop/nit/accessories/"<?php if(is_page('accessories') || $post->post_parent == 964) {echo ' class="current_page_item"';} ?>>accessories</span></a></li>
<li<?php if(is_page('felt') || $post->post_parent == 956) {echo ' class="current_page_item"';} ?>><a href="<?php bloginfo('url'); ?>/shop/felt/">felt</a></li>
<li<?php if(is_page('phrame') || $post->post_parent == 958) {echo ' class="current_page_item"';} ?>><a href="<?php bloginfo('url'); ?>/shop/phrame/">phrame</a></li>
</ul>
</div>
<?php } ?>

<hr />
<?php } ?>
