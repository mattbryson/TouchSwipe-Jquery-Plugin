<?php include "partials/header.php" ?>
		<script>
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( {
					//Generic swipe handler for all directions
					swipe:function(event, direction, distance, duration, fingerCount) {
						$(this).text("You swiped " + direction );	
					},
					//Default is 75px, set to 0 for demo so any distance triggers swipe
					threshold:0
				});
			});
		
			
		</script>
		
		<?php include "partials/title.php" ?>
		<h4>event: swipe</h4>
		<p>By using the <i>swipe</i> handler, you can detect all 4 directions, or use the individual methods <i>swipeLeft</i>, <i>swipeRight</i>, <i>swipeUp</i>, <i>swipeDown</i></p>
		<pre class="prettyprint">
$("#test").swipe({
  swipe:function(event, direction, distance, duration, fingerCount) {
    $(this).text("You swiped " + direction );
  }
});
		</pre>
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
