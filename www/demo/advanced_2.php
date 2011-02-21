<?php include "header.php" ?>
		
		<style>
		
		.test
			{
				width:500px;
				height:300px;
				background:#FF00FF;
			}
			
		body
		{
			width:500px;
		}
		</style>
		
		<script>
			
			
			$(function()
			{			
				//Enable swiping...
				$("#test1").swipe( {data:"#test1", swipeLeft:swipe1, swipeRight:swipe1, allowPageScroll:"auto"} );
				
				
				$("#test2").swipe( {data:"#test2", swipeLeft:swipe1, allowPageScroll:"none"} );
				
				$("#test3").swipe( {data:"#test3", swipeStatus:swipe2} );
				
				$("#test4").swipe( {data:"#test4", swipeStatus:swipe2, allowPageScroll:"vertical"} );
				
				
			});
		
			//Swipe handlers.
			function swipe1(event, direction)
			{
				var str="You have swiped " + direction;
				$(this.data).text(str);
			}
			
			
			function swipe2(event, phase, direction, distance)
			{
				var str=phase +" you have swiped " + distance + "px in direction:" + direction;
				$(this.data).text(str);
			}
			
			
			
		
		</script>

		
		
		<div id="info" >
			<b><a href="http://labs.skinkers.com/touchSwipe/">TouchSwipe</a> Demo - to be viewed on touch based devices</b><br/>
			<br/>
			<b>Advanced 2 - Page Scrolling</b>
			<br>You can set how page scrolling is handled by the browser when the user is interacting with a touchSwipe object.
			<br/>There are 4 possible settings for the <i>allowPageScroll</i> option;
				<ul>
					<li>auto - scrolling will only occur if a user swipes in a direction for which you have NOT defined a swipe handler. E.g If only <i>swipeLeft</i> is defined, then a RIGHT, UP or DOWN swipe would cause the page to scroll.</li>
					<li>none - scrolling will never occur.</li>
					<li>horiontal - horizontal swipes will cause the page to scroll.</li>
					<li>vertical - vertical swipes will cause the page to scroll.</li>
				</ul>
				
			<br>
				NOTE: if the general <i>swipe</i> or <i>swipeStatus</i> handlers are specificed, then <i>allowPageScroll</i> will be dissabled by default, as they detect swipes in all directions.
				To use scrolling AND the <i>swipe</i> handler, set <i>allowPageScroll</i> to the direction you want the user to be able to scroll.
			
			
		</div>
		<br/>
		
		<a href="advanced_1.php"/>Previous</a> | <a href="image_scroll.php"/>Next</a> 
		
		<br><br>
		<b>allowPageScroll = "auto"</b>
		<br><b>Swipe Left or Right </b>The swipe will trigger but the page will NOT scroll. 
		<br><b>Swipe Up or Down </b>The page will scroll as there is no up or down swipe handler.<br>
		<div class="test" id="test1">Swipe me</div>
		
		<br><br>
		<b>allowPageScroll = "none"</b>
		<br><b>Swipe Left </b>The swipe will trigger but the page will NOT scroll. 
		<br><b>Swipe right, Up or Down </b>No swipe handler is defined, so nothihng happens and the page will NOT scroll.<br>
		<div class="test" id="test2">Swipe me</div>
		
		<br><br>
		<br/><b>With the general <i>swipe</i> or <i>swipeStatus</i> handlers</b>
		<br>These enable all 4 directions, so <i>allowPageScroll</i> is dissabled by default.<br>
		<div class="test" id="test3">Swipe me</div>
		
		<br><br>
		<b>allowPageScroll = "vertical"</b>
		<br/>
		<b>With the general <i>swipe</i> or <i>swipeStatus</i> handlers</b>
		<br>These enable all 4 directions, but here we have set <i>allowPageScroll</i> to "vertical" so the user can scroll up and down, and swipe left and right with the general <i>swipe</i> handler.<br>
		<br>Note how the vertical swipe is hit and miss. As soon as the page starts scrolling, the user is no longer swiping across the object.
		<div class="test" id="test4" >Swipe me</div>
		
		<a href="advanced_1.php"/>Previous</a> | <a href="image_scroll.php"/>Next</a> 

<?php include "footer.php" ?>