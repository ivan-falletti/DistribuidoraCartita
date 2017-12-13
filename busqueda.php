<?php
    include("header.php");
?>

<div id="cuerpo" style="padding-top: 20px;">

    <?php
        $texto_busqueda = $_GET['texto_busqueda'];

        // select products from database
        $sqldos = "SELECT p.id_producto, p.descripcion, p.material, p.precio
                    FROM productos p 
                    WHERE p.descripcion LIKE'%$texto_busqueda%'";

        if ($recdos = mysqli_query($conexion, $sqldos)) {
            
            if (mysqli_num_rows($recdos) > 0) { 

                echo "<center><h2>RESULTADOS ENCONTRADOS PARA '".$texto_busqueda."'</h2></center>"; ?>
                
                <table width="700" align="center">
                    <tr>
                        <td align="center"><b>Descripcion</b></td>
                        <td align="center"><b>Material</b></td>
                        <td align="center"><b>Precio</b></td>
                        <td />
                    </tr>

                    <?php
                        while ($row = mysqli_fetch_array($recdos, MYSQL_ASSOC)) {

                            echo '<tr>
                                    <td align="center">'.$row["descripcion"].'</td>
                                    <td align="center">'.$row["material"].'</td>
                                    <td align="center">$ '.$row["precio"].'</td>
                                    <td align="center"><a href="b'.$row["id_producto"].'.php"><img style="height:30px;" src="fotos/ir.png"></a></td>
                                </tr>';
                        }
                    ?>
                </table>

            <?php
            } else {
                echo "<center><h2>NO SE ENCONTRARON RESULTADOS PARA '".$texto_busqueda."'</h2></center>"; 
            }
        } else {
            echo '<center><h2>Ocurrió un error al cargar los datos</h2></center>'; 
        }     
	?>
</div>

<?php include("footer.php");?>
</body>

</html>