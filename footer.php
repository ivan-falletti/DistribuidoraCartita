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
        <form id="enviaremail" onsubmit="event.preventDefault(); enviarMail();">
            <input type="text" placeholder="Ingresa tu email" required >
            <button type="submit">Enviar</button>
        </form>
    <div id="copyright">
        <label>© 2017 Derechos Reservados │ DISTRIBUIDORA DORREGO</label>
    </div>
</div>

<SCRIPT languaje="JavaScript">
    function enviarMail() {
        alert("FELICITACIONES!!!!\n\nSe ha suscripto a recibir nuestras ofertas.");
    }
</SCRIPT>