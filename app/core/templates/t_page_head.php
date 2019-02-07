<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>FlightPath CMS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link href="<?php echo APP_RESOURCES; ?>css/fp_style.css" media="screen" rel="stylesheet" type="text/css">
	
	<!-- jquery & colorbox -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">$.noConflict();</script>
	
	<!-- tiny_mce -->
	<script type="text/javascript" src="<?php echo APP_RESOURCES; ?>javascript/tiny_mce/tinymce.min.js"></script>
	
	<script type="text/javascript">
	
		jQuery(document).ready(function($) { 
						
			$('#fp_cancel, #fp_close').on('click', function(e){
				e.preventDefault();
				parent.jQuery.colorbox.close();
			});
			
		});
	
	</script>
</head>
<body class="fp_page">