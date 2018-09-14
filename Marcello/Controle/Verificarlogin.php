<?php
$Login = $_POST['login'];
$Senha = $_POST['senha'];
if ($Login == "admin" && $Senha == "123456"){
	session_start();
	$_SESSION['Login'] = $Login;
	$_SESSION['senha'] = $Senha;
	header("Location:../aluno/index.php");

} else {
	header("Location:../aula.php");

}
?>