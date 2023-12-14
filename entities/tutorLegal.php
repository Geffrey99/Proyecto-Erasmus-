<?php

class TutorLegal {
    private $dni_TutorLegal;
    private $nombre_TutorLegal;
    private $apellido_TutorLegal;
    private $telefono_TutorLegal;
    private $domicilio_TutorLegal;

    public function __construct($dni_TutorLegal, $nombre_TutorLegal, $apellido_TutorLegal, $telefono_TutorLegal, $domicilio_TutorLegal) {
        $this->dni_TutorLegal = $dni_TutorLegal;
        $this->nombre_TutorLegal = $nombre_TutorLegal;
        $this->apellido_TutorLegal = $apellido_TutorLegal;
        $this->telefono_TutorLegal = $telefono_TutorLegal;
        $this->domicilio_TutorLegal = $domicilio_TutorLegal;
    }

    // Métodos getter
    public function getDni_TutorLegal() {
        return $this->dni_TutorLegal;
    }

    public function getNombre_TutorLegal() {
        return $this->nombre_TutorLegal;
    }

    public function getApellido_TutorLegal() {
        return $this->apellido_TutorLegal;
    }

    public function getTelefono_TutorLegal() {
        return $this->telefono_TutorLegal;
    }

    public function getDomicilio_TutorLegal() {
        return $this->domicilio_TutorLegal;
    }

    // Métodos setter
    public function setDni_TutorLegal($dni_TutorLegal) {
        $this->dni_TutorLegal = $dni_TutorLegal;
    }

    public function setNombre_TutorLegal($nombre_TutorLegal) {
        $this->nombre_TutorLegal = $nombre_TutorLegal;
    }

    public function setApellido_TutorLegal($apellido_TutorLegal) {
        $this->apellido_TutorLegal = $apellido_TutorLegal;
    }

    public function setTelefono_TutorLegal($telefono_TutorLegal) {
        $this->telefono_TutorLegal = $telefono_TutorLegal;
    }

    public function setDomicilio_TutorLegal($domicilio_TutorLegal) {
        $this->domicilio_TutorLegal = $domicilio_TutorLegal;
    }
}
?>