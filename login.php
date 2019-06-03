<?php
//if (isset($_POST['btnagregar'])) {
//}
//inicio de sesion
/*session_start();
if (isset($_POST['btnagregar'])) {

	$_SESSION[$_POST['txtproducto']]=$_POST['txtprecio'];
  }

 /* if (isset($_POST['btnlimpiar'])) {
  	session_unset();
  	session_destroy();//para eliminar sesion
  } */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- El VIEWPORT permite el funcion de diseño responsivo o adaptable a pantalla -->
	<meta name="viewport" content="whidth=divice-whidth, initial-scale=1">
	<title>PRACTICA DE SESIONES</title>
	<!-- AÑADIENDO BOOTSTRAP-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
<div class="container">
<div class="col-md-6">
<form action="usuario_menu.php" method="post" accept-charset="utf-8" class="form-horizontal">
<div class="panel panel-primary">
		<div class="panel-heading">LISTA DE PRODUCTOS </div>
		<div class="panel-body">
	<?php  //<h4>registro de productos</h4>?>

	<div class="form-group">
	<label class="col-md-2 control-label" >Nombres:</label>
	<div class="col-md-5">
	<input type="text" name="txtnombre" class="form-control input-md ">
	</div>
	</div>

	<br>
     
    <div class="form-group">
	<label class="col-md-2 control-label">Apellido:</label>
	<div class="col-md-5">
	<input type="text" name="txtapellido" class="form-control input-md">
	</div>
    </div>

	<br>
	<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<button type="submit" name="btnagregar" class="btn btn-primary">Enviar</button>
	<?php  //<button type="submit" name="btnlimpiar" class="btn btn-danger">limpiar</button>?>
	</div>


</form>

 <?php 

 /*  
<?php if (count($_SESSION)>0) {
	
 ?>
<table class="table table-bordered">

	<tr>
		<th>productos</th>
		<th>precios</th>
	</tr>
	<?php foreach ($_SESSION as $nombre => $valor) {
		$nombre = mb_convert_case($nombre, MB_CASE_TITLE, "UTF-8"); 
	 ?>
	<tr>
		<td><?php echo $nombre; ?></td>
		<td><?php echo $valor; ?></td>  
	</tr>
	<?php } ?>

</table>
*?>
<a href="productos_delete.php" <?php //target="_blank" ?> ">Eliminar sesion</a>

<?php } */?>

</div>
</div>

<!--AÑADIENDO BOOTSTRAP.JS Y JQUERY-->
<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>