<?php include "header.php" ?>
		
		<script>
			
			
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipeStatus:swipeStatus,
				triggerOnTouchEnd:false,
				threshold:200
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
			});
		
			//Swipe handlers.
			//The only arg passed is the original touch event object			
				
				
			function swipeStatus(event, phase, direction, distance)
			{
				
				if (phase=="move")
				{
					str="You have moved " + distance +" pixels, past 200 and the handler will fire";
				}
				
				if (phase=="end")
				{
					str="You swiped " + direction;
				}
				
				
				$("#test").text(str);
			}
			
			
			
		
		</script>

		
		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Advanced 1 - When to trigger end handler</b>
			<br>You can trigger the swipe end handler either when the user releases (default) or when the user has swiped the distance of the threshold (but is still swiping).</br>
			Swipe below, and the swipeEnd handler will trigger when you have swiped 200 px.
		</div>
		<br/>
		
		<a href="basics_5.php"/>Previous</a> | <a href="advanced_2.php"/>Next</a> 
		
		<div id="test">Swipe me</div>
		
		<a href="basics_5.php"/>Previous</a> | <a href="advanced_2.php"/>Next</a> 

<?php include "footer.php" ?>