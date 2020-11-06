<!DOCTYPE html>
<html>
<head>
   <link href="../assets/styleRegistro.css" rel="stylesheet" type="text/css">
	    <link rel="shortcut icon" href="../imagenes/logo2.jpg">
  <meta charset="utf-8">
<title>RoadSafety App</title>

</head>

<body>
<h1 class ="title2">RoadSafety App</h1>
<div class="container">
  <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">¿Ya tienes una cuenta? </p>
          <p>Para ingresar dale al botón</p>
      <a href="index.php" title="INGRESAR">
          <button id="switch1">INGRESAR</button>
      </a>
        </div>
      </div>
  </div>
  <div class="msg">
     <?php 
  include("../includes/saveData.php");
  ?>
  </div>

  <div class="frontbox">
    <div class="login">
      <h2>REGISTRARSE</h2>
      <form method="post">
      <div class="inputbox">
        <input type="text" name="name" placeholder="  NOMBRE">
        <input type="text" name="ltname" placeholder="  APELLIDO">
        <input type="text" name="age" placeholder="  EDAD">
        <input type="email" name="email" placeholder="  CORREO">
        <input type="password" name="password" placeholder="  CONTRASEÑA">
        </div>
      <button type="submit" name="insert">REGISTRAR</button></form>
  
    </div>

</div>

</div>
</body>

</html>