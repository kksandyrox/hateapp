<div class="postsUsers view">
<h2><?php echo __('Posts User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($postsUser['PostsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($postsUser['Post']['title'], array('controller' => 'posts', 'action' => 'view', $postsUser['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($postsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $postsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($postsUser['PostsUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($postsUser['PostsUser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Posts User'), array('action' => 'edit', $postsUser['PostsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Posts User'), array('action' => 'delete', $postsUser['PostsUser']['id']), array(), __('Are you sure you want to delete # %s?', $postsUser['PostsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posts User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
