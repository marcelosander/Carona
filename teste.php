<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="estilos/layout.css" /> <!-- chama o estilo no css -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tela de login</title>
</head>

<body>
<center><center>
  <img src="https://www.faccat.br/portal/sites/default/files/logo_azul_2.png" />
</center>
<br />
<font size="+3" face="Lucida Sans Unicode, Lucida Grande, sans-serif">Bem-vindo ao Business Game FACCAT</font>
<div align = center><form name="teste" action="login.php" method="post">

<font face="Lucida Sans Unicode, Lucida Grande, sans-serif"><label for="nome"> Nome: </label></font>
<input type ="Text" name="nome" required="required" placeholder="Digite Seu Nome" class="nome"/>
<br />
<font face="Lucida Sans Unicode, Lucida Grande, sans-serif"><label for="Senha">Senha:     </label></font>
<input type="password" name="Senha" required="required" placeholder="Digite Sua Senha"/>
<font face="Lucida Sans Unicode, Lucida Grande, sans-serif"><br />É Aluno da Faccat: 
<label for ="Aluno">Sim</label>
<input type="radio" name="Aluno"/>
<label for="no">Não</label>
<input type="radio" name="Aluno"  />
<br /></font>
<input name="login" type="submit" value="Login" class="botaoEnviar" />
<br /> 
</form></div></center>
<font class="text" face="Lucida Sans Unicode, Lucida Grande, sans-serif">Se você não possui um cadastro, clique no botão abaixo</font>
<br />
<form name="cadastro" action="Cadastra.html" method="post">
<input name="cadastre-se" type="submit" value="cadastre-se" class="botao2" />
</form>

</body>
</html>