<?php include "header.php" ?>
		
		<script>
			
			
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipe:swipe,
				
				swipeStatus:swipeStatus,
				
				threshold:200
				

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
				$("#test").text("You swiped " + direction);
			}
			
			
			
			function swipeStatus(event, phase)
			{
				if (phase=="cancel")
				{
					$("#test").text("You didnt swipe far enough ");
				}
			}
			
			
			
		
		</script>
		

		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Basics 4 - threshold</b>
			<br>By setting the threshold you can set how far the user must swipe before it is considered a swipe. <br/>Swipe at least 200px</br>
		</div>
		<br/>
		
		<a href="basics_3.php"/>Previous</a> | <a href="basics_5.php"/>Next</a> 
		
		<div id="test">Swipe me with for at least 200 px</div>
		
		<a href="basics_3.php"/>Previous</a> | <a href="basics_5.php"/>Next</a> 

		
<?php include "footer.php" ?>
