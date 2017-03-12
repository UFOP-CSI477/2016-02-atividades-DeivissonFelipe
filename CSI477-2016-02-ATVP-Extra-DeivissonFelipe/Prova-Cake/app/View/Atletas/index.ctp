<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Incluir Registros",	array('controller' => 'atletas', 'action' => 'incluirRegistro')); ?>
			</li>
		</ul>

	</div>


	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Lista de Eventos Inscritos</h4>
		<br>
		<table class="table table-striped table-bordered">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Evento</th>
				<th class="text-center">Data</th>
				<th class="text-center">Pago</th>
			</tr>
			
			<?php foreach ($registros as $r){ ?>
			
				<tr>
					<td align="center">
						<?= $r['Registro']['id']; ?>
					</td>
					<td align="center">
						<?= $r['Evento']['nome']; ?>
					</td>
					<td align="center">
						<?= $r['Registro']['data']; ?>
					</td>
					<td align="center">
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

			<?php } ?> 


		</table>
	</div>
</div>