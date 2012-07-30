<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipe:swipe,
				threshold:0,
				fingers:2
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
			});
		
			//Swipe handlers.
			function swipe(event,direction, distance, duration, fingerCount)
			{
				$("#test").text("You swiped " + direction);
			}
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>property: fingers</h4>
		<p>By setting the number of fingers to 2, you can detect ONLY 2 finger swipes, likewise for 3 fingers.</p>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me with 2 fingers</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
