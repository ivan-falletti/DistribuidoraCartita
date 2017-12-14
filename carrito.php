<?php
    include("header.php");
?>

<div id="cuerpo" style="padding-top: 20px;">

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
                        <td align="center"><b>Descripcion</b></td>
                        <td align="center"><b>Cantidad</b></td>
                        <td align="center"><b>Precio</b></td>
                        <td align="center"><b>Subtotal</b></td>
                        <td />
                    </tr>

                    <?php
                        while ($row = mysqli_fetch_array($recdos, MYSQL_ASSOC)) {

                            $subtotal=$row["precio"] * $row["quantity"];
                            $total=$subtotal + $total;

                            echo '<tr>
                                    <td align="center">'.$row["descripcion"].'</td>
                                    <td align="center">'.$row["quantity"].'</td>
                                    <td align="center">$ '.$row["precio"].'</td>
                                    <td align="center">$ '.$subtotal.'</td>
                                    <td align="center"><a href="quitar.php?id='.$row["id_producto"].'" class="eliminar"><img src="fotos/eliminar.png"></a></td>
                                </tr>';
                        }
                    ?>
                </table>

                <?php echo '<center><h2>LLEVAS GASTADO: $'.$total.'</h2></center>'; ?>

                <table align="center">
                    <tr>
                        <td colspan="2" align="center"><a href="./compra.php"><input class="button" type="button" value="Confirmar Compra"></a></td>
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

<?php include("footer.php");?>
</body>

</html>