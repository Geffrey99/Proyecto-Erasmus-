<?php

include_once 'db.php';

Class user extends Database {
    private $nombre;
    private $username;


    public function usuarioExiste ($user, $pass) {
        $md5pass = md5($pass);

        $query= $this->getConexion()->prepare('SELECT * FROM Cordinador where dni_cordinador= :user and password = :pass');
        $query->execute(['user'=>$user, 'pass'=>$md5pass]);
        
        if ($query->rowCount()){
            return true;

        }else {
            return false;
        }

    }

    public function setUser($user){
        $query= $this->getConexion()->prepare('SELECT * FROM Cordinador where dni_cordinador= :user');
        $query->execute(['user'=>$user,]);
  
          foreach ($query as $currentUser) {
             $this-> nombre = $currentUser['nombre'];
             $this ->username=$currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

}



?>