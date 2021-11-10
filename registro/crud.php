<?php
//ARCHIVO QUE VA A SERVIR PARA CREAR LAS FUNCIONES DE MODELO DE BD
	if(!defined('DB_SERVER')){
		define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_NAME','php');
	}
	
function INSERTAR($tabla, $datos){
		try {
			$valores = "";
			$claves = "";

			foreach($datos as $clave => $valor){
				if(!$valores){
					$valores="('" . $valor . "'";
					$claves="(" . $clave;
				}else{
					$valores=$valores . ",'" . $valor . "'";
					$claves=$claves . "," . $clave;
				}
			}


			$valores=$valores . ")"; 
			$claves=$claves . ")"; 
			$sql = "INSERT INTO " . $tabla . $claves . "  VALUES " . $valores;
			
			$mbd = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME , DB_USERNAME, DB_PASSWORD);
			$mbd->query($sql);
				
		} catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		return 1;
	}
















	function Update($tabla, $datos, $id){
		try {
			if($id){				
				$valores = "";
				$claves = "";
				foreach($datos as $clave => $valor){		
					if(!$valores){
						$valores = $clave . " = '" . $valor . "'";
					}else{		
						$valores = $valores . "," . $clave . " = '" . $valor . "'";
						
					}
				}
				
				$sql = "UPDATE " . $tabla . " SET " . $valores . " WHERE id = " . $id;
				$mbd = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME , DB_USERNAME, DB_PASSWORD);
				$mbd->query($sql);
				return 1;
			}
		} catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		
		return 0;
	}


	function Delete($tabla, $id){	
		try {
			if($id){				
				$sql = "DELETE FROM " . $tabla . " WHERE id = " . $id;
				
				$mbd = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME , DB_USERNAME, DB_PASSWORD);
				$mbd->query($sql);
				return 1;
			}
		} catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
			die();
		}	
		return 0;
	}



//-----------------------------------
function getUser($tabla,$nombre,$pass){

try{


$sql = "SELECT * FROM ".$tabla.
" WHERE nombre = '".$nombre."' AND pass = '".$pass."'";

$conexion = new PDO('mysql:host=' . DB_SERVER .';dbname='.DB_NAME , DB_USERNAME,DB_PASSWORD);


$conexion->setAttribute(
	PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION
);


$salida = $conexion->query($sql);

return $salida->fetch();




}catch(PDOException $e){
	print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
}
return 0;
}

//--------------------------------------------------------


//-------------------procesos por usuario---- 
function getInforme($tabla,$nombre){

try{


$sql = "SELECT * FROM ".$tabla." WHERE usuario ='".$nombre."'";

$conexion = new PDO('mysql:host=' . DB_SERVER .';dbname='.DB_NAME , DB_USERNAME,DB_PASSWORD);


$conexion->setAttribute(
	PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION
);


$salida = $conexion->query($sql);

return $salida->fetchAll();




}catch(PDOException $e){
	print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
}
return 0;
}







//---------------------------------------------------------------

function LEER($tabla,$busqueda){
try{



$sql = "SELECT ".$busqueda." FROM ".$tabla;

//$sql2 = "SELECT documento FROM  docu_disponible";

$conexion = new PDO('mysql:host=' . DB_SERVER .';dbname='.DB_NAME , DB_USERNAME,DB_PASSWORD);


$conexion->setAttribute(
	PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION
);


$salida = $conexion->query($sql);

return $salida->fetchAll();




}catch(PDOException $e){
	print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
}
return 0;


}




	


?>