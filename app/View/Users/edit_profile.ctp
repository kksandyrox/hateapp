<div class="panel panel-success">
  <div class="panel-heading">Hated Profile Information</div>
  <div class="panel-body">
	<?php echo $this->Form->create('User', array('type' => 'file'));?>
		<div class = "row">
			<div class = "col-lg-2 col-xs-12 col-sm-12 col-md-6">
				<?php
					echo $this->Form->input('User.image', array('type' => 'file', 'label' => 'Upload Image'));
					echo $this->Form->input('User.dir', array('type' => 'hidden'));	
				?>
			</div>
			<div class = "col-lg-10 col-xs-12 col-sm-12 col-md-6">
				<div class = "form-group">
					<?php echo $this->Form->input('User.name', array('class' => 'form-control')); ?>
				</div>
				<div class = "form-group">
					<?php echo $this->Form->input('User.username', array('class' => 'form-control', 'disabled')); ?>
				</div>
				<div class = "form-group">
					<?php echo $this->Form->input('User.email', array('class' => 'form-control', 'disabled')); ?>
				</div>
				<div class = "form-group"> <p><strong>Member since:</strong></p>
					<?php echo $this->Time->format($this->request->data['User']['created'], '%B %e, %Y %H:%M %p'); ?>
				</div>
				<div class = "form-group">
					<?php echo $this->Form->button(__('Update!'), array('class' => 'btn btn-success')); ?>
				</div>
			</div>
		</div>
	<?php echo $this->Form->end();?>
  </div>
</div>

