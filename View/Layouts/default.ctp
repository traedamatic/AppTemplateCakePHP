<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title_for_layout; ?></title>
	<meta name="description" content="">
	
	<!-- some mobile meta tags -->
	<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
  	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css("style");

		echo $this->fetch('meta');
		echo $this->fetch('css');
		
	?>
</head>
<?php 
	$bodyClasses = "";
	if($isMobile) {
		$bodyClasses = "isMobile";
	}
?>
<body class="<?php echo $bodyClasses;?>">
  	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  
  	<!-- Helps with mobile development in js -->
  	<script type="text/javascript">
  		var isMobile = <?php echo $isMobile;?>;
  	</script>
	<div class="container" id="viewport" role="main">
		<?php echo $this->fetch('content'); ?>	  		
  	</div>

  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.10.2.min.js"><\/script>')</script>

	<?php

		//its usefull for development to load the none minified jsfiles
		// echo $this->Html->script('plugins');
		// echo $this->Html->script('application');

		//minified javascripts
		echo $this->Html->script('plugins_min');
		echo $this->Html->script('application_min');

		echo $this->fetch('script');

		echo $this->Js->writeBuffer();
	?>
</body>
</html>
