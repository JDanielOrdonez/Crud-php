<?php 

$id_niños = $_POST['id_niño'];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$vacunado = $_POST["vacunado"];
$estatura = $_POST["estatura"];
$peso = $_POST["peso"];
$genero = $_POST["genero"];
$tipo_sangre = $_POST["tipo_sangre"];

echo $id_niños;
include '../bd/conexion.php';                 


try {
	if (empty($nombre) or empty($apellido) or empty($edad) or empty($direccion) or empty($vacunado) or empty($estatura) or empty($peso) or empty($genero) or empty($tipo_sangre)) {
 		echo "Lo siento hubo un problema";
 	}else{
	 	#todo se encierran dentro de comillas dobles para poder poner comillas simples en la consulta
	 	#Inserta dentro de usuarios en los valores de id,nombre y email los valores(values) siguientes	 	
 		$sql = "UPDATE `datos` SET `nombre` = '".$nombre."', `apellido` = '".$apellido."', `edad` = '".$edad."', `direccion` = '".$direccion."', `vacunado` = '".$vacunado."', `estatura` = '".$estatura."', `peso` = '".$peso."', `genero` = '".$genero."', `tipo_sangre` = '".$tipo_sangre."' WHERE `datos`.`id_niños` = '".$id_niños."'"; 


	 	$conexion->query($sql);#el metodo query permite ejecutar consultas	 
		header('Location: ../index.php');
	}

} catch (Exception $e) {
	
}
// el valor


 ?>