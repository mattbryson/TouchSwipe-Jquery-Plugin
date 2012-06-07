<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipeLeft:swipeLeft,
				threshold:0
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
			});
		
			//Swipe handlers.
			//The only arg passed is the original touch event object			
			var count=0;
			function swipeLeft(event)
			{
				$("#test").text("You swiped " + direction + " " + ++count + " times ");
			}
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>events: swipeLeft, swipeRight, swipeUp, swipeDown, swipe</h4>
		<p>By using just one handler <i>swipeLeft</i> you can detect ONLY left swipes. There are handlers for each direction, as well as the generic <i>swipe</i> handler.</p>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">I only swipe left</div>
		
		<?php  echo get_pagination();?>
	
<?php include "partials/footer.php" ?>