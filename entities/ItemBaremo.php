<?php

/**
 * @Entity // Indica que esta clase representa una tabla
 * @Table(name="ItemBaremo") // Indica el nombre de la tabla
 */
class ItemBaremo {
    private $Id_itemBaremo;
    private $nombre_itemBaremo;

    public function __construct($Id_itemBaremo, $nombre_itemBaremo) {
        $this->Id_itemBaremo = $Id_itemBaremo;
        $this->nombre_itemBaremo = $nombre_itemBaremo;
    }

    // Métodos getter
    public function getId_itemBaremo() {
        return $this->Id_itemBaremo;
    }

    public function getNombre_itemBaremo() {
        return $this->nombre_itemBaremo;
    }

    // Métodos setter
    public function setId_itemBaremo($Id_itemBaremo) {
        $this->Id_itemBaremo = $Id_itemBaremo;
    }

    public function setNombre_itemBaremo($nombre_itemBaremo) {
        $this->nombre_itemBaremo = $nombre_itemBaremo;
    }
}