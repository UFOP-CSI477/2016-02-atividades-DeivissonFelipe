<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Lista de Inscrições",	array('controller' => 'atletas', 'action' => 'index')); ?>
			</li>
		</ul>

	</div>


	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Incluir Registro</h4>
		<br>
		
		<?php echo $this->Form->create('Registro', array('controller' => 'atletas', 'url' => 'incluirRegistro', 'id' => 'cadastro')); ?>
		 	
			<div class="form-group">
				<?php $usuario = $this->Session->read('User'); ?>
	            <?php echo $this->Form->input('atleta_id', array('type' => 'hidden', 'value' => $usuario['0']['Atleta']['id']));?>
	        </div>

 			<div class="form-group">
	            <?php echo $this->Form->input('evento_id', array('class' => 'form-control', 'label' => 'Eventos', 'type' => 'select', 'options' => $eventos));?>
	        </div>
	       
	        <div class="form-group">
	            <?php echo $this->Form->input('data', array('class' => 'form-control'));?>
	        </div>

			<div class="form-group">
	            <?php echo $this->Form->input('pago', array('class' => 'form-control', 'label' => 'Pago', 'type' => 'select', 'options' => $ifPago));?>
	        </div>
 
			 <br>
			<div class="col-sm-12 center-block">
                <?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-lg btn-secondary btn-block')); ?>
            </div>

		<?php echo $this->Form->end(); ?>


	</div>
</div>