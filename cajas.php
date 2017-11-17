<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Distribuidora Dorrego</title>
<link rel="stylesheet" href="menu.css" type="text/css" />
</head>


<body background="fotos/fondook.jpg">
<STYLE type="text/css"> 

A:link {text-decoration:none;color:#FFF;}
A:visited {text-decoration:none;color:#FFF;}
A:active {text-decoration:none;color:#FFF;} 
A:hover {text-decoration:underline;color:#FFF;} 
</style>

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
<?php } ?>>
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
<br /><br />
<div id="camino"><blockquote><a href="index.php"><text style="color:#000;">Inicio</text></a> / <a href="cajas.php"><text style="color:#06c">Cajas</text></a>  </blockquote>
</div>
<div class="masas">
<a href="masas.php"><img src="PAGINA/cajas/masas_facturas_cup_cakes.jpg" width="300"/></a>
</div>
<div class="empanadas">
<a href="empa.php"><img src="PAGINA/cajas/60126.jpeg" width="300"/></a>

</div> 
<div class="pizza">
<a href="pizas.php"><img src="PAGINA/cajas/pizzabandejas-01.jpg" width="300"/></a>

</div>
<div class="ravioles">
<a href="pastas.php"><img src="PAGINA/cajas/ravioles_01.jpg" width="300"/></a>

</div>
<div class="embalaje">
<a href="embalar.php"><img src="PAGINA/cajas/caja_embalaje_20x20x20_cm_imagen1.jpg" width="300"/></a>

</div>
<div class="residuo">
<a href="regalos.php"><img src="PAGINA/cajas/Sin título.png" width="300"/></a>

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
