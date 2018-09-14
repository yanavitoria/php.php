<?php
session_star();
$_SESSION['Login'] = null;
session_destroy();
header("Location:../index.php");
?>