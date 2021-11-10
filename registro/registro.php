<?php

include('crud.php');
include('nav.php');
// metodo para saber si hay datos por post

if($_SERVER['REQUEST_METHOD']=='POST'){

	$array = array(
		'nombre' =>$_REQUEST['nombre'],
		'pass' => $_REQUEST['pass']

	);
	// tabla 
	INSERTAR('registrados',$array);

	 
}




?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Registro</title>
</head>
<body>




<hr>
<div class="w3-content">
	
	<h3>Registrate</h3>
</div>


<div class="w3-content" >


<form class="w3-container  w3-card" 

		action="<?php $_SERVER['PHP_SELF']; ?>" 

			method="post">

<label class="w3-text-blue"><b>usuario</b></label>
<input class="w3-input w3-border" type="text" name="nombre">

<label class="w3-text-blue"><b>Contraseña</b></label>
<input class="w3-input w3-border" type="password" name="pass">


<hr>
<button class="w3-btn w3-blue" type="submit">Registrar</button>
 <hr>
</form>

</div>




</body>
</html>