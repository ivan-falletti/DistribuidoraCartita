<?php
    include("header.php");
?>

<div id="cuerpo">

    <center><h2>ARTICULOS AGREGADOS AL CARRITO</h2></center>

    <?php
        $user_id = $_SESSION["userid"];
        $total=0;

        // select products from database
        $sqldos = "SELECT p.id_producto, p.descripcion, p.precio, c.quantity 
                    FROM cart_items c 
                    INNER JOIN productos p ON c.product_id = p.id_producto 
                    WHERE user_id='$user_id'";

        if ($recdos = mysqli_query($conexion, $sqldos)) {
            
            if (mysqli_num_rows($recdos) > 0) { ?>
                
                <table width="700" align="center">
                    <tr>
                        <td align="center"><b>Codigo</b></td>
                        <td align="center"><b>Descripcion</b></td>
                        <td align="center"><b>Cantidad</b></td>
                        <td align="center"><b>Subtotal</b></td>
                    </tr>

                    <?php
                        while ($row = mysqli_fetch_array($recdos, MYSQL_ASSOC)) {
                            echo '<tr>
                                    <td align="center">'.$row["id_producto"].'</td>
                                    <td align="center">'.$row["descripcion"].'</td>
                                    <td align="center">'.$row["quantity"].'</td>
                                    <td align="center">$ '.$row["precio"].'</td>
                                </tr>';

                            $total=($row["precio"] * $row["quantity"]) + $total;
                        }
                    ?>
                </table>

                <?php echo '<center><h2>LLEVAS GASTADO: $'.$total.'</h2></center>'; ?>

                <table align="center">
                    <tr>
                        <td colspan="2" align="center"><a href="./compras/compra.php"><input class="button" type="button" value="Confirmar Compra"></a></td>
                        <td colspan="2" align="center"><a href="./index.php"><input class="button" type="button" value="Seguir Comprando"></a></td>
                    </tr>
                </table>

            <?php
            } else {
                echo '<center><h2>No hay productos</h2></center>'; 
            }
        } else {
            echo '<center><h2>Ocurrió un error al cargar los datos</h2></center>'; 
        }     
	?>
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