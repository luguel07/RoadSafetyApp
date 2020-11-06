<?php

//verificar la conexion
include("db.php");
$conex = mysqli_connect("localhost","root","","roadsafety");

if (isset($_POST['insert'])) {
	if (strlen($_POST['name']) >= 1 && strlen($_POST['ltname']) >= 1 && strlen($_POST['age']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
		//recuperar las variables
		$nombre=$_POST['name'];
		$apellido=$_POST['ltname'];
		$edad=$_POST['age'];
		$correo=$_POST['email'];
		$pwd=md5($_POST['password']);

		//sentencia sql
		$consulta="INSERT INTO usuario (nombre,apellido,edad,correo,pwd) VALUES ('$nombre','$apellido','$edad','$correo','$pwd')";
		$resultado=mysqli_query($conex,$consulta);
		if ($resultado) {
			?>
			<h3 class="ok">¡Te has registrado correctamente!</h3>
			<?php
		}else{
			?>
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
		}


}else{
			?>
			<h3 class="bad">¡Por favor complete los campos!</h3>
			<?php
		}
}	

?>