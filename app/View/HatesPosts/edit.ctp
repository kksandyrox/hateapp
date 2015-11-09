<div class="hatesPosts form">
<?php echo $this->Form->create('HatesPost'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hates Post'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('post_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('hate_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HatesPost.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('HatesPost.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hates Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hates'), array('controller' => 'hates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hate'), array('controller' => 'hates', 'action' => 'add')); ?> </li>
	</ul>
</div>
