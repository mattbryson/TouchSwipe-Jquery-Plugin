<?php include "partials/header.php" ?>
		<script>
			//Assign handlers to the simple direction handlers.
			var swipeOptions=
			{
				swipeStatus:swipeStatus,
				triggerOnTouchEnd:false,
				threshold:200
			};
			
			var swipeOptions2=
			{
				swipeStatus:swipeStatus2,
				triggerOnTouchEnd:false,
				maxTimeThreshold:5000,
				threshold:null
			}
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( swipeOptions );
				$("#test2").swipe( swipeOptions2 );
			});
		
			//Swipe handlers.
			//The only arg passed is the original touch event object			
			function swipeStatus(event, phase, direction, distance)
			{
				var str = "";
			
				if (phase=="move")
					str="You have moved " + distance +" pixels, past 200 and the handler will fire";
				
				if (phase=="end")
					str="Handler fired, you swiped " + direction;
				
				$("#test").text(str);
			}
			
			function swipeStatus2(event, phase, direction, distance, duration)
			{
				var str = "";
			
				if (phase=="move")
					str="You have moved for " + duration +" ms, If you go over " + swipeOptions2.maxTimeThreshold +" the swipe will cancel";
				
				if (phase=="cancel")
					str="You took to long and the swipe was canceled";
				
				
				if (phase=="end")
					str="Handler fired, you swiped " + direction;
				
				$("#test2").text(str);
			}
		</script>

		<?php include "partials/title.php" ?>
		<h4>property: triggerOnTouchEnd</h4>
		<p>You can trigger the swipe end handler either when the user releases (default) or when the user has swiped the distance / time of the thresholds (but is still swiping).</br>
			Swipe below, and the swipeEnd handler will trigger when you have swiped 200 px.</p>
		
		<?php  echo get_pagination();?>
		<div id="test" class="box">Swipe over 200px and the swipe event will fire</div>
		
		
		<div id="test2" class="box">Swipe in under 5000ms and the swipe event will fire</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>