<?php


session_start();
if (trim($_POST['txtnombre'])=="" || trim($_POST['txtapellido'])=="" ) {
	$destino="login.php";

}else{
	$_SESSION["$nombre"] = $_POST["txtnombre"];
	$_SESSION["$apellido"] = $_POST["txtapellido"];

	$destino="usuario_menu.php";

}


header("location: $destino");


  
 ?>

 