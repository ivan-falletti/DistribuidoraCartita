<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Distribuidora Dorrego</title>
<link rel="stylesheet" href="menu.css" type="text/css" />
<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
<label><font size="4"; color="#FFFFFF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ¡Bienvenido! <br/> Registrate y conocé nuestros productos.</font></label></div>
<div class="imagen">
<img src="PAGINA/LOGOS/persona.png" width="70" height="70"/> </div>
</div>

<div id="abajo1" align="center"> 
<div class="log1" align="center">
<table width="200" border="0" align="center">
&nbsp;
	<form method="POST" action="">
    <tr>
			<div class="row">
    <b>NOMBRE*</b><br />
		<input type="text" name="usernombre" size="45"><br />
        	</div>
    </tr>
    
    <tr>
			 <div class="row">
    <b>APELLIDO*</b><br />
   		 <input type="text" name="userapellido"  size="45"><br />
   			 </div>
    </tr>
		
     <tr>
	 		<div class="row">
     <b>DNI*</b><br />
        <input type="text" name="userdni" size="45"><br />
        	 </div>
    </tr>
    
    <tr>
	 		<div class="row">
     <b>TELEFONO*</b><br />
     <input type="text" name="usertel" size="45"><br />
      		</div>
    </tr>
    
    <tr>
	 		<div class="row">
     <b>LOCALIDAD*</b><br/>
        <input type="text" name="userloc" size="45"><br />
       		 </div>
    </tr>
    
    <tr>
	 		<div class="row">
     <b>DIRECCION*</b><br />
		<input type="text" name="userdir" size="45"><br />
        	</div>
    </tr>
    
    <tr>
	 		<div class="row">
     <b>EMAIL*</b><br />
        <input type="text" name="useremail" size="45"><br />
        	</div>
    </tr>
    
    <tr>
	 		<div class="row">
     <b>CONTRASEÑA*</b><br />
        <input type="password" name="userpass" size="45"><br />
        	</div>
    </tr>
    
    <tr>
	 		<div class="row">
     <b>REPETIR CONTRASEÑA*</b><br />
        <input type="password" name="repuserpass" size="45"><br />
        	</div>
    </tr>
    <tr>
    <br />
    <div class="g-recaptcha" data-sitekey="6LcTpwcUAAAAAPdx0txPN3WGtfunftrZAwP0riWG">
    </div>
    </td>
    <br />
  </tr>
  <input type="submit" id="insertar" name="registrar" value="REGISTRARME"> &nbsp;
  <input type="submit" id="insertar" name="cancelar" value="CANCELAR">
   <label><font size="2"> 
   <br /><br />* Campos Obligatorios</font></label>
    </table>
	</form>
<?php

        include("conexion.php");

        if(isset($_POST['registrar']))
        {
        	if($_POST['usernombre'] == '' 
			or $_POST['userapellido'] == ''
			or $_POST['userdni'] == ''
			or $_POST['usertel'] == ''
			or $_POST['userloc'] == ''
			or $_POST['userdir'] == ''
			or $_POST['useremail'] == ''
			or $_POST['userpass'] == ''
			or $_POST['repuserpass'] == '')
    {
		echo "<font color=\#red\">Debe llenar todos los campos por favor.</font>";
    }else{
        
             $sql = 'SELECT * FROM usuarios';
             $rec = mysqli_query($conexion,$sql);
             $verificar = 0;
        
             while($resultado = mysqli_fetch_object($rec))
             {
                 if($resultado->useremail == $_POST['useremail'])
                 {
                     $verificar = 1;
                 }
             }
             if($verificar == 0)
             {
				 if($_POST['userpass'] == $_POST['repuserpass'])
				 {
                         $nom = $_POST['usernombre'];
                         $ape = $_POST['userapellido'];
						 $dni = $_POST['userdni'];
						 $tel = $_POST['usertel'];
						 $loc = $_POST['userloc'];
						 $dir = $_POST['userdir'];
						 $email = $_POST['useremail'];
						 $pass = $_POST['userpass'];
						 $reppass = $_POST['repuserpass'];
						 
						 $conexion->query("INSERT INTO usuarios (nombre,apellido, dni, tel, loc, dir, useremail, userpass, repuserpass) VALUES ('$nom','$ape', '$dni','$tel','$loc','$dir','$email', '$pass', '$reppass')");
                         mysqli_query($conexion,$sql);
						 echo "<font color=\#red\">Te has registrado con exito.</font>";
            }
			else{
				 echo "<font color=\#red\">Las contraseñas no coinciden.</font>";
				}
                         
                 
                 
             }else{
				echo "<font color=\#red\">El email ingresado ya esta en nuestra base de datos.</font>";
              }
        }
        }
	?>
</div>
</div>

</body>

</html>
