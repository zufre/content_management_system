<?php include("app/init.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>	
		<title>Test</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link href="resources/css/style.css" media="screen" rel="stylesheet" type="text/css" />
		
		<?php $FP->head(); ?>
	</head>
	<body class="home <?php $FP->body_class(); ?>">
	
		<?php $FP->toolbar(); ?>
		
		<div id="wrapper">
			<h1>Website</h1>
			
			<div id="banner">
				<img src="resources/images/banner.jpg" alt="banner" width="900" height="140">
			</div>
			
			<ul id="nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Test Link</a></li>
				<li><a href="#">Longer Text Link</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			
			<div id="content">
				<div class="left">
					<h2><?php $FP->Cms->display_block('content-header', 'oneline'); ?></h2>
					<?php $FP->Cms->display_block('content-maincontent'); ?>
				</div>
				<div class="right">
					<?php $FP->Cms->display_block('content-quote'); ?>
					<?php $FP->Cms->display_block('content-attribution', 'textarea'); ?>
				</div>
			</div>
			
			<div id="footer">
				&copy; 2011 Test Website. | <?php $FP->login_link(); ?>
			</div>
		</div>
		
	</body>
</html>