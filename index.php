<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Distribuidora Dorrego</title>
<link rel="stylesheet" href="menu.css" type="text/css" />
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />	
   <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>
<script language="javascript" type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
<style type="text/css" media="screen">
a:link { color: white; text-decoration: none; }
a:visited { color: white; text-decoration: none; }
a:hover { color: white; text-decoration: underline; }
a:active { color: white; text-decoration: none; }
</style>


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
<a href="https://www.whatsapp.com" target="_blank"><img src="fotos/whatsapp-xxl.png"; width="44" height="44" /></a>
</div>

<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
	    <nav id="navigation">
<ul id="menu">
    <li><a href="index.php"> Inicio</a></li>
    <li class='active'><a href="#">Productos</a>
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
<div id="templatemo_slider" align="center">
    	 <div class="slider-wrapper theme-orman">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
            	<img src="PAGINA/ofertas.png" alt="Homepage Slider" />
                <img src="PAGINA/bandejas-aluminio-1.jpg" alt="Web Design" />
                <img src="PAGINA/bolsa.jpg"alt="New Template" />
                <img src="PAGINA/cajas/cajacarton.jpg" alt="Business Website" />
                <img src="PAGINA/papell.jpg" alt="Business Website" />
       
            </div>
            <div class="nivo-controlNav-bg"></div>
      </div> 
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:true
			});
        });
        </script>

    </div>
<div id="categorias">
<label> <b>¡¡NUESTROS PRODUCTOS!!  </b> </label>
<div class="bandejas">
<a href="bandejas.php"><img src="PAGINA/bandejascat.jpg" /></a>
</div>
<div class="bolsas">
<a href="bolsas.php"><img src="PAGINA/bolsascat.jpeg" /></a>
</div>
<div class="cajas">
<a href="cajas.php"><img src="PAGINA/cajascat.jpg" /></a>
</div>
<div class="papel">
<a href="papel.php"><img src="PAGINA/papelcat.jpg" /></a>
</div>
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
