<?php
	session_start();
if(!isset($_SESSION['Usuario']))
	{
		header('location:iniciarsesion.php');
		exit(0);
	}else{
	include 'conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id_producto'])){
		$arreglo=$_SESSION['carrito'];
		$encontro=false;
		$numero=0;
		for($i=0;$i<count($arreglo);$i++){
			if($arreglo[$i]['id_producto']==$_GET['id_producto']){
				$encontro=true;
				$numero=$i;
			}
		}
		if ($encontro==true){
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			$_SESSION['carrito']=$arreglo;
		}else{
			if(isset($_GET['id_producto'])){
		$descripcion='';
		$precio='';
		$re=mysql_query("SELECT * FROM productos WHERE id_producto=".$_GET['id_producto']);
		while($f=mysql_fetch_array($re)){
				$descripcion=$f['descripcion'];
				$precio=$f['precio'];
			}
				$datosNuevos=array('id_producto'=>$_GET['id_producto'],
				'Descripcion'=>$descripcion,
				'Precio'=>$precio,
				'Cantidad'=>1);
			array_push($arreglo, $datosNuevos);
			$_SESSION['carrito']=$arreglo;
			}
		}
		}
	}else{
		if(isset($_GET['id_producto'])){
		$descripcion='';
		$precio='';
		$re=mysql_query("SELECT * FROM productos WHERE id_producto=".$_GET['id_producto']);
		while($f=mysql_fetch_array($re)){
				$descripcion=$f['descripcion'];
				$precio=$f['precio'];
			}
				$arreglo[]=array('id_producto'=>$_GET['id_producto'],
				'Descripcion'=>$descripcion,
				'Precio'=>$precio,
				'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
}
?>
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



<body background="fotos/fondook.jpg">
<style type="text/css" media="screen">
a:link { color: white; text-decoration: none; }
a:visited { color: white; text-decoration: none; }
a:hover { color: white; text-decoration: underline; }
a:active { color: white; text-decoration: none; }
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
<form id="cuenta">
<a href="crearcuenta.php">CREAR CUENTA</a>  
</form>
<form id="linea">
│
</form>
<form id="sesion">
<a href="login.php">   INICIAR SESION</a> 
</form>
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
<div id="cuerpo">
		<center><h2>ARTICULOS AGREGADOS AL CARRITO</h2></center>
         <table width="700" align="center">
         <tr>
         	<td align="center">Codigo</td>
            <td align="center">Descripcion</td>
            <td align="center">Cantidad</td>
            <td align="center">Subtotal</td>
         </tr>
    <?php
 		if(isset($_SESSION['carrito'])){
  		$datos=$_SESSION['carrito'];
		$total=0;
		for($i=0;$i<count($datos);$i++){
	?>	
    <tr>
    	<div class="producto">
    	<td><center><?php echo $datos[$i]['Codigo'];?></center></td>
        <td><center><?php echo $datos[$i]['Descripcion'];?></center></td>
        <td><center><?php echo $datos[$i]['Cantidad'];?></center></td>
        <td><center>$<?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad'];?></center></td>
        <td><a href="" class="eliminar" data-codigo="<?php echo $datos[$i]['Codigo']?>"><img src="imagenes/eliminar.png"></a></center></td>
        </div>
        <?php  
		$total=($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
	}
  }
	else{
				echo '<center><h2>No hay productos</h2></center>';
				$total=0;
			}
			?>
         </table>
         <?php
		 		echo '<center><h2>LLEVAS GASTADO: $'.$total.'</h2></center>';
		 ?>
         <table align="center">
         	<tr>
            	<td colspan="2" align="center"><a href="./compras/compra.php"><input class="button" type="button" value="Confirmar Compra"></a></td>
                <td colspan="2" align="center"><a href="./index.php"><input class="button" type="button" value="Seguir Comprando"></a></td>
                
            </tr>
         </table>
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
