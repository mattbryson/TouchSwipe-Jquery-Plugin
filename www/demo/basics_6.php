<?php include "header.php" ?>
		
		<!-- use the jquery.ui.ipad.js plugin to translate touch events to mouse events -->
		<script type="text/javascript" src="js/jquery.ui.ipad.js"></script>
		
		<script>
			
			
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				click:click,
				swipe:swipe,
				threshold:50
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
				
				//Assign a click handler to a child of the touchSwipe object
				//This will require the jquery.ui.ipad.js to be picked up correctly.
				$("#anotherDiv").click( countBlueClicks );
			});
			
			
			var blueCount=0;
			function countBlueClicks()
			{
				blueCount++;
				$("#anotherDiv").html("jQuery click handler fired on the blue div : you clicked the blue div "+ blueCount + " times");
			}
		
			var clickCount=0;
			function click(event, target)
			{
				clickCount++;
				$("#textText").html("You clicked " + clickCount +" times on " + $(target).attr("id"));
			}
			
			var swipeCount=0;
			function swipe(event)
			{
				swipeCount++;
				$("#textText").html("You swiped " + swipeCount + " times");
			}
			
			
		
		</script>
		
	
		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Basics 5 - Click vs Swipe</b>
			<br>You can also detect if the user simply clicks and does not swipe with the <i>click</i> handler<br/><br/>
			The click handler is passed the original event object and the target that was clicked.
			<br/><br/>
			If you use the jquery.ui.ipad.js plugin (http://code.google.com/p/jquery-ui-for-ipad-and-iphone/) you can then also pickup
			standard jQuery mouse events on children of the touchSwipe object.
		</div>
		<br/>
		
		<a href="basics_5.php"/>Previous</a> | <a href="advanced_1.php"/>Next</a> 
		
		<div id="test">
			<div id="textText">Click the purple </div><br/>
			<div id="greenSquare" style="width:100px;height:100px;background:#00FF00">Im just a child div</div>
			<div id="anotherDiv" style="width:200px;height:150px;background:#00FFFF">Im a child div with my own jQuery click handler</div>
		</div>
		
		<a href="basics_5.php"/>Previous</a> | <a href="advanced_1.php"/>Next</a> 
	
<?php include "footer.php" ?>