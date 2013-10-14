<div class="page-header">
	<h1><?php echo Configure::read('SiteSettings.title') ?> - Manager</h1>
</div>
<p>Feel free to edit everything!</p>
<ul>
	<li><?php echo $this->Html->link(_('Settings'),array('controller' => 'settings', 'action' => 'index','manager' => true,'plugin' => 'siteconfig')); ?></li>
</ul>
<p> Have fun</p>