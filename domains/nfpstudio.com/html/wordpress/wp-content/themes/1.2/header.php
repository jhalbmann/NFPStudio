<?php
	$blog_base_url = home_url();
	if(is_page('about')) {wp_redirect($blog_base_url . '/about/bio/'); exit;}
	$slug = basename(get_permalink());
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="ImageToolbar" content="false" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<title><?php
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
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>?082712" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/reset.css?082712" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/fonts.css?082712" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/layout.css?100812" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/images.css?082712" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/formalize.css" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
		<script src="<?php bloginfo('template_url'); ?>/js/ddpowerzoomer.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.formalize.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/init.js?31" type="text/javascript"></script>
	</head>
	<body <?php body_class(); ?> id="<?php if(is_home()) {echo "home";} elseif(is_page('instructions') || $post->post_parent == 2744) {echo "instructions";} elseif(is_page('lookbook') || $post->post_parent == 2) {echo "lookbook";} elseif(get_post($post->post_parent)->post_parent == 2) {echo "look";} elseif(is_page('shop') || $post->post_parent == 8 || $post->post_parent == 954 || is_page('felt') || is_page('phrame')) {echo "shop";} elseif(get_post($post->post_parent)->post_parent == 954 || $post->post_parent == 956 || $post->post_parent == 958) {echo "shop_look";} elseif(is_page('about') || $post->post_parent == 10) {echo "about";} elseif(is_page('events') || $post->post_parent == 12) {echo "events";} elseif(is_page('contact') || $post->post_parent == 296) {echo "contact";} elseif(in_category('process')) {echo 'process';} else{echo $slug;} ?>">
		<div id="page">
			<div id="header">
				<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
<?php if(is_page('process') || is_category('process') || is_single()) {} else { ?>
				<div id="nav">
					<div class="none"><a href="#content" title="Skip to content">Skip to content</a></div>
					<?php wp_nav_menu(array('container' => 'none','theme_location' => 'lookbook-shop' )); ?>
					<ul id="menu-secondary-nav">
						<li<?php if(is_page('instructions') || $post->post_parent == 2744) {echo ' class="current_page_item"';} ?>><a href="<?php bloginfo('url'); ?>/instructions/">Instructions</a></li>
						<li<?php if(is_page('about') || $post->post_parent == 10) {echo ' class="current_page_item"';} ?>><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
						<li<?php if(is_page('events') || $post->post_parent == 12) {echo ' class="current_page_item"';} ?>><a href="<?php bloginfo('url'); ?>/events/">Events</a></li>
						<li<?php if(is_page('contact') || $post->post_parent == 296) {echo ' class="current_page_item"';} ?>><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
						<li<?php if(is_page('process') || is_category('process') || is_single()) {echo ' class="current_page_item"';} ?>><a href="<?php bloginfo('url'); ?>/process/">Process</a></li>
					</ul>
					<?php include(TEMPLATEPATH . '/paypal.php'); ?>
				</div>
<?php } ?>
			</div>
			<?php if(is_page('lookbook') || $post->post_parent == 2 || get_post($post->post_parent)->post_parent == 2) { ?>
			<div id="subnav">
				<ul>
					<?php wp_list_pages('title_li=&sort_order=desc&child_of=2&depth=1'); ?>
				</ul>
				<span class="clear"></span>
			</div>
			<?php } elseif(is_page('shop') || $post->post_parent == 8 || get_post($post->post_parent)->post_parent == 8 || get_post($post->post_parent)->post_parent == 954) { ?>
			<div id="subnav">
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/shop/nit/" <?php if(is_page('nit') || $post->post_parent == 954 || get_post($post->post_parent)->post_parent == 954) {echo ' class="current-page-item"';} ?>>nit</a><span>&nbsp;&nbsp;&nbsp; >&nbsp;&nbsp;&nbsp; <a href="<?php bloginfo('url'); ?>/shop/nit/sweaters/"<?php if(is_page('sweaters') || $post->post_parent == 962) {echo ' class="current-page-item"';} ?>>sweaters</a>&nbsp;&nbsp;&nbsp; /&nbsp;&nbsp;&nbsp; <a href="<?php bloginfo('url'); ?>/shop/nit/accessories/"<?php if(is_page('accessories') || $post->post_parent == 964) {echo ' class="current-page-item"';} ?>>accessories</span></a></li>
					<li<?php if(is_page('felt') || $post->post_parent == 956) {echo ' class="current-page-item"';} ?>><a href="<?php bloginfo('url'); ?>/shop/felt/">felt</a></li>
					<li<?php if(is_page('phrame') || $post->post_parent == 958) {echo ' class="current-page-item"';} ?>><a href="<?php bloginfo('url'); ?>/shop/phrame/">phrame</a></li>
				</ul>
			</div>
			<?php } ?>
		<hr />
