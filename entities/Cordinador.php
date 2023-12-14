<?php

class Cordinador {
    private $dni_Cordinador;
    private $fecha_nac_Cordinador;
    private $nombre_Cordinador;
    private $ap1_Cordinador;
    private $ap2_Cordinador;
    private $curso;
    private $telefono_Cordinador;
    private $correo_Cordinador;
    private $domicilio_Cordinador;
    private $password;


    public function __construct($dni_Cordinador, $fecha_nac_Cordinador, $nombre_Cordinador, $ap1_Cordinador, $ap2_Cordinador, $curso, $telefono_Cordinador, $correo_Cordinador, $domicilio_Cordinador, $password) {
        $this->dni_Cordinador = $dni_Cordinador;
        $this->fecha_nac_Cordinador = $fecha_nac_Cordinador;
        $this->nombre_Cordinador = $nombre_Cordinador;
        $this->ap1_Cordinador = $ap1_Cordinador;
        $this->ap2_Cordinador = $ap2_Cordinador;
        $this->curso = $curso;
        $this->telefono_Cordinador = $telefono_Cordinador;
        $this->correo_Cordinador = $correo_Cordinador;
        $this->domicilio_Cordinador = $domicilio_Cordinador;
        $this->password = $password;

    }

    // Métodos getter
    public function getDni_Cordinador() {
        return $this->dni_Cordinador;
    }

    public function getFecha_nac_Cordinador() {
        return $this->fecha_nac_Cordinador;
    }

    public function getNombre_Cordinador() {
        return $this->nombre_Cordinador;
    }

    public function getAp1_Cordinador() {
        return $this->ap1_Cordinador;
    }

    public function getAp2_Cordinador() {
        return $this->ap2_Cordinador;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getTelefono_Cordinador() {
        return $this->telefono_Cordinador;
    }

    public function getCorreo_Cordinador() {
        return $this->correo_Cordinador;
    }

    public function getDomicilio_Cordinador() {
        return $this->domicilio_Cordinador;
    }

    public function getPassword() {
        return $this->password;
    }


    // Métodos setter
    public function setDni_Cordinador($dni_Cordinador) {
        $this->dni_Cordinador = $dni_Cordinador;
    }

    public function setFecha_nac_Cordinador($fecha_nac_Cordinador) {
        $this->fecha_nac_Cordinador = $fecha_nac_Cordinador;
    }

    public function setNombre_Cordinador($nombre_Cordinador) {
        $this->nombre_Cordinador = $nombre_Cordinador;
    }

    public function setAp1_Cordinador($ap1_Cordinador) {
        $this->ap1_Cordinador = $ap1_Cordinador;
    }

    public function setAp2_Cordinador($ap2_Cordinador) {
        $this->ap2_Cordinador = $ap2_Cordinador;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setTelefono_Cordinador($telefono_Cordinador) {
        $this->telefono_Cordinador = $telefono_Cordinador;
    }

    public function setCorreo_Cordinador($correo_Cordinador) {
        $this->correo_Cordinador = $correo_Cordinador;
    }

    public function setDomicilio_Cordinador($domicilio_Cordinador) {
        $this->domicilio_Cordinador = $domicilio_Cordinador;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}

    ?>