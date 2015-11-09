<html>
<head>
	<?php
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css('bootstrap');
		echo $this->Html->script('jquery-1.11.3.min');
		echo $this->Html->script('bootstrap');
	?>
</head>
<body>
	<div id="content">
		<nav class="navbar navbar-default navbar-static-top"> </nav>
		<div class = "container">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>			
		</div>
	</div>
</body>
</html>