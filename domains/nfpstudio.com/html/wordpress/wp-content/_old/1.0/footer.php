<div style="clear:both;"></div>
</div>

<?php if(!(is_page('about') || $post->post_parent == 10 || is_page('events') || is_page('contact') || $post->post_parent == 14)) { ?>
<script type="text/javascript"> 
/* CLOSE WINDOW */
$('.about-section').click(function(){ 
$.closeDOMWindow();
});

$('.events-section').click(function(){ 
$.closeDOMWindow();
});

$('.information-section').click(function(){ 
$.closeDOMWindow();
});
/* end CLOSE WINDOW */

/* OPEN WINDOW */
$('.about-section').openDOMWindow({ 
eventType:'click', 
overlay:0,
loader:0, 
windowSource:'iframe', 
borderSize:0,
windowPadding:0, 
positionType:'absolute', 
positionTop:68,
positionLeft:480, 
width:363, 
height:670
}); 

$('.events-section').openDOMWindow({ 
eventType:'click', 
overlay:0,
loader:0, 
windowSource:'iframe', 
borderSize:0,
windowPadding:0, 
positionType:'absolute', 
positionTop:68,
positionLeft:572, 
width:271, 
height:400
}); 

$('.information-section').openDOMWindow({ 
eventType:'click', 
overlay:0,
loader:0, 
windowSource:'iframe', 
borderSize:0,
windowPadding:0, 
positionType:'absolute', 
positionTop:68,
positionLeft:664, 
width:271, 
height:378
}); 
/* end OPEN WINDOW */
</script>
<?php } ?>

<script type="text/javascript">
$(document).ready(function() {
	$(".row img").fadeTo(0, 0.6);

	$(".row a").hover(
		function(){
			$(this).children("img").fadeTo('fast', 1);
		},
		function(){
			$(this).children("img").fadeTo('fast', 0.6);
		}
	);

});
</script>

<?php wp_footer(); ?>
</body>
</html>
