<?php include "partials/header.php" ?>
		<script>

			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( {
					swipeStatus:function(event, phase, direction, distance, fingerCount) {
						var str = "";
					
						if (phase=="start")
							str="Started";
						
						if (phase=="move")
							str="You have moved " + distance +" pixels, past 200 and the handler will fire";
						
						if (phase=="end")
							str="Handler fired, you swiped " + direction;
							
						if (phase=="cancel")
							str="cancel handler fired";
						
						$(this).text(str);
					
						//This will cancel the current swipe and immediately re run this handler with a cancel event
						return false;
					}
				});
			});
			
			
		</script>

		<?php include "partials/title.php" ?>
		<h4>events: swipeStatus</h4>
		<p>In your event handlers, you can return a value of false if you want to manually cancel the swipe. This will trigger the 'cancel' event.</p>
			<pre class="prettyprint lang-js">
$("#test").swipe( {
  swipeStatus:function(event, phase, direction, distance, fingerCount) {
    //This will cancel the current swipe
    return false;
  }
});
		</pre>
		<?php  echo get_pagination();?>
		<div id="test" class="box">Swipe will start, but then cancel as the event handler returns false</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>