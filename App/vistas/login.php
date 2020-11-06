<!DOCTYPE html>
<html>
<head>
	 <link href="../assets/styleIngresar.css" rel="stylesheet" type="text/css">
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
          <p class="title">¿No tienes una cuenta? </p>
          <p>Registrate para ser parte de nuestra comunidad.</p>
			<a href="signup.php" title="REGISTRARSE">
          <button id="switch1">REGISTRARSE</button>
			</a>
        </div>
      </div>
  </div>
  

  <div class="frontbox">
    <div class="login">
      <h2>INGRESAR</h2>
      <form action="" method="post">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>

      <div class="inputbox">
        <input type="email" name="email" value=""  placeholder="  CORREO">
        <input type="password" name="password" value="" placeholder="  CONTRASEÑA">
      </div>
       
      <button type="submit">INGRESAR</button>
</form>

    </div>
</div>
</div>
</body>

</html>