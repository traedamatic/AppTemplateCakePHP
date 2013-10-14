<div class="users index" id="users-view-manager-add">
	<div class="page-header">			
		<h1><?php echo __('Users');?></h1>	
	</div>
	<p><?php echo __('A list of all manager-users'); ?>:</p>
	<table class="table table-hover" cellpadding="0" cellspacing="0">
	<tr>
			<th>Benutzername</th>			
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>		
		<td class="actions">			
			<?php echo $this->Form->postLink(__('Löschen'), array('action' => 'delete', $user['User']['username']), null, __('Are you sure you want to delete # %s?', $user['User']['username'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
	
	<div class="actions">	
		<?php echo $this->Html->link(__('Create a new user'), array('action' => 'add'),array("id" => "btn-useradd","class" => "button dark")); ?></li>	
	</div>	
	
</div>
	

