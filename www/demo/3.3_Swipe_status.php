<?php include "partials/header.php" ?>
		<script>
			
			$(function()
			{			
				//Enable swiping...
				$("#test").swipe( {
					swipeStatus:function(event, phase, direction, distance, duration, fingers)
					{
						var str = "<h4>Swipe Phase : " + phase + "<br/>";
						str += "Direction from inital touch: " + direction + "<br/>";
						str += "Distance from inital touch: " + distance + "<br/>";
						str += "Duration of swipe: " + duration + "<br/>";
						str += "Fingers used: " + fingers + "<br/></h4>";
										
						if (phase!="cancel" && phase!="end")
						{
							if (duration<5000)
								str +="Under maxTimeThreshold.<h3>Swipe handler will be triggered if you release at this point.</h3>"
							else
								str +="Over maxTimeThreshold. <h3>Swipe handler will be canceled if you release at this point.</h3>"
						
							if (distance<200)
								str +="Not yet reached threshold.  <h3>Swipe will be canceled if you release at this point.</h3>"
							else
								str +="Threshold reached <h3>Swipe handler will be triggered if you release at this point.</h3>"
						}
						
						if (phase=="cancel")
							str +="<br/>Handler not triggered. <br/> One or both of the thresholds was not met "
						if (phase=="end")
							str +="<br/>Handler was triggered."	
						
						$("#test").html(str);
					},
					threshold:200,
					maxTimeThreshold:5000,
					fingers:'all'
				});
			});
		</script>
		
		<?php include "partials/title.php" ?>
		<h4>event: swipeStatus</h4>
		<p>You can also get the current status of the swipe, which can be used in place of all other methods. The status reports phase, direction, distance and duration.
		Below has a 200px threshold and a 5 second time limit
		</p>
		<pre class="prettyprint lang-js">
$("#test").swipe( {
  swipeStatus:function(event, direction, distance, duration, fingerCount) {
    //Here we can check the:
    //phase : 'start', 'move', 'end', 'cancel'
    //direction : 'left', 'right', 'up', 'down'
    //distance : Distance finger is from initial touch point in px
    //duration : Length of swipe in MS 
    //fingerCount : the number of fingers used
  },
	threshold:200,
	maxTimeThreshold:5000,
	fingers:'all'
});
		</pre>
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">Swipe me</div>
		
		<?php  echo get_pagination();?>
<?php include "partials/footer.php" ?>