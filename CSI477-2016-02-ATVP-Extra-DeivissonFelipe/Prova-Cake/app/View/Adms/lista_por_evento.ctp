<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Lista de Atletas",	array('controller' => 'adms', 'action' => 'listaAtletas')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Lista de Registros",	array('controller' => 'adms', 'action' => 'index')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Registros - Atleta",	array('controller' => 'adms', 'action' => 'listaPorAtletas')); ?>
			</li>
		</ul>

	</div>


	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Lista de Registros Por Evento</h4>
		<br>
	
		<?php echo $this->Form->create('Evento'); ?>
		<div class="form-group">
            <?php echo $this->Form->input('evento_id', array('class' => 'form-control', 'label' => 'Eventos', 'type' => 'select', 'options' => $eventos));?>
        </div>
		<?php  echo $this->Form->end('Gerar Relatório', array('class' => 'form-control')); ?>

		<br><br>
		<?php if(isset($registros)){ ?>
		<table class="table table-striped table-bordered">
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Atleta</th>
				<th class="text-center">Evento</th>
				<th class="text-center">Data</th>
				<th class="text-center">Pago</th>
			</tr>
			
			<?php foreach ($registros as $r): ?>

			<tr>
				<td class="text-center">
					<?php echo $r['Registro']['id']; ?>
				</td>

				<td class="text-center">
					<?php echo $r['Atleta']['nome']; ?>
				</td>

				<td class="text-center">
					<?php echo $r['Evento']['nome']; ?>
				</td>
				
				<td class="text-center">
					<?php echo $r['Registro']['data']; ?>
				</td>

				<td class="text-center">
					<?php 
						if($r['Registro']['pago'] == 1){
							echo 'Sim'; 	
						}
						else{
							echo 'Não'; 	
						}
					?>
				</td>

			</tr>

			<?php endforeach; ?>
		</table>
		<br><br>
		
		<legend>Quantidade de Registros:</legend>
			<?php echo $qtd ?> registros
		
		<br><br>
		
		<legend>Valor Total:</legend>
			R$: <?php echo $valor ?>

		<?php } ?>
	</div>
</div>