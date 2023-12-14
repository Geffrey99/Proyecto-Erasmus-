<?php

class Solicitud {
    private $ID_SOLICITUD;
    private $dni_Candidato;
    private $ID_CONVOCATORIA;
    private $DESTINATARIO;
    private $TELEFONO;
    private $EMAIL;
    private $DOMICILIO;
    private $FOTO;

    public function __construct($ID_SOLICITUD, $dni_Candidato, $ID_CONVOCATORIA, $DESTINATARIO, $TELEFONO, $EMAIL, $DOMICILIO, $FOTO) {
        $this->ID_SOLICITUD = $ID_SOLICITUD;
        $this->dni_Candidato = $dni_Candidato;
        $this->ID_CONVOCATORIA = $ID_CONVOCATORIA;
        $this->DESTINATARIO = $DESTINATARIO;
        $this->TELEFONO = $TELEFONO;
        $this->EMAIL = $EMAIL;
        $this->DOMICILIO = $DOMICILIO;
        $this->FOTO = $FOTO;
    }

    
    public function getID_SOLICITUD() {
        return $this->ID_SOLICITUD;
    }

    public function getDni_Candidato() {
        return $this->dni_Candidato;
    }

    public function getID_CONVOCATORIA() {
        return $this->ID_CONVOCATORIA;
    }

    public function getDESTINATARIO() {
        return $this->DESTINATARIO;
    }

    public function getTELEFONO() {
        return $this->TELEFONO;
    }

    public function getEMAIL() {
        return $this->EMAIL;
    }

    public function getDOMICILIO() {
        return $this->DOMICILIO;
    }

    public function getFOTO() {
        return $this->FOTO;
    }

    // Métodos setter
    public function setID_SOLICITUD($ID_SOLICITUD) {
        $this->ID_SOLICITUD = $ID_SOLICITUD;
    }

    public function setDni_Candidato($dni_Candidato) {
        $this->dni_Candidato = $dni_Candidato;
    }

    public function setID_CONVOCATORIA($ID_CONVOCATORIA) {
        $this->ID_CONVOCATORIA = $ID_CONVOCATORIA;
    }

    public function setDESTINATARIO($DESTINATARIO) {
        $this->DESTINATARIO = $DESTINATARIO;
    }

    public function setTELEFONO($TELEFONO) {
        $this->TELEFONO = $TELEFONO;
    }

    public function setEMAIL($EMAIL) {
        $this->EMAIL = $EMAIL;
    }

    public function setDOMICILIO($DOMICILIO) {
        $this->DOMICILIO = $DOMICILIO;
    }

    public function setFOTO($FOTO) {
        $this->DOMICILIO = $FOTO;
    }
}

?>