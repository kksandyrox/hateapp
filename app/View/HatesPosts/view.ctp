<div class="hatesPosts view">
<h2><?php echo __('Hates Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hatesPost['HatesPost']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hatesPost['Post']['title'], array('controller' => 'posts', 'action' => 'view', $hatesPost['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hatesPost['User']['name'], array('controller' => 'users', 'action' => 'view', $hatesPost['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hatesPost['Hate']['id'], array('controller' => 'hates', 'action' => 'view', $hatesPost['Hate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hatesPost['HatesPost']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hatesPost['HatesPost']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hates Post'), array('action' => 'edit', $hatesPost['HatesPost']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hates Post'), array('action' => 'delete', $hatesPost['HatesPost']['id']), array(), __('Are you sure you want to delete # %s?', $hatesPost['HatesPost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hates Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hates Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hates'), array('controller' => 'hates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hate'), array('controller' => 'hates', 'action' => 'add')); ?> </li>
	</ul>
</div>
