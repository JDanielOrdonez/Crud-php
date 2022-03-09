<?php	
try{
	$conexion = new PDO('mysql:host=localhost;dbname=control_niño','root','');//localhost o 127.0.0.1	
	$resultados = $conexion->query('SELECT * FROM datos');



}catch(PDOException $e){
	echo "Error " . $e->getMessage();
}


?>