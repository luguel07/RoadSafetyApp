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

 <div class="ed-container" id="formulario"> 
        <div class="ed-item caja movil-10"></div>
        <div class="ed-item caja movil-80" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127253.17362015665!2d-74.08823760302732!3d4.654285911461313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1604062845792!5m2!1ses!2sco" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
        </div> 
        <div class="ed-item caja movil-10"></div>
                     
     </div>
     
 
 <div class="ed-container" id="formulario">
     <div class="ed-item caja movil total">
         <h2>TABLA DE BUSQUEDAS</h2>

         <table>
         <tr>
         <td>FECHA</td>
         <td>BARRIO</td>
         <td>LOCALIDAD</td>
         <td>DIRECCIÓN</td>
         <td>ESTADO</td>
         <td>DAÑO</td>
         <td>INSEGURIDAD</td>
         <td>COMENTARIO</td>
		 <td>REPORTÓ</td>
         </tr>

         <?php 

         $consulta="SELECT c.fecha , c.barrio, c.localidad, c.direccion, e.descripcion AS estado , d.descripcion AS dano1, i.descripcion AS inseguridad1, c.comentario, CONCAT( u.nombre,' ', u.apellido) AS reporto FROM calle c JOIN usuario u on c.id_usuario=u.id_usuario JOIN dano d on c.id_dano=d.id_dano JOIN inseguridad i on c.id_inseguridad=i.id_inseguridad JOIN estado e ON c.id_estado=e.id_estado ORDER BY c.fecha";
         $result=mysqli_query($conex,$consulta);

         while ( $mostrar=mysqli_fetch_array($result)) {
                    
          ?>

         <tr>
         <td><?php echo $mostrar['fecha'] ?></td>
         <td><?php echo $mostrar['barrio'] ?></td>
         <td><?php echo $mostrar['localidad'] ?></td>
         <td><?php echo $mostrar['direccion'] ?></td>
         <td><?php echo $mostrar['estado'] ?></td>
         <td><?php echo $mostrar['dano1'] ?></td>
         <td><?php echo $mostrar['inseguridad1'] ?></td>
         <td><?php echo $mostrar['comentario'] ?></td>
		<td><?php echo $mostrar['reporto'] ?></td>
         </tr>
         <?php 

            }

          ?>


     </table>
     </div>
 </div>
  <footer>
     <div class="ed-container">
     <div class="ed-item caja movil-70"><p id="pf">Copyright 2020 <br>Universidad de Cundunimarca, Facatativa</p></div>
     <div class="ed-item caja movil-30"><p id="pf">©RoadSafety App  <br>Proyecto Integrador</p></div>
     </div>
 </footer>
</body>
</html>