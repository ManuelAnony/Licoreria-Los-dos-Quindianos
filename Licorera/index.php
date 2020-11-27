<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Los dos Quindianos</title>
</head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<body>
<div class="contenedor">
<center>
	<form method="post">
    	<h1>¡Registro producto!</h1>
   	  <input type="text" name="tipo" placeholder="Tipo de licor">    
   	  	<input type="text" name="marca" placeholder="Marca">
    	<input type="text" name="cantidad" placeholder="Cantidad">
    	<input type="text" name="anejo" placeholder="Tiempo de añejo">
    	<input type="text" name="registro" placeholder="Registro invima">

    	
    	<input type="submit" name="register">
</form>
	
<?php
	include ("register.php");
	?>
	
	
		</div>
</body>
</html>