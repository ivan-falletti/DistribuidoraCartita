<?php include("header.php");?>

<div id="cuerpo" style="padding-top: 20px;">
    <form id="formCompra" method="post" action="comprar.php">
    	<center><h2>DATOS DEL DESTINATARIO</h2></center>
        <table align="center">
        	<tr>
            	<td>Nombre:</td>
                <td><input type="text" size="25" id="Nombre" name="txtNombre"/></td>
            </tr>
            <tr>
            	<td>Apellido:</td>
                <td><input type="text" size="25" id="Apellido" name="txtApellido"/></td>
            </tr>
            <tr>
            	<td>DNI:</td>
                <td><input type="text" size="6" id="DNI" name="txtDNI"/></td>
            </tr>
            <tr>
            	<td>Provincia:</td>
                <td><select id="Provincia" name="txtProvincia">
                <option value="1">Buenos Aires</option>
                <option value="2">Catamarca</option>
                <option value="3">Chaco</option>
                <option value="4">Chubut</option>
                <option value="5">Córdoba</option>
                <option value="6">Chubut</option>
                <option value="7">Córdoba</option>
                <option value="8">Corrientes</option>
                <option value="9">Entre Rios</option>
                <option value="10">Formosa</option>
                <option value="11">Jujuy</option>
                <option value="12">La Pampa</option>
                <option value="13">La Rioja</option>
                <option value="14">Mendoza</option>
                <option value="15">Misiones</option>
                <option value="16">Neuquen</option>
                <option value="17">Rio Negro</option>
                <option value="18">Salta</option>
                <option value="19">San Juan</option>
                <option value="20">San Luis</option>
                <option value="21">Santa Fe</option>
                <option value="22">Santiago del Estero</option>
                <option value="23">Tierra del Fuego</option>
                <option value="24">Tucuman</option>
                </select></td>
            </tr>
            <tr>
            	<td>Localidad:</td>
                <td><input type="text" size="20" id="Localidad" name="txtLocalidad"/></td>
            </tr>
            <tr>
            	<td>Codigo Postal:</td>
                <td><input type="text" style="text-align:center" size="2" id="Codigo Postal" name="txtCodPostal"/></td>
            </tr>
            <tr>
            	<td>Calle:</td>
                <td><input type="text" size="20" id="Nombre de la Calle" name="txtCalle"/> Numero:<input type="text" style="text-align:center" size="3" id="Numero de Calle" name="txtNumCalle"/>*(Donde se va a entregar el producto)</td>
            </tr>
            <td>Email:</td>
                <td><input type="text" size="15" id="Correo" name="txtCorreo"/></td>
            </tr>
            <tr>
            <td colspan="2"><center><h2>DATOS DE LA TARJETA</h2></center></td>
            <tr>
            <tr>
            	<td>Titular de la tarjeta:</td>
                <td><input type="text" size="30" id="Titular de la tarjeta" name="txtTitular"></td>
            </tr>
            <tr>
            	<td>Tarjeta:</td>
                <td> <select id="Tipo de Tarjeta" name="txtTarjeta">    
       <option value="1" selected="selected">Visa</option>
       <option value="2">MasterCard</option>
       <option value="3">Naranja</option>
       <option value="4">Nativa</option>
   </select></td>
            </tr>
            <tr>
            	<td>Cantidad de Cuotas:</td>
                <td> <select id="Cantidad de Cuotas" name="txtCuotas">    
       <option value="1" selected="selected">1 Cuota sin interés</option>
       <option value="2">2 Cuotas sin interés</option>
       <option value="3">3 Coutas sin interés</option>
       <option value="4">4 Cuotas sin interés</option>
       <option value="5">5 Cuotas sin interés</option>
	   <option value="6">6 Cuotas sin interés</option>
       <option value="12">12 Cuotas sin interés pagando con VISA</option>
   </select></td>
            </tr>
            <tr>
            	<td>Numero de tarjeta:</td>
                <td><input type="text" size="16" style="text-align:center" id="Numero de Tarjeta" name="txtNumTarj"></td>
            </tr>
            <tr>
            	<td>Caducidad:</td>
                <td><input type="text" style="text-align:center;" size="4" id="Vencimiento de la Tarjeta" name="txtVtoTarj" value="mm/aa"></td>
            </tr>
            <tr>
            	<td>Codigo de seguridad:</td>
                <td><input type="text" style="text-align:center" size="1" id="Codigo de Seguridad de la tarjeta" name="txtSeguridad"></td>
            </tr>

            	<td colspan="2" align="center"><input class="button" type="submit" style="size:20" value="Confirmar Compra"/><input class="button" type="button" value="Ir a Inicio" onClick="../index.php"/></td>
            </tr>
            </table>
    </form>
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

<script>
var form = document.getElementById("formCompra");

form.addEventListener("submit", function(event){
  event.preventDefault();
  var comodin = true,
      elementos = this.elements,
      total = elementos.length;
  
  for (var i = 0; i < total; i++){
    if (!elementos[i].value.length){
      alert ("Debes de ingresar el campo " + elementos[i].id );
      elementos[i].focus();
      comodin = false;
      break;
    }
  }
  if (comodin){
    this.submit();
  }
}, false);
</script>

</body>

</html>