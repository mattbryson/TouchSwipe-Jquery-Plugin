<?php include "header.php" ?>
		
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
		

		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Basics 1 - swipe</b>
			<br>By using the <i>swipe</i> handler, you can detect all 4 directions, or use the individual methods <i>swipeLeft</i>, <i>swipeRight</i>, <i>swipeUp</i>, <i>swipeDown</i></br>
		</div>
		<br/>
		<a href="basics_2.php"/>Next</a>
		
		<div id="test">Swipe me</div>
		
		<a href="basics_2.php"/>Next</a>
		
		
<?php include "footer.php" ?>
