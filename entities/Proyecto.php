<?php

class Proyecto {
    private $codProyecto;
    private $nombreProyecto;
    private $fechaInicioProyecto;
    private $fechaFinProyecto;

    public function __construct($codProyecto, $nombreProyecto, $fechaInicioProyecto, $fechaFinProyecto) {
        $this->codProyecto = $codProyecto;
        $this->nombreProyecto = $nombreProyecto;
        $this->fechaInicioProyecto = $fechaInicioProyecto;
        $this->fechaFinProyecto = $fechaFinProyecto;
    }

    // Métodos getter
    public function getCodProyecto() {
        return $this->codProyecto;
    }

    public function getNombreProyecto() {
        return $this->nombreProyecto;
    }

    public function getFechaInicioProyecto() {
        return $this->fechaInicioProyecto;
    }

    public function getFechaFinProyecto() {
        return $this->fechaFinProyecto;
    }

    // Métodos setter
    public function setCodProyecto($codProyecto) {
        $this->codProyecto = $codProyecto;
    }

    public function setNombreProyecto($nombreProyecto) {
        $this->nombreProyecto = $nombreProyecto;
    }

    public function setFechaInicioProyecto($fechaInicioProyecto) {
        $this->fechaInicioProyecto = $fechaInicioProyecto;
    }

    public function setFechaFinProyecto($fechaFinProyecto) {
        $this->fechaFinProyecto = $fechaFinProyecto;
    }
}


?>