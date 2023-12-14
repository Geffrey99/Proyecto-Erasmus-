<?php

class Nivel_Idioma {
    private $nombre_Nivel_Idioma;

    public function __construct($nombre_Nivel_Idioma) {
        $this->nombre_Nivel_Idioma = $nombre_Nivel_Idioma;
    }

    // Método getter
    public function getNombre_Nivel_Idioma() {
        return $this->nombre_Nivel_Idioma;
    }

    // Método setter
    public function setNombre_Nivel_Idioma($nombre_Nivel_Idioma) {
        $this->nombre_Nivel_Idioma = $nombre_Nivel_Idioma;
    }
}



?>