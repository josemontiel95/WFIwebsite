<?php

require("conexion.php");
?>

<!DOCTYPE HTML 
    >
<html lang="en">
<head>
    <title>Formulario</title>
</head>
<link rel="shortcut icon"  href="logo_wfi_3.ico">
<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
</style>
<body>
<br><br>
<center><img src="logo_wfi_3.png"></center>

<p></p>
    <div id="wrapper">



        <form action="formulariousuarios2.php" method="POST">
            
                <legend> <p></p><center>Registro de usuario</center>
                <br>
                <div>
                    <input type="text" name="first_name" placeholder="Nombre(s)"  />
                </div>
                <div>
                    <input type="text" name="lastname" placeholder="Apellido(s)" />
                </div>

                <div>
                    <input type="text" name="user" placeholder="Usuario" />
                </div>
               <div>
                    <input type="password" name="pass" placeholder="Password" />
                </div>
                <div>
                    <input type="password" name="confpass" placeholder="Confirmar Password" />
                </div>
                <div>
                    <input type="text" name="correo" placeholder="Correo electronico" />
                </div>
                <div>
                    <input type="text" name="privilegios" placeholder="Privilegio" />
                </div>
                
                
            
                <center> 
                    <input type="submit" name="enviar" value="Registrar" class="boton3"/>
                            
                
                </center>
        </form>
    </div>


    <style type="text/css">
        .boton{

            font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:100px;
        height:29px;
        }
        .boton2{
        font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:130px;
        height:29px;
        }
        .boton3{
            font-size:13px;
        font-family:arial;
        font-weight:bold;
        color:white;
        background:#638cb5;
        background-image: ("Ncrow-Mega-Pack-1-Excel.ico");
        border:100px;
        width:150px;
        height:29px;
        }


    </style>

    <div align="right">
    <a href="principal.php">
    <input type="submit"  value="Regresar" class="boton2"> </a>
</div>
</body>
</html>
