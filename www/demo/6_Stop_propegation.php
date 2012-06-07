<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipeStatus:swipeStatus
			};
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
			});
		
			//Swipe handlers.
			//The only arg passed is the original touch event object			
			function swipeStatus(event, phase, direction, distance)
			{
				var str = "";
			
				if (phase=="start")
					str="Started";
				
				if (phase=="move")
					str="You have moved " + distance +" pixels, past 200 and the handler will fire";
				
				if (phase=="end")
					str="Handler fired, you swiped " + direction;
					
				if (phase=="cancel")
					str=phase + " handler fired";
				
				$("#test").text(str);
				

				
				//This will cancel the current swipe
				return false;
			}
			
			
		</script>

		<?php include "partials/title.php" ?>
		<h4>events: swipeStatus</h4>
		<p>In your event handlers, you can return a value of false if you want to manually cancel the swipe. This will trigger the 'cancel' event.</p>
		
		<?php  echo get_pagination();?>
		<div id="test" class="box">Swipe will start, but then cancel as the event handler returns false</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>