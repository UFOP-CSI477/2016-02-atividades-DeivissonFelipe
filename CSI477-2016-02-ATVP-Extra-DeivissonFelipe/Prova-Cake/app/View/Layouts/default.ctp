<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		ProvaWeb: <?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon'); //icone da aba
		echo $this->Html->css('bootstrap');
		//echo $this->Html->css('cake.generic');

		// ------------------------------------------->
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style>
       .error{
             color:red
       }
	</style>
</head>
<body>
	<div id="container">
		<div id="header">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <?= $this->Html->link("SisProvas", array('controller' => 'pages', 'action' => 'index'), array('class'=>'navbar-brand')); ?>
			    </div>
			    <ul class="nav navbar-nav">
			    
					<li><?= $this->Html->link("Área Geral",	array('controller' => 'eventos', 'action' => 'index')); ?></li>
					<li><?= $this->Html->link("Atletas",	array('controller' => 'atletas', 'action' => 'index')); ?></li>
					<li><?= $this->Html->link("Administração",	array('controller' => 'adms', 'action' => 'index')); ?></li>
			
			    </ul>

				<!-- if (sem usuario logado) -->
				<?php  if(!$this->Session->check('User')){ ?>
				
			    <ul class="nav navbar-nav navbar-right">
			      <li><?= $this->Html->link("Cadastre-se",	array('controller' => 'atletas', 'action' => 'cadastro')); ?></li>
				  <li><?= $this->Html->link("Login",	array('controller' => 'atletas', 'action' => 'login')); ?></li>      
			    </ul>
				
				<!-- else -->
				<?php  }else{ ?>

				<ul class="nav navbar-nav navbar-right">
			      	<li><?php 
						$usuario = $this->Session->read('User');
						echo $this->Html->link("Bem vindo(a) " . $usuario['0']['Atleta']['nome'],	array('controller' => 'atletas', 'action' => 'logout', 'title'=> 'Logout')); ?>
			     	</li>
			    </ul>
				
				<?php  }?>

			  </div>
			</nav>
		</div>
		<div id="content">

			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer">
		
			<!-- <div class="container well col-sm-6 col-sm-offset-3" align="center"> -->
				<!-- <?php echo $this->element('sql_dump'); ?> -->
			<!-- </div> -->
			
			
			<div class="container well col-sm-6 col-sm-offset-3" style="background-color: #FA8072;" align="center">
				<h4><?php echo $this->Flash->render(); ?></h4>
			</div>
			
		</div>
	</div>
	
	

</body>
</html>
