<?php 

class AdmsController extends AppController{

	public $helpers = array('Form', 'Html');
	public $components = array('Flash');

	public function index(){
		$this->loadModel('Registro');
		$registros = $this->Registro->find('all');
		$this->set('registros', $registros);

		//valor total
		//--------------------------------------->>
		$valorTotal = 0;
		foreach ($registros as $r) {
			$valorTotal += $r['Evento']['preco'];
		}
		$this->set('valor', $valorTotal);

		//quantidade total
		//--------------------------------------->>
		$registros = $this->Registro->find('all');
		$qtdRegistros = count($registros);
		$this->set('qtd', $qtdRegistros);		
	}

	
	public function listaAtletas(){
		$this->loadModel('Atletas');
		$atletas = $this->Atletas->find('all', array('order'=> "nome ASC"));
		$this->set('atletas', $atletas);
	}

	public function preencheEvento(){
		$registros = $this->Registro->find('list', array('fields' => array('id', 'evento_id')));
		$registrosPEventos = $this->Evento->find('list', array(
			'fields' => array('id', 'nome'),
			'conditions' => array("id" => $registros)
		));
		$this->set('eventos', $registrosPEventos);	
	}

	public function listaPorEvento(){
		$this->loadModel('Registro');
		$this->loadModel('Evento');
		if(empty($this->request->data)){
			//Preencher combo de eventos
			//--------------------------------------------------------------------------------------->>
			$this->preencheEvento();
			//--------------------------------------------------------------------------------------->>
		}
		else{
			//Preencher combo de eventos
			//--------------------------------------------------------------------------------------->>
			$this->preencheEvento();
			//--------------------------------------------------------------------------------------->>

			//Seleção de Registros que estão relacionados com o evento selecionado
			//--------------------------------------------------------------------------------------->>
			$registros = $this->Registro->find('all', array('conditions' => array("evento_id" => $this->request->data['Evento']['evento_id'])));
			$this->set('registros', $registros);
			//--------------------------------------------------------------------------------------->>

			//valor total
			//--------------------------------------->>
			$valorTotal = 0;
			foreach ($registros as $r) {
				$valorTotal += $r['Evento']['preco'];
			}
			$this->set('valor', $valorTotal);

			//quantidade total
			//--------------------------------------->>
			$qtdRegistros = count($registros);
			$this->set('qtd', $qtdRegistros);

		}
	}

	public function preencheAtleta(){
		$registros = $this->Registro->find('list', array('fields' => array('id', 'atleta_id')));
		$registrosPAtletas = $this->Atleta->find('list', array(
			'fields' => array('id', 'nome'),
			'conditions' => array("id" => $registros)
		));
		$this->set('atletas', $registrosPAtletas);

	}
	
	public function listaPorAtletas(){

		$this->loadModel('Registro');
		$this->loadModel('Atleta');
		if(empty($this->request->data)){
			
			//Preencher combo de atletas
			//--------------------------------------------------------------------------------------->>
			$this->preencheAtleta();
			//--------------------------------------------------------------------------------------->>
		}
		else{
			//Preencher combo de atletas
			//--------------------------------------------------------------------------------------->>
			$this->preencheAtleta();
			//--------------------------------------------------------------------------------------->>

			//Seleção de Registros que estão relacionados com o atleta selecionado
			//--------------------------------------------------------------------------------------->>
			$registros = $this->Registro->find('all', array('conditions' => array("atleta_id" => $this->request->data['Atleta']['atleta_id'])));
			$this->set('registros', $registros);
			//--------------------------------------------------------------------------------------->>

			//valor total
			//--------------------------------------->>
			$valorTotal = 0;
			foreach ($registros as $r) {
				$valorTotal += $r['Evento']['preco'];
			}
			$this->set('valor', $valorTotal);

			//quantidade total
			//--------------------------------------->>
			$qtdRegistros = count($registros);
			$this->set('qtd', $qtdRegistros);
			
		}

	}


}

 ?>