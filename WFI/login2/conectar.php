
	<html>
	<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
       <link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	   <link rel="icon" href="icono.ico" type="image/x-icon">
       
       <script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    <table>
      <tr>

        <td><img src="logo_wfi_3.png" width="150" height="70"><script type="text/javascript">document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");</script></td>
  <style type="text/css">
    .botoncerrar{
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

  </style>
        <td> <?php
session_start();
?>

<?php
$host="db765669182.hosting-data.io";
$userdb="dbo765669182";
$pass="Diciembre2018%";
$base_datos="db765669182";
$tabla="administradores";
$conexion= mysqli_connect($host,$userdb,$pass,$base_datos);

@$user= $_POST["usuario"];
@$cont= $_POST["pass"];

$sentencia= "SELECT * FROM administradores where usuario= '$user' and contrasena='$cont'";

$resultado= mysqli_query($conexion, $sentencia);
$filas= mysqli_num_rows($resultado);
if ($filas>0){
  echo "<center>";
  echo "<b>Administrador</b>";
  echo "  ".$_SESSION['usuario']=$user;
  echo "<br></center>";
  ?></td>
        <td><script type="text/javascript">document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");</script><div align="right">
  <form action="" method="POST">
    <input type="submit" style="margin-right: 55px;" value="Cerrar Sesión" class="botoncerrar">
  </form>
</div></td>
      </tr>
    </table>


<div id="PeopleTableContainer" style="width: 980px;   margin: 10px;"></div>
  <script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
      $('#PeopleTableContainer').jtable({
        title: 'Bolsa de trabajo',
        actions: {
          listAction: 'PersonActions.php?action=list',
          createAction: 'PersonActions.php?action=create',
          updateAction: 'PersonActions.php?action=update',
          deleteAction: 'PersonActions.php?action=delete'
        },
        fields: {
          id: {
            key: true,
            create: false,
            edit: false,
            list: false
          },
          vacante: {
            title: 'Vacante',
            width: '20%'
          },
          funciones: {
            title: 'Funciones',
            width: '20%'
          },
          escolaridad: {
            title: 'Escolaridad',
            width: '20%'
          },
          horario: {
            title: 'Horario',
            width: '15%'
          },
          numero_vacantes: {
            title: 'Numero de vacantes',
            width: '50%'
          }
        }
      });

      //Load person list from server
      $('#PeopleTableContainer').jtable('load');

    });

  </script>


   
  
	<title>
	Bolsa de trabajo
	</title>
	
	</head>
	<body>
	
	
	<style type="text/css">
       *{
       margin:0;
       padding: 0;
}
body{
       background: white;
       width: 100%;
       max-height: auto 
}
.contenedor{
       width: 100%;
       margin: 0 auto;
       overflow: hidden;
}
header{
       background:#EB4A33;
       margin: 20px 0;
}
header h1{
       color: #fff;
       padding: 20px 0;
       text-align: center;
}
.main{
       width: 700%;
      
}
.main img{
       width: 2%;
              height: auto;
}
aside{
       width: 30%;
       padding: 20px;
       box-sizing: border-box;
       background: green;
       float: left;
}

footer {
clear: both;
float: center;
margin-top: 20px;
box-sizing: border-box;
width: 100%;
padding: 25px;
color:#fff;
background: #000;

}

@media screen and (max-width: 800px){
       .main{
              width: 100%;
       }
       aside{
              width: 100%;
       }

       }

</style>

	<div class="contenedor">
		
       <section class="main">
       
             <!-- <img src="logo_wfi_3.png" width=90 height="90"> -->
       
<style type="text/css">
  .cajatexto{
    padding: 5px;
    border-radius: 3px;
  }
</style>
       <br>
	   
      
       

<br>

</p>
       <footer>
              <p>
                     <img src="logo_wfi_3.png" width=90 height="90">
                <font family=""><h5><script type="text/javascript">document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");</script> © Copyright 2018. WFI de México. Todos Los Derechos Reservados.</h5></font>
       </p>
       </footer>
       </section>
       
       

	</div>
	

	
	<?php
	
}
else{
 header("Location: index.php");

}

?>


	</body>
	</html>