<!--<h2>EFETUE LOGIN</h2>-->

<!--<?php
echo $this->Session->flash('auth'); // Exibimos qualquer erro que possa ter ocorrido
echo $this->Form->create('User' , array('action' => 'login'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('LOGAR');
?>-->


<!--<?php echo $this->Session->Flash('auth') ?>	-->
<div id="principal">
	<div id="sombraLogin">
			<div id="caixaLogin">
			  	<div id="cabecalhoLogin">EFETUE LOGIN</div>
				<?php $this->Html->css('loginCss', null, array('inline' => false)); ?>
				<?php echo $this->Form->create('Usuario', array('action' => 'login')) ?>
				<div class="campos" id="campoUsuario">
					<?php echo $this->Form->input('email') ?>
				</div>
				<div class="campos" id="campoSenha">
					<?php echo $this->Form->input('senha', array('type' => 'password')) ?>
				</div>
				<div class="botao" id="botaoDiv">
					<?php echo $this->Form->end('ENTRAR') ?>
				</div>
				<div class="link" id="linkDiv">
					<?php echo $this->Html->link('Cadastrar novo Usuário', array('action' => 'registrar')); ?>
				</div>
			</div>
		</div>
	<div id="logo"></div>
</div>

<!--<form name="User" method="post" action="login">
  <div id="sombraLogin">
	<div id="caixaLogin">
	  <div id="cabecalhoLogin">LOGIN</div>
	  <div class="campos" id="campoUsuario">
		<input type="text" placeholder="Usuario" name="username" id="username" required autofocus/>
	  </div>
	  <div class="campos" id="campoSenha">
		<input type="password" placeholder="Senha" name="password" id="password" required/>
	  </div>
	  <div id="botaoDiv">
		<input class="botao" type="submit" name="Submit" value="Enviar">
	  </div>
	</div>
  </div>
</form>-->

<!--<h2>Login</h2>
<?php
	echo $this->Form->create();
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->end('Login');
?>

<h1>
	<?php echo $this->Html->link('Cadastrar novo Usuário', array('action' => 'register')); ?>
</h1>-->