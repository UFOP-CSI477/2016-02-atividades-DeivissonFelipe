<?php 

class EventosController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('Flash');

	public function index(){
		$this->loadModel('Eventos');
		
		$eventos = $this->Eventos->find('all', array('order'=> "data ASC"));
		$this->set('eventos', $eventos);
	}
}