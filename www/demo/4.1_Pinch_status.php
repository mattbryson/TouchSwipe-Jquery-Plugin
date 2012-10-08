<?php
	$user_scale=true;
?>
<?php include "partials/header.php" ?>
	<script>
			
			$(function()
			{			
				$("#test").swipe( {
					pinchStatus:function(event, phase, direction, distance , duration , fingerCount, pinchZoom) {
						$(this).html("Pinch zoom " + pinchZoom + "  <br/>Distance between 2 fingers " + distance +" <br/>Direction " + direction);
					},
					fingers:2,	
					threshold:0	
				});
			});
		
			
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>events: pinchStatus</h4>
		<p>You can also get the current status of a pinch, which can be used in place of the other pinch methods. The pinchStatus reports phase, direction, distance, duration, fingerCount and pinchZoom.
		<pre class="prettyprint lang-js">
$("#test").swipe( {
  pinchStatus:function(event, phase, direction, distance , duration , fingerCount, pinchZoom) {
    $(this).html("Pinch zoom " + pinchZoom + "Distance between 2 fingers " + distance +" Direction " + direction);
  },
  fingers:2,	
  threshold:0	
});
		</pre>	
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Pinch me</div>
		
		<?php  echo get_pagination();?>
	
<?php include "partials/footer.php" ?>