<?php
class ConvocatoriaBaremoIdioma {
    private $id_convocatoriaBaremoIdioma;
    private $Id_ConvocatoriaBaremo;
    private $A1;
    private $A2;
    private $B1;
    private $B2;
    private $C1;
    private $C2;

    function __construct($id_convocatoriaBaremoIdioma, $Id_ConvocatoriaBaremo, $A1, $A2, $B1, $B2, $C1, $C2) {
        $this->id_convocatoriaBaremoIdioma = $id_convocatoriaBaremoIdioma;
        $this->Id_ConvocatoriaBaremo = $Id_ConvocatoriaBaremo;
        $this->A1 = $A1;
        $this->A2 = $A2;
        $this->B1 = $B1;
        $this->B2 = $B2;
        $this->C1 = $C1;
        $this->C2 = $C2;
    }
    function getId_convocatoriaBaremoIdioma() {
        return $this->id_convocatoriaBaremoIdioma;
    }

    function getId_ConvocatoriaBaremo() {
        return $this->Id_ConvocatoriaBaremo;
    }

    function getA1() {
        return $this->A1;
    }

    function getA2() {
        return $this->A2;
    }

    function getB1() {
        return $this->B1;
    }

    function getB2() {
        return $this->B2;
    }

    function getC1() {
        return $this->C1;
    }

    function getC2() {
        return $this->C2;
    }

    // Métodos setter
    function setId_convocatoriaBaremoIdioma($id_convocatoriaBaremoIdioma) {
        $this->id_convocatoriaBaremoIdioma = $id_convocatoriaBaremoIdioma;
    }

    function setId_ConvocatoriaBaremo($Id_ConvocatoriaBaremo) {
        $this->Id_ConvocatoriaBaremo = $Id_ConvocatoriaBaremo;
    }

    function setA1($A1) {
        $this->A1 = $A1;
    }

    function setA2($A2) {
        $this->A2 = $A2;
    }

    function setB1($B1) {
        $this->B1 = $B1;
    }

    function setB2($B2) {
        $this->B2 = $B2;
    }

    function setC1($C1) {
        $this->C1 = $C1;
    }

    function setC2($C2) {
        $this->C2 = $C2;
    }
}
?>