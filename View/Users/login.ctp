<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">			
		<div id="users-view-login" class="" >
			<div class="page-header">		
				<h1> <?php echo Configure::read('SiteSettings.title') ?> - Login</h1>
			</div>
			<p>Login in with your username and password:</p>
			<?php
			  echo $this->Form->create('User',array('url' => array('controller' => 'users', 'action' => 'login'), "model" => false));
			  echo $this->Form->input('username',array('class' => 'form-control','div' => 'form-group','label' => 'Benutzername', 'type' => 'text'));
			  echo $this->Form->input('password',array('class' => 'form-control','div' => 'form-group','type' => 'password','label' => 'Passwort'));
			  echo $this->Form->button('Anmelden',array( 'class' => 'btn btn-primary','type' => 'submit'));
			  echo $this->Form->end();
			?>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>