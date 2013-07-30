<!DOCTYPE html PUBLIC "-//W3C//DTD html 4.0 Transitional//EN">
<html>
 <head>
	  <title><?php echo $this->title?></title>
	  <link rel="stylesheet" type="text/css" href="<?php echo $asset_path?>css/style.css" />
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
 </head>
 
 <body>
  <div id="mainContainer">
	<div id="pageHeader">
		<a href="index.php"><img class="logo" src="<?php echo $asset_path?>img/fullsail.gif" border="0" alt="Full Sail University" /></a>
		<h2 class="title"><?php echo $this->title?></h2>
		<div class="clear"></div>
	</div> <!--end pageHeader-->
	
	<div id="pageContent">
		<div class="outerpad">
		<?php echo $this->content?>
		</div> <!--end outerpad-->
	</div>  <!--end pageContent-->
	
	<div id="pageFooter">
		<div class="outerpad">
			<div class="name">
				<?php echo $this->title?>
			</div>
		</div> <!--end outerpad-->	
	</div> <!--end pageFooter-->
  </div> <!--end pageFooter-->
 </body>
</html>
