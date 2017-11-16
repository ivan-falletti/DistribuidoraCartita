<?php
	session_start();
	include 'Conexiones/conexion.php';
$re=mysql_query("SELECT * FROM usuarios where email='".$_POST['txtEmail']."' AND 
 					contrasenia='".$_POST['txtContrasenia']."'")	or die(mysql_error());
					
	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre'],
			'Apellido'=>$f['Apellido']
			);
	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		header("Location: ./index.php");
	}else{
		header("Location: ./iniciarsesion.php?error");
	}
?>