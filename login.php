<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Distribuidora Dorrego</title>
<link rel="stylesheet" href="menu.css" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000;
}
body {
	background-color: #CCC;
}
</style>

</head>

<body background="fotos/fondook.jpg">

<div id="arriba">
<div id="log">
<a href="index.php"><img src="fotos/logo.png"; width="500" height="133"/></a> </div>
<div class="text">
<label><font size="4"; color="#FFFFFF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ¡Bienvenido! <br/> Para ingresar, colocá tu e-mail y contraseña.</font></label></div>
<div class="imagen">
<img src="PAGINA/LOGOS/persona.png" width="70" height="70"/> </div>
</div>
<div id="abajo" align="center"> 
<div class="log" align="center">
<table width="200" border="0" align="center">

&nbsp;
    <form method="POST" action="">
        <label>Nombre de usuario: </label><input type="text" name="userlogin"><br/><br/>
        <label>Contrasena: </label><input type="password" name="pwlogin"><br/><br/>
        <input type="submit" name="iniciarsesion" value="Iniciar Sesion">
    </form>
     <?php

include("conexion.php");

if(isset($_POST['iniciarsesion']))
{
    if(isset($_POST['userlogin']) && !empty($_POST['userlogin']) &&
       isset($_POST['pwlogin']) && !empty($_POST['pwlogin']))
    {
		 $sqldos = "SELECT userpass, nombre, id_usuario FROM usuarios WHERE useremail='$_POST[userlogin]'";
         $recdos = mysqli_query($conexion,$sqldos);
		 
		 $sesion = mysqli_fetch_array($recdos);
		 
 		if(isset($_POST['pwlogin'], $sesion['userpass']))
        {
            $_SESSION['useremail'] = $sesion['nombre'];
            $_SESSION['userid'] = $sesion['id_usuario'];
            header("location: index.php");
        } else {
            echo "<br/>";
            echo "Combinacion erronea.";
        }
    }else{
        echo "<br/>";
        echo "Debes llenar ambos campos.";
    }
}
?>
<br /><br />
<a href="crearcuenta.php"><label><font size="2"> Registrarme </font></label></a>
</div>
</div>

</body>
</html>
