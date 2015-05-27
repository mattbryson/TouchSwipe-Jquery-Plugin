#TouchSwipe 1.6
A jQuery plugin to be used on touch devices such as iPad, iPhone, Android etc.

Detects single and multiple finger swipes, pinches and falls back to mouse 'drags' on the desktop.

Time and distance thresholds can be set to distinguish between swipe gesture and slow drag.

Allows exclusion of child elements (interactive elements) as well allowing page scrolling or page zooming depending on configuration.

* Detects swipes in 4 directions, "up", "down", "left" and "right"
* Detects pinches "in" and "out"
* Supports single finger or double finger touch events
* Supports click events both on the touchSwipe object and its child objects
* Definable threshold / maxTimeThreshold to determin when a gesture is actually a swipe
* Events triggered for swipe "start","move","end" and "cancel"
* End event can be triggered either on touch release, or as soon as threshold is met
* Allows swiping and page scrolling
* Disables user input elements (Button, form, text etc) from triggering swipes

## Installation  
###NPM
````bash
npm install jquery-touchswipe --save
````
###Bower
````bash
bower install jquery-touchswipe --save
````
###Manual
Include the minified file in your project.
````html
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
````

##Usage
````javascript
$(function() {
  $("#test").swipe( {
    //Generic swipe handler for all directions
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      $(this).text("You swiped " + direction );  
    }
  });
});
````

For full demos, code examples and documentation, see below.

## Demos, examples and docs

[http://labs.rampinteractive.co.uk/touchSwipe](http://labs.rampinteractive.co.uk/touchSwipe)  
[http://labs.rampinteractive.co.uk/touchSwipe/docs](http://labs.rampinteractive.co.uk/touchSwipe/docs)

### For port to XUI see:
https://github.com/cowgp/xui-touchSwipe

### Version History

* **1.6.8** *2015-02-02*
	- Added preventDefaultEvents option to proxy events regardless.
	- Fixed issue with swipe and pinch not triggering at the same time
* **1.6.7** *2015-01-22*
	- Patch from #206 to fix memory leak
* **1.6.6** *2014-06-04*
	- Merge of pull requests.
	- IE10 touch support
	- Only prevent default event handling on valid swipe
	- Separate license/changelog comment
	- Detect if the swipe is valid at the end of the touch event.
	- Pass fingerdata to event handlers.
	- Add 'hold' gesture
	- Be more tolerant about the tap distance
	- Typos and minor fixes
* **1.6.5** *2013-08-24*
	- Merged a few pull requests fixing various bugs, added AMD support.
* **1.6.4** *2013-04-04*
	- Fixed bug with cancelThreshold introduced in 1.6.3, where swipe status no longer fired start event, and stopped once swiping back.
	- Fixed bug with cancelThreshold introduced in 1.6.3, where swipe status no longer fired start event, and stopped once swiping back.
* **1.6.3** *2013-04-01*
	- Added doubletap, longtap events and longTapThreshold, doubleTapThreshold property
* **1.6.2**	*2013-03-23*
	- Added support for events binding with on / off / bind in jQ for all callback names.
	- Deprecated the 'click' handler in favor of tap.
	- Added cancelThreshold property
	- Added 'option' method to update init options at runtime
* **1.6.2**	*2013-02-12*
	- Added support for ie8 touch events
* **1.6.0** *2013-01-12*
	- Fixed bugs with pinching, mainly when both pinch and swipe enabled, as well as adding time threshold for multifinger gestures, so releasing one finger before the other doesn't trigger as single finger gesture.
	- Made the demo site all static local HTML pages so they can be run locally by a developer
	- Added jsDoc comments and added documentation for the plugin
	- Code tidy
	- Added triggerOnTouchLeave property that will end the event when the user swipes off the element.
* **1.5.1** *2012-11-22*
	- Fixed bug with jQuery 1.8 and trailing comma in excludedElements
	- Fixed bug with IE and event.preventDefault();
* **1.5.0** *2012-11-10*
	- Added `excludedElements`, a jquery selector that specifies child elements that do NOT trigger swipes. By default, this is one select that removes all form, input select, button and anchor elements.
* **1.4.0** *2012-04-10*
	- Added pinch support, `pinchIn`, `pinchOut` and `pinchStatus`
* **1.3.3** *2012-09-08*
	- Code tidy prep for minified version
* **1.3.2** *2012-29-07*
	- Added `fallbackToMouseEvents` option to NOT capture mouse events on non touch devices.
	- Added "all" fingers value to the fingers property, so any combination of fingers triggers the swipe, allowing event handlers to check the finger count
* **1.3.1** *2012-05-06*
	- Bug fixes  
	- bind() with false as last argument is no longer supported in jQuery 1.6, also, if you just click, the duration is now returned correctly.
* **1.3.0** *2012-06-06*
	- Refactored whole plugin to allow for methods to be executed, as well as exposed defaults for user override. Added `enable`, `disable`, and `destroy` methods
* **1.2.8** *2012-05-06*
	- Added the possibility to return a value like null or false in the trigger callback. In that way we can control when the touch start/move should take effect or not (simply by returning in some cases return null; or return false;) This effects the ontouchstart/ontouchmove event.
* **1.2.7** *2012-05-06*
	- Changed time threshold to have null default for backwards compatibility. Added duration param passed back in events, and refactored how time is handled.
* **1.2.6** *2012-14-05*
 	- Added timeThreshold between start and end touch, so user can ignore slow swipes (thanks to Mark Chase). Default is null, all swipes are detected
* **1.2.5** *2011-27-09*
	- Added support for testing swipes with mouse on desktop browser (thanks to https://github.com/joelhy)
* **1.2.4** *2011-28-04*
	- Changed licence terms to be MIT or GPL inline with jQuery. Added check for support of touch events to stop non compatible browsers erroring.
* **1.2.2** *2011-23-02*
	- Fixed bug where scope was not preserved in callback methods.
* **1.2.1** *2011-23-02*
	- Removed console log!
* **1.2.0** *2011-23-02*
	- Added `click` handler. This is fired if the user simply clicks and does not swipe. The event object and click target are passed to handler.
	- If you use the http://code.google.com/p/jquery-ui-for-ipad-and-iphone/ plugin, you can also assign jQuery mouse events to children of a touchSwipe object.
* **1.1.0** *2011-21-02*
	- Added `allowPageScroll` property to allow swiping and scrolling of page
	- Changed handler signatures so one handler can be used for multiple events
* **1.0.1** *2010-12-12*
	- Removed multibyte comments
* **1.0.0** *2010-12-12*
	- Feature complete
