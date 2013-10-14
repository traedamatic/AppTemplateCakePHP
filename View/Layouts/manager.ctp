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
  <title>App Template for CakePHP - Manager</title>
  <meta name="viewport" content="width=device-width">
  <?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css("bootstrap");
		echo $this->Html->css("manager");

		echo $this->fetch('meta');
		echo $this->fetch('css');				
	?>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  	<div id="app">
	  	<div class="navbar navbar-inverse navbar-fixed-top">
	      	<div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#">App Template for CakePHP</a>
		        </div>
		        <div class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">	            		           
			        	<li class="dropdown">
				        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dashboard <b class="caret"></b></a>				        	
				      	</li>				    
		            	<li><?php echo $this->Html->link(_('Benutzer'),array('controller' => 'users', 'action' => 'index','manager' => true,'plugin' => false)); ?></li>
		            	<li><?php echo $this->Html->link(_('Einstellungen'),array('controller' => 'settings', 'action' => 'index','manager' => true,'plugin' => 'siteconfig')); ?></li>
		            	<li>
		            	<?php 
		            	$username = AuthComponent::user('username');
		            	if (!empty($username)) echo $this->Html->link(_('Logout'),array('controller' => 'users', 'action' => 'logout','manager' => false,'plugin' => false),array('id' => 'btn-logout', 'class' => 'button red')); 
		            	?>
		           		</li>
		          </ul>
		        </div><!--/.nav-collapse -->
		    </div>
		</div>		  
	  
		<div class="container">	
			<div id="flash">
				<?php
					echo $this->Session->flash('auth');
					echo $this->Session->flash();
				?>
			 </div>
		</div> 
		<div class="container" id="content" role="main">
		  <?php echo $this->fetch('content'); ?>
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
  </div>
	
  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
  <!--<script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.3.min.js"><\/script>')</script>-->

	<?php
		echo $this->Html->script('plugins');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('manager');
		echo $this->Html->script('ckeditor/ckeditor');
			
		echo $this->fetch('script');
		
		echo $this->Js->writeBuffer();
	?>  
</body>
</html>
