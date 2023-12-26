<?php

    class Persona {
        
        public $intCC;
        public $strNombre;
        public $intEdad;

        function __construct(int $cc, string $nombre, int $edad) {
            $this->intCC = $cc;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
        }

        public function getDatosPersonales(){
            $datos = "
                <h2>DATOS PERSONALES</h2>
                Cedula: {$this->intCC}<br>
                Nombre: {$this->strNombre}<br>
                Edad: {$this->intEdad}<br>
            ";
            return $datos;
        }
    }
    //End class Persona
?>