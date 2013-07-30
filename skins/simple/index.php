<!doctype html> 
<!--[if lt IE 7]>
<html class="no-js ie6" lang="en">
<![endif]-->
<!--[if IE 7]>
<html class="no-js ie7" lang="en">
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie8" lang="en">
<![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title><?php echo $this->title?></title>
		<meta name="description" content="Server-Side Languages: Database Driven Web Applications" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $asset_path ?>css/style.css" />
		<!-- Style source: /css/style.scss -->
		<script src="<?php echo $asset_path ?>js/modernizr.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script>window.jQuery || document.write("<script src='<?php echo $asset_path?>js/jquery-1.6.min.js'>\x3C/script>")</script>
	</head>
	
	<body class="lang-en homePage">
	
		<div id="fb-root"></div> <!--end #fb-root-->
		
		<div class="header">
			<header>
				<a href="index.php" class="home"><h1 class="ir">Server-Side Languages</h1></a>
				<h2 class="ir"><?php echo $this->title?></h2>
			</header>
		</div> <!--end .header-->
		
		<div id="main" class="clearfix"><?php echo $this->content?></div> <!--end #main-->
		
		<div class="footer">
			<footer>
				<!-- <a href="#">Links</a> -->
			</footer>
		</div> <!--end .footer-->
		
		<script src="<?php echo $asset_path?>js/plugins.js"></script>
	</body>
</html>
