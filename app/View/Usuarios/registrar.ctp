<!--<form action="/teste/users/register" method="post" name="form">
<h2>Preencha os campos abaixo:</h2>
<label>UserName:</label><input name="username" size="40" />

<label>Senha:</label><input type="password" name="password" size="40"/>

<label>Email:</label><input name="email" size="40" maxlength="255" />

<label>Nome:</label><input name="first_name" size="40" />

<label>Sobrenome:</label><input name="last_name" size="40" />

<input type="submit" value="REGISTRAR" name="register"/>
</form>-->

<!--<h2>Preencha os campos abaixo:</h2>
<?php
echo $this->Form->Create('Usuario',array('action' => 'registrar')),
	 $this->Form->input('username'), //array('after' => $form->error('username_unique', 'The username is taken. Please try again.'))),
	 $this->Form->input('password', array('type' => 'password')),
	 //$this->Form->input('password_confirmation', array('type' => 'password')),
	 $this->Form->input('email'),
	 $this->Form->input('first_name'),
	 $this->Form->input('last_name'),
	 $this->Form->end('Registrar');
	 //$this->Form->submit('enviar');
	 //$this->Form->reset('resetar');
	 //$this->Form->end();
	 //$this->Form->button('Cancelar');
	 //$this->Form->input ('Cancel',array('type' => 'reset')),
     //$this->Form->end();
?>-->
<?php 
	$this->Html->css('registrarCss', null, array('inline' => false)); 
	$opcoesSexo = array('m'=>'Masculino','f'=>'Feminino');
	$opcoesFumante = array('n'=>'Não','s'=>'Sim');
?>

<?php echo $this->Form->Create('Usuario',array('action' => 'registrar')) ?>
<div class="sombra">
<div class="principal">
	<div class="cabecalho">EFETUE REGISTRO</div>
	<div class="ladoA">
		<div class="campos">
			<?php echo $this->Form->input('nome')?>
		</div>
		<div class="campos">
			<?php echo $this->Form->input('email')?>
		</div>
		<div class="campos">
			<?php echo $this->Form->input('senha', array('type' => 'password'))?>
		</div>
		<div class="dupla">
			<div class="camposRadio">
				<?php echo $this->Form->input('sexo', array(
											  'type'    => 'radio',
											  'options' => $opcoesSexo,
											  'default' => 'm',
											 ))
				?>
			</div>
			<div class="camposData">
				<?php echo $this->Form->input('dataDeNascimento', array('type'=> 'date','dateFormat' => 'DMY', 'minYear' => date('1950'),
	                                             'maxYear' => date('Y'),'value'=>'1987-02-12','empty'=>false))?>
			</div>
		</div>
	</div>
	<div class="ladoB">
		<div class="campos">
			<?php echo $this->Form->input('telefoneResidencial')?>
		</div>
		<div class="campos">
			<?php echo $this->Form->input('telefoneCelular')?>
		</div>
		<div class="campos">
			<?php echo $this->Form->input('idMunicipio')?>
		</div>
		<div class="camposImagem">
			<?php echo $this->Form->input('fotografia', array('type' => 'file'))?>
		</div>
	</div>
	<?php echo $this->Form->end('Registrar')?>
</div>
</div>

<?php

	 //sexo
	 //$this->Form->input('sexo', array('type'=>'select')),
	 /*$this->Form->input('idMunicipio', array(
	    'type'    => 'select',
	    'options' => $opcoesCidade,
	    'empty'   => false ou 'Selecione o sexo'
	 )),*/
	 /*$this->Form->input('fumante', array(
	 	'type'    => 'radio',
	    'options' => $opcoesFumante,
	    'default' => 'n',
	 ));*/
	 //qualificaçoes???
	 //fotografia
	 //$this->Form->input('password_confirmation', array('type' => 'password')), 
	 //$this->Form->input('cidade', array('id'=>'estado', 'type'=>'select', 'options'=>$estado));
	 //$this->Form->select( 'Usuario.nome_da_coluna_da_lista_que_você_recuperou', $selecao );
	 
	
	 //$this->Form->submit('enviar');
	 //$this->Form->reset('resetar');
	 //$this->Form->end();
	 //$this->Form->button('Cancelar');
	 //$this->Form->input ('Cancel',array('type' => 'reset')),
     //$this->Form->end();
?>