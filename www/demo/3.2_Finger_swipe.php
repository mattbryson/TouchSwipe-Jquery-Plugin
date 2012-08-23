<?php include "partials/header.php" ?>
		<script>
			
			$("#test").swipe( {
			  swipeLeft:function(event, direction, distance, duration, fingerCount) {
				$("#test").text("You swiped " + direction + " with " + fingerCount + " fingers");
			  },
			  threshold:0,
			  fingers:2
			});
		
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>property: fingers</h4>
		<p>By setting the number of fingers to 2, you can detect ONLY 2 finger swipes, likewise for 3 fingers.</p>
		<pre class="prettyprint lang-js">
$("#test").swipe( {
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
    $("#test").text("You swiped " + direction + " with " + fingerCount + " fingers");
  },
  threshold:0,
  fingers:2
});
		</pre>
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me with 2 fingers</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
