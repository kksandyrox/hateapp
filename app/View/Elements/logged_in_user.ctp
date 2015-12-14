<div class = "pull-right">
	
<?php 
	echo $this->Html->link(__(ucfirst(Authcomponent::user('username'))), 
				array(
					'controller' => 'users', 
					'action' => 'editProfile',
					Authcomponent::user('id')
					),
				array(
					'class' => 'user-profile-link')
				);
?>
</div>