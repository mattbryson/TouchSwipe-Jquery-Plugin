<?php include "partials/header.php" ?>
		<!-- use the jquery.ui.ipad.js plugin to translate touch events to mouse events -->
		<script type="text/javascript" src="js/jquery.ui.ipad.js"></script>
		
		<script>
			$(function() {	
				
				var clickCount=0;
				var swipeCount=0;
				var blueCount=0;
					
				//Enable swiping...
				$("#test").swipe( {
						click:function(event, target) {
							clickCount++;
							$("#textText").html("You clicked " + clickCount +" times on " + $(target).attr("id"));
						},
						swipe:function() {
							swipeCount++;
							$("#textText").html("You swiped " + swipeCount + " times");
						},
						threshold:50
				});
				
				//Assign a click handler to a child of the touchSwipe object
				//This will require the jquery.ui.ipad.js to be picked up correctly.
				$("#another_div").click( function(){
						blueCount++;
						$("#another_div").html("<h3 id='div text'>jQuery click handler fired on the black div : you clicked the black div "+ blueCount + " times</h3>");
				});
				
				
			});
		</script>
		
		<?php include "partials/title.php" ?>
		<h4>event: click, swipe</h4>
		<p>You can also detect if the user simply clicks and does not swipe with the <i>click</i> handler<br/><br/>
			The click handler is passed the original event object and the target that was clicked.
			<br/><br/>
			If you use the jquery.ui.ipad.js plugin (http://code.google.com/p/jquery-ui-for-ipad-and-iphone/) you can then also pickup
			standard jQuery mouse events on children of the touchSwipe object.</p>
		<pre class="prettyprint lang-js">
var clickCount=0;
var swipeCount=0;
var blueCount=0;

$("#test").swipe( {
  click:function(event, target){
    clickCount++;
    $(this).html("You clicked " + clickCount +" times on " + $(target).attr("id"));
  },
  swipe:function(){
    swipeCount++;
    $(this).html("You swiped " + swipeCount + " times");
  },
  threshold:50
}
		</pre>
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">
			<div id="textText">Swipe or Click me</div><br/>
			<div id="a_div" class="box" style="width:150px;height:50px;background:#666"><h3>Im just a child div</h3></div>
			<div id="another_div" class="box" style="width:200px;height:100px;background:#000"><h3>Im a child div with my own jQuery click handler</h3></div>
		</div>
		
		<?php  echo get_pagination();?>
	
<?php include "partials/footer.php" ?>