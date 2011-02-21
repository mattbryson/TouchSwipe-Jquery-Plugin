<?php global $user; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Skinkers Labs : TouchSwipe</title>
		<!-- Styles -->
		<link type="text/css" href="../css/custom-theme/jquery-ui-1.8.6.custom.css" rel="stylesheet" />	
		<link type="text/css" href="../css/common.css" rel="stylesheet" />
		<link type="text/css" href="../css/pageLayout.css" rel="stylesheet" />			
		
		<!-- scripts -->
		<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.5.custom.min.js"></script>
	
		
		
		<script type="text/javascript">
			$(function()
			{
				
				$(".button").button();
			
				$( "#experiments" ).accordion({
					collapsible: true,
					animated: true, 
					autoHeight: false,
					navigation: true,
					active:false
					
				}).width(250);

				
			});
			
			//Google analyitics
			 var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-19862780-3']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();


		</script>
		
	</head>
	<body>
	
		<div id="content">
			<div id="main">
				<!-- content shadow 	 -->
				<div class="topShadow"></div>
				<div class="leftShadow"></div>
				<div class="rightShadow"></div>
				<div class="bottomShadow"></div>	
			

				<!-- Header -->
				<div id="header">
					<div class="logo"></div>
					<!--<div class="smallLogo"></div>-->
				</div>

				<div id="bodyContent">
					
					<!-- Experiments nav -->
					<div id="experimentsBox" class="ui-widget-content ui-corner-all">
						<p class="experimentsTitle">TouchSwipe 1.1.0</p>
						<a target="new" class="button" href="http://plugins.jquery.com/content/touchswipe-110">download</a>
					</div>
					
					<!-- main copy -->
					<div id="mainCopy">
						
						<h1>TouchSwipe a jQuery plugin for touch devices.</h1>
						TouchSwipe is a jquery plugin to be used with jQuery on touch input devices such as iPad, iPhone etc.
						<br/>
						<h1>Features</h1>
						<ul>
							<li>Detects swipes in 4 directions, "up", "down", "left" and "right"</li>
							<li>Supports single finger or double finger touch events</li>
							<li>Definable threshold to determin when a gesture is actually a swipe</li>
							<li>Events triggered for swipe "start","move","end" and "cancel"</li>
							<li>End event can be triggered either on touch release, or as soon as threshold is met</li>
							<li>Allows swiping and page scrolling</li>
						</ul>
							
						<h1>Demos</h1>	
						<ul>
							<li><a href="demo/index.php" target="new"><u>Basic swipes</u></a></li>
							<li><a href="demo/basics_2.php" target="new"><u>Single swipe</u></a></li>
							<li><a href="demo/basics_3.php" target="new"><u>2 finger swipe</u></a></li>
							<li><a href="demo/basics_4.php" target="new"><u>Swipe threshold</u></a></li>
							<li><a href="demo/basics_5.php" target="new"><u>Swipe status</u></a></li>
							<li><a href="demo/advanced_1.php" target="new"><u>Trigger on end or at threshold</u></a></li>
							<li><a href="demo/advanced_2.php" target="new"><u>Swiping and Page scrolling</u></a></li>
							<li><a href="demo/image_scroll.php" target="new"><u>Image gallery Example</u></a></li>
						</ul>
						
						<h1>Options</h1>
						<dl>
						<dt><b>debug</b></dt>	
						<dd>Boolean:false If true, the default swipe handler will log to the console when triggered.</dd>

						<dt><b>fingers</b></dt>
						<dd>int:1 The number of fingers to trigger the swipe, 1 or 2.</dd>

						<dt><b>threshold</b></dt>
						<dd>int:75 The number of pixels that the user must move their finger before it is considered a swipe.</dd>

						<dt><b>swipe</b></dt>
						<dd>Funciton:null A catch all handler that is triggered for all swipe directions. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe</dd></dl></dd>

						<dt><b>swipeLeft</b></dt>	
						<dd>Funciton:null A handler that is triggered for "left" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe</dd></dl></dd>

						<dt><b>swipeRight</b></dt>	
						<dd>Funciton:null A handler that is triggered for "right" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe</dd></dl></dd>

						<dt><b>swipeUp</b></dt>	
						<dd>Funciton:null A handler that is triggered for "up" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe</dd></dl></dd>

						<dt><b>swipeDown</b></dt>	
						<dd>Funciton:null A handler that is triggered for "down" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe</dd></dl></dd>



						<dt><b>swipeStatus</b></dt>	
						<dd>Function:null A handler triggered for every phase of the swipe. <dl><dt>Handler is passed 4 arguments</dt>
						<dd>event : The original event object<br/>
						phase:The current swipe face, either "start", "move", "end" or "cancel".<br/>
						direction : The swipe direction, either "up", "down", "left " or "right".<br/>
						distance : The distance of the swipe.</dd></dl>

						<dt><b>triggerOnTouchEnd</b></dt> 	
						<dd>Boolean:true If true, the swipe events are triggered when the touch end event is received (user releases finger).  If false, it will be triggered on reaching the threshold.</dd>
						<br/>
						<dt><b>allowPageScroll</b></dt> 
						<dd>String:"auto". How the browser handles page scrolls when the user is swiping on a touchSwipe object.<dl><dt>Possible values are:</dt>
 										<dd>"auto" : all undfined swipes will cause the page to scroll in that direction.
 										<br>"none" : the page will not scroll when user swipes.
 										<br>"horizontal" : will force page to scroll on horizontal swipes.
 										<br>"vertical" : will force page to scroll on vertical swipes.</dd>
									</dd>
						
						</dl>
						
					
					</div>
					
					
					
					
				</div>
				<div id="linksBar">
						<a href="http://www.skinkers.com">Skinkers.com</a>  | <a href="http://blog.skinkers.com">Skinkers Blog</a>
					</div>
			</div>
			
		</div>
	</body>
</html>
