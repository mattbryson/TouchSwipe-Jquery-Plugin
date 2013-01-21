#TouchSwipe 1.6
A jquery plugin to be used on touch devices such as iPad, iPhone, android etc

Detects single and multiple finger swipes, pinches and falls back to mouse 'drags' on the desktop. 

Time and distance thresholds can be set to destinguish between swipe gesture and slow drag.

Allows exclusion of child elements (interactive elements) as well allowing page scrolling or page zooming depending on configuration.


### Demos, examples and docs

[http://labs.skinkers.com/touchSwipe](http://labs.skinkers.com/touchSwipe)

[http://labs.skinkers.com/touchSwipe/demo](http://labs.skinkers.com/touchSwipe/demo)



### For port to XUI see:
https://github.com/cowgp/xui-touchSwipe

### Version History


* **1.6.0** *2013-01-12*
 	- Fixed bugs with pinching, mainly when both pinch and swipe enabled, as well as adding time threshold for multifinger gestures, so releasing one finger beofre the other doesnt trigger as single finger gesture.
	- made the demo site all static local HTML pages so they can be run locally by a developer
	- added jsDoc comments and added documentation for the plugin	
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
	- Added "all" fingers value to the fingers property, so any combinatin of fingers triggers the swipe, allowing event handlers to check the finger count
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
	- removed console log!
* **1.2.0** *2011-23-02*
	- added `click` handler. This is fired if the user simply clicks and does not swipe. The event object and click target are passed to handler.
	- If you use the http://code.google.com/p/jquery-ui-for-ipad-and-iphone/ plugin, you can also assign jQuery mouse events to children of a touchSwipe object.
* **1.1.0** *2011-21-02* 
	- added `allowPageScroll` property to allow swiping and scrolling of page
	- changed handler signatures so one handler can be used for multiple events
* **1.0.1** *2010-12-12*
	- removed multibyte comments
* **1.0.0** *2010-12-12*
	- feature complete









