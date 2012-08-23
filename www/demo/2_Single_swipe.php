<?php include "partials/header.php" ?>
		<script>
			$(function()
			{			
				//Keep track of how many swipes
				var count=0;
				
				//Enable swiping...
				$("#test").swipe( {
					//Generic swipe handler for all directions
					swipeLeft:function(event, direction, distance, duration, fingerCount) {
						$(this).text("You swiped " + direction + " " + ++count + " times " );	
					},
					//Default is 75px, set to 0 for demo so any distance triggers swipe
					threshold:0
				});
			});
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>events: swipeLeft, swipeRight, swipeUp, swipeDown, swipe</h4>
		<p>By using just one handler <i>swipeLeft</i> you can detect ONLY left swipes. There are handlers for each direction, as well as the generic <i>swipe</i> handler.</p>
		<pre class="prettyprint lang-js">
var count=0;

$("#test").swipe( {
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
    $(this).text("You swiped " + direction + " " + ++count + " times " );	
  },
  threshold:0
});
		</pre>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">I only swipe left</div>

		<?php  echo get_pagination();?>
	
<?php include "partials/footer.php" ?>