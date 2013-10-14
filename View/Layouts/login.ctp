<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo Configure::read('SiteSettings.title'); ?> - Login </title>
  <meta name="viewport" content="width=device-width">
  <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css("bootstrap");
		echo $this->Html->css("manager");

		echo $this->fetch('meta');
		echo $this->fetch('css');				
	?>
</head>
<body class="login-layout">
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	
  	<div class="container">	 
		<div id="flash">
			<?php echo $this->Session->flash('auth',array('element' => 'flash/error')); ?>
		</div>
  		<div id="login" role="main">	 
			<?php echo $this->fetch('content'); ?>
	 	</div>	 	
	  	
  	</div>  
  	<div id="footer">	    			  	
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">					
					<div id="poweredby">
					  		<p>AppTemplate for CakePHP 2.X | fork,contribute or follow on <?php echo $this->Html->link('Github','https://github.com/traedamatic/CakePHP2.1-App-Template-',array('target' => '_blank')); ?> |
						  		<?php echo $this->Html->link(
											  $this->Html->image('cake.power.gif', array('alt' => "CakePHP", 'border' => '0')),
											  'http://www.cakephp.org/',
											  array('target' => '_blank', 'escape' => false)
										  );
									  ?>
							</p>
					</div>  	  		
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
  	</div>	


	
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

	<?php				
		echo $this->Html->script('bootstrap.min');		
		echo $this->fetch('script');		
		echo $this->Js->writeBuffer();
	?>  
</body>
</html>
