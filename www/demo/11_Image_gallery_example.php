<?php include "partials/header.php" ?>
		<style>
			#content
			{
				height:340px;
				width:500px;
				overflow:hidden;
				position:relative;
				
				border : 1px solid black;
			}
			
			#imgs 
			{
				float:left;
				display:inline;
				
				-webkit-transition-property: -webkit-transform;
				-webkit-transition-duration: 0.5s;
				-webkit-transition-timing-function: ease-out;
				padding:0px;
				margin:0px;
				
				width:1510px;
				
				/*apply a transfor to kick in the hardware acceleration.  Without this, the first time we add the transform you get odd rendering of the divs (half missing) */
				-webkit-transform: translate3d(0px,0px,0px); 
			}
	
	
			#imgs img
			{
				padding:0px;
				margin:0px;
				
				
				width:500px;
				height:340px;
				
				/*apply a transfor to kick in the hardware acceleration.  Without this, the first time we add the transform you get odd rendering of the divs (half missing) */
				-webkit-transform: translate3d(0px,0px,0px); 
			}
		</style>
		
		<script>
			var IMG_WIDTH = 500;
			var currentImg=0;
			var maxImages=3;
			var speed=500;
			
			var imgs;
				
			var swipeOptions=
			{
				triggerOnTouchEnd : true,	
				swipeStatus : swipeStatus,
				allowPageScroll:"vertical",
				threshold:75			
				}
			
			$(function()
			{				
				imgs = $("#imgs");
				imgs.swipe( swipeOptions );
			});
		
				
			/**
			* Catch each phase of the swipe.
			* move : we drag the div.
			* cancel : we animate back to where we were
			* end : we animate to the next image
			*/			
			function swipeStatus(event, phase, direction, distance)
			{
				//If we are moving before swipe, and we are going Lor R in X mode, or U or D in Y mode then drag.
				if( phase=="move" && (direction=="left" || direction=="right") )
				{
					var duration=0;
					
					if (direction == "left")
						scrollImages((IMG_WIDTH * currentImg) + distance, duration);
					
					else if (direction == "right")
						scrollImages((IMG_WIDTH * currentImg) - distance, duration);
					
				}
				
				else if ( phase == "cancel")
				{
					scrollImages(IMG_WIDTH * currentImg, speed);
				}
				
				else if ( phase =="end" )
				{
					if (direction == "right")
						previousImage()
					else if (direction == "left")			
						nextImage()
				}
				
			
			}
					
			
		
			function previousImage()
			{
				currentImg = Math.max(currentImg-1, 0);
				scrollImages( IMG_WIDTH * currentImg, speed);
			}
		
			function nextImage()
			{
				currentImg = Math.min(currentImg+1, maxImages-1);
				scrollImages( IMG_WIDTH * currentImg, speed);
			}
				
			/**
			* Manuallt update the position of the imgs on drag
			*/
			function scrollImages(distance, duration)
			{
				imgs.css("-webkit-transition-duration", (duration/1000).toFixed(1) + "s");
				
				//inverse the number we set in the css
				var value = (distance<0 ? "" : "-") + Math.abs(distance).toString();
				
				imgs.css("-webkit-transform", "translate3d("+value +"px,0px,0px)");
			}
		</script>
		
		
	
		<?php include "partials/title.php" ?>
		<p/>Swipe the images below left and right. Swipe up and down will scroll the page. Uses HTML5 CSS to animate.</p>
		
		<br/>
		<?php  echo get_pagination();?>
		
		<div id="content">
			<div id="imgs">
				<img src="https://lh4.googleusercontent.com/_D9-nzLCi9qU/TNQ2hYNqQEI/AAAAAAAADtI/TcqCdc6N26A/s500/twick_pool_stairs~.jpg" />
				<img src="https://lh6.googleusercontent.com/_D9-nzLCi9qU/TNQ2gdP8JYI/AAAAAAAADtI/NU2WBbaXpgU/s500/twick_pool_stairsAndChanginRoom~.jpg" />
				<img src="https://lh4.googleusercontent.com/_D9-nzLCi9qU/TNQ2UWpqLgI/AAAAAAAADtI/-OG4z6RxHwA/s500/twick_pool_hall~.jpg" />
			</div>
		</div>
		
		<?php  echo get_pagination();?>
			
<?php include "partials/footer.php" ?>
