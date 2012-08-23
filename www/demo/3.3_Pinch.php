<?php
	$user_scale=true;
?>
<?php include "partials/header.php" ?>
	<script>
			
			$(function()
			{	//TODO : test tis pinch stuff, its a bit buggy on the percentage		
				
				
				$("#test").swipe( {
					pinchIn:function(event, direction, distance, duration, fingerCount)
					{
						$(this).text("You pinched in ");
					},
					pinchOut:function(event, direction, distance, duration, fingerCount)
					{
						$(this).text("You pinched out ");
					},
					pinchStatus:function(event, phase, direction, distance , duration , fingerCount, pinchZoom) {
						$(this).html("Pinch zoom " + pinchZoom + "  <br/>Distance between 2 fingers " + distance +" <br/>Direction " + direction);
					},
					fingers:2,	
					threshold:0	
				});
			});
		
			
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>events: pinchIn, pinchOut</h4>
		<p>You can also trigger pinch events, <code>pinchIn</code> will trigger when a user has completed a pinch in event, and <code>pinchOut</code> will trigger when a user has pinched out.</p>
		<pre class="prettyprint lang-js">

		</pre>	
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Pinch me</div>
		
		<?php  echo get_pagination();?>
	
<?php include "partials/footer.php" ?>