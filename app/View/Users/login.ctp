<div class = "col-md-offset-4 col-md-4">
	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo $this->Form->create();?>
			<div class = "form-group">
				<?php echo $this->Form->input('username', array('class' => 'form-control', 'required'));?>
			</div>
			<div class = "form-group">
				<?php echo $this->Form->input('password', array('class' => 'form-control', 'type' => 'password', 'required'));?>
			</div>
			<div class = "form-group">
				<?php echo $this->Form->button(__('Login'), array('class' => 'btn btn-primary')); ?>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>