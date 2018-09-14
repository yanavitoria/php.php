<?php
session_start();
if($_SESSION['Login'] == null) {
	header("Location:../aula.php");
} else {
	echo "Bem Vindo  ". $_SESSION['Login'];
}
?>
<br><br>
<a href="../Controle/Sair.php"> Sair</a>
