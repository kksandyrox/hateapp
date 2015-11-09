<div class="hatesPosts index">
	<h2><?php echo __('Hates Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hatesPosts as $hatesPost): ?>
	<tr>
		<td><?php echo h($hatesPost['HatesPost']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hatesPost['Post']['title'], array('controller' => 'posts', 'action' => 'view', $hatesPost['Post']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hatesPost['User']['name'], array('controller' => 'users', 'action' => 'view', $hatesPost['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hatesPost['Hate']['id'], array('controller' => 'hates', 'action' => 'view', $hatesPost['Hate']['id'])); ?>
		</td>
		<td><?php echo h($hatesPost['HatesPost']['created']); ?>&nbsp;</td>
		<td><?php echo h($hatesPost['HatesPost']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hatesPost['HatesPost']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hatesPost['HatesPost']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hatesPost['HatesPost']['id']), array(), __('Are you sure you want to delete # %s?', $hatesPost['HatesPost']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hates Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hates'), array('controller' => 'hates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hate'), array('controller' => 'hates', 'action' => 'add')); ?> </li>
	</ul>
</div>
