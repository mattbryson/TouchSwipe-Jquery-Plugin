<?php
	$user_scale=true;
?>
<?php include "partials/header.php" ?>
	<script>
			
			$(function()
			{			
				$("#test").swipe( {
					swipeLeft:function(event, direction, distance, duration, fingerCount)
					{
						$(this).text("You swiped " + direction );
					},
					fingers:1,	
					threshold:0	
				});
			});
		
			
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>property: fingers</h4>
		<p>If just one finger is set for swipes, at the meta tag enables user-scaling, then page zooms will bubble up and trigger.</p>
		<pre class="prettyprint lang-html">
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/&gt;</pre>	

<br/>
		<pre class="prettyprint lang-js">
$("#test").swipe( {
  swipeLeft:function(event, direction, distance, duration, fingerCount)
  {
    $(this).text("You swiped " + direction );
  },
  fingers:1,	
  threshold:0	
});
		</pre>	
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">I only swipe left, but you can pinch zoom me as I only capture 1 finger</div>
		
		<?php  echo get_pagination();?>
	
<?php include "partials/footer.php" ?>