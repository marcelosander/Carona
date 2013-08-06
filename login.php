<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validação de Usuário</title>
</head>

<body>
<?php
$host = "localhost";
$user = "neno";
$pass = "s3gr3d0";
$banco = "neno";
$nome = $_POST['nome'];
$senha = $_POST['Senha'];
 
$con=mysqli_connect("localhost",$user,"s3gr3d0",$banco);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
$result = mysqli_query($con,"SELECT * FROM Cadastro WHERE Nome = '$nome' and Senha = '$senha'");
 
if ($row = mysqli_fetch_array($result))
{	
session_start();
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Bem-Vindo $nome  ')
    window.location.href='Bussiness00.php';
    </SCRIPT>");
} else {
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Usuario e senha Incorretos');
    window.location.href='Cadastra.html';
    </SCRIPT>");
}
mysqli_close($con);
?>


</body>
</html>