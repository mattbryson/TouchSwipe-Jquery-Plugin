<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipe:swipe,
				threshold:0
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
			});
		
			//Swipe handlers.
			//The only arg passed is the original touch event object			
			function swipe(event, direction)
			{
				$("#test").text("You swiped " + direction );
			}
		</script>
		
		<?php include "partials/title.php" ?>
		<h4>event: swipe</h4>
		<p>By using the <i>swipe</i> handler, you can detect all 4 directions, or use the individual methods <i>swipeLeft</i>, <i>swipeRight</i>, <i>swipeUp</i>, <i>swipeDown</i></p>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
