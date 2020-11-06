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

 <div class="banner ed-item caja movil total">
     <img src="../imagenes/banner.jpg" alt="" style="width: 1200px"> </div>
</header>

<div class="ed-container" id="formulario">
        <div class="ed-item caja movil-10"></div>
        <div class="ed-item caja movil-80" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127253.17362015665!2d-74.08823760302732!3d4.654285911461313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1604062845792!5m2!1ses!2sco" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
        </div> 
        <div class="ed-item caja movil-10"></div>
                     
     </div>

 <div class="ed-container">
 	<div class="ed-item caja movil total" id="formulario"><h2>FORMULARIO</h2>
         <form action="" method="post">
         <fieldset>
         <legend>UBICACIÓN</legend>
         <label for="barrio">INGRESE BARRIO:</label> 
         <input type="text" name="barrio" value="" placeholder=" BARRIO"> 
         <label for="barrio">INGRESE LOCALIDAD:</label> 
         <input type="text" name="localidad" value="" placeholder=" LOCALIDAD"> 
         <label for="barrio">INGRESE DIRECCIÓN:</label> 
         <input type="text" name="direccion" value="" placeholder=" DIRECCIÓN"> 	
         </fieldset>

         <fieldset>
         <legend>CARACTERISTICAS</legend>
         <label for="estado">ESTADO DE LA CALLE:</label>
         <p id="rad">
         <input type="radio" name="estado" value="1"> MALO &nbsp; &nbsp;&nbsp; &nbsp;
         <input type="radio" name="estado" value="2">REGULAR &nbsp; &nbsp;&nbsp; &nbsp;
         <input type="radio" name="estado" value="3">BUENO</p>
        <br><label for="dano">DAÑO DE LA CALLE:</label>
		 <select id="lista" name="dano">
  	     <option value="1">PAVIMENTO DAÑADO</option>
  		 <option value="2">CALLE DESTAPADA</option>
  		 <option value="3">ACUEDUCTO DAÑADO</option>
  		 <option value="4">VÍA SIN DEMARCAR</option>
  		 <option value="5">CICLOVÍA EN MAL ESTADO</option>
  		 <option value="6">BOTADERO DE ESCOMBROS</option> 
  		 </select>

  		 <br><label for="inseguridad">TIPO DE INSEGURIDAD:</label>
		 <select id="lista" name="inseguridad">
  	     <option value="1">NINGUNO</option>
  		 <option value="2">HURTO A PEATONES</option>
  		 <option value="3">HURTO DE BICICLETAS</option>
  		 <option value="4">ROBO DE MOTOCICLETAS</option>
  		 <option value="5">ROBO DE VEHICULOS</option>
  		 <option value="6">FALTA DE SEÑALIZACIÓN</option>
  		 <option value="7">FALTA DE ILUMINACIÓN</option>
  		 <option value="8">VENTA DE DROGAS</option>
  		 </select>

  		 <label for="fecha">FECHA:</label>
  		 <input type="date" name="fecha" step="1" min="2020-11-02">

  		 
  		 <label for="comentario">COMENTARIO: </label>
  		 <textarea name="comentario" rows="6" cols="40"> 		 	
  		 </textarea>

  		 </fieldset>

  		 <input type="submit" name="registrar" value="REGISTRAR REPORTE"></input>
  		 <input type="reset" value="RESTABLECER FORMULARIO"></input>
         </form>
         <?php
         include("../includes/saveStreet.php");
  		?>

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