<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipe:swipe,
				threshold:0,
				fingers:'all'
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
			});
		
			//Swipe handlers.
			//The only arg passed is the original touch event object			
			function swipe(event, direction, distance, duration, fingerCount)
			{
				$("#test").text("You swiped " + direction + " with " + fingerCount + " fingers");
			}
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>property: fingers</h4>
		<p>By setting the number of fingers to 'all', any number of fingers will trigger the swipe.</p>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me with different combinations of fingers</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
