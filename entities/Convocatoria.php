<?php

class Convocatoria {
    private $Id_Convocatoria;
    private $movilidades;
    private $tipo;
    private $fechaInicio_Solicitudes;
    private $fechaFin_Solicitudes;
    private $fechaInicio_Pruebas;
    private $fechaFin_Pruebas;
    private $Fecha_Lista_Provisional;
    private $Fecha_Lista_Definitiva;
    private $codProyecto;
    private $destino;

    public function __construct($Id_Convocatoria, $movilidades, $tipo, $fechaInicio_Solicitudes, $fechaFin_Solicitudes, $fechaInicio_Pruebas, $fechaFin_Pruebas, $Fecha_Lista_Provisional, $Fecha_Lista_Definitiva, $codProyecto, $destino) {
        $this->Id_Convocatoria = $Id_Convocatoria;
        $this->movilidades = $movilidades;
        $this->tipo = $tipo;
        $this->fechaInicio_Solicitudes = $fechaInicio_Solicitudes;
        $this->fechaFin_Solicitudes = $fechaFin_Solicitudes;
        $this->fechaInicio_Pruebas = $fechaInicio_Pruebas;
        $this->fechaFin_Pruebas = $fechaFin_Pruebas;
        $this->Fecha_Lista_Provisional = $Fecha_Lista_Provisional;
        $this->Fecha_Lista_Definitiva = $Fecha_Lista_Definitiva;
        $this->codProyecto = $codProyecto;
        $this->destino = $destino;
    }

    // Métodos getter
    public function getId_Convocatoria() {
        return $this->Id_Convocatoria;
    }

    public function getMovilidades() {
        return $this->movilidades;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getFechaInicio_Solicitudes() {
        return $this->fechaInicio_Solicitudes;
    }

    public function getFechaFin_Solicitudes() {
        return $this->fechaFin_Solicitudes;
    }

    public function getFechaInicio_Pruebas() {
        return $this->fechaInicio_Pruebas;
    }

    public function getFechaFin_Pruebas() {
        return $this->fechaFin_Pruebas;
    }

    public function getFecha_Lista_Provisional() {
        return $this->Fecha_Lista_Provisional;
    }

    public function getFecha_Lista_Definitiva() {
        return $this->Fecha_Lista_Definitiva;
    }

    public function getCodProyecto() {
        return $this->codProyecto;
    }

    public function getDestino() {
        return $this->destino;
    }

    // Métodos setter
    public function setId_Convocatoria($Id_Convocatoria) {
        $this->Id_Convocatoria = $Id_Convocatoria;
    }

    public function setMovilidades($movilidades) {
        $this->movilidades = $movilidades;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setFechaInicio_Solicitudes($fechaInicio_Solicitudes) {
        $this->fechaInicio_Solicitudes = $fechaInicio_Solicitudes;
    }

    public function setFechaFin_Solicitudes($fechaFin_Solicitudes) {
        $this->fechaFin_Solicitudes = $fechaFin_Solicitudes;
    }

    public function setFechaInicio_Pruebas($fechaInicio_Pruebas) {
        $this->fechaInicio_Pruebas = $fechaInicio_Pruebas;
    }

    public function setFechaFin_Pruebas($fechaFin_Pruebas) {
        $this->fechaFin_Pruebas = $fechaFin_Pruebas;
    }

    public function setFecha_Lista_Provisional($Fecha_Lista_Provisional) {
        $this->Fecha_Lista_Provisional = $Fecha_Lista_Provisional;
    }

    public function setFecha_Lista_Definitiva($Fecha_Lista_Definitiva) {
        $this->Fecha_Lista_Definitiva = $Fecha_Lista_Definitiva;
    }

    public function setCodProyecto($codProyecto) {
        $this->codProyecto = $codProyecto;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }



    
}

?>