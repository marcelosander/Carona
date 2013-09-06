<?php
/**
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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><!--<?php echo $this->Html->link(
					$this->Html->image('carona-icon.png'),
					array('controller' => 'users', 'action' => 'index'),
					array('escape' => false)
				); ?>-->
				<!-- AuthComponent -->
				<div id="login">
					<?php if($logged_in): ?>
						Bem Vindo(a) <?php echo $current_user['nome']; ?>! - <?php echo $this->Html->link('Logout', array('controller' => 'usuarios', 'action' => 'logout')); ?>
					<?php else: ?>
						<?php echo $this->Html->link('Login', array('controller' => 'usuarios', 'action' => 'login')); ?>
					<?php endif; ?>	
				</div>
				<!-- End of AuthComponent -->
			</h1>
		</div>
		<div id="content">
			<?php echo
				$this->Session->flash(); 
				$this->Session->flash('auth');
			?> 

			<!--<?php echo $this->Session->flash(); ?>-->

			<?php echo $this->fetch('content'); ?> <!--conteudo da pag-->
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.png', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
