/*
 * touchSwipe - jQuery Plugin
 * http://plugins.jquery.com/project/touchSwipe
 * http://labs.skinkers.com/touchSwipe/
 *
 * Copyright (c) 2010 Matt Bryson (www.skinkers.com)
 * Licensed under the GNU GPL license
 *
 * $Date: 2010-12-01 (Wed, 12 Dec 2010) $
 * $version: 1.0.0
 * 
 * A jQuery plugin to capture left, right, up and down swipes on touch devices.
 * You can capture 2 finger or 1 finger swipes, set the threshold and define either a catch all handler, or individual direction handlers.
 * Options:
 *		debug 		Boolean		Default false. 	If true, the default swipe handler will log to the console when triggered.
 * 		fingers 	int 		Default 1. 	The number of fingers to trigger the swipe, 1 or 2.
 * 		threshold 	int  		Default 75.	The number of pixels that the user must move their finger by before it is considered a swipe.
 * 		swipe 		Funciton 	A catch all handler that is triggered for all swipe directions. Accepts 3 arguments, the original event object, the element that was swiped and the direction of the swipe : "left", "right", "up", "down".
 * 		swipeLeft	Funciton 	A handler that is triggered for "left" swipes. Accepts 2 arguments, the original event object and the element that was swiped.
 * 		swipeRight	Funciton 	A handler that is triggered for "right" swipes. Accepts 2 arguments, the original event object and the element that was swiped.
 * 		swipeUp		Funciton 	A handler that is triggered for "up" swipes. Accepts 2 arguments, the original event object and the element that was swiped.
 * 		swipeDown	Funciton 	A handler that is triggered for "down" swipes. Accepts 2 arguments, the original event object and the element that was swiped.
 *		swipeStatus Function 	A handler triggered for every phase of the swipe.Handler is passed 4 arguments: event : The original event object, phase:The current swipe face, either “start”, “move”, “end” or “cancel”. direction : The swipe direction, either “up”, “down”, “left “ or “right”.distance : The distance of the swipe.
 *		triggerOnTouchEnd Boolean Default true If true, the swipe events are triggered when the touch end event is received (user releases finger).  If false, it will be triggered on reaching the threshold, and then cancel the touch event automatically.
 *
 * This jQuery plugin will only run on devices running Mobile Webkit based browsers (iOS 2.0+, android 2.2+)
 */
