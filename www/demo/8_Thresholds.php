<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipe:swipe,
				swipeStatus:swipeStatus,
				threshold:200
			}
			
			var swipeOptions2=
			{
				swipe:swipe2,
				swipeStatus:swipeStatus2,
				maxTimeThreshold:1000,
				threshold:null,
				triggerOnTouchEnd:false
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
				$("#test2").swipe( swipeOptions2 );
			});
		
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
			
			function swipe2(event, direction)
			{
				$("#test2").text("You swiped " + direction );
			}
			
			function swipeStatus2(event, phase)
			{
				if (phase=="cancel")
				{
					$("#test2").text("Your swipe was too slow ");
				}
			}
			
		</script>
		
		<?php include "partials/title.php" ?>
		<h4>property: threshold</h4>
		<p>By setting the threshold you can set how far the user must swipe before it is considered a swipe. <br/>Swipe at least 200px</p>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me with for at least 200 px</div>
		
		<h4>property: maxTimeThreshold<h4>
		<p>By setting the maxTimeThreshold you can set the maximum time the user has to complete the swipe. A swipe LONGER than this is cancelled. This can be useful for ignoring long slow swipes. <br/>Swipe in under 500ms</p>
		
		<div id="test2" class='box'>Swipe me within 1000 ms</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
