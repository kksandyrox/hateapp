<div class = "col-lg-offset-4 col-lg-4">
	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo $this->Form->create('User');?>
			<div class = "form-group">
				<?php echo $this->Form->input('email', array('class' => 'form-control', 'required')); ?>
			</div>
			<div class = "form-group">
				<?php echo $this->Form->input('username', array('class' => 'form-control', 'required')); ?>
			</div>
			<div class = "form-group">
				<?php echo $this->Form->input('password', array('class' => 'form-control', 'type' => 'password', 'required')); ?>
			</div>
			<div class = "form-group">
				<?php echo $this->Form->button(__('Register'), array('class' => 'btn btn-primary')); ?>
			</div>
				<?php echo $this->Form->end();?>
		</div>
	</div>
</div>