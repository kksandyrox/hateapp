<div class = "pull-right inline-login-box hidden-xs hidden-md">
    <form class = "form-inline" action = "/users/login" method="POST">
        <div class = "form-group">
            <?php echo $this->Form->input('User.username', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Username'));?>
        </div>
        <div class = "form-group">
            <?php echo $this->Form->input('User.password', array('class' => 'form-control', 'label' => false, 'placeholder' => 'Password', 'type' => 'password'));?>            
        </div>
        <div class = "form-group">
            <?php echo $this->Form->button(__('Login'), array('class' => 'btn btn-primary')); ?>
        </div>
    <?php echo $this->Form->end();?>
</div>