<?php include "partials/header.php" ?>
		<script>
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( {
					swipeStatus:function(event, phase, direction, distance)
					{
						var str = "";
					
						if (phase=="move")
							str="You have moved " + distance +" pixels, past 200 and the handler will fire";
						
						if (phase=="end")
							str="Handler fired, you swiped " + direction;
						
						$(this).text(str);
					},
					triggerOnTouchEnd:false,
					threshold:200
				});
				
				
				$("#test2").swipe( {
					swipeStatus:function(event, phase, direction, distance, duration)
					{
						var str = "";
					
						if (phase=="move")
							str="You have moved for " + duration +" ms, If you go over " + swipeOptions2.maxTimeThreshold +" the swipe will cancel";
						
						if (phase=="cancel")
							str="You took to long and the swipe was canceled";
						
						
						if (phase=="end")
							str="Handler fired, you swiped " + direction;
						
						$(this).text(str);
					},
					triggerOnTouchEnd:false,
					maxTimeThreshold:5000,
					threshold:null
				});
			});
		</script>

		<?php include "partials/title.php" ?>
		<h4>property: triggerOnTouchEnd</h4>
		<p>You can trigger the swipe end handler either when the user releases (default) or when the user has swiped the distance / time of the thresholds (but is still swiping).</br>
			Swipe below, and the swipeEnd handler will trigger when you have swiped 200 px.</p>
	<pre class="prettyprint lang-js">
$("#test").swipe( {
  swipeStatus:function(event, phase, direction, distance, fingerCount) {
    var str = "";

    if (phase=="move")
      str="You have moved " + distance +" pixels, past 200 and the handler will fire";

    if (phase=="end")
      str="Handler fired, you swiped " + direction;

    $(this).text(str);
  },
  triggerOnTouchEnd:false,
  threshold:200
});
		</pre>		
		<?php  echo get_pagination();?>
		<div id="test" class="box">Swipe over 200px and the swipe event will fire</div>
		
	<pre class="prettyprint lang-js">
$("#test2").swipe( {
  swipeStatus:function(event, phase, direction, distance, duration, fingerCount) {
    var str = "";

    if (phase=="move")
    str="You have moved for " + duration +" ms, If you go over " + swipeOptions2.maxTimeThreshold +" the swipe will cancel";

    if (phase=="cancel")
      str="You took to long and the swipe was canceled";


    if (phase=="end")
      str="Handler fired, you swiped " + direction;

    $(this).text(str);
  },
  triggerOnTouchEnd:false,
  maxTimeThreshold:5000,
  threshold:null
});
		</pre>
		<?php  echo get_pagination();?>		
		<div id="test2" class="box">Swipe in under 5000ms and the swipe event will fire</div>
			
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>