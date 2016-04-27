String.prototype.trim = function() {
    return this.replace(/^\s+|\s+$/g,"");
}
String.prototype.trimLeft = function() {
    return this.replace(/^\s+/,"");
}
String.prototype.trimRight = function() {
    return this.replace(/\s+$/,"");
}


//Demos file list (in order of presentation)
//THe page name is formed from the file name.
var fileList = [
	'Basic_swipe.html',
	'Single_swipe.html',
	'Any_finger_swipe.html',
	'Finger_swipe.html',
	'Swipe_status.html',
	'Pinch.html',
	'Pinch_status.html',
	'Pinch_and_Swipe.html',
	'Trigger_handlers.html',
	'Stop_propegation.html',
	'Handlers_and_events.html',
	'Tap_vs_swipe.html',
	'Hold.html',
	'Excluded_children.html',
	'Page_zoom.html',
	'Thresholds.html',
	'Enable_and_destroy.html',
	'Page_scrolling.html',
	'Options.html',
	'Image_gallery_example.html'
];


/**
 * Builds the demo page
 */
function init() {
	buildTitle();
	buildCodeExample();
	buildNavigation();
}

/**
 * Creates the navigation components
 */
function buildNavigation() {
	$('.navigation').each(function( index ) {
		$(this).html( getNavigation() );
	});

	$('.navigation_menu').each(function( index ) {
		$(this).html( getNavigationMenu() );
	})

	$('.navigation_list').each(function( index ) {
		$(this).html( getNavigationList() );
	})


	$('#menu').change( function() {
		location.href=$(this).val();
	});

	$('#menu li').click( function() {
		location.href=$(this).val();
	});

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
 * Builds the title element
 */
function buildTitle() {
	$('.title').each(function( index ) {
		$(this).html( getTitle() );
	})
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

/**
 * Returns the current file being viewed.
 */
function getCurrentFile() {
	var url = window.location.pathname;
    var file = url.substring(url.lastIndexOf('/')+1);

    return file;
}

/**
 * Returns the current page name
 */
function getPageName( file ) {

    if(!file)
    	file=getCurrentFile();

    var fileTokens = file.split("_");
    var fileName = fileTokens.join(" ");
    var nameTokens = fileName.split(".");
    nameTokens.pop();

    var name = nameTokens.join(" ");

    return name;
}



/**
 * Writes out the page title template
 */
function getTitle() {
	var html =  "<h2><a href=\"http://labs.rampinteractive.co.uk/touchSwipe/\">TouchSwipe</a> Demo</h2>";
        html += "<h3>to be viewed on touch based devices</h3>";
        html += "<h1>"+getPageName()+"<span class='navigation_menu pull-right'></span></h1>";

    return html;
}

/**
 * Returns HTML mark up for the pagination buttons
 */
function getNavigation() {
	var index = fileList.indexOf( getCurrentFile() );
	var html ="<div class='pagination'>";

	if(index>0) {
		html += "<a class='pull-left btn' href='"+fileList[index-1]+"'><< "+getPageName(fileList[index-1])+"</a>";
	}

	if(index<fileList.length-1) {
		html += "<a class='pull-right btn' href='"+fileList[index+1]+"'>"+getPageName(fileList[index+1])+" >></a>";
	}

	html += "</div><div class='clear'></div>"
	return html;
}

/**
 * Returns HTML mark up for the drop down menu
 */
function getNavigationMenu() {

	var html = "<select id='menu' class='pull_right'>";

	for(var i=0; i<fileList.length; i++) {
		var selected="";
		if(fileList[i] == getCurrentFile()) {
			selected=' selected ';
		}
		html+="<option value='"+fileList[i]+"'"+selected+">"+getPageName(fileList[i])+"</option>";
	}

	html += "</select>";

	return html;
}

/**
 * Returns HTML mark up for the list menu
 */
function getNavigationList() {

	var html = "<ul>";

	for(var i=0; i<fileList.length; i++) {
		html+="<li><a href='"+fileList[i]+"'>"+getPageName(fileList[i])+"</a></li>";
	}

	html += "</ul>";

	return html;
}

$(function() {
	init();
});
