<?php include("header.php");?>

<div id="cuerpo">
<br /><br /><br /><br />
<div id="camino"><blockquote><a href="index.php"><text style="color:#000;">Inicio</text></a> / <a href="contacto.php"><text style="color:#06c">Contactos</text></a>  </blockquote>
</div>

<div class="medio">
<div class="log2" align="center">
<table width="200" border="0" align="center">

<label> <b><font size="10">CONTACTANOS</font></b> </label> 
<br /><br /><br />
	<form method="POST" action="">
    <tr>
			<div class="row">
    <b>NOMBRE*</b><br />
		<input type="text" name="usernombre" size="54"><br />
        	</div>
    </tr>
 <tr>
			 <div class="row">
    <b>APELLIDO*</b><br />
   		 <input type="text" name="userapellido"  size="54"><br />
   			 </div>
    </tr>
 <tr>
	 		<div class="row">
     <b>EMAIL*</b><br />
        <input type="text" name="useremail" size="54"><br />
        	</div>
    </tr>
   <tr>
	 		<div class="row">
     <b>TELEFONO*</b><br />
     <input type="text" name="usertel" size="54"><br />
      		</div>
    </tr>
    <tr>
	<div class="row">
		<label for="mensaje"><b>MENSAJE*</b></label><br />
		<textarea id="txtMensaje" class="input" name="message" rows="10" cols="45"></textarea><br /><br />
	</div>
    </tr>

     <form id="form6"> 
<button type="submit"id="insertar" name="registrar"> ENVIAR </button> &nbsp;
</form> 
<form id="form7">
    <button type="submit"> CANCELAR </button>
</form>
<br /><br />* Campos Obligatorios</font></label>
<br />
    </table>
    <?php

        include("conexion.php");

        if(isset($_POST['registrar']))
        {
        	if($_POST['usernombre'] == '' 
			or $_POST['userapellido'] == ''
			or $_POST['useremail'] == ''
			or $_POST['usertel'] == '')
    {
		echo "<font color=\#red\">Debe llenar todos los campos por favor.</font>";
		}
		else
		echo "<font color=\#red\">Gracias por contactarse, nos comunicaremos con usted a la brevedad.</font>";
        }
		?>
<div class="telefono">
<img src="PAGINA/LOGOS/telefono-antiguo-tipico_318-31536.jpg" width="42" height="42" /></div>
<div class="num"><label><b><font size="4", color="#06C"> 03404 - 484765</font></b>  </label>
</div>	
<div class="what">
<img src="PAGINA/LOGOS/download (1).png" width="42" height="42" /></div>
<div class="cel"><label><b><font size="4", color="#06C"> 03404 - 15531282</font></b>  </label>
</div>	
<div class="mail">
<img src="PAGINA/LOGOS/images.png" width="48" height="48" /></div>
<div class="correo"><label><b><font size="4", color="#06C"> melid248@gmail.com</font></b>  </label>
</div>	
<div class="ubicacion">
<img src="PAGINA/LOGOS/locate_gps_navigation_pin_point_location_icon-icons.com_59906.png" width="45" height="45" /></div>
<div class="loc"><label><b><font size="4", color="#06C"> Dorrego 969, Gálvez, Santa Fe</font></b>  </label>
</div>
    </div>
    </div>

<?php include("footer.php");?>
</body>

</html>
