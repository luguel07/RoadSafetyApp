<?php 

$conex = mysqli_connect("localhost","root","","roadsafety");

if (isset($_POST['registrar'])) {
	if (strlen($_POST['barrio']) >= 1 && strlen($_POST['localidad']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['estado']) >= 1 && strlen($_POST['dano']) >= 1 && strlen($_POST['inseguridad']) >= 1) {
	

	include '../includes/Id_User.php';


	//recuperar las variables
	$id_usuario= (int) $mostrar['id_usuario'];
	$barrio=$_POST['barrio'];
	$localidad=$_POST['localidad'];
	$direccion=$_POST['direccion'];
	$id_estado=$_POST['estado'];
	$id_dano=$_POST['dano'];
	$id_inseguridad=$_POST['inseguridad'];
	$fecha=$_POST['fecha'];
	$comentario=$_POST['comentario'];
	
	//sentencia sql
	$consulta= "INSERT INTO calle (id_usuario, barrio, localidad, direccion, id_estado, id_dano, id_inseguridad, fecha, comentario) VALUES ('$id_usuario','$barrio','$localidad','$direccion','$id_estado','$id_dano','$id_inseguridad','$fecha','$comentario')";

	$resultado=mysqli_query($conex,$consulta);

		if ($resultado) {
			
			?>
			<h3 class="ok">¡Calle registrada correctamente!</h3>
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