<?php


class Candidato {
    private $dni_Candidato;
    private $fecha_nac_Candidato;
    private $nombre_Candidato;
    private $ap1_Candidato;
    private $ap2_Candidato;
    private $telefono_Candidato;
    private $correo_Candidato;
    private $domicilio_Candidato;
    private $Cod_Grupo;
    private $dni_TutorLegal;
    private $password;

    public function __construct($dni_Candidato, $fecha_nac_Candidato, $nombre_Candidato, $ap1_Candidato, $ap2_Candidato, $telefono_Candidato, $correo_Candidato, $domicilio_Candidato, $Cod_Grupo, $dni_TutorLegal, $password) {
        $this->dni_Candidato = $dni_Candidato;
        $this->fecha_nac_Candidato = $fecha_nac_Candidato;
        $this->nombre_Candidato = $nombre_Candidato;
        $this->ap1_Candidato = $ap1_Candidato;
        $this->ap2_Candidato = $ap2_Candidato;
        $this->telefono_Candidato = $telefono_Candidato;
        $this->correo_Candidato = $correo_Candidato;
        $this->domicilio_Candidato = $domicilio_Candidato;
        $this->Cod_Grupo = $Cod_Grupo;
        $this->dni_TutorLegal = $dni_TutorLegal;
        $this->password = $password;
    }

    // Métodos getter
    public function getDni_Candidato() {
        return $this->dni_Candidato;
    }

    public function getFecha_nac_Candidato() {
        return $this->fecha_nac_Candidato;
    }

    public function getNombre_Candidato() {
        return $this->nombre_Candidato;
    }

    public function getAp1_Candidato() {
        return $this->ap1_Candidato;
    }

    public function getAp2_Candidato() {
        return $this->ap2_Candidato;
    }


    public function getTelefono_Candidato() {
        return $this->telefono_Candidato;
    }

    public function getCorreo_Candidato() {
        return $this->correo_Candidato;
    }

    public function getDomicilio_Candidato() {
        return $this->domicilio_Candidato;
    }

    public function getCod_Grupo() {
        return $this->Cod_Grupo;
    }

    public function getDni_TutorLegal() {
        return $this->dni_TutorLegal;
    }

    public function getPassword() {
        return $this->password;
    }

    // Métodos setter
    public function setDni_Candidato($dni_Candidato) {
        $this->dni_Candidato = $dni_Candidato;
    }

    public function setFecha_nac_Candidato($fecha_nac_Candidato) {
        $this->fecha_nac_Candidato = $fecha_nac_Candidato;
    }

    public function setNombre_Candidato($nombre_Candidato) {
        $this->nombre_Candidato = $nombre_Candidato;
    }

    public function setAp1_Candidato($ap1_Candidato) {
        $this->ap1_Candidato = $ap1_Candidato;
    }

    public function setAp2_Candidato($ap2_Candidato) {
        $this->ap2_Candidato = $ap2_Candidato;
    }


    public function setTelefono_Candidato($telefono_Candidato) {
        $this->telefono_Candidato = $telefono_Candidato;
    }

    public function setCorreo_Candidato($correo_Candidato) {
        $this->correo_Candidato = $correo_Candidato;
    }

    public function setDomicilio_Candidato($domicilio_Candidato) {
        $this->domicilio_Candidato = $domicilio_Candidato;
    }

    public function setCod_Grupo($Cod_Grupo) {
        $this->Cod_Grupo = $Cod_Grupo;
    }

    public function setDni_TutorLegal($dni_TutorLegal) {
        $this->dni_TutorLegal = $dni_TutorLegal;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

?>