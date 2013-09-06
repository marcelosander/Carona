<?php
class Usuario extends AppModel
{
        public $name = 'Usuario';
		public $useTable = "pessoa";
		
		/*public function beforeValidate(){
		   if($this->data['Usuario']['telefoneResidencial'] == ''){
		   			alert('residencial em branco');
		           // set($this->validate['telefoneCelular']);
		   } else if($this->data['Usuario']['telefoneCelular'] == ''){
		   			alert('celular em branco');
		           // set($this->validate['telefoneResidencial']);
		   }
		}*/
		
		var $validate = array(
			//'username' => 'notEmpty',
			//'username' => '/^.{6,40}$/',
			'email' => array(
				'rule' => 'email',
                'rule'    => 'isUnique',//array('between', 6, 15),
                'message' => 'O Username já existe. Por favor tente outro!'//'Username deve ter entre 6 e 15 caracteres'
            ),
			'senha' => array(
				'rule' => array('minLength', 6),
				'message' => 'A senha deve ter entre 6 e 40 caracteres'
				),
			//'email' => 'email',
			'nome' => array(
				'notempty' => array(
				'rule' => 'notempty',
				'message' => 'Você deve preencher este campo')),
				
			/*'telefoneResidencial' => array(
				'notempty' => array(
				'rule' => 'notempty',
				'message' => 'Você deve preencher este campo')),
				
			'telefoneCelular' => array(
				'notempty' => array(
				'rule' => 'notempty',
				'message' => 'Você deve preencher este campo')),*/
			
		);
					
		//criptografar senha
		public function beforeSave($options = array()) {
		    if (isset($this->data[$this->alias]['senha'])) {
		        $this->data[$this->alias]['senha'] = AuthComponent::password($this->data[$this->alias]['senha']);
		    }
		    return true;
		}	
}
?>