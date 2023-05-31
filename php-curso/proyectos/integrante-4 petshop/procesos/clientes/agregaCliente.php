<?php 

session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Clientes.php";

	$obj= new clientes();
	//funcion limpiar datos
	function limpiarDatos($datos)
	{
   	 $datos = trim($datos); //trim borra espacios al inicio y al final de la cadena
   	 $datos = stripslashes($datos); //funcion que elimina / para evitar inyeccion de codigo
   	 $datos = htmlspecialchars($datos); //convierte los caracteres especiales en identidades php
   	 return $datos; 

	 }

	$datos=array(
		limpiarDatos($_POST['nombre']),
		limpiarDatos($_POST['apellidos']),
		limpiarDatos($_POST['direccion']),
		limpiarDatos($_POST['email']),
		limpiarDatos($_POST['telefono']),
		limpiarDatos($_POST['rfc'])
				);

	echo $obj->agregaCliente($datos);

	
	
 ?>