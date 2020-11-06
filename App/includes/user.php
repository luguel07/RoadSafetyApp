<?php
include 'db.php';

class User extends DB{
    private $id;
    
    public function userExists($user, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE correo = :user AND pwd = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE correo = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->id= $currentUser['id_usuario'];
         $conex = mysqli_connect("localhost","root","","roadsafety");
            $consulta="INSERT INTO sesion (id) VALUES ('$this->id')";
            $resultado=mysqli_query($conex,$consulta);   
        }
    }

    public function getIdUsuario(){
        return $this->id;
    }
}

?>