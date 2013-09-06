<?php
class UsuariosController extends AppController
{
	public $name = 'Usuarios';
	
	public function index(){
		
	}
	
	public function registrar()
	{
		if($this->data){
			if($this->Usuario->save($this->data)){ //chama o método save, O método save irá, por padrão, procurar uma tabela que seja o plural do próprio modelo
				$this->Session->setFlash('Dados inseridos com sucesso!'); //O setFlash apresenta uma mensagem básica para o usuário
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Houve um erro ao cadatrar usuário!'); 		
			}
		}
	}	
	
	public function isAuthorized($usuario)
	{
	   return TRUE;
	}
	
	/*public function login()
	{
    	if($this->Auth->login())
    	{
        	$this->redirect($this->Auth->redirect());
    	} else {
        	//$this->Session->setFlash('Seu username/password está incorreto');
      	}
	}*/
	
	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
				$this->Session->setFlash(__('Username ou password inválido, tente novamente')); 
			} 
		} 
	}
	
	
	public function logout()
	{
	   $this->redirect($this->Auth->logout());
	}
	
	
	
}
?>