(function($) 
{
	$.fn.swipe = function(options) 
	{
		// Default thresholds & swipe functions
		var defaults = {
			debug 			: false,								// Default false. 	If true, the default swipe handler will log to the console when triggered.
			fingers 		: 1,								// int - The number of fingers to trigger the swipe, 1 or 2. Default is 1.
			threshold 		: 75,								// int - The number of pixels that the user must move their finger by before it is considered a swipe. Default is 75.
			swipe 			: function(event, direction )	{ if(defaults.debug) console.log("swiped " + direction );	},	// Funciton - A catch all handler that is triggered for all swipe directions. Accepts 3 arguments, the original event object, the element that was swiped and the direction of the swipe : "left", "right", "up", "down".
			swipeLeft		: function(event)	{},		// Funciton - A handler that is triggered for "left" swipes. Accepts 1 argument, the original event object.
			swipeRight		: function(event)	{},		// Funciton - A handler that is triggered for "right" swipes. Accepts 1 argument, the original event object.
			swipeUp			: function(event)	{},		// Funciton - A handler that is triggered for "up" swipes. Accepts 1 argument, the original event object.
			swipeDown		: function(event)	{},		// Funciton - A handler that is triggered for "down" swipes. Accepts 1 argument, the original event object.
			
			triggerOnTouchEnd : true,	//Boolean, if true, the swipe events are triggered when the touch end event is received (user releases finger).  If false, it will be triggered on reaching the threshold, and then cancel the touch event automatically.
			
			swipeStatus		: null
			
		};
		
		var options = $.extend(defaults, options);
		
		if (!this) return false;
		
		var LEFT = "left";
		var RIGHT = "right";
		var UP = "up";
		var DOWN = "down";
		var NONE = "none";
		
		var phase="start";
		
		var PHASE_START="start";
		var PHASE_MOVE="move";
		var PHASE_END="end";
		var PHASE_CANCEL="cancel";
		
		
		var touchCycleComplete=false;
		
		
		
		return this.each(function() 
		{
			var triggerElementID = null; 	// this variable is used to identity the triggering element
			var fingerCount = 0;			// the current number of fingers being used.	
			
			//track mouse points / delta
			var start={x:0, y:0};
			var end={x:0, y:0};
			var delta={x:0, y:0};
			
			/**
			* Event handler for a touch start event. 
			* Stops the default click event from triggering and stores where we touched
			*/
			function touchStart(event) 
			{
				phase = PHASE_START;
				// disable the standard ability to select the touched object
				event.preventDefault();
				// get the total number of fingers touching the screen
				fingerCount = event.touches.length;
				
				// check the number of fingers is what we are looking for
				if ( fingerCount == defaults.fingers ) 
				{
					// get the coordinates of the touch
					start.x = event.touches[0].pageX;
					start.y = event.touches[0].pageY;
					
					if (defaults.swipeStatus)
						triggerHandler(event, phase);
				} 
				else 
				{
					//touch with more/less than the fingers we are looking for
					touchCancel(event);
				}
			}

			/**
			* Event handler for a touch move event. 
			* If we change fingers during move, then cancel the event
			*/
			function touchMove(event) 
			{
				if (phase == PHASE_END || phase == PHASE_CANCEL)
					return;
					
					
				phase = PHASE_MOVE;
				
				event.preventDefault();
				
				if ( event.touches.length == defaults.fingers ) 
				{
					end.x = event.touches[0].pageX;
					end.y = event.touches[0].pageY;
					
					var distance = null;
					
					if (defaults.swipeStatus)
					{
						distance = caluculateDistance();
						direction = caluculateDirection();
						triggerHandler(event, phase, direction, distance);
					}
					
					//If we trigger whilst dragging, not on touch end, then calculate now...
					if (!defaults.triggerOnTouchEnd)
					{
						 
						if (!distance)
							distance = caluculateDistance();
							
						// if the user swiped more than the minimum length, perform the appropriate action
						if ( distance >= defaults.threshold ) 
						{
							phase = PHASE_END;
							direction = caluculateDirection();
							triggerHandler(event, phase, direction, distance);
							touchCancel(event); // reset the variables
						}
					}
						
					
				} 
				else 
				{
					phase = PHASE_CANCEL;
					triggerHandler(event, phase); 
					touchCancel(event);
				}
			}
			
			/**
			* Event handler for a touch end event. 
			* Calculate the direction and trigger events
			*/
			function touchEnd(event) 
			{
				
				event.preventDefault();
				
				if (defaults.triggerOnTouchEnd)
				{
					phase = PHASE_END;
					// check to see if more than one finger was used and that there is an ending coordinate
					if ( fingerCount == defaults.fingers && end.x != 0 ) 
					{
						var distance = caluculateDistance(); 
						
						// if the user swiped more than the minimum length, perform the appropriate action
						if ( distance >= defaults.threshold ) 
						{
							direction = caluculateDirection();
							triggerHandler(event, phase, direction, distance);
							touchCancel(event); // reset the variables
						} 
						else 
						{
							phase = PHASE_CANCEL;
							triggerHandler(event, phase, direction, distance); 
							touchCancel(event);
						}	
					} 
					else 
					{
						phase = PHASE_CANCEL;
						triggerHandler(event, phase); 
						touchCancel(event);
					}
				}
				else if (phase == PHASE_MOVE)
				{
					phase = PHASE_CANCEL;
					triggerHandler(event, phase); 
					touchCancel(event);
				}
				
				
			}
			
			/**
			* Event handler for a touch cancel event. 
			* Clears current vars
			*/
			function touchCancel(event) 
			{
				// reset the variables back to default values
				fingerCount = 0;
				
				start.x = 0;
				start.y = 0;
				end.x = 0;
				end.y = 0;
				delta.x = 0;
				delta.y = 0;
				
			
			}
			
			
			
			
			
			/**
			* Calcualte the length / distance of the swipe
			*/
			function caluculateDistance()
			{
				return Math.round(Math.sqrt(Math.pow(end.x - start.x,2) + Math.pow(end.y - start.y,2)));
			}
			
			/**
			* Calcualte the angle of the swipe
			*/
			function caluculateAngle() 
			{
				var X = start.x-end.x;
				var Y = end.y-start.y;
				var Z = Math.round(Math.sqrt(Math.pow(X,2)+Math.pow(Y,2))); //the distance - rounded - in pixels
				var r = Math.atan2(Y,X); //angle in radians (Cartesian system)
				var angle=0;
				
				angle = Math.round(r*180/Math.PI); //angle in degrees
				
				if ( angle < 0 ) 
					angle =  360 - Math.abs(angle);
					
				return angle;
			}
			
			
			/**
			* Calcualte the direction of the swipe
			* This will also call caluculateAngle to get the latest angle of swipe
			*/
			function caluculateDirection() 
			{
				var angle = caluculateAngle();
				
				if ( (angle <= 45) && (angle >= 0) ) 
					return LEFT;
				
				else if ( (angle <= 360) && (angle >= 315) )
					return LEFT;
				
				else if ( (angle >= 135) && (angle <= 225) )
					return RIGHT;
				
				else if ( (angle > 45) && (angle < 135) )
					return DOWN;
				
				else
					return UP;
			}
			
			/**
			* Trigger the relevant event handler
			* The handlers are passed the original event, the element that was swiped, and in the case of the catch all handler, the direction that was swiped, "left", "right", "up", or "down"
			*/
			function triggerHandler(event, phase, direction, distance) 
			{
				//trigger direction specific event handlers
				
				if (phase == PHASE_END)
				{
					switch(direction)
					{
						case LEFT :
							defaults.swipeLeft(event);
							break;
						
						case RIGHT :
							defaults.swipeRight(event);
							break;

						case UP :
							defaults.swipeUp(event);
							break;
						
						case DOWN :	
							defaults.swipeDown(event);
							break;
					}
					
					//trigger catch all event handler
					defaults.swipe(event, direction);
				}
				
				if (defaults.swipeStatus)
					defaults.swipeStatus(event, phase, direction || null, distance || 0);
			}
			
			// Add gestures to all swipable areas
			this.addEventListener("touchstart", touchStart, false);
			this.addEventListener("touchmove", touchMove, false);
			this.addEventListener("touchend", touchEnd, false);
			this.addEventListener("touchcancel", touchCancel, false);
				
		});
	};
})(jQuery);