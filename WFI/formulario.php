<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=" ">
	<meta name="author" content="">
    <link rel="icon" href="demos/icono.ico" type="image/x-icon">
    
    <title>Información</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- end Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- lightbox -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    
    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="css/animation.css">
    <!-- Main Stylesheet CSS -->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

</head>
<body >
        
    <!--/ FOOTER SECTION-->  
    <section id="footer" class="footer-wrapper">
        <div class="container">
            <div class=""  data-scroll-reveal="enter from the bottom after 0.2s">
               <div class="logo-border"> 
                <div align="left">
                    <a href="../index2.html">
                <img src="images/logo_wfi_3.png" alt=""/>
            </a>
                </div>
            </div><script type="text/javascript">document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;");</script><font size="5" color="black"><b><script type="text/javascript">document.write("");</script><center>Bolsa de trabajo</center></b></font>
            
                <div class=""></div>
                
                <p><script type="text/javascript">document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");</script> 

                    <style type="text/css">
                        .redondeado {
   border-radius: 3px;
   background-color: transparent;
 }
 .redondeado2{

 }
 .confondo {
   background-color: #def;
 }
 .estilotextarea {width:420px;height:100px;border: 1px solid black; border-radius: 5px;}
 .button {
    background-color: #778899; /* Green */
    border: 0;
    color: white;
    padding: 5px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

                    </style>

<center>

<?
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['email']) && !empty($_POST['email']) && 
isset($_POST['telefono']) && !empty($_POST['telefono'])){
	$destino= "recursoshumanos@wfinet.com.mx";
	$desde = "Informes de vacante\nNombre: ".$_POST['nombre']."\nCorreo electrónico: ".$_POST['email'];
	$asunto = "Informes de trabajo en WFI de México: ";
	$telefono= "Telefono: ".$_POST['telefono']."\nEspero y me pueda contactarme pronto.\nSaludos! ";
	
	mail($destino, $asunto, $telefono,$desde);
	echo "Correo enviado";
}else{
	echo "Problemas de envio";
	
}



?>


</center>
<center><h4>Envíanos tu información</h4></center><br>

                    <center>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <font color="black">Nombre  <input type="text" class="redondeado" size="36" name="nombre">
                    </font>
                    <br>
                    <br>
<font color="black"><script type="text/javascript">document.write("&nbsp;&nbsp;&nbsp;");</script>Email  <input type="text" class="redondeado" size="36" name="email">
                    </font>
                    
                    <br>
                    <br>
<font color="black"><script type="text/javascript">document.write("&nbsp;&nbsp;&nbsp;");</script>Telefono  <input type="text" class="redondeado" size="36" name="telefono">
                    </font>

					
                    <br>
					<br><input type="submit" class="button" value="Enviar" name="submit">
                </form>
            </center>
            <p>
				
<div><span style="float:left">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<font color="black">
    <?php
    $conexion= mysqli_connect("db765669182.hosting-data.io","dbo765669182","Diciembre2018%","db765669182");

    ?>
    <link rel="stylesheet" href="tabla.css">
    <div align="left">
    <div id="main-container">
<table border="1">
    <thead>
    <tr>
    <th>ID</th>
    <th><center>Vacantes</center></th>
    <th><center>Funciones</center></th>
<th><center>Escolaridad</center></th>
<th><center>Horario</center></th>
<th><center>Numero de vacantes</center></th>    
    </tr>
    </thead>
    
        <?php

        $sql="SELECT * FROM admin";
        $sentencia= mysqli_query($conexion,$sql);
        while($muestra= mysqli_fetch_array($sentencia)){
        ?>
        <tr>
            <td><?php echo $muestra['id'];?></td>
            <td><?php echo $muestra['vacante'];?></td>
            <td><?php echo $muestra['funciones'];?></td>
			<td><?php echo $muestra['escolaridad'];?></td>
			<td><?php echo $muestra['horario'];?></td>
			<td><?php echo "\n".$muestra['numero_vacantes']."\n";?></td>
        </tr>
        
        <?php
    }
    ?>

</table>
</div>
</div>
</font></span></div>
            </div>    <!-- end title -->
        </div>  <!-- end container -->
     
    </section><!--/ Footer  End -->

   
     <p>
    <!-- SECTION CLOSED -->

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.jigowatt.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/jquery.unveilEffects.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
	<script>
		(function ($) {
			var $container = $('.masonry_wrapper'),
				colWidth = function () {
					var w = $container.width(), 
						columnNum = 1,
						columnWidth = 0;
					if (w > 1200) {
						columnNum  = 3;
					} else if (w > 900) {
						columnNum  = 3;
					} else if (w > 600) {
						columnNum  = 2;
					} else if (w > 300) {
						columnNum  = 1;
					}
					columnWidth = Math.floor(w/columnNum);
					$container.find('.item').each(function() {
						var $item = $(this),
							multiplier_w = $item.attr('class').match(/item-w(\d)/),
							multiplier_h = $item.attr('class').match(/item-h(\d)/),
							width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
							height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
						$item.css({
							width: width,
							height: height
						});
					});
					return columnWidth;
				}
							
				function refreshWaypoints() {
					setTimeout(function() {
					}, 1000);   
				}
							
				$('nav.portfolio-filter ul li a').on('click', function() {
					var selector = $(this).attr('data-filter');
					$container.isotope({ filter: selector }, refreshWaypoints());
					$('nav.portfolio-filter ul li a').removeClass('active');
					$(this).addClass('active');
					return false;
				});
					
				function setPortfolio() { 
					setColumns();
					$container.isotope('reLayout');
				}
		
				isotope = function () {
					$container.isotope({
						resizable: true,
						itemSelector: '.item',
						masonry: {
							columnWidth: colWidth(),
							gutterWidth: 0
						}
					});
				};
			isotope();
			$(window).smartresize(isotope);
		}(jQuery));
	</script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        
		<script type="text/javascript">
			var revapi;
			jQuery(document).ready(function() {
			revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,
				hideThumbs:10,
				fullWidth:"off",
				fullScreen:"on",
				fullScreenOffsetContainer: ""
			 });
		   });	//ready
		</script>
		
		
    
    <!-- Animation Scripts-->
    <script src="js/scrollReveal.js"></script>
    <script>
            (function($) {
            "use strict"
                window.scrollReveal = new scrollReveal();
            })(jQuery);
    </script>
    
    <!-- Portofolio Pretty photo JS -->       
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            jQuery('a[data-gal]').each(function() {
                jQuery(this).attr('rel', jQuery(this).data('gal'));
            });  	
                jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
        })(jQuery);
    </script>
          
    <!-- Video Player o-->
    <script src="js/jquery.mb.YTPlayer.js"></script>    
    <script type="text/javascript">
      (function($) {
        "use strict"
          $(".player").mb_YTPlayer();
        })(jQuery);	
    </script>
    
    
</body>

</html>
