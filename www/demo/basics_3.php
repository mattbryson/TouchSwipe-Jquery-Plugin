<?php include "header.php" ?>
		
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
		
	
		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Basics 3 - 1 or 2 finger swipe</b>
			<br>By setting the number of fingers, you can detect 2 finger swipe.</br>
		</div>
		<br/>
		
		<a href="basics_2.php"/>Previous</a> | <a href="basics_4.php"/>Next</a> 
		
		<div id="test">Swipe me with 2 fngers</div>
		
		<a href="basics_2.php"/>Previous</a> | <a href="basics_4.php"/>Next</a> 

		
<?php include "footer.php" ?>
