<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array('DebugKit.Toolbar', 'Session');
	

	public function afterFilter(){

		if(	
			!($this->params['controller'] == 'pages' && $this->action == 'display') &&
			!($this->params['controller'] == 'produtos' && $this->action == 'index') &&
			!($this->params['controller'] == 'users' && $this->action == 'cadastro')

		){

			if($this->action != 'index_login'){ 
				$this->autenticar();
			}
				
		}

	}

	public function autenticar(){

		 if(!$this->Session->check('User')){
			$this->redirect(array('controller' => 'users', 'action' => 'index_login'));
		 	exit();
		 }
		 
	}

}
