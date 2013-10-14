<div id="users-view-manager-add">
	<div class="page-header">
		<h1> <?php echo __("Create a new manager user"); ?></h1>		
	</div>
	<?php 
		echo $this->Form->create('User');
		echo $this->Form->input('username',array('class' => 'form-control','div' => 'form-group'));
		echo $this->Form->input('password',array('class' => 'form-control','div' => 'form-group','type' => 'password'));
		echo $this->Form->input('retypepassword',array('class' => 'form-control','div' => 'form-group','type' => 'password','label' => "Retype the password"));
		echo $this->Form->button('Save',array('class' => 'btn btn-primary'));
		echo $this->Form->end();
	?>

</div><!-- /users-view-manager-add -->