

/**
 * Builds the demo page
 */
function init() {
	buildCodeExample();
	buildNavigation();
}

/**
 * Creates the navigation components
 */
function buildNavigation() {


	$('.example_btn').click( function() {
		$(document).scrollTop( $("#test").offset().top );
	});

	$('.events code').click( function() {
		location.href = '../docs/%24.fn.swipe.html#event:' + $(this).text();
	});

	$('.properties code').click( function() {
		location.href = '../docs/%24.fn.swipe.defaults.html#' + $(this).text();
	});

	$('.methods code').click( function() {
		location.href = '../docs/%24.fn.swipe.html#' + $(this).text();
	});
}



/**
 * Copies the <script> tag contents, and populates the demo pretty print div to display the
 * code example.
 */
function buildCodeExample() {

	$('.prettyprint').each(function( index ) {

  		//$(this).text( $("#"+$(this).attr('data-src')).html() );

  		var src = $("#"+$(this).attr('data-src')).html();
  		if(src) {
			var lines = src.split("\n");
			var trimedLines=[];
			var trimIndex=null;
			for (var i=0; i<lines.length; i++) {
				var line = lines[i];
				if(trimIndex===null) {
					var trimmed = line.trimLeft();
					if(line.length>0) {
						trimIndex = line.length - trimmed.length;
					}
				}

				if(line.length>0) {
					//Tabs to spaces
					line = line.replace(/\t/g, '  '); //not using $nbsp; as we want to display HTML tags, so we set the text value, not html
					trimedLines.push( line.substr(trimIndex) );
				}

			};

			var html = trimedLines.join("\n");


			 $(this).text( html );
		}

  	});


  	//prettyPrint();
}




$(function() {
	init();
});
