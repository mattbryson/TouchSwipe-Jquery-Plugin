<?php include "header.php" ?>
		
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
		
		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Basics 2 - single direction swipe</b>
			<br>By using just one handler <i>swipeLeft</i> you can detect ONLY left swipes. There are handlers for each direction, as well as the generic <i>swipe</i> handler.</br>
		</div>
		<br/>
		
		<a href="index.php"/>Previous</a> | <a href="basics_3.php"/>Next</a> 
		
		<div id="test">Swipe left</div>
		
		<a href="index.php"/>Previous</a> | <a href="basics_3.php"/>Next</a> 
	
<?php include "footer.php" ?>