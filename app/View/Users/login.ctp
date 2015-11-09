<div class = "col-md-offset-4 col-md-4">
	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo $this->Form->create();
				echo $this->Form->input('username', array('class' => 'form-control'));
				echo $this->Form->input('password', array('class' => 'form-control', 'type' => 'password'));
				echo $this->Form->button(__('Login'), array('class' => 'btn btn-primary'));
				echo $this->Form->end();
			?>
		</div>
	</div>
</div>