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

  //Set some options later
  $("#test").swipe( {fingers:2} );
});
````

For full demos, code examples and documentation, see below.

## Demos, examples and docs

[http://labs.rampinteractive.co.uk/touchSwipe](http://labs.rampinteractive.co.uk/touchSwipe)  
[http://labs.rampinteractive.co.uk/touchSwipe/docs](http://labs.rampinteractive.co.uk/touchSwipe/docs)

### For port to XUI see:
https://github.com/cowgp/xui-touchSwipe


