<?php include("header.php");?>

<div id="cuerpo">
<div id="templatemo_slider" align="center">
    	 <div class="slider-wrapper theme-orman">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
            	<img src="PAGINA/ofertas.png" alt="Homepage Slider" />
                <a href="b97.php"><img src="PAGINA/bandejas-aluminio-1.jpg" alt="Web Design" /> 
                <a href="b98.php"><img src="PAGINA/bolsa.jpg"alt="New Template" />
                <a href="b99.php"><img src="PAGINA/cajas/cajacarton.jpg" alt="Business Website" />
                <a href="b100.php"><img src="PAGINA/papell.jpg" alt="Business Website" /></a>
       
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
 <b>¡¡NUESTROS PRODUCTOS!!  </b> 
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

<?php include("footer.php");?>
</body>
</html>