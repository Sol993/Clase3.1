<?php
	require_once "Empleado.php";

	$obj= new Empleado($_POST["Nom"],$_POST["Ape"],$_POST["Dni"],$_POST["Sex"],$_POST["Leg"],$_POST["Sueldo"]);
	
	var_dump($_POST);
	echo $obj->ToString();
	

	$ar=fopen("miArchivo.txt", "a+");
	
	if($ar)
		echo "</br>archivo creado";

	$cant = fwrite($ar, $obj->ToString());
	if($cant)
		echo "</br> archivo grabado";

	If(fclose($ar))
		echo "</br> archivo cerrado";


	//$fclose($ar);
	///abrir archivo para 			Se una espacio en un texto\r\n
	//Agregar empleados
	//empleados.txt





?>