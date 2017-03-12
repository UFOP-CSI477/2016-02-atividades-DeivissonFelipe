<?php 

class AtletasController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('Flash');

	public function index(){
		$this->loadModel('Registro');
		$registros = $this->Registro->findAllByAtletaId($this->Session->read('User')[0]['Atleta']['id']);
		$this->set('registros', $registros);
	}
	
	public function cadastro(){
		
		if($this->Atleta->save($this->request->data)){
		 	$this->Flash->set('Atleta cadastrado com sucesso!');
		 	$this->redirect(array('action' => 'index'));
		}
		
	}

	public function incluirRegistro(){
		$this->loadModel('Evento');
		$this->loadModel('Registro');
		if(empty($this->request->data)){
			//Carregar os eventos - combo
			$eventos = $this->Evento->find('list', array('fields' => array('id', 'nome')));
			$this->set('eventos', $eventos);

			$ifPago = array(1 =>'Sim', 0 => 'Não');
			$this->set('ifPago', $ifPago);
		}
		else{
			//Persistir os dados
			if($this->Registro->save($this->request->data)){
				$this->Flash->set('Registro inserido com sucesso!');
				$this->redirect(array('action' => 'index'));
			}
		}
	}


	public function index_login(){
		
	}
	
	public function validar(){
		
		$usuario = $this->Atleta->findAllByLoginAndSenha($this->data['Atleta']['login'], $this->data['Atleta']['senha']);
		if(!empty($usuario))
			return $usuario;
		else
			return false;
	}

	public function login(){
		
		if(isset($this->data['Atleta']['login'])){
			
			$usuario = $this->validar();
			if($usuario != false){
				$this->Flash->set('Acesso realizado com sucesso!');
				$this->Session->write('User', $usuario);
				$this->redirect(array('action' => 'index'));
				exit();
			}
			else{
				$this->Flash->set('Usuario e/ou senha inválidos!');
				$this->redirect(array('action'=> 'index_login'));
				exit();
			}
			
		}	
		else{
			$this->redirect(array('action'=> 'index_login'));
			exit();
		}
	}

	public function logout(){
		$this->Session->destroy();
		$this->Flash->set('Atividades encerradas com sucesso!');
      	$this->redirect(array('action' => 'index_login'));
      	exit();
	}

}

