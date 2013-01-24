<?php include "partials/header.php" ?>
		<!-- use the jquery.ui.ipad.js plugin to translate touch events to mouse events -->
		<script type="text/javascript" src="js/jquery.ui.ipad.js"></script>
		
		<script>
			$(function() {	
				
				var swipeCount1=0;
				var swipeCount2=0;
				
				$("#test").swipe( {
						swipe:function() {
							swipeCount1++;
							$("#textText1").html("You swiped " + swipeCount1 + " times");
						},
						threshold:0
						//By default, these are all excluded :  button, input, select, textarea, a, .noSwipe
				});
				
				
				//Enable swiping...
				$("#test2").swipe( {
						swipe:function() {
							swipeCount2++;
							$("#textText2").html("You swiped " + swipeCount2 + " times");
						},
						threshold:0,
						//By default the value of $.fn.swipe.defaults.excludedElements is "button, input, select, textarea, a, .noSwipe, "
						//To replace or clear the list, re set the excludedElements array.
						//To append to it, do the following (dont forget the proceeding comma) ...
						excludedElements:$.fn.swipe.defaults.excludedElements+", #some_other_div"
				});
				
			});
		</script>
		
		<?php include "partials/title.php" ?>
		<h4>property: excludedElements Array</h4>
		<p>If you want to exclude certain child elements from triggering swipes, you can simply add a "<i>.noSwipe</i>" class to the element.  Then the element and any of its children will no longer trigger the swipe.
		<p>Also, a jQuery selector is used to exclude input elements as well as the .noSwipe elements.  By default all <i>button</i>, <i>input</i>, <i>select</i>, <i>textarea</i> and <i>a</i> elements are excluded.		
		So either add a <i>.noSwipe</i> class the element, or set your own selector in the excludedElements property.
		<pre class="prettyprint lang-js">

var swipeCount1=0;
var swipeCount2=0;

$("#test").swipe( {
  swipe:function() {
    swipeCount1++;
    $("#textText1").html("You swiped " + swipeCount1 + " times");
  },
  threshold:0
  //By default, these are all excluded :  button, input, select, textarea, a, .noSwipe
});


//Append specific elements
$("#test2").swipe( {
  swipe:function() {
    swipeCount2++;
    $("#textText2").html("You swiped " + swipeswipeCount2Count + " times");
  },
  threshold:0,
  //By default the value of $.fn.swipe.defaults.excludedElements is "button, input, select, textarea, a, .noSwipe, "
  //To replace or clear the list, re set the excludedElements array.
  //To append to it, do the following (dont forget the proceeding comma) ...
  excludedElements:$.fn.swipe.defaults.excludedElements+", #some_other_div"
});		
		</pre>
		<?php  echo get_pagination();?>
		
		<div id="test" class="box">
			<div id="textText1">Swipe me, the child elements will not trigger swipes by default</div><br/>
			<form>
				<input type="text" value="Im not swipeable" />
				<input type="button" value="Im not swipeable" />
				<textarea>Im not swipeable</textarea>
			</form> 
			
			<div id="another_div" class="box noSwipe" style="width:400px;height:100px;background:#000"><h3>Im am NOT swipeable because my class is .noSwipe</h3></div>
			
		</div>
		
		
		<div id="test2" class="box">
			<div id="textText2">Swipe me, the child elements will not trigger swipes as they have been explicitly excluded</div><br/>
			<form>
				<input type="text" value="Im not swipeable" />
				<input type="button" value="Im not swipeable" />
				<textarea>Im not swipeable</textarea>
			</form> 
			
			<div id="some_other_div" class="box" style="width:400px;height:100px;background:#000"><h3>Im am NOT swipeable because my im added to the excludedElements array</h3></div>
		</div>
		
		<?php  echo get_pagination();?>
	
<?php include "partials/footer.php" ?>