<?php include "partials/nav.php" ?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php if( isset($user_scale) ): ?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
		<?php else: ?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<?php endif; ?>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		
			<script type="text/javascript" src="../prettify/prettify.js"></script>
		<link href="../prettify/prettify.css" type="text/css" rel="stylesheet" />
		
		<title>touchSwipe</title>
		
		<style>
		
			button
			{
				display: inline-block;
				padding: 4px 10px 4px;
				margin-bottom: 0;
				font-size: 13px;
				line-height: 18px;
				color: #333;
				text-align: center;
				text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
				vertical-align: middle;
				cursor: pointer;
				background-color: whiteSmoke;
				background-image: -ms-linear-gradient(top, white, #E6E6E6);
				background-image: -webkit-gradient(linear, 0 0, 0 100%, from(white), to(#E6E6E6));
				background-image: -webkit-linear-gradient(top, white, #E6E6E6);
				background-image: -o-linear-gradient(top, white, #E6E6E6);
				background-image: linear-gradient(top, white, #E6E6E6);
				background-image: -moz-linear-gradient(top, white, #E6E6E6);
				background-repeat: repeat-x;
				border: 1px solid #CCC;
				border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
				border-color: #E6E6E6 #E6E6E6 #BFBFBF;
				border-bottom-color: #B3B3B3;
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;
				filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
				filter: progid:dximagetransform.microsoft.gradient(enabled=false);
				-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
				-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
				box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
				

			}

		
			.pagination
			{
				width:100%;
				margin-top:20px;
				margin-bottom:20px;
			}
			
			.clear
			{
				clear:both;
			}
			
			.pagination a
			{
				font-size: 12px;
				line-height: 18px;
				
			}
			
			.prev
			{
				float:left;
			}
		
			.next
			{
				float:right;
				
			}
			
			.container
			{
				margin-right: auto;
				margin-left: auto;
				width:500px;
			}
		
			.box
			{
				margin-top:20px;
				margin-bottom:20px;
				width:500px;
				height:300px;
				
				padding: 10px;
				background-color: #EEE;
				-webkit-border-radius: 6px;
				-moz-border-radius: 6px;
				border-radius: 6px;
				
				text-align:center;
				font-weight: 300;
				font-size: 20px;
				line-height: 36px;
			}
			
			body
			{
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 13px;
				line-height: 18px;
				color: #333;
			}
			
			h1
			{
				margin-top:36px;
				margin-bottom:5px;
			}
			
			h2
			{
				font-size: 30px;
				line-height: 36px;
				font-weight: 300;
				margin-bottom:0px;

			}
			
			h3
			{
				margin-top:0px;
				font-size: 18px;
				line-height: 24px;
				font-weight: 300;
				color:#999;
			}
			
			h4
			{
				margin-top:0px;
				font-size: 12px;
				line-height: 24px;
				font-weight: 300;
				color:#333;
			}
			
			a
			{
				text-decoration:none;
				color:#333;	
			}
			
		
		</style>
		<script>
			$( function(){ prettyPrint() });
		</script>
		
	</head>
	
<body>
<a href="https://github.com/mattbryson"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_white_ffffff.png" alt="Fork me on GitHub"></a>
<div class="container">