<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package wp-leonardo
 */
?>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
    <title>Rosemary Reed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
	
	<script>
	
		function rfun() {
			width = $(window).width();
			height = $(window).height();
      
			// Executing Both width() and height()   
			$(document).getElementById('widthID').innerHTML=width; 
			$(document).getElementById('heightID').innerHTML=height; 

			// Do a custom code here
			if(width <= 480){
			$(document).getElementById('widthID').innerHTML+=" -> This is an Iphone Screen Size"; 
			}
		}
	
		 // load() event and resize() event are combined 
		$(window).ready(rfun).resize(rfun); 
		
		
	</script>
	
</head>

	<div class="container">
					