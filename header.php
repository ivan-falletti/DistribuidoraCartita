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
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<script language="javascript" type="text/javascript">

$(document).ready(function(){
    $('.add-to-cart').click(function(){
        var id = $(this).closest('div').find('.product-id').val();
        var quantity = $('.cantidad').find('input').val();
        window.location.href = "agregar.php?id=" + id + "&quantity=" + quantity;
    });
 
    /*$('.update-quantity').click(function(){
        var id = $(this).closest('tr').find('.product-id').text();
        var name = $(this).closest('tr').find('.product-name').text();
        var quantity = $(this).closest('tr').find('input').val();
        window.location.href = "actualizar.php?id=" + id + "&name=" + name + "&quantity=" + quantity;
    });*/
});

/*ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})*/

function buscar() {
    var texto = $('#texto_busqueda').val();
    if (texto === '')
    {
        alert('Ingrese un producto para buscar.');
        return;
    }

    window.location.href = "busqueda.php?texto_busqueda=" + texto;
}

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

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

    <?php if (isset($_SESSION["useremail"])) { ?>
        <form id="micarrito" action="carrito.php">
            <?php 
                include("conexion.php");
                $user_id = $_SESSION["userid"];
                $sqldos = "SELECT COUNT(1) AS CartCount FROM cart_items WHERE user_id='$user_id'";
                $recdos = mysqli_query($conexion,$sqldos);
                $cartData = mysqli_fetch_array($recdos);
            ?>
            
            <button type="submit"> MI CARRITO (<?php echo $cartData["CartCount"] ?>) </button>
        </form>
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
<form id="searchform" onsubmit="event.preventDefault(); buscar();">
     <input id="texto_busqueda" type="text" placeholder="Buscar aqu&iacute;..." >
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