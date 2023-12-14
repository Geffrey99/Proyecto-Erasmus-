<?php
class ConvocatoriaBaremo {
    private $Id_ConvocatoriaBaremo;
    private $Id_Convocatoria;
    private $Id_itemBaremo;
    private $requisitos;
    private $valor_min;
    private $valor_max;
    private $presentausuario;
    private $obligatorio;

    public function __construct($Id_ConvocatoriaBaremo,$Id_Convocatoria, $Id_itemBaremo, $requisitos, $valor_min, $valor_max, $presentausuario, $obligatorio) {
        $this->Id_ConvocatoriaBaremo = $Id_ConvocatoriaBaremo;
        $this->Id_Convocatoria = $Id_Convocatoria;
        $this->Id_itemBaremo = $Id_itemBaremo;
        $this->requisitos = $requisitos;
        $this->valor_min = $valor_min;
        $this->valor_max = $valor_max;
        $this->presentausuario = $presentausuario;
        $this->obligatorio = $obligatorio;
    }

    public function getId_ConvocatoriaBaremo() {
        return $this->Id_ConvocatoriaBaremo;
    }

    public function setId_ConvocatoriaBaremo($Id_ConvocatoriaBaremo) {
        $this->Id_ConvocatoriaBaremo = $Id_ConvocatoriaBaremo;
    }


    public function getId_Convocatoria() {
        return $this->Id_Convocatoria;
    }

    public function setId_Convocatoria($Id_Convocatoria) {
        $this->Id_Convocatoria = $Id_Convocatoria;
    }

    public function getId_itemBaremo() {
        return $this->Id_itemBaremo;
    }

    public function setId_itemBaremo($Id_itemBaremo) {
        $this->Id_itemBaremo = $Id_itemBaremo;
    }

    public function getRequisitos() {
        return $this->requisitos;
    }

    public function setRequisitos($requisitos) {
        $this->requisitos = $requisitos;
    }

    public function getValor_min() {
        return $this->valor_min;
    }

    public function setValor_min($valor_min) {
        $this->valor_min = $valor_min;
    }

    public function getValor_max() {
        return $this->valor_max;
    }

    public function setValor_max($valor_max) {
        $this->valor_max = $valor_max;
    }

    public function getPresentausuario() {
        return $this->presentausuario;
    }

    public function setPresentausuario($presentausuario) {
        $this->presentausuario = $presentausuario;
    }

    public function getObligatorio() {
        return $this->obligatorio;
    }

    public function setObligatorio($obligatorio) {
        $this->obligatorio = $obligatorio;
    }
}


?>