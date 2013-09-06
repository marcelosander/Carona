<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
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
    
	//var $helpers = array('CakePtbr.Formatacao');
    // Componentes utilizados por toda a aplicação e mudança no redirecionamento da pagina inicial que o padrão é USER para USUARIO
	var $components = array('Session', 'Cookie', 'Auth' => array('loginAction' => array('controller' => 'usuarios','action' => 'login')));
	
	/*public $loginAction = array(
	'controller' => 'usuarios',
	'action' => 'login',
	'plugin' => null
	);*/
		
	public function isAuthorized($usuario) {
    	return TRUE;
	}
	
	public function beforeFilter() {
	
		// Model de usuários, Por padrão o cake assume que você terá um model "User" que tratará da tabela "users", é possível alterar isso também:
		//$this->Auth->userModel = 'Usuario';
		//$this->Auth->userModel = 'Usuario';
		//$this->Auth->usuarioModel = 'Pessoa';
		
		// Campos de usuário e senha modificando o padrão do cake (username e password)
		/*$this->Auth->fields = array(
			'username' => 'username',
			'password' => 'password'
		);*/
		$this->Auth->authenticate = array(
			'Form' => array(
				'userModel' => 'Usuario',
				'fields' => array(
				'username' => 'email',
				'password' => 'senha'
				)
			)
		);
		
		//pagina liberada!
		$this->Auth->allow('login', 'registrar');   //liberar paginas login e registrar
		
		
		$this->set('logged_in', $this->Auth->loggedIn());
		$this->set('current_user', $this->Auth->user());
		
		// Action da tela após o login (com sucesso)
		$this->Auth->loginRedirect = array(
			'controller' => 'usuarios',
			'action' => 'index'
		);
		
		// Action para redirecionamento após o logout
		$this->Auth->logoutRedirect = array(
			'controller' => 'usuarios',
			'action' => 'login'
		);
		
		// Mensagens de erro
		$this->Auth->authError = 'Area Restrita! Efetue login!'; // Mensagem ao entrar em area restrita
 		$this->Auth->loginError = 'Nome de usuario ou senha não conferem!'; // Mensagem quando não se autenticar
		//$this->Auth->loginError = __('Usuário e/ou senha incorreto(s)', true);
	    //$this->Auth->authError = __('Você precisa fazer login para acessar esta página', true);
	}
}
