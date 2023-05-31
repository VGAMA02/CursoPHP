<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Categorias.php";
	$fecha=date("Y-m-d");
	//funcion limpiar datos
	function limpiarDatos($datos)
	{
   	 $datos = trim($datos); //trim borra espacios al inicio y al final de la cadena
   	 $datos = stripslashes($datos); //funcion que elimina / para evitar inyeccion de codigo
   	 $datos = htmlspecialchars($datos); //convierte los caracteres especiales en identidades php
   	 return $datos; 

	 }
	$idusuario= limpiarDatos($_SESSION['iduser']);
	$categoria= limpiarDatos($_POST['categoria']);

	$datos=array(
		$idusuario,
		$categoria,
		$fecha
				);

	$obj= new categorias();

	echo $obj->agregaCategoria($datos);


 ?>