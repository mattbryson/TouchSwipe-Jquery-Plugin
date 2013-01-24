<?php include "partials/header.php" ?>
		<script>
			$(function()
			{			
				$("#test").swipe( {
				  swipe:function(event, direction, distance, duration, fingerCount) {
					$("#test").text("You swiped " + direction + " with " + fingerCount + " fingers");
				  },
				  threshold:0,
				  fingers:'all'
				});
			});
		</script>
		
		
		<?php include "partials/title.php" ?>
		<h4>property: fingers</h4>
		<p>By setting the number of fingers to 'all', any number of fingers will trigger the swipe.</p>
		
		<pre class="prettyprint lang-js">
$("#test").swipe( {
  swipe:function(event, direction, distance, duration, fingerCount) {
    $("#test").text("You swiped " + direction + " with " + fingerCount + " fingers");
  },
  threshold:0,
  fingers:'all'
});
		</pre>
		
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me with different combinations of fingers</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>
