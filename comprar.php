<?php
	session_start();
	include("conexion.php");

	$user_id = $_SESSION["userid"];

	$numeroventa=0;
	$re=mysqli_query($conexion, "select * from compras order by numeroventa DESC limit 1");	
	while (	$f=mysql_fetch_array($re)) {
		$numeroventa=$f['numeroventa'];	
	}
	
	if($numeroventa==0){
		$numeroventa=1;
	}else{
		$numeroventa=$numeroventa+1;
	}

	// select cart products from database
	$sqldos = "SELECT p.id_producto, p.descripcion, p.precio, c.quantity 
				FROM cart_items c 
				INNER JOIN productos p ON c.product_id = p.id_producto 
				WHERE user_id='$user_id'";

	$recdos = mysqli_query($conexion, $sqldos);

	while ($row = mysqli_fetch_array($recdos, MYSQL_ASSOC)) {

		$nombre=$_POST['txtNombre'];
		$apellido=$_POST['txtApellido'];
		$dni=$_POST['txtDNI'];
		$provincia=$_POST['txtProvincia'];
		$localidad=$_POST['txtLocalidad'];
		$codpostal=$_POST['txtCodPostal'];
		$calle=$_POST['txtCalle'];
		$numcalle=$_POST['txtNumCalle'];
		$correo=$_POST['txtCorreo'];
		$titular=$_POST['txtTitular'];
		$tipotarj=$_POST['txtTarjeta'];
		$cuotas=$_POST['txtCuotas'];
		$numtarj=$_POST['txtNumTarj'];
		$vencimiento=$_POST['txtVtoTarj'];
		$seguridad=$_POST['txtSeguridad'];

		$codart=$row["id_producto"];
		$precio=$row["precio"];
		$cantidad=$row["quantity"];
		$subtotal=$row["precio"] * $row["quantity"];

		$sql="INSERT INTO compras (codart, precio, numeroventa, cantidad, nombre, apellido, dni, provincia, localidad, codpostal, calle, numcalle, email, titular, tipotarj, cuotas, numtarj, vtotarj, codseg, subtotal) 
				VALUES ('$codart','$precio', '$numeroventa', '$cantidad', '$nombre', '$apellido', '$dni', '$provincia', '$localidad', '$codpostal', '$calle', '$numcalle', '$correo', '$titular', '$tipotarj', '$cuotas', '$numtarj', '$vencimiento', '$seguridad',  '$subtotal')";
		
		mysqli_query($sql,$conexion);
	}

	// delete user cart data
	mysqli_query($conexion, "DELETE FROM cart_items WHERE user_id='$user_id'");
	
	header('Location: comprafinalizada.php');
?>