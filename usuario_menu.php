<?php
     
  session_start();

     if (isset($_POST['btnagregar'])) {

     	        $n=$_POST['txtnombre'];
                $a=$_POST['txtapellido'];
     }

    if (isset($_POST['btnenviar'])) {
    
    $_SESSION[$_POST['txtproducto']]=$_POST['txtprecio'];

  }

 	
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
<form action="" method="post" accept-charset="utf-8" class="form-horizontal">
<div class="panel panel-primary">
		<div class="panel-heading">inicio de sesion: </div>
		<div class="panel-body">

		<div class="form-group">
		<label class="col-md-5 control-label">usuario:<?php echo "$n" ." $a"; ?>
        </label>
	    </div>
          
        <div class="form-group">
		<label class="col-md-5 control-label"><a href="carrito.php"> registrar compra</a></label>
	    <div class="form-group">
		<label class="col-md-5 control-label"><a href="borrar_carrito.php" <?php //target="_blank" ?> ">cerrar sesion </a></label>
	    </div>
	    </div>

		 
		<div class="form-group">
		<label class="col-md-5 control-label">carrito vacio:</label>
	    </div>
       
       
</form>
<?php if (count($_SESSION)>0) {
	
 ?>





<table class="table table-bordered">

	<tr>
		<th>productos</th>
		<th>precios</th>
		<th>cantidad</th>
	</tr>
	<?php foreach ($_SESSION as $producto => $valor){
		//$producto = mb_convert_case($producto, MB_CASE_TITLE, "UTF-8"); 
          $cantidad=$_POST['txtcantidad'];
	 ?>
	<tr>
		<td><?php echo $producto; ?></td>
		<td><?php echo $valor; ?></td>  
		<td><?php echo $cantidad; ?></td>
	</tr>
	<?php } ?>
	

</table>
<?php } ?>



		</div>
		</div>

		<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
