
<?php 
$conex = mysqli_connect("localhost","root","","roadsafety");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width=device-width, initial-scale=1, maximun-scale=1">
    <link rel="stylesheet" href="../assets/ED-GRID-master/css/ed-grid.css" />    
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="shortcut icon" href="../imagenes/logo2.jpg">
    <title>RoadSafety App</title>
    
    
</head>
<body>
 <header class="ed-container">
 
 <nav class="grupo"> 
 <ul class="menu">
 <li><a href="reportar.php">REPORTAR</a></li>
 <li><a href="buscar.php">BUSCAR</a></li>
 <li><a href="perfil.php">PERFIL</a></li>
 
 </ul></nav>
</header>

 <div class="ed-container">
     <div class="ed-item caja movil-70" id="perfil">

         <?php 
         include '../includes/Id_User.php';
                    
          ?>
         <p id="p">ID DE USUARIO: <?php echo $mostrar['id_usuario'] ?></p>
         <p id="p">NOMBRE: <?php echo $mostrar['nombre'] ?></p>
         <p id="p">APELLIDO: <?php echo $mostrar['apellido'] ?></p>
         <p id="p">EDAD: <?php echo $mostrar['edad'] ?></p>
         <p id="p">CORREO: <?php echo $mostrar['correo'] ?></p>
         <p id="p">FECHA DE REGISTRO: <?php echo $mostrar['fecha_registro'] ?></p>
     </div>
	 <div class="ed-item caja movil-30" id="perfil"> <img src="../imagenes/logo2.jpg" class="logo"> </div>
	 <div class="ed-item caja movil total" id="perfil2" style="text-align: center;"> 
		 <a id="boton" href="../includes/logout.php"> CERRAR SESIÓN </a>
		 <br>
	 </div>
 </div>
 <footer>
     <div class="ed-container">
     <div class="ed-item caja movil-70"><p id="pf">Copyright 2020 <br>Universidad de Cundunimarca, Facatativa<br> <br> Ing:Nicoloás Fonseca. <br>
		 Diseñador: Luis Correa.  <br> Programador: Emerson Blanco.
		 </p></div>
     <div class="ed-item caja movil-30"><p id="pf">©RoadSafety App  <br>Proyecto Integrador</p></div>
     </div>
 </footer>
</body>
</html>