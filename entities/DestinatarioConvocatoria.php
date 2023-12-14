<?php

class DestinarioConvocatoria {
    private $Id_Convocatoria;
    private $Cod_Grupo;

    public function __construct($Id_Convocatoria, $Cod_Grupo) {
        $this->Id_Convocatoria = $Id_Convocatoria;
        $this->Cod_Grupo = $Cod_Grupo;
    }

    // Métodos getter
    public function getId_Convocatoria() {
        return $this->Id_Convocatoria;
    }

    public function getCod_Grupo() {
        return $this->Cod_Grupo;
    }

    // Métodos setter
    public function setId_Convocatoria($Id_Convocatoria) {
        $this->Id_Convocatoria = $Id_Convocatoria;
    }

    public function setCod_Grupo($Cod_Grupo) {
        $this->Cod_Grupo = $Cod_Grupo;
    }
}

?>
