
<?php
include('nav2.php');
include('crud.php');

session_start();

if(isset($_SESSION['nombre'])){

$documentos = LEER('docu_disponible','documento');



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Sistema</title>
	
</head>
<body>





<hr >

<div class="w3-content ">
	<h2 class="w3-center">Bienvenido al sistema <?php echo strtoupper($_SESSION['nombre']);?>
	<i class="fa fa-home"></i>
</h2>

</div>

<div class="w3-content">





</div>

<div class="w3-content">

	<form class="w3-container" action="gestion.php" method="post">

	<label>Documento que Necesita: </label>

<select name="tipoDocu" class="w3-select w3-border">

<?php  foreach ($documentos as $dato): ?>
<option value="<?php echo $dato['documento']?>" >
<?php echo $dato['documento'] ?>
</option>
<?php endforeach;?>

</select>

<label>Numero de DUI: </label>
<input type="number" name="dui" class="w3-input">



<hr>
<button class="w3-button w3-blue " type="submit"> Enviar Gestion</button>
	</form>

</div>






</body>
</html>
<?php 
}else{
	header('Location:registrados.php');
}
?>
