<?php
class Baremacion {
    private $ID_BAREMACION;
    private $Id_itemBaremo;
    private $NOTA;
    private $ENTREGA_CANDIDATO;
    private $URL;

    public function __construct($ID_BAREMACION, $Id_itemBaremo, $NOTA, $ENTREGA_CANDIDATO, $URL) {
        $this->ID_BAREMACION = $ID_BAREMACION;
        $this->Id_itemBaremo = $Id_itemBaremo;
        $this->NOTA = $NOTA;
        $this->ENTREGA_CANDIDATO = $ENTREGA_CANDIDATO;
        $this->URL = $URL;
    }

    // Métodos getter
    public function getID_BAREMACION() {
        return $this->ID_BAREMACION;
    }

    public function getId_itemBaremo() {
        return $this->Id_itemBaremo;
    }

    public function getNOTA() {
        return $this->NOTA;
    }

    public function getENTREGA_CANDIDATO() {
        return $this->ENTREGA_CANDIDATO;
    }

    public function getURL() {
        return $this->URL;
    }

    // Métodos setter
    public function setID_BAREMACION($ID_BAREMACION) {
        $this->ID_BAREMACION = $ID_BAREMACION;
    }

    public function setId_itemBaremo($Id_itemBaremo) {
        $this->Id_itemBaremo = $Id_itemBaremo;
    }

    public function setNOTA($NOTA) {
        $this->NOTA = $NOTA;
    }

    public function setENTREGA_CANDIDATO($ENTREGA_CANDIDATO) {
        $this->ENTREGA_CANDIDATO = $ENTREGA_CANDIDATO;
    }

    public function setURL($URL) {
        $this->URL = $URL;
    }
}

?>