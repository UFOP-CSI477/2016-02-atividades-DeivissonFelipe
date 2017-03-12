<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<?= $this->Html->link("Lista de Registros",	array('controller' => 'adms', 'action' => 'index')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Registros - Evento",	array('controller' => 'adms', 'action' => 'listaPorEvento')); ?>
			</li>
			<li align= "center">
				<?= $this->Html->link("Registros - Atleta",	array('controller' => 'adms', 'action' => 'listaPorAtletas')); ?>
			</li>
		</ul>

	</div>


	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Lista de Atletas</h4>
		<br>
		<table class="table table-striped table-bordered">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Atleta</th>
			</tr>
			
			<?php foreach ($atletas as $a){ ?>
			
				<tr>
					<td align="center">
						<?= $a['Atletas']['id']; ?>
					</td>
					<td align="center">
						<?= $a['Atletas']['nome']; ?>
					</td>
				</tr>

			<?php } ?> 
		</table>
	</div>
</div>