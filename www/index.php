<?php global $user; ?>
<?php include "demo/partials/nav.php" ?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Skinkers Labs : TouchSwipe</title>
		<!-- Styles -->
		<link type="text/css" href="../../css/custom-theme/jquery-ui-1.8.6.custom.css" rel="stylesheet" />	
		<link type="text/css" href="../../css/common.css" rel="stylesheet" />
		<link type="text/css" href="../../css/pageLayout.css" rel="stylesheet" />			
		
		<!-- scripts -->
		<script type="text/javascript" src="../../js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="../../js/jquery-ui-1.8.5.custom.min.js"></script>
	
		
		
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
	<a href="https://github.com/mattbryson"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_white_ffffff.png" alt="Fork me on GitHub"></a>
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
						<p class="experimentsTitle">Latest TouchSwipe on github</p>
						<a target="new" class="button" href="https://github.com/mattbryson/TouchSwipe-Jquery-Plugin">download</a>
						
						
					</div>
					
					<!-- main copy -->
					<div id="mainCopy">
						
						<h1>TouchSwipe a jQuery plugin for touch devices.</h1>
						<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flabs.skinkers.com%2FtouchSwipe%2F&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
						TouchSwipe is a jquery plugin to be used with jQuery on touch input devices such as iPad, iPhone etc.
						<br/>
						<h1>Features</h1>
						<ul>
							<li>Detects swipes in 4 directions, "up", "down", "left" and "right"</li>
							<li>Supports single finger or double finger touch events</li>
							<li>Supports click events both on the touchSwipe object and its child objects</li>
							<li>Definable threshold / maxTimeThreshold to determin when a gesture is actually a swipe</li>
							<li>Events triggered for swipe "start","move","end" and "cancel"</li>
							<li>End event can be triggered either on touch release, or as soon as threshold is met</li>
							<li>Allows swiping and page scrolling</li>
							
						</ul>
							
						<h1>Demos</h1>	
						<?php echo get_main_nav(); ?>
						
						<h1>Options</h1>
						<dl>
						<dt><b>swipe</b></dt>
						<dd>Funciton:null A catch all handler that is triggered for all swipe directions. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe<br/>duration: the duration of the swipe in ms</dd></dl></dd>

						<dt><b>swipeLeft</b></dt>	
						<dd>Funciton:null A handler that is triggered for "left" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe<br/>duration: the duration of the swipe in ms</dd></dl></dd>

						<dt><b>swipeRight</b></dt>	
						<dd>Funciton:null A handler that is triggered for "right" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe<br/>duration: the duration of the swipe in ms</dd></dl></dd>

						<dt><b>swipeUp</b></dt>	
						<dd>Funciton:null A handler that is triggered for "up" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe<br/>duration: the duration of the swipe in ms</dd></dl></dd>

						<dt><b>swipeDown</b></dt>	
						<dd>Funciton:null A handler that is triggered for "down" swipes. <dl><dt>Handler is passed 3 arguments</dt><dd>event : the original event object<br/>direction: the direction of the swipe : "left", "right", "up", "down".<br/>distance: the distance of the swipe<br/>duration: the duration of the swipe in ms</dd></dl></dd>

						<dt><b>swipeStatus</b></dt>	
						<dd>Function:null A handler triggered for every phase of the swipe. <dl><dt>Handler is passed 4 arguments</dt>
						<dd>event : The original event object<br/>
						phase:The current swipe face, either "start", "move", "end" or "cancel".<br/>
						direction : The swipe direction, either "up", "down", "left " or "right".<br/>
						distance : The distance of the swipe.<br/>
						duration : The duration of the swipe.</dd></dl>

						<dt><b>click</b></dt>			
						<dd>Function:null A handler triggered when a user just clicks on the item, rather than swipes it. If they do not move, click is triggered, if they do move, it is not.
						<dl><dt>Handler is passed 2 arguments</dt></dl>
						<dd>event : The original event object<br/>
						target : the HTML Dom object that was actually clicked on, this could be a child of the touchSwipe object.
						</dd></dl>
						
						
						<dt><b>fingers</b></dt>
						<dd>int:1 The number of fingers to trigger the swipe, 1, 2 or 3. Or 'all' to trigger on any combination of fingers</dd>
						<br/>
						<dt><b>threshold</b></dt>
						<dd>int:75 The number of pixels that the user must move their finger before it is considered a swipe.</dd>
						<br/>
						<dt><b>maxTimeThreshold</b></dt>
						<dd>int:null The number of ms that the user must move their finger for it to be considered a swipe. Longer than this will not trigger a swipe</dd>
						<br/>

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

							
							
						
						