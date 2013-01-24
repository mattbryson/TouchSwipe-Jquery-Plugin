<?php

$demo_url = "demo";
if( !file_exists( $demo_url) )
	$demo_url = ".";

$files = scandir($demo_url);

$nav = array();
foreach( $files as $file )
{
	if( substr($file, 0, 1)!="." && $file!="index.php" && !is_dir("$demo_url/$file"))
	{
		$file_tokens = explode("_", $file);
		$index = array_shift($file_tokens);
		$file_name = implode(" ", $file_tokens);
		$name_tokens = explode(".", $file_name);
		array_pop($name_tokens);	
				
		$nav[$index] = new stdClass();
		$nav[$index]->name=implode(" ", $name_tokens);
		$nav[$index]->file=$demo_url."/".$file;
	}
}

ksort($nav);
$nav= array_values($nav);


function get_current_index()
{
	global $nav;
	$current_index=0;
	//Get the current page index
	$current_page = get_current_script();
	foreach($nav as $index=>$page_data)
	{
		if( strpos($page_data->file, $current_page) )
		{
			$current_index = $index;
			break;
		}
	}
	
	return $current_index;
}

function get_current_script()
{
	return basename($_SERVER['PHP_SELF']);
}


function get_main_nav()
{
	global $nav;
	$html = "<ul>";
	
	foreach($nav as $file)
	{
		$html.= "<li><a href='$file->file'>$file->name</a></li>";
	}
	$html .= "</ul>";
	
	return $html;
}	

function get_page_name()
{
	global $nav;
	$current_index = get_current_index();
	
	return $nav[$current_index]->name;

}

function get_pagination()
{
	global $nav;
	$current_index = get_current_index();

	$prev = null;
	$next = null;
	$html ="<div class='pagination'>";
	
	if($current_index>0)
		$prev = $nav[$current_index-1];
		
	if($current_index<count($nav)-1)
		$next = $nav[$current_index+1];
	else	
		$next = $nav[0];

	if($prev)	
		$html .= "<a class='prev' href=\"$prev->file\"/>< <u>$prev->name</u> </a>";
	
	if($next)	
		$html .= "<a class='next' href=\"$next->file\"/><u>$next->name</u> ></a>";
	
	$html .= "</div><div class='clear'></div>";
		
	return $html;
}




?>