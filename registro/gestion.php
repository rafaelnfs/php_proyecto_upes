<?php 
include('crud.php');
session_start();


if($_SERVER['REQUEST_METHOD']=='POST'){

$datos = array(
	'dui' => $_REQUEST['dui'],
	'tipo' => $_REQUEST['tipoDocu'],
	'usuario'=>$_SESSION['nombre']
);

	INSERTAR('documentos',$datos);
}

header('Location:exitoso.php');

?>