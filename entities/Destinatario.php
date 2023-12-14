<?php

class Destinatario {
    private $Cod_Grupo;
    private $nombre;

    public function __construct($Cod_Grupo, $nombre) {
        $this->Cod_Grupo = $Cod_Grupo;
        $this->nombre = $nombre;
    }

    // Métodos getter
    public function getCod_Grupo() {
        return $this->Cod_Grupo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    // Métodos setter
    public function setCod_Grupo($Cod_Grupo) {
        $this->Cod_Grupo = $Cod_Grupo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}


?>