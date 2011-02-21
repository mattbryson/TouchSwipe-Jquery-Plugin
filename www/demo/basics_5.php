<?php include "header.php" ?>
		
		<script>
			
			
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
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
				
				
			function swipeStatus(event, phase, direction, distance)
			{
				var str = "Swipe Phase : " + phase + "<br/>";
				str += "Direction from inital touch: " + direction + "<br/>";
				str += "Distance from inital touch:: " + distance + "<br/>";
				
				if (distance<200)
					str +="<br/>Not yet reached threshold. <br/>Swipe will be canceled if you release at this point."
				else
					str +="<br/>Threshold reached<br/>Swipe handler will be triggered if you release at this point."
				
				if (phase=="cancel")
					str +="<br/>Handler not triggered."
				if (phase=="end")
					str +="<br/>Handler was triggered."	
				
				$("#test").html(str);
			}
			
			
			
		
		</script>
		
	
		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Basics 5 - swipe status</b>
			<br>You can also get the current status of the swipe, which can be used in place of all other methods.</br>
		</div>
		<br/>
		
		<a href="basics_4.php"/>Previous</a> | <a href="advanced_1.php"/>Next</a> 
		
		<div id="test">Swipe me</div>
		
		<a href="basics_4.php"/>Previous</a> | <a href="advanced_1.php"/>Next</a> 
	
<?php include "footer.php" ?>