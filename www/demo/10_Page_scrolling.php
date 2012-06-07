<?php include "partials/header.php" ?>
		<script>
			$(function()
			{			
				//Enable swiping...
				$("#test1").swipe( { swipeLeft:swipe1, swipeRight:swipe1, allowPageScroll:"auto"} );
				$("#test2").swipe( { swipeLeft:swipe1, allowPageScroll:"none"} );
				$("#test3").swipe( { swipeLeft:swipe2, swipeRight:swipe2} );
				$("#test4").swipe( { swipeStatus:swipe2, allowPageScroll:"vertical"} );
				$("#test5").swipe( { swipeStatus:swipe2, allowPageScroll:"horizontal" } );
			});
		
			//Swipe handlers.
			function swipe1(event, direction)
			{
				var str="You have swiped " + direction;
				this.text(str);
			}
			
			function swipe2(event, phase, direction, distance)
			{
				var str=phase +" you have swiped " + distance + "px in direction:" + direction;
				this.text(str);
			}
		</script>


	
		<?php include "partials/title.php" ?>
		<h4>property: allowPageScroll</h4>
		<p>You can set how page scrolling is handled by the browser when the user is interacting with a touchSwipe object.
			<br/>There are 4 possible settings for the <i>allowPageScroll</i> option. These can be strings, or use the plugin constants in $.fn.swipe.pageScroll
				<ul>
					<li>"auto" or $.fn.swipe.pageScroll.AUTO <br/>scrolling will only occur if a user swipes in a direction for which you have NOT defined a swipe handler. E.g If only <i>swipeLeft</i> is defined, then a RIGHT, UP or DOWN swipe would cause the page to scroll.</li>
					<li>"none" or $.fn.swipe.pageScroll.NONE <br/>scrolling will never occur.</li>
					<li>"horizontal" or $.fn.swipe.pageScroll.HORIZONTAL <br/>horizontal swipes will cause the page to scroll.</li>
					<li>"vertical" or $.fn.swipe.pageScroll.VERTICAL <br/>vertical swipes will cause the page to scroll.</li>
				</ul>
				
			<br>
				NOTE: if the general <i>swipe</i> or <i>swipeStatus</i> handlers are specificed, then <i>allowPageScroll</i> will be dissabled by default, as they detect swipes in all directions.
				To use scrolling AND the <i>swipe</i> handler, set <i>allowPageScroll</i> to the direction you want the user to be able to scroll.
		</p>
		
		<?php  echo get_pagination();?>
		
		<br><br>
		<b>allowPageScroll = "auto" or $.fn.swipe.pageScroll.AUTO</b>
		<br><b>Swipe Left or Right </b>The swipe will trigger but the page will NOT scroll. 
		<br><b>Swipe Up or Down </b>The page will scroll as there is no up or down swipe handler.<br>
		<div class="box" id="test1">Swipe me</div>
		
		<br><br>
		<b>allowPageScroll = "none" or $.fn.swipe.pageScroll.NONE</b>
		<br><b>Swipe Left </b>The swipe will trigger but the page will NOT scroll. 
		<br><b>Swipe right, Up or Down </b>No swipe handler is defined, so nothihng happens and the page will NOT scroll.<br>
		<div class="box" id="test2">Swipe me</div>
		
		<br><br>
		<b>allowPageScroll = "horizontal" or $.fn.swipe.pageScroll.HORIZONTAL</b>
		<br>Swipe left and right are triggered<br>
		<div class="box" id="test3">Swipe me</div>
		
		<br><br>
		<b>allowPageScroll = "vertical" or $.fn.swipe.pageScroll.VERTICAL</b>
		<br/>
		<b>With the general <i>swipe</i> or <i>swipeStatus</i> handlers</b>
		<br>These enable all 4 directions, but here we have set <i>allowPageScroll</i> to "vertical" so the user can scroll up and down, and swipe left and right with the general <i>swipe</i> handler.<br>
		<br>Note how the vertical swipe is hit and miss. As soon as the page starts scrolling, the user is no longer swiping across the object.
		<div class="box" id="test4" >Swipe me</div>
		
		<br><br>
		<b>allowPageScroll = "vertical" or $.fn.swipe.pageScroll.HORIZONTAL</b>
		<br/>
		<b>Vertical, but WITH the general <i>swipe</i> or <i>swipeStatus</i> handlers</b>
		<br>These enable all 4 directions, but here we have set <i>allowPageScroll</i> to "vertical" so the user can scroll up and down, and swipe left and right with the general <i>swipe</i> handler.<br>
		<br>Note how the vertical swipe is hit and miss. As soon as the page starts scrolling, the user is no longer swiping across the object.
		<div class="box" id="test5" >Swipe me</div>
		
		<?php  echo get_pagination();?>

<?php include "partials/footer.php" ?>