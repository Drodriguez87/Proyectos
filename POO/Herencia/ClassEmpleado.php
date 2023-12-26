<?php

    require_once ("ClassPersona.php");
    class Empleado extends Persona{

        protected $strPuesto;

        function __construct(int $cc, string $nombre, int $edad) {
            parent::__construct($cc,$nombre,$edad);
        }

        public function setPuesto(string $puesto){
            $this->strPuesto = $puesto;
        }

        public function getPuesto():string{
            return $this->strPuesto;
        }


    }//End Class Empleado
?>