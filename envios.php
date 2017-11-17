<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<STYLE type="text/css"> 

A:link {text-decoration:none;color:#FFF;}
A:visited {text-decoration:none;color:#FFF;}
A:active {text-decoration:none;color:#FFF;} 
A:hover {text-decoration:underline;color:#FFF;} 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Distribuidora Dorrego</title>
<link rel="stylesheet" href="menu.css" type="text/css" />
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles/index.css">

<body background="fotos/fondook.jpg">


<div id="superior"> 
<div class="info">
<label>TEL:03404 - 484765 | CEL: 03404 - 15531282 <br /></label>
<label>Dorrego 969 | Gálvez | Prov. de Santa Fe <br /></label>
<label>Horario de atención al público: Lunes a Viernes 8 a 12 / 16 a 20hs <br /> </label> 
</div>
<div class="distribuidora">
<a href="index.php"><img src="fotos/logo.png";/></a> </div>
<div class="perfil">
<form id="micarrito">
<button type="submit"> MI CARRITO (0) </button>
</form>
<?php if (isset($_SESSION["useremail"])) { ?> 
<form id="cuenta">
    <a href="#">HOLA <?php echo strtoupper($_SESSION["useremail"]) ?></a>  
</form>
<form id="linea">
│
</form>
<form id="sesion">
    <a href="logout.php">   CERRAR SESION </a> 
</form>
<?php } else { ?>
<form id="cuenta">
    <a href="crearcuenta.php">CREAR CUENTA</a>  
</form>
<form id="linea">
│
</form>
<form id="sesion">
    <a href="login.php">   INICIAR SESION </a> 
</form>
<?php } ?>
</div>
<form id="searchform">
     <input type="text" placeholder="Buscar aqu&iacute;..." required>

     <button type="submit">Buscar</button>
 </form>

<div class="instagram">
<a href="http://www.instagram.com" target="_blank"/><img src="fotos/Instagram-white.png"; width="52" height="52" /></a>
</div>
<div class="facebook">
<a href="http://www.facebook.com" target="_blank"/><img src="fotos/a5345a_7eea0cba4b4e47bb9d66e8e1543f8ca7-mv2.png"; width="44" height="44" /></a>
</div>
<div class="whatsap">
<a href="https://www.whatsapp.com" target="_blank"/><img src="fotos/whatsapp-xxl.png"; width="44" height="44" /></a>
</div>

<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
	    <nav id="navigation">
<ul id="menu">
    <li><a href="index.php"> Inicio</a></li>
    <li><a href="#">Productos</a>
    <ul>
   <li><a href="bandejas.php">Bandejas</a></li>
   <li><a href="bolsas.php">Bolsas</a></li>
   <li><a href="cajas.php">Cajas</a></li>
   <li><a href="papel.php">Papel</a></li>
   </ul>
</li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li><a href="envios.php">Envíos</a></li>
    <li><a href="contacto.php">Contactos </a></li>
    
</ul>

</div>
<div id="cuerpo">

<br /><br /><br /><br />
<div id="camino"><blockquote><a href="index.php"><text style="color:#000;">Inicio</text></a> / <a href="envios.php"><text style="color:#06c">Envios</text></a>  </blockquote>
</div>

<div class="cuerpoenvio">
<label> <b><font size="10">POLITICAS DE ENVIO</font></b> </label>
<p> Contamos con una gran cartera de clientes dentro de los límites de la provincia de Santa Fe, con los cuales mantenemos excelentes tratos comerciales ya que depositan su confianza en nosotros debido al cumplimiento en las entregas. </p>
<p> Contamos con vehículo propio, lo cual garantiza una logística efectiva y a tiempo. </p>
<p><b>Si ud. desea realizar una compra debe seguir la siguiente metodología: </b></p>
<p>- Se contacta con nosotros:</p>
<p>1. A través de la página:  <a href="http://localhost/Distribuidora%20Dorrego/" align="absmiddle" style="color:#06C" > <font color= "#06C">http://localhost/Distribuidora%20Dorrego/</font> </p> </a>
<p>2. Vía email: <a href="contacto.php" align="absmiddle" style="color:#06C" > <font color= "#06C">melid248@gmail.com</font> </p> </a> 
<p>3. O telefónicamente: <a href="#" align="absmiddle" style="color:#06C" > <font color= "#06C"> 03404-484765</font> </p> </a>
<p>- Realiza su compra.</p>
<p>- Realiza su pago mediante tarjeta de crédito. </p>
<p>- Dentro de las 48hs. despachamos su pedido con costo a cargo de la empresa. </p> 
</div>
<div class="envios">
<img src="fotos/media-photo_57c01f36da77603d0f31ac95_640w.jpeg" width="642" height="360" />
</div>
</div>
<div id="pie">
<div class="mediosdepago">
<form id="formapago">
<label> <b>MEDIOS DE PAGO </b> </label>
</form>
<form id="tarjetas">
<a href="http://www.ahora12.gob.ar" target="_blank"><img src="fotos/MasterCard-credit-cards-and-Visa-If-you-apply-for-both.jpg" width="100" height="30" /></a>
</form>
</div>
<div id="servicios">
<form id="servicios">
<label> <b>SERVICIO AL CLIENTE</b> </label>
</form>
<form id="clientes">
<a href="politica1.php">Política de devolución y cambios <br /></a>
<a href="politica2.php">Términos y Condiciones <br /></a>
<a href="politica3.php">Privacidad y Seguridad <br /></a>
</form>
</div>
<div class="suscripcion">
<form id="suscripcion">
<label> <b>ENTERATE LO ÚLTIMO </b></label> 
</form>
<form id="email">
<label> <p>Recibí nuestras ofertas y novedades en tu email</p></label>
</form>
<form id="enviaremail">
<input type="text" placeholder="Ingresa tu email" required>
<button type="submit">Enviar</button>
</form>
</div>
<div id="copyright">
<label>© 2017 Derechos Reservados │ DISTRIBUIDORA DORREGO</label>
</div>
</div>
</body>

</html>

