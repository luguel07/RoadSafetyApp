<?php 
         $consult="SELECT * FROM usuario WHERE id_usuario=(SELECT id FROM sesion WHERE fecha=(SELECT MAX(fecha) FROM sesion))";
         $result=mysqli_query($conex,$consult);
         $mostrar=mysqli_fetch_array($result); 
                    
?>