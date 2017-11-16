<?php
session_start(); 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/boton.css">

<link rel="stylesheet" href="css/bienvenido.css">
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/menuvertical.css" />
<link rel="stylesheet" href="css/estilo1.css" />
<link rel="stylesheet" href="css/galeria.css">
<script type="text/javascript"  href="js/scripts.js"></script>
<script src="js/jquery-1.7.min.js" type="text/javascript" charset="utf-8"></script>
   
<title>Bienvenido</title>
</head>
<body>
<div id="contenedorb">
		<div id="encabezadob">
    	<table width="100%" height="100px" align="right" cellspacing="0">
		<tr>
  		<td width="148" rowspan="2"><a href="index.php"><img src="imagenes/SP-LOGO.gif" width="100px" height="100px" title="SOPhone"/></a>		</td>
        <td width="774" rowspan="2"><img src="imagenes/bannerenc.png" width="700px" height="100px" /></td>
  		<td width="94" height="66" align="right"><a href="login.php"><img src="imagenes/iconos/micuenta.png" height="40px" 	width="40px" title="Mi Cuenta"/></a>
        <a href="registrarse.php"><img src="imagenes/iconos/registrarse.png" height="40px" width="40px" title="Registrarse" />				</a>	</td>
		</tr>
 		<tr>
  		<td align="right"><img src="imagenes/face.png" height="40px" width="40px" title="Facebook"/>
				   <img src="imagenes/tt.png" height="40px" width="40px" title="twitter"/></td>
		</tr>
	</table>
  	</div>
		<ul id="nav">
	  	<table width="100%">
	    <tr>
	      <td width="73%"><li><a href="index.php">Inicio</a></li>
	        <li><a href="producto.php">Productos</a></li>
	        <li><a href="quienessomos.html">Quienes Somos</a></li>
	        <li><a href="contacto.html">Contacto</a></li>
	        <li><a href="sucursal.html">Sucursales</a></li>
	        <li><a href="login/cerrar.php">Salir</a></li></td>
	      <td width="4%"><img src="imagenes/iconos/buscar.png" width="35" height="35" /></td>
	      <td width="18%"align="right"><input name="Buscador" type="text" size="30px"  height="50px"/></td>
	      <td width="5%" align="right"><a href="admin.php"><img src="imagenes/carrito.png" width="50" height="40" /> </a></td>
        </tr>
      </table>
  </ul>

  <div id="bienvenido">
  <br />
  <center><font face="Trebuchet MS, Arial, Helvetica, sans-serif"  color="#666666" size="+3">Inicio de Sesion Correcto</font></center>
  <br />
  <center><img src="imagenes/ayuda.png" width="400" height="300" /></center>
                 </div> 
  <div id="pieb">
			<table width="100%" height="100%">
			<tr>
				<td width="30%" height="40%"><img src="imagenes/iconos/terminoscond.png" height="40" width="40" /><font color="#FFFFFF"> Terminos y Condiciones</font></td>
				<td width="40%" height="40%"><img src="imagenes/iconos/ubicacion.png" height="40" width="40"/><font color="#FFFFFF"> Nos Encontramos en Maipu 314, 				Galvez, Santa Fe</font>
				</td>
				<td width="30%" height="40%">
				<img src="imagenes/iconos/contacto.png" height="40" width="40"/>
				<font color="#FFFFFF">Comunicate a sophone@hotmail.com.ar</font>
				</td>
			</tr>
			</table>
		</div>
</div>
</body>
</html>