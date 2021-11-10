
<?php
include('nav2.php');

include('crud.php');
session_start();

$informe = getInforme('documentos',$_SESSION['nombre']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>---Informe---</title>
</head>
<body>
<hr>

<div class="w3-container">
	
	<h2 class="w3-center">Seccion de Informes</h2>
	
</div>


<div class="w3-panel w3-pale-blue w3-leftbar w3-rightbar w3-border-blue w3-content">
  <p>Algunos Procesos Pueden tardar un Poco mas que Otros</p>
</div>


<table class="w3-table-all w3-hoverable ">
	<tr>
		<th>Tipo</th>
		<th>Usuario</th>
		<th>Fecha</th>
		
	</tr>


<?php foreach ($informe as $dato): ?>
	<tr>
		<td> <?php echo $dato['tipo']?></td>
		<td> <?php echo $dato['usuario']?></td>
		<td> <?php echo $dato['fecha']?></td>
	</tr>
<?php endforeach; ?>


</table>


</body>
</html>