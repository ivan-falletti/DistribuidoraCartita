<?php include("header.php");?>

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
