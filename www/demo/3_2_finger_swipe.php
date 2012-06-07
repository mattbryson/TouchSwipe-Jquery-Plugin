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
			//The only arg passed is the original touch event object			
			function swipe(event)
			{
				$("#test").text("You swiped " + direction);
			}
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>property: fingers</h4>
		<p>By setting the number of fingers, you can detect 2 finger swipe.</p>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me with 2 fingers</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
